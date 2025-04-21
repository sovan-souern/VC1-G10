<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Message Detail</title>

  <style>
    /* Base styles */
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f5f7fa;
      margin: 0;
      padding: 0;
      line-height: 1.6;
    }

    /* Container */
    .container {
      max-width: 95%;
      width: 100%;
      margin: 40px auto;
      background: white;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
      padding: 30px;
    }

    /* Message Header */
    .message-header {
      display: flex;
      align-items: flex-start; /* Changed to flex-start to align tops */
      gap: 15px;
      padding-bottom: 15px;
      border-bottom: 1px solid #e5e7eb;
    }

    .sender-avatar {
      width: 58px;
      height: 58px;
      border-radius: 50%;
      background-color: #e0e7ff;
      color: #4f46e5;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 600;
      font-size: 20px;
      flex-shrink: 0;
      overflow: hidden;
    }

    .sender-info {
      display: flex;
      flex-direction: column;
      justify-content: flex-start; /* Align content to the top */
      align-items: flex-start;
      margin-top: 0; /* Ensure no extra margin pushes it down */
    }

    .sender-name {
      font-size: 1.35rem;
      font-weight: 600;
      margin: 0; /* Remove any default margin */
      color: #1f2937;
      line-height: 1.2;
    }

    .sender-email,
    .message-date {
      font-size: 0.9rem;
      color: #6b7280;
      margin: 1px 0;
    }

    /* Message Content */
    .message-content {
      padding: 20px 0;
      color: #4b5563;
      font-size: 1rem;
      line-height: 1.5;
      word-wrap: break-word;
    }

    .message-content strong {
      color: #1f2937;
      font-weight: 600;
    }

    /* Actions/Buttons */
    .actions {
      display: flex;
      justify-content: flex-start;
      gap: 12px;
      margin-top: 20px;
    }

    .btn {
      padding: 10px 20px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 0.9rem;
      text-align: center;
      display: flex;
      align-items: center;
      justify-content: center;
      text-decoration: none;
      min-width: 120px;
      height: 40px;
      transition: background-color 0.2s ease;
    }

    .btn-danger {
      background-color: #ff6200;
      color: white;
    }

    .btn-danger:hover {
      background-color: #e55a00;
    }

    .btn-secondary {
      background-color: #e5e7eb;
      color: #4b5563;
    }

    .btn-secondary:hover {
      background-color: #d1d5db;
    }

    /* Image Styling */
    .imgContactView {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 50%;
      border: 2px solid #ff6200;
    }

    /* Responsive Design */

    /* Tablets and smaller desktops (max-width: 1024px) */
    @media (max-width: 1024px) {
      .container {
        margin: 30px auto;
        padding: 20px;
      }

      .sender-avatar {
        width: 50px;
        height: 50px;
        font-size: 18px;
      }

      .sender-name {
        font-size: 1.2rem;
      }

      .sender-email,
      .message-date {
        font-size: 0.85rem;
      }

      .message-content {
        font-size: 0.95rem;
        padding: 15px 0;
      }

      .btn {
        font-size: 0.85rem;
        padding: 8px 16px;
        min-width: 100px;
        height: 36px;
      }
    }

    /* Mobile devices (max-width: 768px) */
    @media (max-width: 768px) {
      .container {
        margin: 20px auto;
        padding: 15px;
      }

      .message-header {
        gap: 12px;
      }

      .sender-avatar {
        width: 50px;
        height: 50px;
        font-size: 18px;
      }

      .sender-name {
        font-size: 1.1rem;
      }

      .sender-email,
      .message-date {
        font-size: 0.8rem;
      }

      .message-content {
        font-size: 0.9rem;
        padding: 12px 0;
      }

      .actions {
        gap: 10px;
      }

      .btn {
        min-width: 90px;
        font-size: 0.85rem;
        padding: 8px;
        height: 36px;
      }
    }

    /* Small mobile devices (max-width: 480px) */
    @media (max-width: 480px) {
      .container {
        margin: 15px auto;
        padding: 12px;
        width: 92%;
      }

      .message-header {
        gap: 8px;
      }

      .sender-avatar {
        width: 46px;
        height: 46px;
        font-size: 16px;
      }

      .sender-name {
        font-size: 1rem;
      }

      .sender-email,
      .message-date {
        font-size: 0.75rem;
      }

      .message-content {
        font-size: 0.85rem;
        padding: 10px 0;
      }

      .actions {
        flex-direction: column;
        gap: 8px;
      }

      .btn {
        width: 100%;
        font-size: 0.85rem;
        padding: 8px;
        height: 40px;
      }
    }
  </style>
</head>

<body>
  <?php if ($notification["type"] == "contact") : ?>
    <div class="container">
      <div class="message-header">
        <div class="sender-avatar">
          <img class="imgContactView" src="../../../<?php echo $notificationID['user_profile_picture'] ?>" alt="contact">
        </div>
        <div class="sender-info">
          <h2 class="sender-name">
            <?php echo ($notificationID['user_name']) ?>
          </h2>
          <p class="message-date"><?php echo ($notificationID['created_at']); ?></p>
          <p class="message-date"> Contact by: <?php echo ($notificationID['first_name']); ?> <?php echo ($notificationID['last_name']); ?></p>
          <?php if (!empty($notificationID['phone_number'])): ?>
            <span class="sender-email"><span>Phone: </span><?php echo ($notificationID['phone_number']); ?></span>
          <?php endif; ?>
        </div>
      </div>
      <div class="message-content">
        <strong>Message: </strong>
        <?php echo htmlspecialchars($notificationID['message']); ?>
      </div>
      <div class="actions">
        <a href="/notifications/delete?id=<?= htmlspecialchars($notificationID['id']) ?>" class="btn btn-danger">Delete</a>
        <button onclick="window.history.back()" class="btn btn-secondary">Back</button>
      </div>
    </div>
  <?php endif ?>
</body>

</html>