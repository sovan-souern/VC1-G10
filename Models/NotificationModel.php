<?php
require_once 'Databases/database.php';
class NotificationModel {

    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getNotifications() {
        $sql = "SELECT * FROM notifications WHERE is_deleted = FALSE";
        $stmt = $this->conn->query($sql);

        $notifications = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $notifications[] = $row;
        }

        return $notifications;
    }

    public function addNotification($title, $message) {
        $sql = "INSERT INTO notifications (title, message, is_deleted) VALUES (?, ?, FALSE)";
        $stmt = $this->conn->prepare($sql);
        if ($stmt->execute([$title, $message])) {
            echo "<script>console.log('Notification added successfully');</script>";
        } else {
            echo "<script>console.log('Failed to add notification');</script>";
        }
    }

    public function markAllAsRead() {
        $sql = "UPDATE notifications SET status = 'read' WHERE status = 'unread'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }

    public function closeConnection() {
        $this->conn = null;
    }
}
?>