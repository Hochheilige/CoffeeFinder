<?php

spl_autoload_register(function($class_name) {
    include_once $class_name.'.php';
});

use core\Application;
use controllers\AuthController;
use controllers\FindCafeController;
use controllers\SiteController;
use controllers\ArticlesController;
use models\User;

$app = new Application(dirname(__DIR__), ['userClass' => User::class]);

$app->router->get('/CoffeeFinder/application/', [SiteController::class, 'home']);
$app->router->get('/CoffeeFinder/application/home', [SiteController::class, 'home']);
$app->router->post('/CoffeeFinder/application/home', [SiteController::class, 'home']);
$app->router->post('/CoffeeFinder/application/', [SiteController::class, 'home']);

$app->router->get('/CoffeeFinder/application/login', [AuthController::class, 'login']);
$app->router->post('/CoffeeFinder/application/login', [AuthController::class, 'login']);
$app->router->get('/CoffeeFinder/application/register', [AuthController::class, 'register']);
$app->router->post('/CoffeeFinder/application/register', [AuthController::class, 'register']);
$app->router->get('/CoffeeFinder/application/logout', [AuthController::class, 'logout']);
$app->router->get('/CoffeeFinder/application/profile', [AuthController::class, 'profile']);

$app->router->get('/CoffeeFinder/application/findCafe', [FindCafeController::class, 'findCafe']);
$app->router->post('/CoffeeFinder/application/findCafe', [FindCafeController::class, 'findCafe']);
$app->router->get('/CoffeeFinder/application/cafe', [FindCafeController::class, 'cafe']);
$app->router->post('/CoffeeFinder/application/cafe', [FindCafeController::class, 'cafe']);

$app->router->get('/CoffeeFinder/application/articles', [ArticlesController::class, 'articles']);
$app->router->post('/CoffeeFinder/application/articles', [ArticlesController::class, 'articles']);

$app->run();

?>