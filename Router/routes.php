<?php
require_once 'Router.php';
require_once 'Controllers/BaseController.php';
require_once 'Controllers/CategoryProductController.php'; 
require_once 'Controllers/ProductController.php'; 
require_once 'Controllers/ShopownerController.php'; 
require_once 'Controllers/OrderController.php'; 
require_once 'Controllers/DashboardController.php';
require_once 'Controllers/NotificationController.php';
require_once "Controllers/ProductController.php";
require_once "Controllers/InvoiceController.php";
require_once "Controllers/BrandController.php";
require_once "Controllers/ProfileController.php";
require_once "Controllers/UserController.php";

$routes = new Router();

// Redirect to signup page by default
$routes->get('/', [UserController::class, 'signup']);

// Order
$routes->get('/order', [OrderController::class, 'index']);

// shop owner
$routes->get('/shop-owner', [ShopOwnerController::class, 'index']);

// invoice
$routes->get('/invoice', [InvoiceController::class, 'index']);

// notification 
$routes->get('/notifications', [NotificationController::class, 'index']); 

$routes->get('/users', [UserController::class, 'index']);

// inventory page
$routes->get('/products', [ProductController::class, 'index']);
$routes->get('/products/create', [ProductController::class, 'create']);
$routes->get('/products/edit', [ProductController::class, 'edit']);
$routes->get('/products/view', [ProductController::class, 'view']);

// category 
$routes->get('/category', [CategoryProuductController::class, 'index']);
$routes->get('/category/create', [CategoryProuductController::class, 'create']);

// brand
$routes->get('/brand', [BrandController::class, 'index']);
$routes->get('/brand/create', [BrandController::class, 'create']);  
$routes->get('/brand/edit', [BrandController::class, 'edit']);  

// update profile
$routes->get('/update', [ProfileController::class, 'update']);
// reset password
$routes->get('/reset', [ProfileController::class, 'reset']);
//login
$routes->get('/login', [UserController::class, 'login']);
$routes->post('/login', [UserController::class, 'authenticate']);
//signup
$routes->get('/signup', [UserController::class, 'signup']);
$routes->post('/signup', [UserController::class, 'store']);

$routes->dispatch();
