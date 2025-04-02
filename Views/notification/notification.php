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
            /* background: linear-gradient(135deg, #e0e7ff 0%, #f9fafb 100%); */
            color: #2d3748;
            line-height: 1.6;
            min-height: 100vh;
            padding-bottom: 60px;
        }

        .container {
            width: 100%;
            max-width: 1260px;
            margin: 10px auto;
            padding: 20px;
        }

        h2 {
            font-size: 2.2rem;
            margin-bottom: 30px;
            color: #1a202c;
            display: flex;
            align-items: center;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            animation: slideInFromLeft 0.8s ease-out forwards;
        }

        h2::before {
            content: "🔔";
            margin-right: 12px;
            font-size: 2rem;
            animation: bellRing 1.5s ease-in-out infinite;
        }

        @keyframes bellRing {
            0%, 100% { transform: rotate(0deg); }
            25% { transform: rotate(15deg); }
            75% { transform: rotate(-15deg); }
        }

        @keyframes slideInFromLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .notifications-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .notification-card {
            /* background: linear-gradient(145deg, #ffffff, #f7fafc); */
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            border: 1px solid #e2e8f0;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            overflow: hidden;
            opacity: 0;
            animation: fadeInCard 0.6s ease forwards;
            animation-delay: calc(var(--index) * 0.1s);
        }

        .notification-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        @keyframes fadeInCard {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .notification-card.unread {
            background: linear-gradient(145deg, #fff, #fff);
            background-color: white;
            /* border-left: 5px solid #3b82f6; */
            position: relative;
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

        .notification-header {
            display: flex;
            align-items: center;
            margin-bottom: 12px;
        }

        .notification-icon {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: linear-gradient(145deg, #e0e7ff, #c3dafe);
            color: #4f46e5;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 1.2rem;
            margin-right: 15px;
            flex-shrink: 0;
            transition: transform 0.4s ease;
        }

        .notification-icon:hover {
            transform: rotate(360deg);
        }

        .notification-title-container {
            flex-grow: 1;
        }

        .notification-title {
            font-weight: 700;
            font-size: 1.1rem;
            display: flex;
            align-items: center;
            color: #2d3748;
        }

        .notification-title .dot {
            width: 10px;
            height: 10px;
            background-color: #3b82f6;
            border-radius: 50%;
            margin-left: 10px;
            display: inline-block;
            animation: pulse 1.5s infinite ease-in-out;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); opacity: 0.7; }
            50% { transform: scale(1.3); opacity: 1; }
        }

        .notification-time {
            color: #718096;
            font-size: 0.85rem;
            margin-top: 4px;
        }

        .notification-message {
            color: #4a5568;
            margin-bottom: 15px;
            line-height: 1.5;
            font-size: 0.95rem;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 100%;
            transition: opacity 0.3s ease;
        }

        .notification-actions {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            justify-content: flex-start;
        }

        .action-button {
            background: none;
            border: 1px solid #e2e8f0;
            font-size: 0.9rem;
            color: #718096;
            cursor: pointer;
            padding: 8px 14px;
            border-radius: 6px;
            display: flex;
            align-items: center;
            transition: all 0.3s ease;
        }

        .action-button:hover {
            background-color: #edf2f7;
            color: #2d3748;
            transform: scale(1.05);
        }

        .action-button:active {
            animation: bounce 0.3s ease;
        }

        @keyframes bounce {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(0.95); }
        }

        .action-button svg {
            width: 18px;
            height: 18px;
            margin-right: 6px;
            transition: transform 0.3s ease;
        }

        .action-button:hover svg {
            transform: translateX(3px);
        }

        .view-detail-btn {
            background: linear-gradient(90deg, #3b82f6, #5a9bff);
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 6px;
            font-size: 0.9rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .view-detail-btn:hover {
            background: linear-gradient(90deg, #2563eb, #4681f4);
            transform: scale(1.05);
            box-shadow: 0 4px 15px rgba(59, 130, 246, 0.3);
        }

        .view-detail-btn:active {
            animation: bounce 0.3s ease;
        }

        .view-detail-btn a {
            color: white;
            text-decoration: none;
        }

        .empty-state {
            text-align: center;
            padding: 50px 20px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            font-size: 1.1rem;
            color: #718096;
            animation: fadeIn 0.8s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            .container {
                padding: 16px;
                margin: 20px auto;
            }

            h2 {
                font-size: 1.8rem;
            }

            .notification-card {
                padding: 16px;
            }

            .notification-icon {
                width: 40px;
                height: 40px;
                font-size: 1rem;
            }

            .notification-title {
                font-size: 1rem;
            }

            .notification-message {
                font-size: 0.9rem;
            }

            .notification-actions {
                flex-direction: row;
                justify-content: space-between;
                gap: 8px;
            }

            .action-button,
            .view-detail-btn {
                padding: 8px 12px;
                font-size: 0.85rem;
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
                padding: 16px;
                border-radius: 8px;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                border: none;
                background: #fff;
            }

            .notification-header {
                display: flex;
                align-items: center;
                gap: 12px;
            }

            .notification-icon {
                width: 40px;
                height: 40px;
                font-size: 1.2rem;
                background: #e0e7ff;
                color: #4f46e5;
                margin-right: 0;
            }

            .notification-title-container {
                display: flex;
                flex-direction: column;
            }

            .notification-title {
                font-size: 1rem;
                font-weight: 600;
                color: #2d3748;
            }

            .notification-time {
                font-size: 0.8rem;
                color: #718096;
            }

            .notification-message {
                font-size: 0.9rem;
                color: #4a5568;
                margin-bottom: 12px;
                white-space: normal;
            }

            .notification-actions {
                display: flex;
                flex-direction: row;
                gap: 8px;
                justify-content: flex-start;
            }

            .action-button,
            .view-detail-btn {
                padding: 4px 10px;
                font-size: 0.9rem;
                border-radius: 6px;
            }

            .view-detail-btn {
                background: #3b82f6;
                color: white;
                border: none;
                font-weight: 500;
            }

            .action-button {
                background: #fff;
                border: 1px solid #e2e8f0;
                color: #718096;
            }

            .action-button svg {
                width: 16px;
                height: 16px;
                margin-right: 0;
            }

            .action-button a {
                color: #718096;
                text-decoration: none;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Your Notifications</h2>

        <div class="notifications-container">
            <?php if (!empty($notifications)): ?>
                <?php foreach ($notifications as $index => $notification): ?>
                    <div class="notification-card <?= $notification['status'] === 'unread' ? 'unread' : '' ?>" style="--index: <?= $index ?>;">
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
            const viewDetailButtons = document.querySelectorAll('.view-detail-btn');
            viewDetailButtons.forEach(button => {
                button.addEventListener('click', function() {
                    console.log('View details clicked');
                });
            });

            const markReadButtons = document.querySelectorAll('.mark-read-btn');
            markReadButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const card = this.closest('.notification-card');
                    card.classList.remove('unread');
                    const dot = card.querySelector('.dot');
                    if (dot) dot.style.display = 'none';
                    this.style.display = 'none';
                });
            });

            const deleteButtons = document.querySelectorAll('.delete-btn');
            deleteButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const card = this.closest('.notification-card');
                    card.style.opacity = '0';
                    card.style.height = card.offsetHeight + 'px';

                    setTimeout(() => {
                        card.style.height = '0';
                        card.style.padding = '0';
                        card.style.margin = '0';

                        setTimeout(() => {
                            card.remove();
                            const remainingCards = document.querySelectorAll('.notification-card');
                            if (remainingCards.length === 0) {
                                const container = document.querySelector('.notifications-container');
                                container.innerHTML = '<div class="empty-state"><p>No notifications found</p></div>';
                            }
                        }, 300);
                    }, 300);
                });
            });

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