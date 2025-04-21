<?php
require_once 'Databases/database.php';
class NotificationModel
{
    private $pdo;
    public function __construct()
    {
        $database = new Database();
        $this->pdo = $database->getConnection(); // Initialize $pdo
    }

    public function getNotifications()
    {
        $stmt = $this->pdo->query("
            SELECT 
                notifications.id,
                notifications.first_name,
                notifications.last_name,
                notifications.phone_number,
                notifications.message,
                notifications.product_id,
                notifications.created_at,
                notifications.status,
                notifications.type,
                notifications.user_id AS notification_user_id,
                users.name AS user_name,
                users.email AS user_email,
                users.profile_picture AS user_profile_picture
            FROM 
                notifications
            LEFT JOIN 
                admins AS users ON notifications.user_id = users.admin_id
        ");
        return $stmt->fetchAll();
    }

    function createNotification($data)
    {
        $stmt = $this->pdo->prepare("INSERT INTO notifications (first_name, last_name, phone_number, message, product_id, created_at, status, type,user_id) 
                                     VALUES (:first_name, :last_name, :phone_number, :message, :product_id, :created_at, :status, :type, :user_id)");
        $stmt->execute([
            'user_id' => $data['user_id'], // Add user_id to the data array
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'phone_number' => $data['phone_number'],
            'message' => $data['message'],
            'product_id' => $data['product_id'] ?? null, // Explicitly pass null if product_id is not provided
            'created_at' => $data['created_at'],
            'status' => $data['status'],
            'type' => $data['type'] // Use the type from the data array
        ]);
    }
    function NotificationProduct($data)
    {
        $stmt = "INSERT INTO notifications (product_id, message, created_at, type, status) 
                 VALUES (:product_id, :message, :created_at, :type, :status)";
        $query = $this->pdo->prepare($stmt);
        $query->execute([
            'product_id' => $data['product_id'],
            'message' => $data['message'],
            'created_at' => $data['created_at'],
            'type' => $data['type'],
            'status' => $data['status']
        ]);
    }

    function getNotification($id)
    {
        $stmt = $this->pdo->prepare("
            SELECT 
                notifications.id,
                notifications.first_name,
                notifications.last_name,
                notifications.phone_number,
                notifications.message,
                notifications.product_id,
                notifications.created_at,
                notifications.status,
                notifications.type,
                notifications.user_id AS notification_user_id,
                users.name AS user_name,
                users.email AS user_email,
                users.profile_picture AS user_profile_picture
            FROM 
                notifications
            LEFT JOIN 
                admins AS users ON notifications.user_id = users.admin_id
            WHERE 
                notifications.id = :id
        ");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }

    function delete($id)
    {
        $this->pdo->query("DELETE FROM notifications WHERE id = $id"); // Execute the query directly
    }

    function updateRead($data)
    {
        $stmt = $this->pdo->prepare("UPDATE notifications SET status = :status WHERE id = :id");
        $stmt->execute([
            "status" => $data["status"], // Use the status from the data array
            "id" => $data["id"] // Use the ID from the data array
        ]);
    }
    
}
