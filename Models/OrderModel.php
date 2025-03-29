<?php
require_once 'Databases/database.php'; // Adjust this path as needed

class OrderModel
{
    private $pdo;

    function __construct()
    {
        $this->pdo = new Database();
    }

    function getOrder($id = null)
    {
        if ($id) {
            $stmt = $this->pdo->query("SELECT * FROM orders WHERE order_id = :id", ['id' => $id]);
            return $stmt->fetch();
        }
        $stmt = $this->pdo->query("SELECT * FROM orders");
        return $stmt->fetchAll();
    }

    function createOrder($data)
    {
        try {
            $stmt = $this->pdo->query(
                "INSERT INTO orders (first_name, last_name, phone, address, city, country, items, total, order_status) 
                VALUES (:first_name, :last_name, :phone, :address, :city, :country, :items, :total, :order_status)",
                [
                    'first_name' => $data['first_name'],
                    'last_name' => $data['last_name'],
                    'phone' => $data['phone'],
                    'address' => $data['address'],
                    'city' => $data['city'],
                    'country' => $data['country'],
                    'items' => $data['items'], // JSON string of cart items
                    'total' => $data['total'],
                    'order_status' => 'pending'
                ]
            );

            // Check if the insert was successful
            if ($stmt->rowCount() > 0) {
                // return $this->pdo->lastInsertId(); // Return the ID of the newly created order
            } else {
                throw new Exception("Failed to insert order into the database.");
            }
        } catch (Exception $e) {
            error_log("Error in createOrder: " . $e->getMessage());
            return false;
        }
    }
}