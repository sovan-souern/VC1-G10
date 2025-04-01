<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Message Detail</title>

  <style>
    /* Base Reset & Typography */
/* Base Reset & Typography */
body {
  font-family: 'Arial', sans-serif;
  background-color: #f5f7fa;
  margin: 0;
  padding: 0;
  line-height: 1.6;
}

/* Container */
.container {
  max-width: 1390px;
  width: 97%; /* Allow container to scale with screen width */
  margin: 230px auto; /* Reduced margin for better mobile fit */
  background: white;
  border-radius: 12px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
  padding: 30px;
  opacity: 0;
  animation: fadeIn 0.5s ease-in-out forwards;
  transform: scale(0.95);
}

/* Fade-in animation */
@keyframes fadeIn {
  from {
    opacity: 0;
    transform: scale(0.95);
  }
  to {
    opacity: 1;
    transform: scale(1);
  }
}

/* Message Header */
.message-header {
  display: flex;
  align-items: center;
  margin-bottom: 20px;
  opacity: 0;
  animation: slideIn 0.6s ease-out forwards;
}

@keyframes slideIn {
  from {
    opacity: 0;
    transform: translateX(-20px);
  }
  to {
    opacity: 1;
    transform: translateX(0);
  }
}

.sender-avatar {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  background-color: #e5e7eb;
  color: #6b7280;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: 600;
  font-size: 18px;
  margin-right: 15px;
  transition: transform 0.4s ease-in-out;
}

.sender-avatar:hover {
  transform: rotate(360deg);
}

.sender-info {
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.sender-name {
  font-size: 18px;
  font-weight: 600;
  margin: 0;
  color: #1f2937;
}

.sender-email,
.message-date {
  font-size: 14px;
  color: #6b7280;
  margin: 2px 0;
}

/* Message Content */
.message-content {
  background-color: #f9fafb;
  padding: 20px;
  border-radius: 10px;
  margin-bottom: 20px;
  color: #4b5563;
  font-size: 16px;
  opacity: 0;
  animation: slideUp 0.5s ease-in-out forwards 0.2s;
  word-wrap: break-word; /* Ensure long text wraps properly */
}

@keyframes slideUp {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Actions/Buttons */
.actions {
  display: flex;
  justify-content: space-between;
  gap: 15px;
}

.btn {
  /* flex: 0; */
  width: 200px;
  padding: 7px;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  font-size: 16px;
  text-align: center;
  transition: all 0.3s ease-in-out;
  font-weight: bold;
  text-decoration: none; /* Remove underline for anchor tags */
}

.btn:hover {
  transform: scale(1.05);
}

.btn-danger {
  background-color: #f97316;
  color: white;
}

.btn-danger:hover {
  background-color: #ea580c;
}

.btn-secondary {
  background-color: #e5e7eb;
  color: #374151;
}

.btn-secondary:hover {
  background-color: #d1d5db;
}

/* Responsive Design */

/* Tablets and smaller desktops (max-width: 1024px) */
@media (max-width: 1024px) {
  .container {
    margin: 80px auto;
    padding: 25px;
  }

  .sender-name {
    font-size: 16px;
  }

  .sender-email,
  .message-date {
    font-size: 13px;
  }

  .message-content {
    font-size: 15px;
    padding: 15px;
  }

  .btn {
    font-size: 15px;
    padding: 10px;
  }
}

/* Mobile devices (max-width: 768px) */
@media (max-width: 768px) {
  .container {
    margin: 40px auto;
    padding: 20px;
  }

  .message-header {
    flex-direction: column;
    align-items: flex-start;
  }

  .sender-avatar {
    width: 40px;
    height: 40px;
    font-size: 16px;
    margin-bottom: 10px;
    margin-right: 0;
  }

  .sender-name {
    font-size: 16px;
  }

  .sender-email,
  .message-date {
    font-size: 12px;
  }

  .message-content {
    font-size: 14px;
    padding: 15px;
  }

  .actions {
    flex-direction: column;
    gap: 10px;
  }

  .btn {
    width: 100%;
    font-size: 14px;
    padding: 10px;
  }
}

/* Small mobile devices (max-width: 480px) */
@media (max-width: 480px) {
  .container {
    margin: 20px auto;
    padding: 15px;
    width: 95%;
  }

  .sender-name {
    font-size: 14px;
  }

  .sender-email,
  .message-date {
    font-size: 11px;
  }

  .message-content {
    font-size: 13px;
    padding: 10px;
  }

  .btn {
    font-size: 13px;
    padding: 8px;
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
        <p class="message-date"><?php echo ($notification['created_at']); ?></p>
      </div>
    </div>

    <div class="message-content">
      <strong>Message: </strong> 
      <?php echo ($notification['message']); ?>
    </div>

    <div class="actions">
      <a href="/notifications/delete?id=<?= $notification['id'] ?>" class="btn btn-danger">Delete</a>
      <a href="notifications.php" class="btn btn-secondary">Back to Notifications</a>
    </div>
  </div>
</body>
</html>
