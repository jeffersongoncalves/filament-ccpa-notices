<?php

return [
    'resource' => [
        'label' => 'İşleme faaliyeti',
        'plural_label' => 'İşleme faaliyetleri',
    ],

    'fields' => [
        'name' => 'Ad',
        'purpose' => 'İş veya ticari amaç',
        'consumers' => 'Tüketiciler',
        'data_categories' => 'Diğer kişisel bilgi kategorileri',
        'models' => 'Modeller',
        'sources' => 'Kaynak kategorileri',
        'recipients' => 'Açıklandığı taraflar',
        'recipient_name' => 'Ad',
        'role' => 'Rol',
        'retention' => 'Saklama süresi veya bunu belirlemek için kullanılan ölçütler',
    ],

    'placeholders' => [
        'consumers' => 'müşteriler, iş başvuru sahipleri, web sitesi ziyaretçileri...',
        'sources' => 'doğrudan sizden, cihazlarınızdan, hizmet sağlayıcılardan...',
    ],

    'help' => [
        'data_categories' => 'Bir modelde #[PersonalData] ile beyan edilmemiş kişisel bilgiler.',
        'models' => 'Bu modellerde beyan edilen kişisel bilgiler faaliyete eklenir.',
    ],

    'roles' => [
        'service_provider' => 'Hizmet sağlayıcı',
        'contractor' => 'Yüklenici',
        'third_party' => 'Üçüncü taraf',
    ],

    'actions' => [
        'export' => 'Bildirim verilerini dışa aktar (JSON)',
    ],
];
