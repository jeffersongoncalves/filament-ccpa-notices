<?php

return [
    'resource' => [
        'label' => 'Actividad de tratamiento',
        'plural_label' => 'Actividades de tratamiento',
    ],

    'fields' => [
        'name' => 'Nombre',
        'purpose' => 'Finalidad empresarial o comercial',
        'consumers' => 'Consumidores',
        'data_categories' => 'Otras categorías de información personal',
        'models' => 'Modelos',
        'sources' => 'Categorías de fuentes',
        'recipients' => 'Divulgada a',
        'recipient_name' => 'Nombre',
        'role' => 'Rol',
        'retention' => 'Plazo de conservación o los criterios para fijarlo',
    ],

    'placeholders' => [
        'consumers' => 'clientes, candidatos a empleo, visitantes del sitio web...',
        'sources' => 'directamente de ti, de tus dispositivos, de proveedores de servicios...',
    ],

    'help' => [
        'data_categories' => 'Información personal no declarada en un modelo con #[PersonalData].',
        'models' => 'La información personal declarada en estos modelos se suma a la actividad.',
    ],

    'roles' => [
        'service_provider' => 'Proveedor de servicios',
        'contractor' => 'Contratista',
        'third_party' => 'Tercero',
    ],

    'actions' => [
        'export' => 'Exportar datos de los avisos (JSON)',
    ],
];
