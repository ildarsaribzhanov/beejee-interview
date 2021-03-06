<?php

use Dotenv\Dotenv;

require 'vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

return
    [
        'paths'         => [
            'migrations' => '%%PHINX_CONFIG_DIR%%/db/migrations',
            'seeds'      => '%%PHINX_CONFIG_DIR%%/db/seeds'
        ],
        'environments'  => [
            'default_migration_table' => 'phinxlog',
            'default_environment'     => 'development',
            'production'              => [
                'adapter' => 'mysql',
                'host'    => $_ENV['MYSQL_BD_HOST'],
                'name'    => $_ENV['MYSQL_BD_NAME'],
                'user'    => $_ENV['MYSQL_USER_NAME'],
                'pass'    => $_ENV['MYSQL_USER_PASS'],
                'port'    => $_ENV['MYSQL_BD_PORT'],
                'charset' => 'utf8',
            ],
            'development'             => [
                'adapter' => 'mysql',
                'host'    => $_ENV['MYSQL_BD_HOST'],
                'name'    => $_ENV['MYSQL_BD_NAME'],
                'user'    => $_ENV['MYSQL_USER_NAME'],
                'pass'    => $_ENV['MYSQL_USER_PASS'],
                'port'    => $_ENV['MYSQL_BD_PORT'],
                'charset' => 'utf8',
            ],
            'testing'                 => [
                'adapter' => 'mysql',
                'host'    => 'localhost',
                'name'    => 'testing_db',
                'user'    => 'root',
                'pass'    => '',
                'port'    => '3306',
                'charset' => 'utf8',
            ]
        ],
        'version_order' => 'creation'
    ];
