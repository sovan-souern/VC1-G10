<?php
require_once '../../../Models/OrderModel.php'; // Correct the path to OrderModel.php

$orderModel = new OrderModel();

if (isset($_GET['order_id'])) {
    $orderId = $_GET['order_id'];
    $orderDetails = $orderModel->getOrderDetails($orderId);
    $orderItems = $orderModel->getOrderItems($orderId);
    $orderModel->closeConnection();
} else {
    echo "Order ID not provided.";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Order Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .order-details, .order-items {
            margin: 20px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .order-details h1, .order-items h2 {
            margin-top: 0;
        }
        .order-details p, .order-items table {
            margin: 10px 0;
        }
        .order-items table {
            width: 100%;
            border-collapse: collapse;
        }
        .order-items table, .order-items th, .order-items td {
            border: 1px solid #ddd;
        }
        .order-items th, .order-items td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="order-details">
        <h1>Order Details</h1>
        <?php if ($orderDetails): ?>
            <p>Order ID: <?php echo htmlspecialchars($orderDetails['id']); ?></p>
            <p>Invoice ID: <?php echo htmlspecialchars($orderDetails['invoice_id']); ?></p>
            <p>Order Name: <?php echo htmlspecialchars($orderDetails['order_name']); ?></p>
            <p>Order Date: <?php echo htmlspecialchars($orderDetails['order_date']); ?></p>
            <p>Delivery Address: <?php echo htmlspecialchars($orderDetails['delivery_address']); ?></p>
            <p>Payment Status: <?php echo htmlspecialchars($orderDetails['payment_status']); ?></p>
            <p>Phone: <?php echo htmlspecialchars($orderDetails['phone']); ?></p>
            <p>Bill to: <?php echo htmlspecialchars($orderDetails['bill_to']); ?></p>
            <p>Billing Address: <?php echo htmlspecialchars($orderDetails['billing_address']); ?></p>
        <?php else: ?>
            <p>Order not found.</p>
        <?php endif; ?>
    </div>
    <div class="order-items">
        <h2>Order Items</h2>
        <?php if ($orderItems): ?>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Item</th>
                    <th>Sub Total</th>
                    <th>VAT</th>
                    <th>Total Price</th>
                </tr>
                <?php foreach ($orderItems as $item): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($item['id']); ?></td>
                        <td><?php echo htmlspecialchars($item['product_name']); ?></td>
                        <td><?php echo htmlspecialchars($item['quantity']); ?></td>
                        <td><?php echo htmlspecialchars($item['sub_total']); ?></td>
                        <td><?php echo htmlspecialchars($item['vat']); ?></td>
                        <td><?php echo htmlspecialchars($item['total_price']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <p>Subtotal: <?php echo htmlspecialchars($orderDetails['subtotal']); ?></p>
            <p>Shipping Cost: <?php echo htmlspecialchars($orderDetails['shipping_cost']); ?></p>
            <p>Total: <?php echo htmlspecialchars($orderDetails['total']); ?></p>
        <?php else: ?>
            <p>No items found for this order.</p>
        <?php endif; ?>
    </div>
</body>
</html>
