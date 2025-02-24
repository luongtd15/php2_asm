<?php

use App\Controllers\admin\CategoryController as CategoryController;
use App\Controllers\admin\HomeController as HomeController;
use App\Controllers\admin\ProductController as ProductController;
use App\Controllers\admin\UserController as UserController;

$router->filter('admin', function () {
    if (!isset($_SESSION['admin_logged_in'])) {
        return redirect('login');
    }
});
// $router->get('/admin/product/{id}', [ProductController::class, 'detail']);

$router->group(['before' => 'admin'], function ($router) {
    $router->group(['prefix' => 'admin'], function ($router) {
        $router->get('/', [HomeController::class, 'admin']);

        $router->get('/categories', [CategoryController::class, 'list']);
        $router->get('/categories/add', [CategoryController::class, 'add']);
        $router->post('/categories/add', [CategoryController::class, 'store']);
        $router->get('/category/edit/{id}', [CategoryController::class, 'edit']);
        $router->post('/category/edit/{id}', [CategoryController::class, 'categoryUpdate']);
        $router->post('/category/delete/{id}', [CategoryController::class, 'destroy']);

        $router->get('/products', [ProductController::class, 'list']);
        $router->get('/products/add', [ProductController::class, 'add']);
        $router->post('/products/add', [ProductController::class, 'store']);
        $router->get('/product/edit/{id}', [ProductController::class, 'edit']);
        $router->post('/product/edit/{id}', [ProductController::class, 'productUpdate']);
        $router->post('/product/delete/{id}', [ProductController::class, 'destroy']);

        $router->get('/users', [UserController::class, 'list']);
        $router->get('/users/add', [UserController::class, 'add']);
        $router->post('/users/add', [UserController::class, 'store']);
        $router->get('/user/edit/{id}', [UserController::class, 'edit']);
        $router->post('/user/edit/{id}', [UserController::class, 'userUpdate']);
        $router->post('/user/delete/{id}', [UserController::class, 'destroy']);
    });
});

// $router->get('/admin', [HomeController::class, 'admin']);

// $router->get('/admin/categories', [CategoryController::class, 'list']);
// $router->get('/admin/categories/add', [CategoryController::class, 'add']);
// $router->post('/admin/categories/add', [CategoryController::class, 'store']);
// $router->get('/admin/category/edit/{id}', [CategoryController::class, 'edit']);
// $router->post('/admin/category/edit/{id}', [CategoryController::class, 'categoryUpdate']);
// $router->post('/admin/category/delete/{id}', [CategoryController::class, 'destroy']);

// $router->get('/admin/products', [ProductController::class, 'list']);
// $router->get('/admin/products/add', [ProductController::class, 'add']);
// $router->post('/admin/products/add', [ProductController::class, 'store']);
// $router->get('/admin/product/edit/{id}', [ProductController::class, 'edit']);
// $router->post('/admin/product/edit/{id}', [ProductController::class, 'productUpdate']);
// $router->post('/admin/product/delete/{id}', [ProductController::class, 'destroy']);

// $router->get('/admin/users', [UserController::class, 'list']);
// $router->get('/admin/users/add', [UserController::class, 'add']);
// $router->post('/admin/users/add', [UserController::class, 'store']);
// $router->get('/admin/user/edit/{id}', [UserController::class, 'edit']);
// $router->post('/admin/user/edit/{id}', [UserController::class, 'userUpdate']);
// $router->post('/admin/user/delete/{id}', [UserController::class, 'destroy']);

// $router->get('/admin/products', [ProductController::class, 'list']);