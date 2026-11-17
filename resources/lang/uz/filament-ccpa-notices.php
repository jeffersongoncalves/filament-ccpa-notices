<?php

return [
    'resource' => [
        'label' => 'Ishlov berish faoliyati',
        'plural_label' => 'Ishlov berish faoliyatlari',
    ],

    'fields' => [
        'name' => 'Nomi',
        'purpose' => 'Biznes yoki tijorat maqsadi',
        'consumers' => 'Isteʼmolchilar',
        'data_categories' => 'Shaxsiy maʼlumotlarning boshqa toifalari',
        'models' => 'Modellar',
        'sources' => 'Manba toifalari',
        'recipients' => 'Kimga oshkor qilinadi',
        'recipient_name' => 'Nomi',
        'role' => 'Rol',
        'retention' => 'Saqlash muddati yoki uni belgilash mezonlari',
    ],

    'placeholders' => [
        'consumers' => 'mijozlar, ishga nomzodlar, sayt tashrifchilari...',
        'sources' => 'bevosita sizdan, qurilmalaringizdan, xizmat koʻrsatuvchilardan...',
    ],

    'help' => [
        'data_categories' => 'Modelda #[PersonalData] bilan eʼlon qilinmagan shaxsiy maʼlumotlar.',
        'models' => 'Bu modellarda eʼlon qilingan shaxsiy maʼlumotlar faoliyatga qoʻshiladi.',
    ],

    'roles' => [
        'service_provider' => 'Xizmat koʻrsatuvchi',
        'contractor' => 'Pudratchi',
        'third_party' => 'Uchinchi tomon',
    ],

    'actions' => [
        'export' => 'Bildirishnoma maʼlumotlarini eksport qilish (JSON)',
    ],
];
