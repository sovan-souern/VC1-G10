<?php
require_once 'Router.php';
require_once 'Controllers/UserController.php';
require_once 'Controllers/CategoryController.php'; 
require_once 'Controllers/ProductController.php'; 
require_once 'Controllers/ShopownerController.php'; 
require_once 'Controllers/OrderController.php'; 
require_once 'Controllers/DashboardController.php';
require_once 'Controllers/NotificationController.php';

require_once "Controllers/InvoiceController.php";

$routes = new Router();


$routes->get('/', [DashboardController::class, 'index']);



$routes->get('/user', [UserController::class, 'index']);
$routes->get('/user/create', [UserController::class, 'create']);
$routes->post('/user/store', [UserController::class, 'store']);
$routes->get('/user/edit', [UserController::class, 'edit']);
$routes->put('/user/update', [UserController::class, 'update']);
$routes->delete('/user/delete', [UserController::class, 'destroy']);
$routes->get('/user/show', [UserController::class, 'show']);

// Order
$routes->get('/order', [OrderController::class, 'department']);

// shop owner
$routes->get('/shop-owner', [ShopOwnerController::class, 'index']);

// invoice
$routes->get('/invoice', [InvoiceController::class, 'index']);

// user

// notification 

$routes->get('/notifications', [NotificationController::class, 'notifications']); 



$routes->get('/users', [UserController::class, 'index']);
$routes->dispatch();
