<?php
require_once 'Router.php';
require_once 'Controllers/UserController.php';
require_once 'Controllers/CategoryController.php'; 
require_once 'Controllers/ProductController.php'; 
require_once 'Controllers/ShopownerController.php'; 
require_once 'Controllers/OrderController.php'; 
require_once 'Controllers/DashboardController.php'; 

$routes = new Router();


$routes->get('/', [DashboardController::class, 'index']);



$routes->get('/user', [UserController::class, 'index']);
$routes->get('/user/create', [UserController::class, 'create']);
$routes->post('/user/store', [UserController::class, 'store']);
$routes->get('/user/edit', [UserController::class, 'edit']);
$routes->put('/user/update', [UserController::class, 'update']);
$routes->delete('/user/delete', [UserController::class, 'destroy']);
$routes->get('/user/show', [UserController::class, 'show']);



// department
$routes->get('/department', [DepartmentController::class, 'department']);
$routes->get('/department/create', [DepartmentController::class, 'create']);
$routes->post('/department/store', [DepartmentController::class, 'store']);
$routes->get('/department/edit', [DepartmentController::class, 'edit']);
$routes->put('/department/update', [DepartmentController::class, 'update']);
$routes->delete('/department/delete', [DepartmentController::class, 'destroy']);



// employee
$routes->get('/employee', [EmployeeController::class, 'index']);
$routes->get('/employees/create', [EmployeeController::class, 'create']);
$routes->post('/employees/store', [EmployeeController::class, 'store']);
// Route for editing the employee
$routes->get('/employees/edit', [EmployeeController::class, 'edit']);

// Route for updating the employee (POST request)
$routes->post('/employees/update', [EmployeeController::class, 'update']);

$routes->post('/employees/delete', [EmployeeController::class, 'destroy']);


// categories
$routes->get('/categories', [CategoryController::class, 'categories']);

// product
$routes->get('/product', [ProductController::class, 'product']);

$routes->dispatch();
