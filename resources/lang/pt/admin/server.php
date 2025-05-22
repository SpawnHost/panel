<?php

return [
    'exceptions' => [
        'no_new_default_allocation' => 'Você está tentando excluir a alocação padrão deste servidor, mas não há uma alocação de fallback disponível.',
        'marked_as_failed' => 'Este servidor foi marcado como tendo falhado em uma instalação anterior. O status atual não pode ser alterado neste estado.',
        'bad_variable' => 'Ocorreu um erro de validação com a variável :name.',
        'daemon_exception' => 'Ocorreu uma exceção ao tentar se comunicar com o daemon, resultando em um código de resposta HTTP/:code. Esta exceção foi registrada no log. (ID da requisição: :request_id)',
        'default_allocation_not_found' => 'A alocação padrão solicitada não foi encontrada nas alocações deste servidor.',
    ],
    'alerts' => [
        'startup_changed' => 'A configuração de inicialização deste servidor foi atualizada. Se o nest ou egg deste servidor foi alterado, uma reinstalação ocorrerá agora.',
        'server_deleted' => 'Servidor excluído com sucesso do sistema.',
        'server_created' => 'Servidor criado com sucesso no painel. Aguarde alguns minutos para que o daemon conclua a instalação deste servidor.',
        'build_updated' => 'Os detalhes de build deste servidor foram atualizados. Algumas alterações podem exigir reinicialização para terem efeito.',
        'suspension_toggled' => 'O status de suspensão do servidor foi alterado para :status.',
        'rebuild_on_boot' => 'Este servidor foi marcado para exigir uma reconstrução do Container Docker. Isso ocorrerá na próxima inicialização do servidor.',
        'install_toggled' => 'O status de instalação deste servidor foi alternado.',
        'server_reinstalled' => 'Este servidor foi colocado na fila para reinstalação a partir de agora.',
        'details_updated' => 'Os detalhes do servidor foram atualizados com sucesso.',
        'docker_image_updated' => 'Imagem Docker padrão alterada com sucesso para este servidor. É necessário reiniciar para aplicar a alteração.',
        'node_required' => 'Você deve ter pelo menos um nó configurado antes de adicionar um servidor a este painel.',
        'transfer_nodes_required' => 'Você deve ter pelo menos dois nós configurados antes de transferir servidores.',
        'transfer_started' => 'Transferência do servidor iniciada.',
        'transfer_not_viable' => 'O nó selecionado não possui espaço em disco ou memória suficiente para acomodar este servidor.',
    ],
];
