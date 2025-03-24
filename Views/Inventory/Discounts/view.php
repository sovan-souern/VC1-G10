<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
            line-height: 1.6;
        }

        .container {
            display: flex;
            flex-direction: column;
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .image-section {
            padding: 20px;
            text-align: center;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .image-section img {
            width: 100%;
            max-width: 400px;
            height: auto;
            max-height: 400px;
            object-fit: cover;
            border-radius: 8px;
            transition: transform 0.3s;
        }

        .image-section img:hover {
            transform: scale(1.05);
        }

        .info-section {
            padding: 20px;
            width: 100%;
        }

        .info-section h1 {
            font-size: 24px;
            margin: 0 0 10px;
            color: #333;
        }

        .info-section p {
            margin: 8px 0;
            color: #555;
            font-size: 16px;
        }

        .price {
            font-size: 26px;
            color: #333;
            font-weight: bold;
        }

        .discount, .quantity {
            margin: 8px 0;
        }

        .add-to-cart {
            background-color: #007bff;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s, transform 0.2s;
            width: 100%;
            max-width: 200px;
            box-shadow: 0 4px 8px rgba(0, 123, 255, 0.3);
            margin-top: 20px;
            display: block;
            text-align: center;
        }

        .add-to-cart:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }

        .add-to-cart:active {
            background-color: #004085;
            transform: translateY(1px);
        }

        /* Tablet and Desktop (min-width: 768px) */
        @media (min-width: 768px) {
            .container {
                flex-direction: row;
                min-height: 500px;
            }

            .image-section {
                width: 50%;
                padding: 30px;
            }

            .info-section {
                width: 50%;
                padding: 30px;
            }

            .info-section h1 {
                font-size: 28px;
            }

            .info-section p {
                font-size: 18px;
            }

            .price {
                font-size: 30px;
            }

            .add-to-cart {
                font-size: 18px;
                max-width: 250px;
            }
        }

        /* Mobile (max-width: 767px) */
        @media (max-width: 767px) {
            .container {
                flex-direction: column;
                width: 95%;
                margin: 10px auto;
                min-height: 600px;
            }

            .image-section {
                width: 100%;
                padding: 15px;
            }

            .image-section img {
                max-width: 250px;
                max-height: 250px;
            }

            .info-section {
                width: 100%;
                padding: 15px;
            }

            .info-section h1 {
                font-size: 20px;
            }

            .info-section p {
                font-size: 14px;
                margin: 6px 0;
            }

            .price {
                font-size: 22px;
            }

            .add-to-cart {
                font-size: 14px;
                padding: 10px;
                max-width: 150px;
            }
        }

        /* Very small screens (max-width: 400px) */
        @media (max-width: 400px) {
            .container {
                width: 100%;
                margin: 5px auto;
                border-radius: 0;
            }

            .image-section {
                padding: 10px;
            }

            .image-section img {
                max-width: 200px;
                max-height: 200px;
            }

            .info-section {
                padding: 10px;
            }

            .info-section h1 {
                font-size: 18px;
            }

            .info-section p {
                font-size: 13px;
            }

            .price {
                font-size: 20px;
            }

            .add-to-cart {
                font-size: 13px;
                padding: 8px;
                max-width: 130px;
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
            <p class="price"><strong>Price: $</strong><span id="total-price"><?php echo ($products['price']); ?></span></p>
            <p class="discount"><strong>Discount: %</strong><span id="discount-percentage"><?php echo ($discount['discount_percentage']); ?></span></p>
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
            <p class="discount"><strong>Start Date: </strong><span id="start-date"><?php echo ($discount['start_date']); ?></span></p>
            <p class="discount"><strong>End Date: </strong><span id="end-date"><?php echo ($discount['end_date']); ?></span></p>
            <p><strong>Description:</strong> <?php echo ($products['product_content']); ?></p>
            <button class="add-to-cart" onclick="window.history.back()">Back</button>
        </div>
    </div>
</body>
</html>