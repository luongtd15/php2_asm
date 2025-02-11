<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/app/helpers/handler.php';

use App\Controllers\CategoryController;
use App\Controllers\HomeController;
use App\Controllers\ProductController;
use Phroute\Phroute\RouteCollector;

$url = $_GET['url'] ?? '';

$router = new RouteCollector();

$router->get('/', [HomeController::class, 'index']);
$router->get('/about', [HomeController::class, 'about']);
$router->get('/contact', [HomeController::class, 'contact']);
$router->get('/cart', [HomeController::class, 'cart']);
$router->get('/checkout', [HomeController::class, 'checkout']);
$router->get('/register', [HomeController::class, 'register']);
$router->get('/login', [HomeController::class, 'login']);
$router->get('/admin', [HomeController::class, 'admin']);

$router->get('/category/apple', [CategoryController::class, 'apple']);
$router->get('/category/grapes', [CategoryController::class, 'grapes']);
$router->get('/category/peach', [CategoryController::class, 'peach']);

$router->get('/product/{id}', [ProductController::class, 'detail']);

$router->get('/admin/categories', [CategoryController::class, 'list']);
$router->get('/admin/products', [ProductController::class, 'list']);

try {
    # NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
    $dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

    // Print out the value returned from the dispatched function
    echo $response;
} catch (\Phroute\Phroute\Exception\HttpException $ex) {
    echo "404 - Not Found";
}
