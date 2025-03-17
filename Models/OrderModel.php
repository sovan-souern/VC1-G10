<?php
require_once 'Databases/database.php'; // Adjust this path as needed

class OrderModel {
    private $conn;

    public function __construct() {
        $database = new Database('orders'); // Connect to the 'orders' database
        $this->conn = $database->getConnection();
    }

    public function getOrderDetails($orderId) {
        $sql = "SELECT * FROM orders WHERE order_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$orderId]);

        // Check if any rows were returned
        if ($stmt->rowCount() === 0) {
            return null; // Return null if no order found
        }

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getOrderItems($orderId) {
        $sql = "SELECT * FROM order_items WHERE order_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$orderId]);

        // Return an empty array if no items found
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function closeConnection() {
        $this->conn = null;
    }
}
?>