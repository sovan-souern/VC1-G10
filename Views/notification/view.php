<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
      max-width: 900px; /* Reduced max-width for better readability */
      width: 95%;
      margin: 40px auto;
      background: white;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
      padding: 30px;
    }

    /* Message Header */
    .message-header {
      display: flex;
      align-items: center;
      gap: 15px;
      padding-bottom: 15px;
      border-bottom: 1px solid #e5e7eb; /* Added divider for separation */
    }

    .sender-avatar {
      width: 48px;
      height: 48px;
      border-radius: 50%;
      background-color: #e0e7ff; /* Softer blue background */
      color: #4f46e5; /* Matching text color */
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 600;
      font-size: 18px;
      flex-shrink: 0;
    }

    .sender-info {
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .sender-name {
      font-size: 1.25rem; /* Slightly larger for emphasis */
      font-weight: 600;
      margin: 0;
      color: #1f2937;
    }

    .sender-email,
    .message-date {
      font-size: 0.85rem;
      color: #6b7280;
      margin: 2px 0;
    }

    /* Message Content */
    .message-content {
      background-color: #f9fafb;
      padding: 20px;
      border-radius: 8px;
      margin: 20px 0;
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
      min-width: 120px; /* Consistent width for buttons */
      height: 40px;
    }

    .btn-danger {
      background-color: #f97316;
      color: white;
    }

    .btn-secondary {
      background-color: #e5e7eb;
      color: #4b5563;
    }

    /* Responsive Design */

    /* Tablets and smaller desktops (max-width: 1024px) */
    @media (max-width: 1024px) {
      .container {
        margin: 30px auto;
        padding: 20px;
      }

      .sender-name {
        font-size: 1.1rem;
      }

      .sender-email,
      .message-date {
        font-size: 0.8rem;
      }

      .message-content {
        font-size: 0.95rem;
        padding: 15px;
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
        flex-direction: row; /* Keep row layout for better UX */
        align-items: center;
        gap: 12px;
      }

      .sender-avatar {
        width: 40px;
        height: 40px;
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
        font-size: 0.9rem;
        padding: 12px;
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
        flex-direction: column;
        align-items: flex-start;
        gap: 8px;
      }

      .sender-avatar {
        width: 36px;
        height: 36px;
        font-size: 14px;
      }

      .sender-name {
        font-size: 0.95rem;
      }

      .sender-email,
      .message-date {
        font-size: 0.7rem;
      }

      .message-content {
        font-size: 0.85rem;
        padding: 10px;
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
  <div class="container">
    <div class="message-header">
      <div class="sender-avatar">
        <?php echo substr($notification['first_name'], 0, 1); ?>
      </div>
      <div class="sender-info">
        <h2 class="sender-name">
          <?php echo htmlspecialchars($notification['first_name'] . ' ' . $notification['last_name']); ?>
        </h2>
        <?php if (!empty($notification['phone_number'])): ?>
          <p class="sender-email"><?php echo htmlspecialchars($notification['phone_number']); ?></p>
        <?php endif; ?>
        <p class="message-date"><?php echo htmlspecialchars($notification['created_at']); ?></p>
      </div>
    </div>

    <div class="message-content">
      <strong>Message: </strong> 
      <?php echo htmlspecialchars($notification['message']); ?>
    </div>

    <div class="actions">
      <a href="/notifications/delete?id=<?= htmlspecialchars($notification['id']) ?>" class="btn btn-danger">Delete</a>
      <button onclick="window.history.back()" class="btn btn-dark">Back</button>
    </div>
  </div>
</body>
</html>