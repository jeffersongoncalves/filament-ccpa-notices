<?php

return [
    'resource' => [
        'label' => 'Processing activity',
        'plural_label' => 'Processing activities',
    ],

    'fields' => [
        'name' => 'Name',
        'purpose' => 'Business or commercial purpose',
        'consumers' => 'Consumers',
        'data_categories' => 'Other categories of personal information',
        'models' => 'Models',
        'sources' => 'Categories of sources',
        'recipients' => 'Disclosed to',
        'recipient_name' => 'Name',
        'role' => 'Role',
        'retention' => 'Retention period, or the criteria used to set it',
    ],

    'placeholders' => [
        'consumers' => 'customers, job applicants, website visitors...',
        'sources' => 'directly from you, your devices, service providers...',
    ],

    'help' => [
        'data_categories' => 'Personal information not declared on a model with #[PersonalData].',
        'models' => 'The personal information declared on these models joins the activity.',
    ],

    'roles' => [
        'service_provider' => 'Service provider',
        'contractor' => 'Contractor',
        'third_party' => 'Third party',
    ],

    'actions' => [
        'export' => 'Export notice data (JSON)',
    ],
];
