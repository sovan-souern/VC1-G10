<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Successful</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .success-container {
            text-align: center;
            background-color: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .success-container h1 {
            color: #28a745;
            margin-bottom: 20px;
        }
        .success-container p {
            font-size: 18px;
            color: #6c757d;
        }
        .btn-home {
            background-color: #000;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="success-container">
        <h1>Payment Successful!</h1>
        <p>Thank you for your purchase. Your order has been successfully processed.</p>
        <a href="/" class="btn-home">Return to Home</a>
    </div>

    <script>
        // Clear the cart after successful payment
        localStorage.removeItem('cart');
    </script>
</body>
</html>