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
        $orders = $this->model->getOrder();
        $this->views('/E-comerce/order/order.php', ['orders' => $orders]);
    }
    
    function view($id)
    {
        $order = $this->model->getOrder($id);
        $this->views('/E-comerce/order/oder_detail.php', ['order' => $order]);
    }

    function store()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Get form data
            $data = [
                'first_name' => $_POST['first_name'] ?? '',
                'last_name' => $_POST['last_name'] ?? '',
                'phone' => $_POST['phone'] ?? '',
                'address' => $_POST['address'] ?? '',
                'city' => $_POST['city'] ?? '',
                'country' => $_POST['country'] ?? '',
                'items' => $_POST['items'] ?? '',
                'total' => $_POST['total'] ?? 0
            ];

            // Basic validation
            if (empty($data['first_name']) || empty($data['last_name']) || empty($data['phone']) || 
                empty($data['address']) || empty($data['city']) || empty($data['country']) || 
                empty($data['items']) || $data['total'] <= 0) {
                header('Location: /checkout?error=All fields are required and total must be greater than 0');
                exit;
            }

            // Create the order
            $orderId = $this->model->createOrder($data);

            if ($orderId !== false) {
                // Clear the cart
                echo '<script>localStorage.removeItem("cart");</script>';

                // Redirect to a confirmation page
                header('Location: /order/confirmation?order_id=' . $orderId);
                exit;
            } else {
                header('Location: /checkout?error=Failed to create order');
                exit;
            }
        } else {
            header('Location: /checkout?error=Invalid request method');
            exit;
        }
    }

    function confirmation()
    {
        $orderId = $_GET['order_id'] ?? null;
        $this->views('/E-comerce/order/confirmation.php', ['order_id' => $orderId]);
    }
}