<?php
// Connect to your database
require_once 'Databases/database.php'; // Adjust the path as needed

class OrderManagement {
    private $conn;

    public function __construct() {
        $database = new Database('orders'); // Connect to the 'orders' database
        $this->conn = $database->getConnection();
    }

    public function getOrders() {
        // Fetch orders directly from the orders table
        $sql = "SELECT order_id, user_id, order_status, address, buy_at, total, admin_id FROM orders"; // Ensure this matches your schema
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function closeConnection() {
        $this->conn = null;
    }
}

// Fetch the orders
$orderManagement = new OrderManagement();
$orders = $orderManagement->getOrders();
$orderManagement->closeConnection();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Management</title>
    <link rel="stylesheet" href="path/to/your/styles.css"> <!-- Add your CSS file -->
</head>
<body>

<div class="page p-4">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Order Management</h4>
                <h6>Track and manage customer orders</h6>
            </div>
            <div class="page-btn">
                <a href="order/create" class="btn btn-added">
                    <img src="/Views/assets/img1/icons/plus.svg" class="me-1" alt="img">Add Order
                </a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
            <div class="table-top">
                    <div class="search-set">
                        <div class="search-path">
                            <a class="btn btn-filter" id="filter_search">
                                <img src="/Views/assets/img1/icons/filter.svg" alt="img">
                                <span><img src="/Views/assets/img1/icons/closes.svg" alt="img"></span>
                            </a>
                        </div>
                        <div class="search-input">
                            <a class="btn btn-searchset"><img src="/Views/assets/img1/icons/search-white.svg" alt="img"></a>
                        </div>
                    </div>
                    <div class="wordset">
                        <ul>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img src="/Views/assets/img1/icons/pdf.svg" alt="img"></a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img src="/Views/assets/img1/icons/excel.svg" alt="img"></a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img src="/Views/assets/img1/icons/printer.svg" alt="img"></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table datanew">
                        <thead>
                            <tr>
                                <th>
                                    <label class="checkboxs">
                                        <input type="checkbox" id="select-all">
                                        <span class="checkmarks"></span>
                                    </label>
                                </th>
                                <th>Product Name</th>
                                <th>Item</th>
                                <th>Total</th>
                                <th>Buy at</th>
                                <th>status</th>
                                <th>phone Number</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($orders)): ?>
                                <?php foreach ($orders as $index => $order): ?>
                                    <tr>
                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td><?= htmlspecialchars($order['order_id'], ENT_QUOTES, 'UTF-8') ?></td>
                                        <td><?= htmlspecialchars($order['user_id'], ENT_QUOTES, 'UTF-8') ?></td>
                                        <td><?= htmlspecialchars($order['order_status'], ENT_QUOTES, 'UTF-8') ?></td>
                                        <td><?= htmlspecialchars($order['address'], ENT_QUOTES, 'UTF-8') ?></td>
                                        <td><?= htmlspecialchars($order['buy_at'], ENT_QUOTES, 'UTF-8') ?></td>
                                        <td><?= htmlspecialchars($order['total'], ENT_QUOTES, 'UTF-8') ?></td>
                                        <td><?= htmlspecialchars($order['admin_id'], ENT_QUOTES, 'UTF-8') ?></td> <!-- Display admin_id -->
                                        <td>
                                            <a class="me-3" href="/order/edit?id=<?= $order['order_id'] ?>">
                                                <img src="/Views/assets/img1/icons/edit.svg" alt="Edit">
                                            </a>
                                            <a class="delete-order" href="/order/delete?id=<?= $order['order_id'] ?>">
                                                <img src="/Views/assets/img1/icons/delete.svg" alt="Delete">
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="9" style="text-align: center;">No orders found.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>