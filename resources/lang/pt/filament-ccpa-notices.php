<?php

return [
    'resource' => [
        'label' => 'Atividade de tratamento',
        'plural_label' => 'Atividades de tratamento',
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
        'retention' => 'Período de conservação ou os critérios usados para o definir',
    ],

    'placeholders' => [
        'consumers' => 'clientes, candidatos a emprego, visitantes do site...',
        'sources' => 'diretamente de si, dos seus dispositivos, de prestadores de serviços...',
    ],

    'help' => [
        'data_categories' => 'Informações pessoais não declaradas num modelo com #[PersonalData].',
        'models' => 'As informações pessoais declaradas nestes modelos juntam-se à atividade.',
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
