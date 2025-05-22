#!/bin/bash

set -e

# === CONFIGURAÇÕES ===
PANEL_DIR="/var/www/pterodactyl"
BACKUP_DIR="/var/backups/pterodactyl"
TMP_DIR="/tmp/pterodactyl-update"
FORK_REPO="https://github.com/SpawnHost/panel"
DB_NAME="panel"
DB_USER="root"
DATE_DISPLAY=$(date +"%d/%m/%Y %H:%M:%S")
DATE_FILE=$(date +"%Y%m%d-%H%M%S")

# === VERSÃO OU LATEST ===
if [ -z "$1" ]; then
    DOWNLOAD_URL="$FORK_REPO/releases/latest/download/panel.tar.gz"
    echo "[$DATE_DISPLAY] Nenhuma versão fornecida. Baixando a versão mais recente (latest)..."
else
    DOWNLOAD_URL="$FORK_REPO/releases/download/$1/panel.tar.gz"
    echo "[$DATE_DISPLAY] Versão fornecida: $1. Baixando essa versão..."
fi

# === CHECAGEM DE NODE E WEBPACK ===
cd "$PANEL_DIR"

NODE_MAJOR=$(node -v | grep -oP 'v\K[0-9]+')
WEBPACK_VERSION=$(yarn list --pattern webpack | grep -oP 'webpack@\K[0-9]+' | head -n 1)

echo "Node.js version detectada: $NODE_MAJOR.x"
echo "Webpack major version detectada: $WEBPACK_VERSION.x"

if [ "$WEBPACK_VERSION" -lt 5 ] && [ "$NODE_MAJOR" -ge 18 ]; then
    echo ""
    echo "========================================="
    echo "ERRO FATAL:"
    echo "Você está usando Node.js $NODE_MAJOR.x com Webpack $WEBPACK_VERSION.x"
    echo "Webpack 4.x NÃO é compatível com Node >= 18!"
    echo "Use Node 16.x LTS para buildar esse painel."
    echo "Para usar Node 18+ você PRECISA migrar para Webpack 5.x ou superior."
    echo "========================================="
    exit 1
fi

# === INÍCIO ===
echo "=== [$DATE_DISPLAY] Iniciando atualização do painel Pterodactyl ==="

echo ">> Criando backups"
sudo mkdir -p "$BACKUP_DIR/files" "$BACKUP_DIR/db"
sudo tar -czvf "$BACKUP_DIR/files/panel-backup-$DATE_FILE.tar.gz" -C "$PANEL_DIR" .

echo ">> Entrando em modo de manutenção"
sudo php artisan down

echo ">> Baixando release do fork"
sudo mkdir -p "$TMP_DIR"
sudo curl -L -o "$TMP_DIR/panel.tar.gz" "$DOWNLOAD_URL"

echo ">> Extraindo release"
sudo tar -xzvf "$TMP_DIR/panel.tar.gz" -C "$PANEL_DIR"

echo ">> Instalando dependências frontend"
sudo yarn install

echo ">> Compilando frontend"
# Limpa todas as possíveis variáveis de ambiente que possam afetar o Node
unset NODE_OPTIONS
export NODE_OPTIONS=""

yarn run build:production

echo ">> Atualizando dependências PHP"
sudo composer install --no-dev --optimize-autoloader

echo ">> Executando migrações"
sudo php artisan migrate --seed --force

echo ">> Limpando e otimizando caches"
sudo php artisan view:clear
sudo php artisan config:clear
sudo php artisan optimize

echo ">> Corrigindo permissões"
sudo chmod -R 755 storage/* bootstrap/cache
sudo chown -R www-data:www-data "$PANEL_DIR"

echo ">> Reiniciando filas"
sudo php artisan queue:restart

echo ">> Saindo do modo de manutenção"
sudo php artisan up

echo "=== [$DATE_DISPLAY] Atualização concluída com sucesso! ==="
