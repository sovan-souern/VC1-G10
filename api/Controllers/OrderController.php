<?php
require_once 'Models/OrderModel.php';
require_once 'BaseController.php';

class OrderController extends BaseController
{
    private $model;

    function __construct()
    {
        $this->model = new OrderModel();
    }

    function index()
    {
        // echo "Order";
        $orders = $this->model->getOrder();
        $this->views('/E-comerce/order/order.php', ['orders' => $orders]);
    }
    
   

   
}



