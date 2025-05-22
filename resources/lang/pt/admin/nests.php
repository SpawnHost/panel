<?php

return [
    'notices' => [
        'created' => 'Um novo nest, :name, foi criado com sucesso.',
        'deleted' => 'Nest excluído com sucesso do Painel.',
        'updated' => 'Opções de configuração do nest atualizadas com sucesso.',
    ],
    'eggs' => [
        'notices' => [
            'imported' => 'Egg e suas variáveis associadas importados com sucesso.',
            'updated_via_import' => 'Este Egg foi atualizado utilizando o arquivo fornecido.',
            'deleted' => 'Egg excluído com sucesso do Painel.',
            'updated' => 'Configuração do Egg atualizada com sucesso.',
            'script_updated' => 'O script de instalação do Egg foi atualizado e será executado sempre que servidores forem instalados.',
            'egg_created' => 'Um novo egg foi criado com sucesso. Você precisará reiniciar qualquer daemon em execução para aplicar este novo egg.',
        ],
    ],
    'variables' => [
        'notices' => [
            'variable_deleted' => 'A variável ":variable" foi excluída e não estará mais disponível para os servidores após a reconstrução.',
            'variable_updated' => 'A variável ":variable" foi atualizada. Você precisará reconstruir quaisquer servidores que utilizam essa variável para aplicar as alterações.',
            'variable_created' => 'Nova variável criada com sucesso e atribuída a este egg.',
        ],
    ],
];
