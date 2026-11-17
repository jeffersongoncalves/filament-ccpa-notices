<?php

return [
    'resource' => [
        'label' => 'Emal əməliyyatı',
        'plural_label' => 'Emal əməliyyatları',
    ],

    'fields' => [
        'name' => 'Ad',
        'purpose' => 'Biznes və ya kommersiya məqsədi',
        'consumers' => 'İstehlakçılar',
        'data_categories' => 'Şəxsi məlumatların digər kateqoriyaları',
        'models' => 'Modellər',
        'sources' => 'Mənbə kateqoriyaları',
        'recipients' => 'Açıqlandığı tərəflər',
        'recipient_name' => 'Ad',
        'role' => 'Rol',
        'retention' => 'Saxlama müddəti və ya onu müəyyən etmək üçün meyarlar',
    ],

    'placeholders' => [
        'consumers' => 'müştərilər, iş namizədləri, sayt ziyarətçiləri...',
        'sources' => 'birbaşa sizdən, cihazlarınızdan, xidmət təminatçılarından...',
    ],

    'help' => [
        'data_categories' => '#[PersonalData] ilə modeldə bəyan edilməmiş şəxsi məlumatlar.',
        'models' => 'Bu modellərdə bəyan edilmiş şəxsi məlumatlar fəaliyyətə əlavə olunur.',
    ],

    'roles' => [
        'service_provider' => 'Xidmət təminatçısı',
        'contractor' => 'Podratçı',
        'third_party' => 'Üçüncü tərəf',
    ],

    'actions' => [
        'export' => 'Bildiriş məlumatlarını ixrac etmək (JSON)',
    ],
];
