<?php

return [
    'resource' => [
        'label' => '处理活动',
        'plural_label' => '处理活动',
    ],

    'fields' => [
        'name' => '名称',
        'purpose' => '业务或商业目的',
        'consumers' => '消费者',
        'data_categories' => '其他个人信息类别',
        'models' => '模型',
        'sources' => '来源类别',
        'recipients' => '披露对象',
        'recipient_name' => '名称',
        'role' => '角色',
        'retention' => '保留期限或确定期限的标准',
    ],

    'placeholders' => [
        'consumers' => '客户、求职者、网站访客……',
        'sources' => '直接来自你、你的设备、服务提供商……',
    ],

    'help' => [
        'data_categories' => '未在模型中通过 #[PersonalData] 声明的个人信息。',
        'models' => '这些模型上声明的个人信息会并入该活动。',
    ],

    'roles' => [
        'service_provider' => '服务提供商',
        'contractor' => '承包商',
        'third_party' => '第三方',
    ],

    'actions' => [
        'export' => '导出声明数据（JSON）',
    ],
];
