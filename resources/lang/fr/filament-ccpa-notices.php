<?php

return [
    'resource' => [
        'label' => 'Activité de traitement',
        'plural_label' => 'Activités de traitement',
    ],

    'fields' => [
        'name' => 'Nom',
        'purpose' => 'Finalité professionnelle ou commerciale',
        'consumers' => 'Consommateurs',
        'data_categories' => 'Autres catégories d\'informations personnelles',
        'models' => 'Modèles',
        'sources' => 'Catégories de sources',
        'recipients' => 'Communiquée à',
        'recipient_name' => 'Nom',
        'role' => 'Rôle',
        'retention' => 'Durée de conservation ou critères utilisés pour la fixer',
    ],

    'placeholders' => [
        'consumers' => 'clients, candidats à l\'emploi, visiteurs du site...',
        'sources' => 'directement auprès de vous, de vos appareils, de prestataires...',
    ],

    'help' => [
        'data_categories' => 'Informations personnelles non déclarées sur un modèle avec #[PersonalData].',
        'models' => 'Les informations personnelles déclarées sur ces modèles rejoignent l\'activité.',
    ],

    'roles' => [
        'service_provider' => 'Prestataire de services',
        'contractor' => 'Cocontractant',
        'third_party' => 'Tiers',
    ],

    'actions' => [
        'export' => 'Exporter les données des avis (JSON)',
    ],
];
