<?php

use Dotenv\Dotenv;

$dotEnv = Dotenv::createImmutable(__DIR__);
$dotEnv->load();

return [
    'app' => [
        'home_url' => $_ENV["APP_URL"]
    ],
    'Database' => [
        'host' => $_ENV["DB_HOST"],
        'dbName' => $_ENV ["DB_NAME"],
        'username' => $_ENV["DB_USER"],
        'password' => $_ENV['DB_PASSWORD']
    ]
];