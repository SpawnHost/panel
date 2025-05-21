<?php

return [
    'daemon_connection_failed' => 'Ocorreu uma exceção ao tentar se comunicar com o daemon, resultando em um código de resposta HTTP/:code. Esta exceção foi registrada no log.',
    'node' => [
        'servers_attached' => 'Um nó não pode ter servidores vinculados a ele para ser excluído.',
        'daemon_off_config_updated' => 'A configuração do daemon <strong>foi atualizada</strong>, porém ocorreu um erro ao tentar atualizar automaticamente o arquivo de configuração no Daemon. Você precisará atualizar manualmente o arquivo de configuração (config.yml) do daemon para aplicar essas alterações.',
    ],
    'allocations' => [
        'server_using' => 'Um servidor está atualmente atribuído a esta alocação. Uma alocação só pode ser excluída se nenhum servidor estiver atribuído a ela.',
        'too_many_ports' => 'Adicionar mais de 1000 portas em um único intervalo de uma vez não é suportado.',
        'invalid_mapping' => 'O mapeamento fornecido para :port é inválido e não pôde ser processado.',
        'cidr_out_of_range' => 'A notação CIDR permite apenas máscaras entre /25 e /32.',
        'port_out_of_range' => 'As portas de uma alocação devem ser maiores que 1024 e menores ou iguais a 65535.',
    ],
    'nest' => [
        'delete_has_servers' => 'Um Nest com servidores ativos vinculados não pode ser excluído pelo Painel.',
        'egg' => [
            'delete_has_servers' => 'Um Egg com servidores ativos vinculados não pode ser excluído pelo Painel.',
            'invalid_copy_id' => 'O Egg selecionado para copiar um script não existe ou já está copiando um script.',
            'must_be_child' => 'A diretiva "Copiar configurações de" para este Egg deve ser uma opção filha do Nest selecionado.',
            'has_children' => 'Este Egg é pai de um ou mais outros Eggs. Exclua esses Eggs antes de excluir este Egg.',
        ],
        'variables' => [
            'env_not_unique' => 'A variável de ambiente :name deve ser exclusiva para este Egg.',
            'reserved_name' => 'A variável de ambiente :name é protegida e não pode ser atribuída a uma variável.',
            'bad_validation_rule' => 'A regra de validação ":rule" não é válida para esta aplicação.',
        ],
        'importer' => [
            'json_error' => 'Ocorreu um erro ao tentar processar o arquivo JSON: :error.',
            'file_error' => 'O arquivo JSON fornecido não é válido.',
            'invalid_json_provided' => 'O arquivo JSON fornecido não está em um formato reconhecido.',
        ],
    ],
    'subusers' => [
        'editing_self' => 'Não é permitido editar a sua própria conta de subusuário.',
        'user_is_owner' => 'Você não pode adicionar o proprietário do servidor como subusuário deste servidor.',
        'subuser_exists' => 'Um usuário com esse endereço de e-mail já está atribuído como subusuário deste servidor.',
    ],
    'databases' => [
        'delete_has_databases' => 'Não é possível excluir um host de banco de dados que possui bancos ativos vinculados.',
    ],
    'tasks' => [
        'chain_interval_too_long' => 'O tempo máximo de intervalo para uma tarefa encadeada é de 15 minutos.',
    ],
    'locations' => [
        'has_nodes' => 'Não é possível excluir uma localização que possui nós ativos vinculados a ela.',
    ],
    'users' => [
        'node_revocation_failed' => 'Falha ao revogar chaves no <a href=":link">Nó #:node</a>. :error',
    ],
    'deployment' => [
        'no_viable_nodes' => 'Nenhum nó que atenda aos requisitos especificados para implantação automática foi encontrado.',
        'no_viable_allocations' => 'Nenhuma alocação que atenda aos requisitos para implantação automática foi encontrada.',
    ],
    'api' => [
        'resource_not_found' => 'O recurso solicitado não existe neste servidor.',
    ],
];
