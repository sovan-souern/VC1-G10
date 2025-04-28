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
        $orders = $this->model->getOrderDetail();
        
        $this->views('/E-comerce/order/order.php', ['orders' => $orders]);
        
    }
    
    function view($id)
    {
        // echo "View Product";
        $orders = $this->model->getOrder($id);
        $this->views('/E-comerce/order/oder_detail.php', ['orders' => $orders]);
    }


   
}



