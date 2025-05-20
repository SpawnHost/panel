<?php

return [
    'validation' => [
        'fqdn_not_resolvable' => 'O FQDN ou endereço IP fornecido não resolve para um endereço IP válido.',
        'fqdn_required_for_ssl' => 'Um nome de domínio totalmente qualificado (FQDN) que aponte para um endereço IP público é necessário para utilizar SSL neste nó.',
    ],
    'notices' => [
        'allocations_added' => 'Alocações adicionadas com sucesso a este nó.',
        'node_deleted' => 'Nó removido com sucesso do painel.',
        'location_required' => 'Você deve ter pelo menos uma localização configurada antes de adicionar um nó a este painel.',
        'node_created' => 'Novo nó criado com sucesso. Você pode configurar o daemon automaticamente nesta máquina acessando a aba "Configuração". <strong>Antes de adicionar qualquer servidor, você deve primeiro alocar pelo menos um endereço IP e porta.</strong>',
        'node_updated' => 'Informações do nó atualizadas. Se alguma configuração do daemon foi alterada, será necessário reiniciá-lo para que as mudanças tenham efeito.',
        'unallocated_deleted' => 'Todas as portas não alocadas foram excluídas para <code>:ip</code>.',
    ],
];
