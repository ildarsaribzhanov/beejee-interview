<?php

use Dotenv\Dotenv;

chdir(dirname(__DIR__));
require 'vendor/autoload.php';

$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();


require "routes/routes.php";