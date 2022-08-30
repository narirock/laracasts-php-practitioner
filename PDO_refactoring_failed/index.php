<?php

$app['database'] = require './core/bootstrap.php';

//$router = new router;
//
//require 'routes.php';
//
//require $router->direct($uri);

//try {
//    require router::load('routes.php')
//        ->direct(Request::uri());
//} catch (Exception $e) {
//
//}

try {
    require Router::load('routes.php')
        ->direct(Request::uri());
} catch (Exception $e) {
}

//die(var_dump($app));
