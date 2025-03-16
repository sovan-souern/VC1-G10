<?php
require_once __DIR__ . '/../../../Models/OrderModel.php';

$error = '';
$orderDetails = null;
$orderItems = [];

try {
    // Check if order_id is provided in the URL
    if (!isset($_GET['order_id']) || empty($_GET['order_id'])) {
        throw new Exception('Order ID is required.');
    }

    $orderId = $_GET['order_id'];

    // Validate order_id (ensure it's a number)
    if (!is_numeric($orderId)) {
        throw new Exception('Invalid Order ID.');
    }

    $orderModel = new OrderModel();

    // Fetch order details
    $orderDetails = $orderModel->getOrderDetails($orderId);
    if (!$orderDetails) {
        throw new Exception('Order not found.');
    }

    // Fetch order items
    $orderItems = $orderModel->getOrderItems($orderId);

    $orderModel->closeConnection();
} catch (Exception $e) {
    $error = $e->getMessage();
    error_log($error); // Log the error for debugging purposes
    if (isset($orderModel)) {
        $orderModel->closeConnection(); // Ensure the connection is closed in case of an error
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .order-details, .order-items {
            margin-bottom: 20px;
        }
        .order-items table {
            width: 100%;
        }
        .order-items th, .order-items td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Order Details</h2>
        <?php if ($error): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $error; ?>
            </div>
        <?php else: ?>
            <!-- Order Details -->
            <div class="order-details">
                <h4>Order Details</h4>
                <p>Order ID: <?php echo $orderDetails['order_id']; ?></p>
                <p>Invoice ID: <?php echo $orderDetails['invoice_id']; ?></p>
                <p>Order Name: <?php echo $orderDetails['order_name']; ?></p>
                <p>Phone: <?php echo $orderDetails['phone']; ?></p>
                <p>Order Date: <?php echo $orderDetails['order_date']; ?></p>
                <p>Payment Status: <?php echo $orderDetails['payment_status']; ?></p>
                <p>Delivery Address: <?php echo $orderDetails['delivery_address']; ?></p>
                <p>Bill To: <?php echo $orderDetails['bill_to']; ?></p>
                <p>Billing Address: <?php echo $orderDetails['billing_address']; ?></p>
                <p>Pay By: <?php echo $orderDetails['pay_by']; ?></p>
            </div>

            <!-- Order Items -->
            <div class="order-items">
                <h4>Order Items</h4>
                <?php if (empty($orderItems)): ?>
                    <div class="alert alert-warning" role="alert">
                        No items found for this order.
                    </div>
                <?php else: ?>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Product Name</th>
                                    <th>Item</th>
                                    <th>Sub Total</th>
                                    <th>Vat</th>
                                    <th>Total Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($orderItems as $item): ?>
                                    <tr>
                                        <td><?php echo $item['id']; ?></td>
                                        <td><?php echo $item['product_name']; ?></td>
                                        <td><?php echo $item['item']; ?></td>
                                        <td><?php echo $item['sub_total']; ?></td>
                                        <td>10%</td>
                                        <td><?php echo number_format($item['sub_total'] * 1.1, 2); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>