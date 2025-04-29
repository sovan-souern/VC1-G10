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
        // $orders = $this->model->getOrder($id);
        $orderID = $this->model->getOrderID($id);
        // var_dump($orderID);
        $orders = $this->model->getOrderDetail();
       
        $this->views('/E-comerce/order/oder_detail.php', ['orderID' => $orderID, 'orders' => $orders]);
    }
    function confirm()
    {
        // echo "Confirm Order";
        $orders = $this->model->getOrderDetail();
        
        $this->views('/E-comerce/order/confirm.php', ['orders' => $orders]);
    }
    function cancel()
    {
        // echo "Cancel Order";
        $orders = $this->model->getOrderDetail();
        $this->views('/E-comerce/order/orderCancel.php', ['orders' => $orders]);
    }
    function storeComfirm($id) {
        $this->model->UpdateComfirmOrder($id);
        $this->redirect('/order');
    }
    function CancelStor($id) {
        $this->model->UpdateCancelOrder($id);
        $this->redirect("/order");
    }
    function storeUnComfirm($id){
        $this->model->UpdateUncomfirm($id);
        $this->redirect('/order/confirm');
    }
    function storeUnCancel($id){
        $this->model->UpdateUncancel($id);
        $this->redirect('/order/cancel');
    }

   
}



