<?php

spl_autoload_register(function($class_name) {
    include_once $class_name.'.php';
});

use controllers\AuthController;
use core\Application;
use controllers\SiteController;

$app = new Application(dirname(__DIR__));

$app->router->get('/CoffeeFinder/application/', [SiteController::class, 'home']);
$app->router->get('/CoffeeFinder/application/home', [SiteController::class, 'home']);

$app->router->get('/CoffeeFinder/application/contact', [SiteController::class, 'contact']);
$app->router->post('/CoffeeFinder/application/contact', [SiteController::class, 'handleContact']);

$app->router->get('/CoffeeFinder/application/login', [AuthController::class, 'login']);
$app->router->post('/CoffeeFinder/application/login', [AuthController::class, 'login']);
$app->router->get('/CoffeeFinder/application/register', [AuthController::class, 'register']);
$app->router->post('/CoffeeFinder/application/register', [AuthController::class, 'register']);

$app->run();


?>