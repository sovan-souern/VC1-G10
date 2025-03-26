<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Detail</title>
    <style>
     
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 20px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
        .back-link {
            color: #555;
            text-decoration: none;
            display: flex;
            align-items: center;
        }
        .back-link:hover {
            text-decoration: underline;
        }
        .message-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .sender-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #e0e7ff;
            color: #4f46e5;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-right: 15px;
        }
        .sender-info {
            flex-grow: 1;
        }
        .sender-name {
            font-weight: bold;
            font-size: 18px;
            margin: 0;
        }
        .sender-email {
            color: #666;
            margin: 5px 0 0;
            font-size: 14px;
        }
        .message-date {
            color: #888;
            font-size: 14px;
            margin: 5px 0 0;
        }
        .message-content {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 25px;
            line-height: 1.8;
        }
        .actions {
            display: flex;
            gap: 10px;
            margin-bottom: 25px;
        }
        .btn {
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            text-decoration: none;
            display: inline-block;
        }
        .btn-primary {
            background-color: #4f46e5;
            color: white;
        }
        .btn-secondary {
            background-color: #f3f4f6;
            color: #333;
        }
        .btn-danger {
            background-color: #ef4444;
            color: white;
        }
        .reply-form {
            margin-top: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-family: inherit;
            font-size: inherit;
        }
        textarea.form-control {
            min-height: 100px;
        }
        .alert {
            padding: 10px 15px;
            border-radius: 4px;
            margin-bottom: 15px;
        }
        .alert-success {
            background-color: #d1fae5;
            color: #065f46;
        }
        .alert-danger {
            background-color: #fee2e2;
            color: #b91c1c;
        }
        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }
            .message-header {
                flex-direction: column;
                align-items: flex-start;
            }
            .sender-avatar {
                margin-bottom: 10px;
            }
            .actions {
                flex-direction: column;
            }
            .btn {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <div class="container">
      
        
        <div class="message-header">
            <div class="sender-avatar">
            <?php echo substr($notification['first_name'], 0, 1); ?>
            </div>
            <div class="sender-info">       
                <h2 class="sender-name">
                    <?php echo htmlspecialchars($notification['first_name'] . ' ' . $notification['last_name']); ?>
                </h2>
                <?php if (!empty($message['sender_email'])): ?>
                    <p class="sender-email"><?php echo ($notification['phone_number']); ?></p>
                <?php endif; ?>
                <p class="message-date"> <?php echo ($notification['created_at']); ?></p>
            </div>
        </div>
        
        <div class="message-content">
        <strong>Message: </strong> <?php echo ($notification['message']); ?>
        </div>
        
        <div class="actions">
            <a href="/notifications/delete?id=<?= $notification['id'] ?>" class="btn btn-danger" > Delete</a>
            <a href="notifications.php" class="btn btn-secondary">Back to Notifications</a>
        </div>
        
        <!-- <?php if (!empty($reply_message)): ?>
            <div class="alert <?php echo $reply_success ? 'alert-success' : 'alert-danger'; ?>">
                <?php echo htmlspecialchars($reply_message); ?>
            </div>
        <?php endif; ?> -->
        
       
    </div>
</body>
</html>