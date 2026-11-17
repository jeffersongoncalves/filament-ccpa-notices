<?php

return [
    'resource' => [
        'label' => 'Verwerkingsactiviteit',
        'plural_label' => 'Verwerkingsactiviteiten',
    ],

    'fields' => [
        'name' => 'Naam',
        'purpose' => 'Zakelijk of commercieel doel',
        'consumers' => 'Consumenten',
        'data_categories' => 'Andere categorieën persoonsgegevens',
        'models' => 'Modellen',
        'sources' => 'Categorieën bronnen',
        'recipients' => 'Verstrekt aan',
        'recipient_name' => 'Naam',
        'role' => 'Rol',
        'retention' => 'Bewaartermijn of de criteria om die te bepalen',
    ],

    'placeholders' => [
        'consumers' => 'klanten, sollicitanten, websitebezoekers...',
        'sources' => 'rechtstreeks van jou, van je apparaten, van dienstverleners...',
    ],

    'help' => [
        'data_categories' => 'Persoonsgegevens die niet met #[PersonalData] op een model zijn gedeclareerd.',
        'models' => 'De persoonsgegevens die op deze modellen zijn gedeclareerd, worden aan de activiteit toegevoegd.',
    ],

    'roles' => [
        'service_provider' => 'Dienstverlener',
        'contractor' => 'Contractant',
        'third_party' => 'Derde',
    ],

    'actions' => [
        'export' => 'Kennisgevingsgegevens exporteren (JSON)',
    ],
];
