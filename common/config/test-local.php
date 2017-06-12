<?php
return yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/main.php'),
    require(__DIR__ . '/main-local.php'),
    require(__DIR__ . '/test.php'),
    [
        'components' => [
            'db' => [
                'dsn' => 'mysql:host=localhost;dbname=yii_application',
            ],
            'db2' => [
                'dsn' => 'mysql:host=localhost;dbname=boceto_boricua_database',
            ]
        ],
    ]
);
