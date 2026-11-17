<?php

return [
    'resource' => [
        'label' => '処理活動',
        'plural_label' => '処理活動',
    ],

    'fields' => [
        'name' => '名称',
        'purpose' => '事業上または商業上の目的',
        'consumers' => '消費者',
        'data_categories' => 'その他の個人情報のカテゴリ',
        'models' => 'モデル',
        'sources' => '情報源のカテゴリ',
        'recipients' => '開示先',
        'recipient_name' => '名称',
        'role' => '役割',
        'retention' => '保存期間、またはその決定基準',
    ],

    'placeholders' => [
        'consumers' => '顧客、求職者、ウェブサイト訪問者…',
        'sources' => '本人から直接、お使いのデバイスから、サービスプロバイダーから…',
    ],

    'help' => [
        'data_categories' => 'モデルで #[PersonalData] により宣言されていない個人情報。',
        'models' => 'これらのモデルで宣言された個人情報がこの活動に含まれます。',
    ],

    'roles' => [
        'service_provider' => 'サービスプロバイダー',
        'contractor' => '請負業者',
        'third_party' => '第三者',
    ],

    'actions' => [
        'export' => '通知データをエクスポート（JSON）',
    ],
];
