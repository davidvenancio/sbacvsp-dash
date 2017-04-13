<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../views/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => __DIR__ . '/../logs/app.log',
        ],

        "db" => [
            "host" => "robb0163.publiccloud.com.br",
            "dbname" => "sbacvsaopaulo_form",
            "user" => "sbacv_formsp",
            "pass" => "in5Zd6#4"
        ],

    ],
];
