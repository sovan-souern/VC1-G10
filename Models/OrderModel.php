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
        $stmt = $this->pdo->query("SELECT * FROM orders");
        return $stmt->fetchAll();
    }
    public function createOrder($data, $adminId)
    {
        $orderId = null;

        foreach ($data['product_ids'] as $productId) {
            $stmt = $this->pdo->prepare("
                INSERT INTO orders (admin_id, phone, order_status, total, buy_at, address_id, firstName, lastName, product_id, amount_product) 
                VALUES (:admin_id, :phone, :order_status, :total, :buy_at, :address_id, :firstName, :lastName, :product_id, :amount_product)
            ");
            $stmt->execute([
                'admin_id' => $data['admin_id'] ?? null,
                'firstName' => $data['first_name'] ?? '',
                'lastName' => $data['last_name'] ?? '',
                'product_id' => $productId, // Insert each product ID individually
                'amount_product' => $data['amount_products'][$productId] ?? 1, // Insert the corresponding quantity
                'phone' => $data['phone'] ?? '',
                'order_status' => $data['order_status'] ?? 'Pending',
                'total' => $data['total'] ?? 0,
                'buy_at' => $data['buy_at'] ?? date('Y-m-d H:i:s'),
                'address_id' => $data['address_id'] ?? null
            ]);

            // Store the last inserted order ID (useful for notifications)
            $orderId = $this->pdo->lastInsertId();
        }

        // Return the last inserted order ID
        return $orderId;
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
            $sql = "INSERT INTO address (city, admin_id, country, create_at, village, commune, district, province) 
                    VALUES (:city, :admin_id, :country, :create_at, :village, :commune, :district, :province)";
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute([
                ':city' => $data['city'],
                ':admin_id' => $data['admin_id'],
                // ':address_text' => $data['address_text'],
                ':country' => $data['country'],
                ':village'=>$data['village'],
                ':commune'=>$data['commune'],
              ':district'=>$data['district'],
              ':province'=>$data['province'],
                ':create_at' => date('Y-m-d H:i:s') 
            ]);

            return $this->pdo->lastInsertId();
        } catch (Exception $e) {
            error_log("Failed to create address: " . $e->getMessage());
            return false;
        }
    }


}