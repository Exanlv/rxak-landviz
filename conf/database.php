<?php

use Rxak\Framework\App;

return [
    'driver' => 'mysql',
    'host' => 'localhost',
    'database' => App::env('DATABASE_NAME'),
    'username' => App::env('DATABASE_USERNAME'),
    'password' => App::env('DATABASE_PASSWORD'),
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
];