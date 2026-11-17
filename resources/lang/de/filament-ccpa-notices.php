<?php

return [
    'resource' => [
        'label' => 'Verarbeitungstätigkeit',
        'plural_label' => 'Verarbeitungstätigkeiten',
    ],

    'fields' => [
        'name' => 'Name',
        'purpose' => 'Geschäftlicher oder kommerzieller Zweck',
        'consumers' => 'Verbraucher',
        'data_categories' => 'Weitere Kategorien personenbezogener Informationen',
        'models' => 'Modelle',
        'sources' => 'Kategorien von Quellen',
        'recipients' => 'Offengelegt an',
        'recipient_name' => 'Name',
        'role' => 'Rolle',
        'retention' => 'Aufbewahrungsdauer oder die Kriterien für ihre Festlegung',
    ],

    'placeholders' => [
        'consumers' => 'Kunden, Bewerber, Website-Besucher ...',
        'sources' => 'direkt von Ihnen, von Ihren Geräten, von Dienstleistern ...',
    ],

    'help' => [
        'data_categories' => 'Personenbezogene Informationen, die nicht mit #[PersonalData] an einem Model deklariert sind.',
        'models' => 'Die an diesen Models deklarierten personenbezogenen Informationen fließen in die Tätigkeit ein.',
    ],

    'roles' => [
        'service_provider' => 'Dienstleister',
        'contractor' => 'Auftragnehmer',
        'third_party' => 'Dritter',
    ],

    'actions' => [
        'export' => 'Hinweisdaten exportieren (JSON)',
    ],
];
