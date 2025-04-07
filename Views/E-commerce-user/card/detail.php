<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($product['product_name'] ?? 'Product Detail'); ?></title>
    <style>
        /* Your existing styles were great — no big changes made except cleanup */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }
        .container {
            display: flex;
            flex-direction: column;
            width: 95%;
            margin: 20px auto;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .image-section {
            width: 50%;
            padding: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .image-section img {
            width: 400px;
            height: 400px;
            object-fit: cover;
            border-radius: 8px;
            transition: transform 0.3s;
        }
        .image-section img:hover {
            transform: scale(1.05);
        }
        .info-section {
            width: 50%;
            padding: 15px;
        }
        .info-section h1 {
            font-size: 24px;
            margin: 0;
        }
        .info-section p {
            margin: 10px 0;
            color: #555;
        }
        .price {
            font-size: 26px;
            color: #222;
        }
        .total-price {
            font-size: 20px;
            margin: 15px 0;
        }
        .add-to-cart {
            background-color: #007bff;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            width: 25%;
            margin-top: 20px;
            transition: background-color 0.3s, transform 0.2s;
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
        @media (max-width: 600px) {
            .container {
                flex-direction: column;
            }
            .image-section,
            .info-section {
                width: 100%;
                padding: 10px;
            }
            .image-section img {
                width: 100%;
                height: auto;
            }
            .add-to-cart {
                width: 100%;
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Product Image -->
        <div class="image-section">
            <?php
            $imagePath = $product['image'] ?? '';
            if (!empty($imagePath) && file_exists(__DIR__ . '/../../../' . $imagePath)) {
                echo '<img src="/' . htmlspecialchars($imagePath) . '" alt="Product Image">';
            } else {
                echo '<p>No image available.</p>';
            }
            ?>
        </div>

        <!-- Product Info -->
        <div class="info-section">
            <h1><?php echo htmlspecialchars($product['product_name'] ?? 'Unknown Product'); ?></h1>
            <p class="rating">★★★★☆ (8 reviews)</p>
            <p class="total-price">
                <strong>Price:</strong> $
                <span id="total-price">
                    <?php echo number_format((float)($product['price'] ?? 0), 2); ?>
                </span>
            </p>
            <p><strong>Quantity:</strong> <?php echo htmlspecialchars($product['quantity'] ?? 'N/A'); ?></p>

            <!-- Category Name -->
            <p>
                <strong>Category:</strong>
                <?php 
                $categoryName = 'N/A';
                if (!empty($categories)) {
                    foreach ($categories as $category) {
                        if ($category['category_id'] == ($product['category_id'] ?? null)) {
                            $categoryName = $category['category_name'];
                            break;
                        }
                    }
                }
                echo htmlspecialchars($categoryName);
                ?>
            </p>

            <!-- Brand Name -->
            <p>
                <strong>Brand:</strong>
                <?php 
                $brandName = 'N/A';
                if (!empty($brands)) {
                    foreach ($brands as $brand) {
                        if ($brand['id'] == ($product['brand_id'] ?? null)) {
                            $brandName = $brand['brand_name'];
                            break;
                        }
                    }
                }
                echo htmlspecialchars($brandName);
                ?>
            </p>

            <p><strong>Description:</strong> <?php echo htmlspecialchars($product['product_content'] ?? 'No description available.'); ?></p>

            <!-- Back Button -->
            <button class="add-to-cart" onclick="window.history.back()">← Back</button>
        </div>
    </div>
</body>
</html>
