<?php
require_once "Models/OrderModel.php";
require_once "Controllers/BaseController.php";
class CheckoutUserController extends BaseController{
    private $model;
    function __construct()
    {
        $this->model=new  OrderModel();
    }

    function ProductCheckout() {
      require_once 'Views/E-commerce-user/card/checkout.php';
  }


  function store() {
    // if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    //     $data = [
    //         'first_name' => $_POST['first_name'] ?? '',
    //         'last_name' => $_POST['last_name'] ?? '',
    //         'product_id' => $_POST['items'] ?? '', // Map items to product_id
    //         'phone' => $_POST['phone'] ?? '',
    //         'order_status' => $_POST['order_status'] ?? 'Pending',
    //         'city' => $_POST['city'] ?? '',
    //         'country' => $_POST['country'] ?? '',
    //         'address' => $_POST['address'] ?? '', // Include address
    //         'total' => $_POST['total'] ?? 0,
    //         'buy_at' => $_POST['buy_at'] ?? date('Y-m-d H:i:s'),
    //         'admin_id' => 1 // Set a default admin_id or fetch dynamically
    //     ];

    // }
    echo "1";
  }




  function favorite(){
    // $this->ViewsUser('Views/E-commerce-user/card/favorite.php');
    require_once 'Views/E-commerce-user/card/favorite.php';

  }
  function shopping(){
    require_once 'Views/E-commerce-user/card/shopping.php';
  }
}