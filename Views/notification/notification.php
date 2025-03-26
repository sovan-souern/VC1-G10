<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications</title>
    <style>
        /* Base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background-color: #f9fafb;
            color: #333;
            line-height: 1.6;
        }

        .container {
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h2 {
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: #111;
            display: flex;
            align-items: center;
        }

        h2::before {
            content: "🔔";
            margin-right: 10px;
            font-size: 1.5rem;
        }

        /* Notification styles */
        .notifications-container {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .notification-card {
            background-color: #fff;
            border-radius: 10px;
            padding: 16px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
            border: 1px solid #eaeaea;
            transition: all 0.2s ease;
            position: relative;
            overflow: hidden;
        }

        .notification-card:hover {
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .notification-card.unread {
            background-color: #f0f7ff;
            border-left: 4px solid #3b82f6;
        }

        .notification-header {
            display: flex;
            margin-bottom: 10px;
        }

        .notification-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #e0e7ff;
            color: #4f46e5;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-right: 12px;
            flex-shrink: 0;
        }

        .notification-title-container {
            flex-grow: 1;
        }

        .notification-title {
            font-weight: 600;
            font-size: 1rem;
            display: flex;
            align-items: center;
        }

        .notification-title .dot {
            width: 8px;
            height: 8px;
            background-color: #3b82f6;
            border-radius: 50%;
            margin-left: 8px;
            display: inline-block;
        }

        .notification-time {
            color: #6b7280;
            font-size: 0.8rem;
        }

        .notification-message {
            color: #4b5563;
            margin-bottom: 12px;
            line-height: 1.4;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 100%;
        }

        .notification-actions {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        .action-button {
            background: none;
            border: none;
            font-size: 0.85rem;
            color: #6b7280;
            cursor: pointer;
            padding: 6px 12px;
            border-radius: 4px;
            display: flex;
            align-items: center;
            transition: background-color 0.2s;
        }

        .action-button:hover {
            background-color: #f3f4f6;
            color: #111;
        }

        .action-button svg {
            width: 16px;
            height: 16px;
            margin-right: 4px;
        }

        .view-detail-btn {
            background-color: #3b82f6;
            color: white;
            border: none;
            padding: 6px 12px;
            border-radius: 4px;
            font-size: 0.85rem;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .view-detail-btn:hover {
            background-color: #2563eb;
        }

        .empty-state {
            text-align: center;
            padding: 40px 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            .container {
                padding: 16px;
            }

            h2 {
                font-size: 1.5rem;
            }

            .notification-card {
                padding: 12px;
            }

            .notification-actions {
                flex-direction: row;
                justify-content: space-between;
            }

            .action-button,
            .view-detail-btn {
                padding: 8px 12px;
                font-size: 0.9rem;
            }
        }

        @media (max-width: 480px) {
            .notification-header {
                flex-direction: column;
            }

            .notification-icon {
                margin-bottom: 8px;
            }

            .notification-actions {
                flex-direction: column;
                gap: 8px;
            }

            .action-button,
            .view-detail-btn {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Your Notifications</h2>

        <div class="notifications-container">
            <?php if (!empty($notifications)): ?>
                <?php foreach ($notifications as $notification): ?>
                    <div class="notification-card <?= $notification['status'] === 'unread' ? 'unread' : '' ?>">
                        <div class="notification-header">
                            <div class="notification-icon">
                                <?php echo substr($notification['first_name'], 0, 1); ?>
                            </div>
                            <div class="notification-title-container">
                                <div class="notification-title">
                                    <?php echo $notification['first_name']; ?> <?php echo $notification['last_name']; ?>
                                    <?php if ($notification['status'] == 'unread'): ?>
                                        <span class="dot"></span>
                                    <?php endif; ?>
                                </div>
                                <div class="notification-time">
                                    <?php echo $notification['created_at']; ?>
                                </div>
                            </div>
                        </div>

                        <div class="notification-message">
                            <?php echo $notification['message']; ?>
                        </div>

                        <div class="notification-actions">
                            <button class="view-detail-btn">
                                <a href="notifications/view?id=<?= $notification['id'] ?>" class="text-white">View Details</a>
                            </button>

                            <?php if ($notification['status'] === 'unread'): ?>
                                <button class="action-button mark-read-btn">
                                    <a href="notifications/update?id=<?= $notification['id'] ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        Mark as read        
                                    </a>
                                </button>
                            <?php endif; ?>

                            <button class="action-button delete-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                                <a href="notifications/delete?id=<?= $notification['id'] ?>">Delete</a>
                            </button>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="empty-state">
                    <p>No notifications found</p>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // View Details functionality
            const viewDetailButtons = document.querySelectorAll('.view-detail-btn');
            viewDetailButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // You can add your link functionality here
                    // For example:
                    window.location.href = 'notification_detail.php?id=' + notificationId;
                    console.log('View details clicked');
                });
            });

            // Mark as read functionality
            const markReadButtons = document.querySelectorAll('.mark-read-btn');
            markReadButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const card = this.closest('.notification-card');
                    card.classList.remove('unread');

                    // Remove the dot indicator
                    const dot = card.querySelector('.dot');
                    if (dot) dot.style.display = 'none';

                    // Hide the mark as read button
                    this.style.display = 'none';
                });
            });

            // Delete functionality
            const deleteButtons = document.querySelectorAll('.delete-btn');
            deleteButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const card = this.closest('.notification-card');

                    // Animate the removal
                    card.style.opacity = '0';
                    card.style.height = card.offsetHeight + 'px';

                    setTimeout(() => {
                        card.style.height = '0';
                        card.style.padding = '0';
                        card.style.margin = '0';

                        setTimeout(() => {
                            card.remove();

                            // Check if there are no more notifications
                            const remainingCards = document.querySelectorAll('.notification-card');
                            if (remainingCards.length === 0) {
                                const container = document.querySelector('.notifications-container');
                                container.innerHTML = '<div class="empty-state"><p>No notifications found</p></div>';
                            }
                        }, 300);
                    }, 300);
                });
            });

            // Format dates to relative time (e.g., "2 hours ago")
            function timeAgo(dateString) {
                const date = new Date(dateString);
                const now = new Date();
                const seconds = Math.floor((now - date) / 1000);

                let interval = Math.floor(seconds / 31536000);
                if (interval >= 1) {
                    return interval + " year" + (interval === 1 ? "" : "s") + " ago";
                }

                interval = Math.floor(seconds / 2592000);
                if (interval >= 1) {
                    return interval + " month" + (interval === 1 ? "" : "s") + " ago";
                }

                interval = Math.floor(seconds / 86400);
                if (interval >= 1) {
                    return interval + " day" + (interval === 1 ? "" : "s") + " ago";
                }

                interval = Math.floor(seconds / 3600);
                if (interval >= 1) {
                    return interval + " hour" + (interval === 1 ? "" : "s") + " ago";
                }

                interval = Math.floor(seconds / 60);
                if (interval >= 1) {
                    return interval + " minute" + (interval === 1 ? "" : "s") + " ago";
                }

                return "just now";
            }

            // Apply the timeAgo function to all timestamps
            const timestamps = document.querySelectorAll('.notification-time');
            timestamps.forEach(timestamp => {
                const originalDate = timestamp.textContent.trim();
                if (originalDate) {
                    timestamp.textContent = timeAgo(originalDate);
                    timestamp.title = originalDate;
                }
            });
        });
    </script>
</body>

</html>