<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\controllers\HomeController;
use App\controllers\LoginController;
use App\controllers\RegisterController;
use App\core\Application;

$app = new Application(dirname(__DIR__));

$app->router->get('/', [HomeController::class, 'index']);

$app->router->get('/contact', [ContactController::class, 'index']);
$app->router->post('/contact', [ContactController::class, 'store']);

$app->router->get('/login', [LoginController::class, 'index']);
$app->router->post('/login', [LoginController::class, 'store']);

$app->router->get('/register', [RegisterController::class, 'index']);
$app->router->post('/register', [RegisterController::class, 'store']);

$app->run();
