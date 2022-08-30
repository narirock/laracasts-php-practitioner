<?php

require_once ('core/Router.php');

$router = new Router();

$router->define([
    '' => 'controllers/index.php',
    'about' => 'controllers/about.view.php'
]);
