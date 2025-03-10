<?php
class NotificationModel
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = new Database();
    }

    public function getNotifications()
    {
        $sql = "SELECT * FROM notifications ORDER BY created_at DESC";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
