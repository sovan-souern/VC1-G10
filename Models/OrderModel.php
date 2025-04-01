<?php
require_once 'Databases/database.php'; // Adjust this path as needed

class OrderModel
{
    private $pdo;

    function __construct()
    {
        $this->pdo = (new Database())->getConnection(); // Ensure getConnection() returns a PDO instance
    }

    function getOrder()
    {
        $stmt = $this->pdo->query("SELECT * FROM orders");
        return $stmt->fetchAll();
    }

    function createOrder($data)
    {
        try {
            $sql = "INSERT INTO orders (first_name, last_name, product_id, phone, order_status, city, country, address, total, buy_at, admin_id) 
                VALUES (:first_name, :last_name, :product_id, :phone, :order_status, :city, :country, :address, :total, :buy_at, :admin_id)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                ':first_name' => $data['first_name'],
                ':last_name' => $data['last_name'],
                ':product_id' => $data['product_id'], // Map items to product_id
                ':phone' => $data['phone'],
                ':order_status' => $data['order_status'],
                ':city' => $data['city'],
                ':country' => $data['country'],
                ':address' => $data['address'], // Include address
                ':total' => $data['total'],
                ':buy_at' => $data['buy_at'],
                ':admin_id' => $data['admin_id'] // Include admin_id
            ]);
            return $this->pdo->lastInsertId(); // Return the ID of the inserted order
        } catch (Exception $e) {
            error_log("Failed to create order: " . $e->getMessage());
            error_log("SQL Query: " . $sql);
            error_log("Data: " . print_r($data, true));
            return false;
        }
    }
}