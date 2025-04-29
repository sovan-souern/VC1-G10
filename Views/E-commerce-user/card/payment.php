<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        header {
            display: none;
        }
        .footer {
            display: none;
        }
        .slideshow-container,
        .dot-container {
            display: none;
        }
        body {
            font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            /* background: linear-gradient(135deg, #e0eafc 0%, #cfdef3 100%); */
            color: #1a1a1a;
            min-height: 100vh;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center; /* Center vertically */
        }
        .confirmation-container {
            max-width: 650px;
            margin: 0 20px;
            background: white;
            border-radius: 16px;
            padding: 40px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
            text-align: center;
            position: relative;
            overflow: hidden;
            animation: fadeIn 0.6s ease-out;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .confirmation-icon {
            font-size: 80px;
            color: #22c55e;
            margin-bottom: 24px;
            animation: bounceIn 0.8s ease;
        }
        .confirmation-title {
            font-size: 32px;
            font-weight: 700;
            color: #111827;
        }
        .confirmation-message {
            font-size: 18px;
            color: #4b5563;
            margin-bottom: 32px;
            line-height: 1.6;
        }
        .btn-home {
            background: linear-gradient(90deg, #3b82f6 0%, #2563eb 100%);
            color: white;
            padding: 14px 32px;
            border-radius: 12px;
            font-weight: 600;
            font-size: 16px;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            border: none;
        }
        .btn-home:hover {
            background: linear-gradient(90deg, #2563eb 0%, #1d4ed8 100%);
            transform: translateY(-3px);
            box-shadow: 0 6px 16px rgba(37, 99, 235, 0.4);
        }
        .btn-home:focus {
            outline: 2px solid #2563eb;
            outline-offset: 4px;
        }
        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        @keyframes bounceIn {
            0% { transform: scale(0.3); opacity: 0; }
            50% { transform: scale(1.2); opacity: 1; }
            100% { transform: scale(1); }
        }
        /* Responsive Design */
        @media (max-width: 576px) {
            .confirmation-container {
                padding: 24px;
                margin: 0 16px;
            }
            .confirmation-title {
                font-size: 24px;
            }
            .confirmation-message {
                font-size: 16px;
            }
            .confirmation-icon {
                font-size: 60px;
            }
            .btn-home {
                padding: 12px 24px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="confirmation-container" role="alert" aria-live="polite">
        <i class="fas fa-check-circle confirmation-icon" aria-hidden="true"></i>
        <h1 class="confirmation-title">Order Confirmed!</h1>
        <p class="confirmation-message">
            Thank you for your purchase! Your payment has been successfully processed. 
            We've sent the order details to your selected contact method.
        </p>
        <a href="/" class="btn-home mt-4" aria-label="Return to Home">Return to Home</a>
    </div>
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <!-- Custom JS for interactivity -->
    <script>
        // Add subtle interactivity to the button
        document.querySelector('.btn-home').addEventListener('click', function(e) {
            e.preventDefault();
            this.style.transform = 'scale(0.95)';
            setTimeout(() => {
                window.location.href = '/';
            }, 200);
        });
    </script>
</body>
</html>