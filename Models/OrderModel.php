<?php
require_once 'Databases/database.php';

class OrderModel
{
    private $pdo;

    function __construct()
    {
        $this->pdo = (new Database())->getConnection();
    }

    function getOrder()
    {
        try {
            $stmt = $this->pdo->query("SELECT * FROM orders1");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            error_log("Failed to fetch orders: " . $e->getMessage());
            return [];
        }
    }

    function createOrder($data)
    {
        try {
            $sql = "INSERT INTO orders1 (
                admin_id, first_name, last_name, phone, email, country, address, city, 
                postal_code, delivery_notes, items, total, product_id, payment_method, 
                contact_method, order_status, buy_at
            ) VALUES (
                :admin_id, :first_name, :last_name, :phone, :email, :country, :address, :city, 
                :postal_code, :delivery_notes, :items, :total, :product_id, :payment_method, 
                :contact_method, :order_status, :buy_at
            )";
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute([
                ':admin_id' => $data['admin_id'],
                ':first_name' => $data['first_name'],
                ':last_name' => $data['last_name'],
                ':phone' => $data['phone'],
                ':email' => $data['email'],
                ':country' => $data['country'],
                ':address' => $data['address'],
                ':city' => $data['city'],
                ':postal_code' => $data['postal_code'],
                ':delivery_notes' => $data['delivery_notes'],
                ':items' => $data['items'],
                ':total' => $data['total'],
                ':product_id' => $data['product_id'],
                ':payment_method' => $data['payment_method'],
                ':contact_method' => $data['contact_method'],
                ':order_status' => $data['order_status'],
                ':buy_at' => $data['buy_at']
            ]);

            return $this->pdo->lastInsertId();
        } catch (Exception $e) {
            error_log("Failed to create order: " . $e->getMessage());
            return false;
        }
    }

    function getUser()
    {
        try {
            $stmt = $this->pdo->query("SELECT * FROM admins");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            error_log("Failed to fetch admins: " . $e->getMessage());
            return [];
        }
    }

    function createAddress($data)
    {
        try {
            $sql = "INSERT INTO address (city, admin_id, address_text, country, create_at) 
                    VALUES (:city, :admin_id, :address_text, :country, :create_at)";
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute([
                ':city' => $data['city'],
                ':admin_id' => $data['admin_id'],
                ':address_text' => $data['address_text'],
                ':country' => $data['country'],
                ':create_at' => date('Y-m-d H:i:s')
            ]);

            return $this->pdo->lastInsertId();
        } catch (Exception $e) {
            error_log("Failed to create address: " . $e->getMessage());
            return false;
        }
    }
}