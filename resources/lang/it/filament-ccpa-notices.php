<?php

return [
    'resource' => [
        'label' => 'Attività di trattamento',
        'plural_label' => 'Attività di trattamento',
    ],

    'fields' => [
        'name' => 'Nome',
        'purpose' => 'Finalità aziendale o commerciale',
        'consumers' => 'Consumatori',
        'data_categories' => 'Altre categorie di informazioni personali',
        'models' => 'Modelli',
        'sources' => 'Categorie di fonti',
        'recipients' => 'Comunicata a',
        'recipient_name' => 'Nome',
        'role' => 'Ruolo',
        'retention' => 'Periodo di conservazione o criteri per stabilirlo',
    ],

    'placeholders' => [
        'consumers' => 'clienti, candidati, visitatori del sito...',
        'sources' => 'direttamente da te, dai tuoi dispositivi, da fornitori di servizi...',
    ],

    'help' => [
        'data_categories' => 'Informazioni personali non dichiarate su un modello con #[PersonalData].',
        'models' => 'Le informazioni personali dichiarate su questi modelli confluiscono nell\'attività.',
    ],

    'roles' => [
        'service_provider' => 'Fornitore di servizi',
        'contractor' => 'Appaltatore',
        'third_party' => 'Terza parte',
    ],

    'actions' => [
        'export' => 'Esporta i dati delle informative (JSON)',
    ],
];
