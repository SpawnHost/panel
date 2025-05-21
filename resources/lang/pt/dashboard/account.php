<?php

return [
    'email' => [
        'title' => 'Atualize seu e-mail',
        'updated' => 'Seu endereço de e-mail foi atualizado.',
    ],
    'password' => [
        'title' => 'Altere sua senha',
        'requirements' => 'Sua nova senha deve ter pelo menos 8 caracteres.',
        'updated' => 'Sua senha foi atualizada.',
    ],
    'two_factor' => [
        'button' => 'Configurar Autenticação em 2 Fatores',
        'disabled' => 'A autenticação em dois fatores foi desativada em sua conta. Você não será mais solicitado a fornecer um token ao fazer login.',
        'enabled' => 'A autenticação em dois fatores foi ativada em sua conta! A partir de agora, ao fazer login, será necessário fornecer o código gerado pelo seu dispositivo.',
        'invalid' => 'O token fornecido é inválido.',
        'setup' => [
            'title' => 'Configurar autenticação em dois fatores',
            'help' => 'Não consegue escanear o código? Digite o código abaixo em seu aplicativo:',
            'field' => 'Digite o token',
        ],
        'disable' => [
            'title' => 'Desativar autenticação em dois fatores',
            'field' => 'Digite o token',
        ],
    ],
];
