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
                 VALUES ('{$data["first_name"]}', '{$data["last_name"]}', '{$data["phone_number"]}', 
                         '{$data["message"]}', '{$data["created_at"]}', '{$data["status"]}')";
        $this->pdo->query($stmt); // Execute the query directly
    }

    function getNotification($id)
    {
        $stmt = $this->pdo->query("SELECT * FROM notifications WHERE id = $id");
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
