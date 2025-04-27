<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }

        .container {
            display: flex;
            flex-direction: column;
            width: 100%; 
            max-width: 95%; 
            height:100%; 
            margin: 20px auto;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .image-section {
            padding: 15px;
            text-align: center;
            width: 50%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .image-section img {
            width: 400px; /* Larger fixed image width */
            height: 400px; /* Larger fixed image height */
            object-fit: cover; /* Keeps image proportions */
            border-radius: 8px;
            transition: transform 0.3s;
        }

        .image-section img:hover {
            transform: scale(1.05);
        }

        .info-section {
            padding: 15px;
            width: 50%;
            height: 100%;
            overflow: hidden; /* No scrolling by default */
        }

        .info-section h1 {
            font-size: 24px; /* Larger font for bigger layout */
            margin: 0;
        }

        .info-section p {
            margin: 10px 0;
            color: #777;
            font-size: 16px; /* Larger font */
        }

        .rating,
        .quantity,
        .price,
        .total-price {
            margin: 10px 0;
        }

        .price {
            font-size: 26px; /* Larger font */
            color: #333;
        }

        .total-price {
            font-size: 20px; /* Larger font */
            margin: 15px 0;
        }

        .add-to-cart {
            background-color: #007bff;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px; /* Larger font */
            transition: background-color 0.3s, transform 0.2s;
            width: 25%;
            box-shadow: 0 4px 8px rgba(0, 123, 255, 0.3);
            margin-top: 20px;
        }

        .add-to-cart:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }

        .add-to-cart:active {
            background-color: #004085;
            transform: translateY(1px);
        }

        @media (min-width: 600px) {
            .container {
                flex-direction: row;
            }
        }

        @media (max-width: 400px) {
            .container {
                flex-direction: column;
                width: 100%;
                height: auto; /* Adaptive height for mobile */
                min-height: 600px; /* Minimum height to fit content */
            }

            .image-section {
                width: 100%;
                padding: 10px;
                height: 50%; /* Half the container height */
            }

            .image-section img {
                width: 250px; /* Smaller but still decent size for mobile */
                height: 250px;
                object-fit: cover;
            }

            .info-section {
                width: 100%;
                height: 50%; /* Half the container height */
                padding: 10px;
                overflow: hidden; /* Prevent scrolling on mobile */
            }

            .info-section h1 {
                font-size: 20px; /* Adjusted for mobile */
            }

            .info-section p {
                font-size: 14px; /* Adjusted for mobile */
                margin: 8px 0;
            }

            .price {
                font-size: 20px;
            }

            .total-price {
                font-size: 16px;
            }

            .add-to-cart {
                font-size: 14px;
                padding: 10px;
                width: 40%; /* Slightly wider button on mobile */
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="image-section">
            <img class="rounded" src="../../../<?php echo ($products['image']); ?>" alt="Product Image" />
        </div>
        <div class="info-section">
            <h1><?php echo ($products['product_name']); ?></h1>
            <p class="rating">★★★★☆ (8 reviews)</p>
            <p class="total-price"><strong>Price: $</strong><span id="total-price"><?php echo ($products['price']); ?></span></p>
            <div class="quantity">
                <p><strong>Quantity:</strong> <?php echo ($products['quantity']); ?></p>
            </div>
            <p>
                <strong>Category:</strong>
                <?php foreach ($categories as $key => $category) : ?>
                    <?php if ($category['category_id'] === $products["category_id"]) {
                        echo $category['category_name'];
                    } ?>
                <?php endforeach; ?>
            </p>
            <p><strong>Brand:</strong>
                <?php foreach ($brands as $brand) : ?>
                    <?php if ($brand["id"] == $products["brand_id"]) {
                        echo ($brand["brand_name"]);
                    } ?>
                <?php endforeach; ?>
            </p>
            <p><strong>Description:</strong> <?php echo ($products['product_content']); ?></p>
            <button class="add-to-cart" onclick="window.history.back()">Back</button>
        </div>
    </div>
</body>
</html>