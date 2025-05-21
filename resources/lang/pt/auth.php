<?php

return [
    'sign_in' => 'Entrar',
    'go_to_login' => 'Ir para o Login',
    'failed' => 'Nenhuma conta correspondente a essas credenciais foi encontrada.',

    'forgot_password' => [
        'label' => 'Esqueceu a Senha?',
        'label_help' => 'Digite o e-mail da sua conta para receber instruções sobre como redefinir sua senha.',
        'button' => 'Recuperar Conta',
    ],

    'reset_password' => [
        'button' => 'Redefinir e Entrar',
    ],

    'two_factor' => [
        'label' => 'Token de 2 Fatores',
        'label_help' => 'Esta conta requer uma segunda camada de autenticação para continuar. Insira o código gerado pelo seu dispositivo para concluir o login.',
        'checkpoint_failed' => 'O token de autenticação em dois fatores é inválido.',
    ],

    'throttle' => 'Muitas tentativas de login. Por favor, tente novamente em :seconds segundos.',
    'password_requirements' => 'A senha deve ter pelo menos 8 caracteres e ser exclusiva para este site.',
    '2fa_must_be_enabled' => 'O administrador exige que a autenticação em dois fatores esteja ativada para sua conta para utilizar o Painel.',
];
