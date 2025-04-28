<?php
require_once 'Controllers/BaseController.php';
require_once 'Models/HistoryModel.php';
require_once "Models/orderModel.php";
require_once "Models/ProductModel.php";
require_once "Models/AdminModel.php";

class HistoryController extends BaseController {

    private $model;
    private $model_product;
    private $model_order;
    private $model_admin;
    
    function __construct()
    {
        $this->model = new HistoryModel();
        $this->model_order= new OrderModel();
        $this->model_product = new ProductModel();
        $this->model_admin = new AdminModel();
    }
    

    

    function index() {

        $products = $this->model_product->getProducts();
        $users = $this->model_order->getUser();
        $orders = $this->model->getOrderData(); // Ensure this method is working correctly
        // var_dump($orders);
        
    
        $admin_id = ['admin_id'] ?? null;
    
        extract([
          "users" => $users,
          "products" => $products,
          "admin_id" => $admin_id,
            "orders" => $orders
        ]);
        
        
        $this->ViewsUser( '/E-commerce-user/history/history.php',[
            "users" => $users,
            "products" => $products,
            "admin_id" => $admin_id,
            "orders" => $orders
        ]);
        
    }
   
}
