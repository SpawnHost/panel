#!/bin/bash

set -e

# === CONFIGURAÇÕES ===
PANEL_DIR="/var/www/pterodactyl"
BACKUP_DIR="/var/backups/pterodactyl"
TMP_DIR="/tmp/pterodactyl-update"
FORK_REPO="https://github.com/SpawnHost/panel"
DB_NAME="pterodactyl"
DB_USER="root"
DB_PASS="Ctba2013*"
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

# === INÍCIO ===
echo "=== [$DATE_DISPLAY] Iniciando atualização do painel Pterodactyl ==="

echo ">> Criando backups"
sudo mkdir -p "$BACKUP_DIR/files" "$BACKUP_DIR/db" > /dev/null 2>&1
sudo tar -czf "$BACKUP_DIR/files/panel-backup-$DATE_FILE.tar.gz" -C "$PANEL_DIR" . > /dev/null 2>&1
sudo mysqldump -u "$DB_USER" -p"$DB_PASS" "$DB_NAME" | sudo tee "$BACKUP_DIR/db/panel-db-backup-$DATE_FILE.sql" > /dev/null

echo ">> Entrando em modo de manutenção"
cd "$PANEL_DIR"
sudo php artisan down > /dev/null 2>&1

echo ">> Baixando release do fork"
sudo mkdir -p "$TMP_DIR" > /dev/null 2>&1
sudo curl -sSL -o "$TMP_DIR/panel.tar.gz" "$DOWNLOAD_URL"

echo ">> Extraindo release"
sudo tar -xzf "$TMP_DIR/panel.tar.gz" -C "$PANEL_DIR" > /dev/null 2>&1

echo ">> Instalando dependências frontend"
sudo yarn install > /dev/null 2>&1
sudo yarn run build:production > /dev/null 2>&1

echo ">> Atualizando dependências PHP"
sudo composer install --no-dev --optimize-autoloader > /dev/null 2>&1

echo ">> Executando migrações"
sudo php artisan migrate --seed --force > /dev/null 2>&1

echo ">> Limpando e otimizando caches"
sudo php artisan view:clear > /dev/null 2>&1
sudo php artisan config:clear > /dev/null 2>&1
sudo php artisan optimize > /dev/null 2>&1

echo ">> Corrigindo permissões"
sudo chmod -R 755 storage/* bootstrap/cache > /dev/null 2>&1
sudo chown -R www-data:www-data "$PANEL_DIR" > /dev/null 2>&1

echo ">> Reiniciando filas"
sudo php artisan queue:restart > /dev/null 2>&1

echo ">> Saindo do modo de manutenção"
sudo php artisan up > /dev/null 2>&1

echo "=== [$DATE_DISPLAY] Atualização concluída com sucesso! ==="