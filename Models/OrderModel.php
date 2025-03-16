<?php
require_once 'Databases/database.php';

class OrderModel {
    private $conn;

    public function __construct() {
        $database = new Database('orders'); // Connect to the 'orders' database
        $this->conn = $database->getConnection();
    }

    public function getOrderDetails($orderId) {
        $sql = "SELECT * FROM orders WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$orderId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getOrderItems($orderId) {
        $sql = "SELECT * FROM order_items WHERE order_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$orderId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function closeConnection() {
        $this->conn = null;
    }
}
?>