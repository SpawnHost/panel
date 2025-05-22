<?php

return [
    'location' => [
        'no_location_found' => 'Não foi possível localizar um registro correspondente ao código curto fornecido.',
        'ask_short' => 'Código Curto da Localização',
        'ask_long' => 'Descrição da Localização',
        'created' => 'Nova localização (:name) criada com sucesso com o ID :id.',
        'deleted' => 'Localização solicitada excluída com sucesso.',
    ],
    'user' => [
        'search_users' => 'Digite um nome de usuário, ID do usuário ou endereço de e-mail',
        'select_search_user' => 'ID do usuário para excluir (Digite "0" para pesquisar novamente)',
        'deleted' => 'Usuário excluído com sucesso do Painel.',
        'confirm_delete' => 'Tem certeza de que deseja excluir este usuário do Painel?',
        'no_users_found' => 'Nenhum usuário encontrado para o termo de pesquisa fornecido.',
        'multiple_found' => 'Foram encontradas múltiplas contas para o usuário informado, não foi possível excluir o usuário devido à flag --no-interaction.',
        'ask_admin' => 'Este usuário é um administrador?',
        'ask_email' => 'Endereço de E-mail',
        'ask_username' => 'Nome de Usuário',
        'ask_name_first' => 'Primeiro Nome',
        'ask_name_last' => 'Sobrenome',
        'ask_password' => 'Senha',
        'ask_password_tip' => 'Se você deseja criar uma conta com uma senha aleatória enviada por e-mail ao usuário, execute novamente este comando (CTRL+C) e utilize a flag `--no-password`.',
        'ask_password_help' => 'As senhas devem ter pelo menos 8 caracteres, conter ao menos uma letra maiúscula e um número.',
        '2fa_help_text' => [
            'Este comando irá desativar a autenticação em dois fatores da conta de um usuário, caso esteja habilitada. Deve ser usado apenas como procedimento de recuperação caso o usuário esteja bloqueado em sua conta.',
            'Se não era isso que desejava fazer, pressione CTRL+C para sair deste processo.',
        ],
        '2fa_disabled' => 'A autenticação em dois fatores foi desativada para :email.',
    ],
    'schedule' => [
        'output_line' => 'Despachando job para a primeira tarefa em `:schedule` (:hash).',
    ],
    'maintenance' => [
        'deleting_service_backup' => 'Excluindo arquivo de backup do serviço :file.',
    ],
    'server' => [
        'rebuild_failed' => 'A solicitação de reconstrução para ":name" (#:id) no nó ":node" falhou com o erro: :message',
        'reinstall' => [
            'failed' => 'A solicitação de reinstalação para ":name" (#:id) no nó ":node" falhou com o erro: :message',
            'confirm' => 'Você está prestes a reinstalar um grupo de servidores. Deseja continuar?',
        ],
        'power' => [
            'confirm' => 'Você está prestes a executar uma ação de :action em :count servidores. Deseja continuar?',
            'action_failed' => 'A solicitação de ação de energia para ":name" (#:id) no nó ":node" falhou com o erro: :message',
        ],
    ],
    'environment' => [
        'mail' => [
            'ask_smtp_host' => 'Host SMTP (ex: smtp.gmail.com)',
            'ask_smtp_port' => 'Porta SMTP',
            'ask_smtp_username' => 'Usuário SMTP',
            'ask_smtp_password' => 'Senha SMTP',
            'ask_mailgun_domain' => 'Domínio Mailgun',
            'ask_mailgun_endpoint' => 'Endpoint Mailgun',
            'ask_mailgun_secret' => 'Chave Secreta Mailgun',
            'ask_mandrill_secret' => 'Chave Secreta Mandrill',
            'ask_postmark_username' => 'Chave da API Postmark',
            'ask_driver' => 'Qual driver deve ser utilizado para envio de e-mails?',
            'ask_mail_from' => 'Endereço de e-mail de origem das mensagens',
            'ask_mail_name' => 'Nome que deve aparecer como remetente dos e-mails',
            'ask_encryption' => 'Método de criptografia a ser utilizado',
        ],
    ],
];
