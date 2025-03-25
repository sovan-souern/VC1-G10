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
        $stmt = $this->pdo->query("SELECT * FROM notifications");
        return $stmt->fetchAll();
    }
    function createNotification($data)
    {
        $stmt = "INSERT INTO notifications (first_name, last_name, phone_number, message, created_at, status) 
                 VALUES (:first_name, :last_name, :phone_number, :message, :created_at, :status)";

        $query = $this->pdo->prepare($stmt); // Prepare the SQL statement
        $query->execute([
            "first_name" => $data["first_name"],
            "last_name" => $data["last_name"],
            "phone_number" => $data["phone_number"],
            "message" => $data["message"],
            "created_at" => $data["created_at"],
            "status" => $data["status"]
        ]);
    }
}
