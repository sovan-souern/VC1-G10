<?php
require_once "Models/OrderModel.php";
class CheckoutUserController{
    private $model;
    function __construct()
    {
        $this->model=new  OrderModel();
    }

    function ProductCheckout() {
      require_once 'Views/E-commerce-user/card/checkout.php';
  }
  function store() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get form data
        $data = [
            'first_name' => $_POST['first_name'] ?? '',
            'last_name' => $_POST['last_name'] ?? '',
            'product_id' => $_POST['items'] ?? '', // Map items to product_id
            'phone' => $_POST['phone'] ?? '',
            'order_status' => $_POST['order_status'] ?? 'Pending',
            'city' => $_POST['city'] ?? '',
            'country' => $_POST['country'] ?? '',
            'address' => $_POST['address'] ?? '', // Include address
            'total' => $_POST['total'] ?? 0,
            'buy_at' => $_POST['buy_at'] ?? date('Y-m-d H:i:s'),
            'admin_id' => 1 // Set a default admin_id or fetch dynamically
        ];

        // Debug: Log the data to verify
        error_log("Data being passed to createOrder: " . print_r($data, true));

        // Save order to database
        $orderId = $this->model->createOrder($data);

        if ($orderId) {
            // Redirect or show success message
            header("Location: /checkout/success");
            exit;
        } else {
            // Log failure details
            error_log("Failed to save order. Data: " . print_r($data, true));
            // Handle error
            echo "Failed to save order. Check the PHP error log for details.";
        }
    } else {
        // Handle invalid request method
        echo "Invalid request method.";
    }
  }
}