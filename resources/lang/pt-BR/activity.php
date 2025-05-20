<?php

/**
 * Contém todas as strings de tradução para diferentes eventos do log de atividades.
 * As chaves devem corresponder ao valor antes dos dois pontos (:) no nome do evento.
 * Se não houver dois pontos, a chave fica no nível superior.
 */
return [
    'auth' => [
        'fail' => 'Falha no login',
        'success' => 'Login realizado',
        'password-reset' => 'Senha redefinida',
        'reset-password' => 'Solicitou redefinição de senha',
        'checkpoint' => 'Solicitada autenticação em dois fatores',
        'recovery-token' => 'Utilizou token de recuperação do dois fatores',
        'token' => 'Desafio de dois fatores resolvido',
        'ip-blocked' => 'Solicitação bloqueada de IP não listado para :identifier',
        'sftp' => [
            'fail' => 'Falha no login via SFTP',
        ],
    ],
    'user' => [
        'account' => [
            'email-changed' => 'Alterou o e-mail de :old para :new',
            'password-changed' => 'Alterou a senha',
        ],
        'api-key' => [
            'create' => 'Criou nova chave de API :identifier',
            'delete' => 'Excluiu a chave de API :identifier',
        ],
        'ssh-key' => [
            'create' => 'Adicionou chave SSH :fingerprint à conta',
            'delete' => 'Removeu chave SSH :fingerprint da conta',
        ],
        'two-factor' => [
            'create' => 'Ativou autenticação em dois fatores',
            'delete' => 'Desativou autenticação em dois fatores',
        ],
    ],
    'server' => [
        'reinstall' => 'Reinstalou o servidor',
        'console' => [
            'command' => 'Executou ":command" no servidor',
        ],
        'power' => [
            'start' => 'Iniciou o servidor',
            'stop' => 'Parou o servidor',
            'restart' => 'Reiniciou o servidor',
            'kill' => 'Finalizou o processo do servidor',
        ],
        'backup' => [
            'download' => 'Baixou o backup :name',
            'delete' => 'Excluiu o backup :name',
            'restore' => 'Restaurou o backup :name (arquivos excluídos: :truncate)',
            'restore-complete' => 'Restauração do backup :name concluída',
            'restore-failed' => 'Falha ao concluir a restauração do backup :name',
            'start' => 'Iniciou novo backup :name',
            'complete' => 'Marcado o backup :name como concluído',
            'fail' => 'Marcado o backup :name como falhou',
            'lock' => 'Bloqueou o backup :name',
            'unlock' => 'Desbloqueou o backup :name',
        ],
        'database' => [
            'create' => 'Criou novo banco de dados :name',
            'rotate-password' => 'Senha do banco de dados :name rotacionada',
            'delete' => 'Excluiu banco de dados :name',
        ],
        'file' => [
            'compress_one' => 'Comprimido :directory:file',
            'compress_other' => 'Comprimido :count arquivos em :directory',
            'read' => 'Visualizou o conteúdo de :file',
            'copy' => 'Criou uma cópia de :file',
            'create-directory' => 'Criou o diretório :directory:name',
            'decompress' => 'Descomprimido :files em :directory',
            'delete_one' => 'Excluiu :directory:files.0',
            'delete_other' => 'Excluiu :count arquivos em :directory',
            'download' => 'Baixou :file',
            'pull' => 'Baixou um arquivo remoto de :url para :directory',
            'rename_one' => 'Renomeou :directory:files.0.from para :directory:files.0.to',
            'rename_other' => 'Renomeou :count arquivos em :directory',
            'write' => 'Escreveu novo conteúdo em :file',
            'upload' => 'Iniciou upload de arquivo',
            'uploaded' => 'Arquivo enviado: :directory:file',
        ],
        'sftp' => [
            'denied' => 'Acesso SFTP bloqueado por permissões',
            'create_one' => 'Criou :files.0',
            'create_other' => 'Criou :count novos arquivos',
            'write_one' => 'Modificou o conteúdo de :files.0',
            'write_other' => 'Modificou o conteúdo de :count arquivos',
            'delete_one' => 'Excluiu :files.0',
            'delete_other' => 'Excluiu :count arquivos',
            'create-directory_one' => 'Criou o diretório :files.0',
            'create-directory_other' => 'Criou :count diretórios',
            'rename_one' => 'Renomeou :files.0.from para :files.0.to',
            'rename_other' => 'Renomeou ou moveu :count arquivos',
        ],
        'allocation' => [
            'create' => 'Adicionou :allocation ao servidor',
            'notes' => 'Atualizou as notas para :allocation de ":old" para ":new"',
            'primary' => 'Definiu :allocation como alocação primária do servidor',
            'delete' => 'Excluiu a alocação :allocation',
        ],
        'schedule' => [
            'create' => 'Criou o agendamento :name',
            'update' => 'Atualizou o agendamento :name',
            'execute' => 'Executou manualmente o agendamento :name',
            'delete' => 'Excluiu o agendamento :name',
        ],
        'task' => [
            'create' => 'Criou nova tarefa ":action" para o agendamento :name',
            'update' => 'Atualizou a tarefa ":action" do agendamento :name',
            'delete' => 'Excluiu uma tarefa do agendamento :name',
        ],
        'settings' => [
            'rename' => 'Renomeou o servidor de :old para :new',
            'description' => 'Alterou a descrição do servidor de :old para :new',
        ],
        'startup' => [
            'edit' => 'Alterou a variável :variable de ":old" para ":new"',
            'image' => 'Atualizou a imagem Docker do servidor de :old para :new',
        ],
        'subuser' => [
            'create' => 'Adicionou :email como subusuário',
            'update' => 'Atualizou as permissões do subusuário :email',
            'delete' => 'Removeu :email como subusuário',
        ],
    ],
];
