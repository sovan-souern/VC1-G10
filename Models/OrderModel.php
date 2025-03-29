<?php
require_once 'Databases/database.php'; // Adjust this path as needed

class OrderModel
{
    private $pdo;

    function __construct()
    {
        $this->pdo = new Database();
    }

    function getOrder()
    {
        $stmt = $this->pdo->query("SELECT * FROM orders");
        return $stmt->fetchAll();
    }

    function createOrder($data)
    {
        $stmt = $this->pdo->query(
            "INSERT INTO orders (user_id, product_id, first_name, last_name, item, phone, order_status, total, address, city, country, admin_id) 
            VALUES (:user_id, :product_id, :first_name, :last_name, :item, :phone, :order_status, :total, :address, :city, :country, :admin_id)",
            [
                'user_id' => $data['user_id'] ?? null, // Assuming user_id is available (e.g., from session)
                'product_id' => $data['product_id'] ?? null, // You may need to handle this differently if multiple products
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'item' => $data['item'], // JSON string of cart items
                'phone' => $data['phone'],
                'order_status' => $data['order_status'] ?? 'pending',
                'total' => $data['total'],
                'address' => $data['address'],
                'city' => $data['city'],
                'country' => $data['country'],
                'admin_id' => $data['admin_id'] ?? null // Optional admin_id
            ]
        );
        // return $this->pdo->lastInsertId(); 
        // return $this->pdo->lastInsertId();
    }
}