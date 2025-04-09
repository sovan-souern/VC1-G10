<?php
require_once 'Router.php';
require_once 'Controllers/BaseController.php';
require_once 'Controllers/CategoryProductController.php'; 
require_once 'Controllers/ProductController.php'; // Remove duplicate inclusion
require_once 'Controllers/ShopownerController.php'; 
require_once 'Controllers/OrderController.php'; 
require_once 'Controllers/DashboardController.php';
require_once 'Controllers/NotificationController.php';
require_once 'Controllers/InvoiceController.php';
require_once 'Controllers/BrandController.php';
require_once 'Controllers/ProfileController.php';
require_once 'Controllers/UserController.php';
require_once 'Controllers/LoginRegisterController.php';
require_once 'Controllers/DiscountConntroller.php';
require_once 'Controllers/AdminController.php';
require_once "Controllers/checkoutUser.php";
require_once "Controllers/HistoryController.php";
require_once "Controllers/DetailhomeController.php";

$routes = new Router();

// Middleware function to check if the user is authenticated
function checkAuthentication() {
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    // Add '/' to allowed routes since home is now default
    $allowedRoutes = [
        '/', '/home', '/login', '/register', '/users/store', '/users/authenticate', 
        '/signup', '/logout', '/reset', '/productuser', '/about', '/contact'
    ];
    $adminRoutes = [
        '/admin', '/admin-register', '/admin/edit', '/admin/update', '/admin/delete',
        '/order', '/order_detail', '/invoice', '/users', '/user/create', '/user/edit',
        '/notifications', '/out-stock', '/products', '/category', '/brand', '/discount','/dashboard',
        '/products/create', '/products/edit', '/products/update', '/products/delete',
        '/category/create', '/category/edit', '/category/update', '/category/delete',
        '/brand/create', '/brand/edit', '/brand/update', '/brand/delete',
        '/dashboard','/reset', 
    ];

    // Redirect if not authenticated
    if (!isset($_SESSION['admin_ID']) && !in_array($_SERVER['REQUEST_URI'], $allowedRoutes)) {
        header("Location: /login");
        exit();
    }

    // Restrict access to admin routes for users with the "user" role
    if (isset($_SESSION['role']) && strtolower($_SESSION['role']) === 'user') {
        foreach ($adminRoutes as $adminRoute) {
            if (strpos($_SERVER['REQUEST_URI'], $adminRoute) === 0) {
                header("Location: /home");
                exit();
            }
        }
    }
}


// Call the middleware function before defining the routes
checkAuthentication();

// Change default route to home page instead of login
$routes->get('/', [HomeController::class, 'index']);

// Login and Registration Routes
$routes->get('/login', [LoginRegisterController::class, 'login']);
$routes->get('/register', [LoginRegisterController::class, 'register']);
$routes->post('/users/store', [LoginRegisterController::class, 'store']);
$routes->post('/users/authenticate', [LoginRegisterController::class, 'authenticate']);
$routes->get('/signup', [LoginRegisterController::class, 'register']); // Changed to register
$routes->get('/signup', [LoginRegisterController::class, 'logout']);

// Admin Registration Routes
$routes->get('/admin-register', [LoginRegisterController::class, 'adminRegister']);
$routes->post('/users/store-admin', [LoginRegisterController::class, 'storeAdmin']);

// Admin Routes (for admin management)
$routes->get('/admin', [AdminController::class, 'index']);
$routes->get('/admin/edit/(\d+)', [AdminController::class, 'edit']);
$routes->post('/admin/update/(\d+)', [AdminController::class, 'update']);
$routes->post('/admin/delete/(\d+)', [AdminController::class, 'delete']);
$routes->get('/viewlogin', [AdminController::class, 'viewlogin']);

// Order Routes
$routes->get('/order', [OrderController::class, 'index']);
$routes->get('/order_detail', [OrderController::class, 'view']);


// Invoice Routes
$routes->get('/invoice', [InvoiceController::class, 'index']);

