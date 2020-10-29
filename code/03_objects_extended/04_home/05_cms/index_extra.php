<?php

error_reporting(E_ALL);
ini_set('display_errors',true);

require_once 'bootstrap.php';

$router = new \App\Router();

$router->get('/',      \App\Controllers\Controller::class . '@index');
$router->get('/about', \App\Controllers\Controller::class . '@about');

$application = new \App\Application($router);


$application->run();