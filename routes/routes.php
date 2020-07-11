<?php


$dispatcher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $r) {
    $r->addRoute('GET', '/', 'HomeController@showAll');
    $r->addRoute('GET', '/edit/{id:\d+}', 'TaskController@getOne');
    $r->addRoute('POST', '/edit/{id:\d+}', 'TaskController@update');
});


require "routes-dispatch.php";