<?php

return [
    'resource' => [
        'label' => 'Operação de tratamento',
        'plural_label' => 'Operações de tratamento',
    ],

    'fields' => [
        'name' => 'Nome',
        'purpose' => 'Finalidade empresarial ou comercial',
        'consumers' => 'Consumidores',
        'data_categories' => 'Outras categorias de informações pessoais',
        'models' => 'Modelos',
        'sources' => 'Categorias de fontes',
        'recipients' => 'Divulgada a',
        'recipient_name' => 'Nome',
        'role' => 'Papel',
        'retention' => 'Período de retenção ou os critérios usados para defini-lo',
    ],

    'placeholders' => [
        'consumers' => 'clientes, candidatos a vagas, visitantes do site...',
        'sources' => 'diretamente de você, dos seus dispositivos, de prestadores de serviço...',
    ],

    'help' => [
        'data_categories' => 'Informações pessoais não declaradas em um modelo com #[PersonalData].',
        'models' => 'As informações pessoais declaradas nesses modelos entram na atividade.',
    ],

    'roles' => [
        'service_provider' => 'Prestador de serviços',
        'contractor' => 'Contratado',
        'third_party' => 'Terceiro',
    ],

    'actions' => [
        'export' => 'Exportar dados dos avisos (JSON)',
    ],
];
