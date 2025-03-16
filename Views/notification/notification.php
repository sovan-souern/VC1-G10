<?php
require_once __DIR__ . '/../../Models/NotificationModel.php';

?>
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications</title> -->
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
    <style>
        .notification-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 10px;
            margin-bottom: 6px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            flex-wrap: wrap;
        }
        .notification-icon {
            font-size: 1.5em;
            margin-right: 16px;
        }
        .notification-content {
            flex-grow: 1;
        }
        .notification-title {
            font-weight: bold;
            font-size: 1.2em;
        }
        .notification-message {
            margin-top: 1px;
        }
        .notification-time {
            color: #888;
            font-size: 1.0em;
            /* margin-top: 19px; */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Your Notifications</h2>
        <!-- <form method="POST" action="" class="mb-4">
            <div class="form-group">
                <input type="text" name="title" class="form-control" placeholder="Title" required>
            </div>
            <div class="form-group">
                <textarea name="message" class="form-control" placeholder="Message" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add Notification</button>
        </form> -->
        <div>
            <?php if (!empty($notifications)): ?>
                <?php foreach ($notifications as $notification): ?>
                    <div class="notification-card">
                        <div class="notification-icon">
                            <?php
                            // Display different icons based on the notification type
                            switch ($notification['type']) {
                                case 'success':
                                    echo '✅';
                                    break;
                                case 'info':
                                    echo 'ℹ️';
                                    break;
                                case 'warning':
                                    echo '⚠️';
                                    break;
                                case 'error':
                                    echo '❌';
                                    break;
                                default:
                                    echo '🔔';
                                    break;
                            }
                            ?>
                        </div>
                        <div class="notification-content">
                            <div class="notification-title"><?php echo $notification['title']; ?></div>
                            <div class="notification-message"><?php echo $notification['message']; ?></div>
                            <div class="notification-time"><?php echo $notification['created_at']; ?></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No notifications found</p>
            <?php endif; ?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>