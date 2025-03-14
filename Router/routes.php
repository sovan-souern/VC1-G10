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
require_once "Controllers/LoginRegisterController.php";
require_once "Controllers/AdminContoller.php";

$routes = new Router();

$routes->get('/', [DashboardController::class, 'index']);

// Order
$routes->get('/order', [OrderController::class, 'index']);

// shop owner
$routes->get('/shop-owner', [ShopOwnerController::class, 'index']);

// invoice
$routes->get('/invoice', [InvoiceController::class, 'index']);

// user
$routes->get('/users', [UserController::class, 'index']);

// notification 
$routes->get('/notifications', [NotificationController::class, 'index']); 

// inventory page
$routes->get('/products', [ProductController::class, 'index']);
$routes->get('/products/create', [ProductController::class, 'create']);
$routes->post('/products/store', [ProductController::class, 'store']);
$routes->get('/products/edit', [ProductController::class, 'edit']);
$routes->put('/products/update', [ProductController::class, 'update']);
$routes->get('/products/delete', [ProductController::class,'destroy']);

$routes->get('/products/view', [ProductController::class, 'view']);

// category 
$routes->get('/category', [CategoryController::class, 'index']);
$routes->get('/category/create', [CategoryController::class, 'create']);
$routes->post('/category/store', [CategoryController::class, 'store']);
$routes->get('/category/edit', [CategoryController::class, 'edit']);
$routes->put('/category/update', [CategoryController::class, 'update']);
$routes->delete('/category/delete', [CategoryController::class, 'destroy']);

// brand
$routes->get('/brand', [BrandController::class, 'index']);
$routes->get('/brand/create', [BrandController::class, 'create']);  
$routes->post('/brand/store', [BrandController::class, 'store']);  

$routes->get('/brand/edit', [BrandController::class, 'edit']);  

// update profile
$routes->get('/update', [ProfileController::class, 'update']);
// reset password
$routes->get('/reset', [ProfileController::class, 'reset']);

// login
$routes->get("/login", [AdminController::class, 'login']);
$routes->get("/register", [AdminController::class, 'register']);
$routes->post("/users/store", [AdminController::class, 'store']);
$routes->post("/users/authenticate", [AdminController::class, 'authenticate']);
$routes->get("/signup", [AdminController::class, 'logout']);

// signup
// $routes->get('/signup', [UserController::class, 'signup']);

$routes->dispatch();