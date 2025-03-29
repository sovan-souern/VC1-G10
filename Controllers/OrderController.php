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
        $orders = $this->model->getOrder($id);
        $this->views('/E-comerce/order/oder_detail.php', ['orders' => $orders]);
    }

    function create()
    {
        $checkout = $this->model->getOrder();
        $this->ViewsUser('/E-commerce-user/card/checkout.php', ['checkout' => $checkout]);
    }

    // New method to handle form submission
    function store()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Get form data
            $data = [
                'first_name' => $_POST['first_name'],
                'last_name' => $_POST['last_name'],
                'phone' => $_POST['phone'],
                'address' => $_POST['address'],
                'city' => $_POST['city'],
                'country' => $_POST['country'],
                'item' => $_POST['item'], // JSON string of cart items
                'total' => $_POST['total'],
                'user_id' => $_SESSION['user_id'] ?? null, // Assuming user_id is stored in session
                'order_status' => 'pending',
                'admin_id' => null // Set this if you have an admin_id
            ];

            // Create the order
            $orderId = $this->model->createOrder($data);

            // Return a JSON response
            echo json_encode([
                'success' => true,
                'message' => 'Order created successfully!',
                'order_id' => $orderId
            ]);
        } else {
            echo json_encode([
                'success' => false,
                'message' => 'Invalid request method.'
            ]);
        }
    }
}