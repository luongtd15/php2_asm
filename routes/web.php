<?php

use App\Controllers\AuthController;
use App\Controllers\CategoryController;
use App\Controllers\HomeController;
use App\Controllers\ProductController;


$router->get('/register', [AuthController::class, 'showRegister']);
$router->post('/register', [AuthController::class, 'register']);

$router->get('/login', [AuthController::class, 'showLogin']);
$router->post('/login', [AuthController::class, 'login']);

$router->get('/logout', [AuthController::class, 'logout']);

$router->get('/', [HomeController::class, 'index']);
$router->get('/about', [HomeController::class, 'about']);
$router->get('/contact', [HomeController::class, 'contact']);


$router->get('/cart', [HomeController::class, 'cart']);

$router->get('/checkout', [HomeController::class, 'checkout']);

$router->get('/products', [ProductController::class, 'list']);

$router->get('/product/detail/{id}', [ProductController::class, 'detail']);
$router->post('/product/detail/{id}', [ProductController::class, 'addToCart']);

$router->get('/products/{id}', [CategoryController::class, 'productByCategory']);
// $router->get('/products/grapes', [CategoryController::class, 'productByCategory']);
// $router->get('/products/peach', [CategoryController::class, 'productByCategory']);

$router->get('/search', [ProductController::class, 'search']);


