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
            color: #2d3748;
            line-height: 1.6;
            min-height: 100vh;
            padding-bottom: 60px;
            background-color: #f9fafb;
        }

        .container {
            width: 100%;
            max-width: 1260px;
            margin: 20px auto;
            padding: 20px;
        }

        h2 {
            font-size: 2rem;
            margin-bottom: 24px;
            color: #1a202c;
            display: flex;
            align-items: center;
            font-weight: 600;
        }

        h2::before {
            content: "🔔";
            margin-right: 10px;
            font-size: 1.8rem;
        }

        .notifications-container {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .notification-card {
            background-color: #fff;
            border-radius: 10px;
            padding: 14px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            border: 1px solid #e5e7eb;
            position: relative;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .notification-card.unread {
            background-color: #f0f7ff;
        }

        .notification-card.unread::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(59, 130, 246, 0.05);
            pointer-events: none;
        }

        .notification-icon {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: #e0e7ff;
            color: #4f46e5;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 1.1rem;
            flex-shrink: 0;
        }

        .notification-content {
            flex-grow: 1;
        }

        .notification-title {
            font-weight: 600;
            font-size: 0.95rem;
            color: #2d3748;
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
            font-size: 0.75rem;
            margin-top: 2px;
        }

        .notification-message {
            color: #4b5563;
            font-size: 0.85rem;
            margin-top: 4px;
            line-height: 1.4;
            white-space: normal;
        }

        .menu-container {
            position: relative;
            flex-shrink: 0;
        }

        .menu-button {
            background: none;
            border: none;
            cursor: pointer;
            padding: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .menu-button svg {
            width: 20px;
            height: 20px;
            color: #6b7280;
        }

        .menu-dropdown {
            display: none;
            position: absolute;
            top: 100%;
            right: 0;
            background-color: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 6px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            z-index: 10;
            min-width: 140px;
        }

        .menu-dropdown.active {
            display: block;
        }

        .menu-item {
            display: flex;
            align-items: center;
            padding: 8px 12px;
            font-size: 0.85rem;
            color: #2d3748;
            cursor: pointer;
            border-bottom: 1px solid #e5e7eb;
        }

        .menu-item:last-child {
            border-bottom: none;
        }

        .menu-item.view-details {
            color: #3b82f6;
        }

        .menu-item.mark-read {
            color: #f97316;
        }

        .menu-item.delete {
            color: #f97316;
        }

        .menu-item svg {
            width: 16px;
            height: 16px;
            margin-right: 8px;
        }

        .empty-state {
            text-align: center;
            padding: 40px 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            font-size: 1rem;
            color: #6b7280;
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            .container {
                padding: 16px;
                margin: 16px auto;
            }

            h2 {
                font-size: 1.8rem;
            }

            .notification-card {
                padding: 12px;
            }

            .notification-icon {
                width: 32px;
                height: 32px;
                font-size: 1rem;
            }

            .notification-title {
                font-size: 0.9rem;
            }

            .notification-time {
                font-size: 0.7rem;
            }

            .notification-message {
                font-size: 0.8rem;
            }

            .menu-button svg {
                width: 18px;
                height: 18px;
            }

            .menu-dropdown {
                min-width: 120px;
            }

            .menu-item {
                padding: 6px 10px;
                font-size: 0.8rem;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 12px;
            }

            h2 {
                font-size: 1.5rem;
            }

            .notification-card {
                padding: 10px;
                border-radius: 8px;
                gap: 10px;
            }

            .notification-icon {
                width: 30px;
                height: 30px;
                font-size: 0.9rem;
            }

            .notification-title {
                font-size: 0.85rem;
            }

            .notification-time {
                font-size: 0.65rem;
            }

            .notification-message {
                font-size: 0.75rem;
                margin-top: 2px;
            }

            .menu-button svg {
                width: 16px;
                height: 16px;
            }

            .menu-dropdown {
                min-width: 110px;
            }

            .menu-item {
                padding: 6px 8px;
                font-size: 0.75rem;
            }

            .menu-item svg {
                width: 14px;
                height: 14px;
                margin-right: 6px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Your Notifications</h2>

        <div class="notifications-container">
            <?php if (!empty($notifications) || (isset($lowStockProducts) && !empty($lowStockProducts)) || (isset($outStockProducts) && !empty($outStockProducts))): ?>
                <?php foreach ($notifications as $index => $notification): ?>
                    <div class="notification-card <?= $notification['status'] === 'unread' ? 'unread' : '' ?>">
                        <div class="notification-icon">
                            <?php echo substr($notification['first_name'], 0, 1); ?>
                        </div>
                        <div class="notification-content">
                            <div class="notification-title">
                                <?php echo $notification['first_name']; ?> <?php echo $notification['last_name']; ?>
                                <?php if ($notification['status'] == 'unread'): ?>
                                    <span class="dot"></span>
                                <?php endif; ?>
                            </div>
                            <div class="notification-time">
                                <?php echo $notification['created_at']; ?>
                            </div>
                            <div class="notification-message">
                                <?php echo $notification['message']; ?>
                            </div>
                        </div>
                        <div class="menu-container">
                            <button class="menu-button">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v.01M12 12v.01M12 18v.01" />
                                </svg>
                            </button>
                            <div class="menu-dropdown">
                                <div class="menu-item view-details">
                                   
                                    <a href="notifications/view?id=<?= $notification['id'] ?>">View Details</a>
                                </div>
                                <?php if ($notification['status'] === 'unread'): ?>
                                    <div class="menu-item mark-read">
                                        
                                        <a href="notifications/update?id=<?= $notification['id'] ?>">Mark as read</a>
                                    </div>
                                <?php endif; ?>
                                <div class="menu-item delete">
                                  
                                    <a href="notifications/delete?id=<?= $notification['id'] ?>">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                <!-- Low stock notifications -->
                <?php if (isset($lowStockProducts)): ?>
                    <?php foreach ($lowStockProducts as $index => $product): ?>
                        <div class="notification-card unread" style="--index: <?= count($notifications) + $index ?>;">
                            <div class="notification-header">
                                <div class="notification-icon">⚠️</div>
                                <div class="notification-title-container">
                                    <div class="notification-title">
                                        Low Stock Alert: <?= htmlspecialchars($product['product_name']) ?>
                                        <span class="dot"></span>
                                    </div>
                                    <div class="notification-time"><?= date('Y-m-d H:i:s') ?></div>
                                </div>
                            </div>
                            <div class="notification-message">
                                The product "<?= htmlspecialchars($product['product_name']) ?>" has low stock (<?= htmlspecialchars($product['quantity']) ?> left).
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>

                <!-- Out-of-stock notifications -->
                <?php if (isset($outStockProducts)): ?>
                    <?php foreach ($outStockProducts as $index => $product): ?>
                        <div class="notification-card unread" style="--index: <?= count($notifications) + count($lowStockProducts ?? []) + $index ?>;">
                            <div class="notification-header">
                                <div class="notification-icon">❌</div>
                                <div class="notification-title-container">
                                    <div class="notification-title">
                                        Out of Stock Alert: <?= htmlspecialchars($product['product_name']) ?>
                                        <span class="dot"></span>
                                    </div>
                                    <div class="notification-time"><?= date('Y-m-d H:i:s') ?></div>
                                </div>
                            </div>
                            <div class="notification-message">
                                The product "<?= htmlspecialchars($product['product_name']) ?>" is out of stock.
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            <?php else: ?>
                <div class="empty-state">
                    <p>No notifications found</p>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Toggle dropdown menu
            const menuButtons = document.querySelectorAll('.menu-button');
            menuButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const dropdown = this.nextElementSibling;
                    const isActive = dropdown.classList.contains('active');
                    // Close all other dropdowns
                    document.querySelectorAll('.menu-dropdown').forEach(d => {
                        d.classList.remove('active');
                    });
                    // Toggle the clicked dropdown
                    if (!isActive) {
                        dropdown.classList.add('active');
                    }
                });
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', function(e) {
                if (!e.target.closest('.menu-container')) {
                    document.querySelectorAll('.menu-dropdown').forEach(dropdown => {
                        dropdown.classList.remove('active');
                    });
                }
            });

            // Handle View Details
            const viewDetailItems = document.querySelectorAll('.menu-item.view-details a');
            viewDetailItems.forEach(item => {
                item.addEventListener('click', function(e) {
                    console.log('View details clicked');
                });
            });

            // Handle Mark as read
            const markReadItems = document.querySelectorAll('.menu-item.mark-read a');
            markReadItems.forEach(item => {
                item.addEventListener('click', function(e) {
                    const card = this.closest('.notification-card');
                    card.classList.remove('unread');
                    const dot = card.querySelector('.dot');
                    if (dot) dot.style.display = 'none';
                    this.closest('.menu-item').remove();
                });
            });

            // Handle Delete
            const deleteItems = document.querySelectorAll('.menu-item.delete a');
            deleteItems.forEach(item => {
                item.addEventListener('click', function(e) {
                    const card = this.closest('.notification-card');
                    card.remove();
                    const remainingCards = document.querySelectorAll('.notification-card');
                    if (remainingCards.length === 0) {
                        const container = document.querySelector('.notifications-container');
                        container.innerHTML = '<div class="empty-state"><p>No notifications found</p></div>';
                    }
                });
            });

            // Time ago function
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