<?php
return [
    'controllerMap' => [
        'migrate' => [
            // 'class' => 'yii\console\controllers\MigrateController',
            // 'templateFile' => '@yii/views/migration.php',
            'migrationTable' => 'pro_migration',
            'migrationPath' => 'migrations',
            'db' => 'appdb',
            'interactive' => true
        ],
    ],
    'components' => [
        'appdb' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=192.168.1.173;dbname=yii2advanced_dev',
            'username' => 'admin',
            'password' => 'admin',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
    ],
];
