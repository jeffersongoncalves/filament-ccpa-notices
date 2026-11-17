<?php

return [
    'resource' => [
        'label' => 'Czynność przetwarzania',
        'plural_label' => 'Czynności przetwarzania',
    ],

    'fields' => [
        'name' => 'Nazwa',
        'purpose' => 'Cel biznesowy lub komercyjny',
        'consumers' => 'Konsumenci',
        'data_categories' => 'Inne kategorie danych osobowych',
        'models' => 'Modele',
        'sources' => 'Kategorie źródeł',
        'recipients' => 'Ujawniane podmiotom',
        'recipient_name' => 'Nazwa',
        'role' => 'Rola',
        'retention' => 'Okres przechowywania lub kryteria jego ustalania',
    ],

    'placeholders' => [
        'consumers' => 'klienci, kandydaci do pracy, odwiedzający stronę...',
        'sources' => 'bezpośrednio od Ciebie, z Twoich urządzeń, od usługodawców...',
    ],

    'help' => [
        'data_categories' => 'Dane osobowe niezadeklarowane w modelu za pomocą #[PersonalData].',
        'models' => 'Dane osobowe zadeklarowane w tych modelach dołączają do działania.',
    ],

    'roles' => [
        'service_provider' => 'Usługodawca',
        'contractor' => 'Wykonawca',
        'third_party' => 'Strona trzecia',
    ],

    'actions' => [
        'export' => 'Eksportuj dane informacji (JSON)',
    ],
];
