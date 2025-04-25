<?php
require_once 'Databases/database.php';

class HistoryModel
{
    private $pdo;

    function __construct()
    {
        $this->pdo = new Database();
    }

    function getOrderData()
    {
        $stmt = $this->pdo->query("SELECT
                orders.order_id, -- Corrected column name
                orders.firstName,
                orders.lastName,
                orders.phone,
                orders.order_status,
                orders.total,
                orders.address_id,
                orders.buy_at,
                orders.amount_product,
                orders.product_id,
                orders.admin_id,
                admins.name AS user_name,
                products.product_name AS product_name,
                products.price,
                products.image
            FROM 
                orders
            LEFT JOIN 
                admins ON orders.admin_id = admins.admin_id
            LEFT JOIN 
                products ON orders.product_id = products.product_id
        ");
        return $stmt->fetchAll();
    }
}