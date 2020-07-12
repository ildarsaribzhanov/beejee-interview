<?php

use Dotenv\Dotenv;

define('APP', dirname(__DIR__));

chdir(APP);
require 'vendor/autoload.php';

$dotenv = Dotenv::createImmutable(APP);
$dotenv->load();

//$request = ServerRequestFactory::fromGlobals();
//
//$route = $request->getUri()->getPath();
//
//if( $route === '/' ) {
//    $response = new HtmlResponse('Hello!');
//
//} elseif ( preg_match('/^\/edit\/(?P<id>\d+)\/{0,1}$/', $route, $matches) ) {
//    $response = new HtmlResponse('Edit post id = ' . $matches['id']);
//} else {
//    $response = new HtmlResponse('Undefined', 404);
//}


//
//$emitter = new SapiEmitter();
//$emitter->emit($response);

require "routes/routes.php";