// User Routes
$routes->get('/users', [UserController::class, 'index']);
// $routes->get('/user/create', [UserController::class, 'create']);
$routes->post('/user/store', [UserController::class, 'store']);
$routes->post('/user/create', [UserController::class, 'create']);
$routes->get('/user/edit', [UserController::class, 'edit']);
$routes->put('/user/update', [UserController::class, 'update']);
$routes->delete('/user/delete', [UserController::class, 'delete']);
$routes->get('/user/delete', [UserController::class, 'delete']); // Ensure this route exists
$routes->get('/users/active', [UserController::class, 'getActiveUsers']); // Add this line
$routes->get('/user/profile', [UserController::class, 'profile']); // Add this line

// Notification Routes
$routes->get('/notifications', [NotificationController::class, 'index']); 
$routes->get('/notifications/view', [NotificationController::class, 'view']); 
$routes->get('/notifications/delete', [NotificationController::class, 'destroy']); 
$routes->get('/notifications/update', [NotificationController::class, 'update']); 
$routes->get('/out-stock', [ProductController::class, 'OutStock']);
// Product Routes (Inventory)

$routes->get('/products', [ProductController::class, 'index']);
$routes->get('/products/create', [ProductController::class, 'create']);
$routes->post('/products/store', [ProductController::class, 'store']);
$routes->get('/products/edit', [ProductController::class, 'edit']);
$routes->put('/products/update', [ProductController::class, 'update']);
$routes->get('/products/delete', [ProductController::class, 'destroy']);
$routes->get('/products/view', [ProductController::class, 'view']);



// Discount Routes
$routes->get('/discount', [DiscountController::class, 'index']);
$routes->get('/create-discount', [DiscountController::class, 'create']);
$routes->get('/diescoutCategory', [DiscountController::class, 'discountProductCategory']);
$routes->post('/discount/storeCategory', [DiscountController::class, 'storeCategory']);


$routes->post('/discount/store', [DiscountController::class, 'store']);
$routes->get('/discount/edit', [DiscountController::class, 'edit']);
$routes->put('/discount/update', [DiscountController::class, 'update']);
$routes->get('/discount/delete', [DiscountController::class, 'destroy']);
$routes->get('/discount/view', [DiscountController::class, 'view']);


// Category Routes
$routes->get('/category', [CategoryController::class, 'index']);
$routes->get('/category/create', [CategoryController::class, 'create']);
$routes->post('/category/store', [CategoryController::class, 'store']);
$routes->get('/category/edit', [CategoryController::class, 'edit']);
$routes->put('/category/update', [CategoryController::class, 'update']);
$routes->get('/category/delete', [CategoryController::class, 'destroy']);

// Brand Routes
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


require_once 'Controllers/HomeController.php';
require_once 'Controllers/AboutController.php';
require_once 'Controllers/ProductUserController.php';
require_once 'Controllers/ContactController.php';
require_once 'Controllers/ShopController.php';



$routes->get('/home', [HomeController::class, 'index']);


$routes->get('/about', [AboutController::class, 'index']);


$routes->get('/productuser', [ProductUserController::class, 'index']);

$routes->get('/checkout', [CheckoutUserController::class, 'ProductCheckout']);
$routes->post('/checkout/store', [CheckoutUserController::class, 'store']);
$routes->get('/favorite', [CheckoutUserController::class, 'favorite']);
$routes->get('/shopping', [CheckoutUserController::class, 'shopping']);
$routes->get('/cart', [CheckoutUserController::class, 'cartview']);


$routes->post('/contact/store', [NotificationController::class, 'store']);
$routes->get('/contact', [ContactController::class, 'index']);


$routes->get('/shop', [ShopController::class, 'index']);


//history
$routes->get('/history', [HistoryController::class, 'index']); 
//detail

// Routes.php (or your route configuration file)
$routes->get('/detail', [DetailController::class, 'index']);




$routes->dispatch();