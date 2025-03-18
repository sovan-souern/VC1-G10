<?php
require_once 'Router.php';
require_once 'Controllers/BaseController.php';
require_once 'Controllers/CategoryProductController.php'; 
require_once 'Controllers/ProductController.php'; 
require_once 'Controllers/ShopownerController.php'; 
require_once 'Controllers/OrderController.php'; 
require_once 'Controllers/DashboardController.php';
require_once 'Controllers/NotificationController.php';
require_once 'Controllers/InvoiceController.php';
require_once 'Controllers/BrandController.php';
require_once 'Controllers/ProfileController.php';
require_once 'Controllers/UserController.php';
require_once 'Controllers/LoginRegisterController.php';
require_once 'Controllers/AdminController.php';
require_once "Controllers/E-commerce/About.Controller.php";

$routes = new Router();

// Middleware function to check if the user is authenticated
function checkAuthentication() {
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    // Allow access to login, register, store, authenticate, and logout routes without authentication
    $allowedRoutes = ['/login', '/register', '/users/store', '/users/authenticate', '/signup', '/logout', '/reset'];
    if (!isset($_SESSION['admin_ID']) && !in_array($_SERVER['REQUEST_URI'], $allowedRoutes)) {
        header("Location: /login");
        exit();
    }
}
// function checkAuthentication() {
//     session_start();
//     if (!isset($_SESSION['admin_ID']) && $_SERVER['REQUEST_URI'] !== '/login' && $_SERVER['REQUEST_URI'] !== '/register') {
//         header("Location: /login");
//         exit();
//     }
// }

// // Call the middleware function before defining the routes
// checkAuthentication();

// Default route to login
$routes->get('/', [LoginRegisterController::class, 'login']);

// Login and Registration Routes
$routes->get('/login', [LoginRegisterController::class, 'login']);
$routes->get('/register', [LoginRegisterController::class, 'register']);
$routes->post('/users/store', [LoginRegisterController::class, 'store']);
$routes->post('/users/authenticate', [LoginRegisterController::class, 'authenticate']);
$routes->get('/signup', [LoginRegisterController::class, 'register']); // Changed to register
$routes->get('/signup', [LoginRegisterController::class, 'logout']);

// Admin Routes (for admin management)
$routes->get('/admin', [AdminController::class, 'index']);
$routes->get('/admin/edit/(\d+)', [AdminController::class, 'edit']);
$routes->post('/admin/update/(\d+)', [AdminController::class, 'update']);
$routes->post('/admin/delete/(\d+)', [AdminController::class, 'delete']);
$routes->get('/viewlogin', [AdminController::class, 'viewlogin']);
// $routes->get('/', [AdminController::class, 'login']);

// Order Routes
$routes->get('/order', [OrderController::class, 'index']);

// Shop Owner Routes
$routes->get('/shop-owner', [ShopownerController::class, 'index']);

// Invoice Routes
$routes->get('/invoice', [InvoiceController::class, 'index']);

// User Routes
$routes->get('/users', [UserController::class, 'index']);
$routes->get('/user/create', [UserController::class, 'create']);
$routes->post('/user/store', [UserController::class, 'store']);
$routes->get('/user/edit', [UserController::class, 'edit']);
$routes->put('/user/update', [UserController::class, 'update']);
$routes->delete('/user/delete', [UserController::class, 'destroy']);


$routes->get('/about', [AdminController::class, 'index']);
// Notification Routes
$routes->get('/notifications', [NotificationController::class, 'index']); 

// Product Routes (Inventory)
$routes->get('/products', [ProductController::class, 'index']);
$routes->get('/products/create', [ProductController::class, 'create']);
$routes->post('/products/store', [ProductController::class, 'store']);
$routes->get('/products/edit', [ProductController::class, 'edit']);
$routes->put('/products/update', [ProductController::class, 'update']);
$routes->get('/products/delete', [ProductController::class, 'destroy']);
$routes->get('/products/view', [ProductController::class, 'view']);
$routes->get('/products/delete', [ProductController::class,'destroy']);
$routes->get('/products/view', [ProductController::class,'view']);

$routes->get('/out-stock', [ProductController::class, 'OutStock']);

// Category Routes
$routes->get('/category', [CategoryController::class, 'index']);
$routes->get('/category/create', [CategoryController::class, 'create']);
$routes->post('/category/store', [CategoryController::class, 'store']);
$routes->get('/category/edit', [CategoryController::class, 'edit']);
$routes->put('/category/update', [CategoryController::class, 'update']);
$routes->get('/category/delete', [CategoryController::class, 'destroy']);

// brand
$routes->get('/brand', [BrandController::class, 'index']);
$routes->get('/brand/create', [BrandController::class, 'create']);  
$routes->post('/brand/store', [BrandController::class, 'store']);  
$routes->get('/brand/edit', [BrandController::class, 'edit']); 
$routes->put('/brand/update', [BrandController::class, 'update']); 
$routes->get('/brand/delete', [BrandController::class, 'destroy']);

// Profile Routes
$routes->get('/editProfile', [ProfileController::class, 'edit']); 
$routes->post('/updateProfile', [ProfileController::class, 'updateProfile']); // Add this line
$routes->get('/reset', [ProfileController::class, 'reset']);

// Dashboard Route
$routes->get('/dashboard', [DashboardController::class, 'index']);

// Dispatch the routes





// E-commerce

// require_once "Controllers/E-commerce-user/HomeController.php";



// // Define routes
// $routes->get('/', [$homeController, 'index']);
// $routes->get('/about', [$homeController, 'about']); // Add method in HomeController if needed
// $routes->get('/product', [$homeController, 'product']); // Add method if needed
// $routes->get('/team', [$homeController, 'team']); // Add method if needed
// $routes->get('/gallery', [$homeController, 'gallery']); // Add method if needed
// $routes->get('/404', [$homeController, 'notFound']); // Add method if needed
// $routes->get('/contact', [$homeController, 'contact']); // Add method if needed
// $routes->get('/appointment', [$homeController, 'appointment']); // Add method if needed












$routes->dispatch();
?>