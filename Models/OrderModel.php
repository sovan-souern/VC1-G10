<?php
require_once 'Databases/database.php';

class OrderModel {
    private $conn;

    public function __construct() {
        try {
            $database = new Database();
            $this->conn = $database->getConnection();
            if (!$this->conn) {
                throw new Exception("Failed to establish database connection.");
            }
        } catch (PDOException $e) {
            throw new Exception("Database connection failed: " . $e->getMessage());
        }
    }

    public function getOrderDetails($orderId) {
        try {
            $sql = "SELECT * FROM orders WHERE order_id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$orderId]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$result) {
                return null; // Return null if no order is found
            }
            return $result;
        } catch (PDOException $e) {
            error_log("Failed to fetch order details: " . $e->getMessage());
            return null; // Return null on error
        }
    }

    public function getOrderItems($orderId) {
        try {
            $sql = "SELECT od.order_detail_id as id, p.product_name, od.quantity as item, od.price as sub_total, 0 as vat, od.price as total_price
                    FROM order_details od
                    JOIN products p ON od.product_id = p.product_id
                    WHERE od.order_id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$orderId]);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (!$result) {
                return []; // Return an empty array if no items are found
            }
            return $result;
        } catch (PDOException $e) {
            error_log("Failed to fetch order items: " . $e->getMessage());
            return []; // Return an empty array on error
        }
    }

    public function closeConnection() {
        $this->conn = null;
    }
}
?>