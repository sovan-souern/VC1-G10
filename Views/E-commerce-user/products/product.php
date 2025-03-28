<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ashion | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Css Styles -->
    <link rel="stylesheet" href="Views/E-commerce-user/assets/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="Views/E-commerce-user/assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="Views/E-commerce-user/assets/css/style.css" type="text/css">
</head>

<body>
    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <?php foreach ($products as $index => $product): ?>
                            <?php $hasDiscount = false; ?>
                            <?php foreach ($discounts as $key => $discount): ?>
                                <?php if ($product["product_id"] == $discount["product_id"]): ?>
                                    <?php
                                    $original_price = floatval($discount["price"]);
                                    $discount_percentage = floatval($discount["discount_percentage"]);
                                    $discounted_price = $original_price * (1 - $discount_percentage / 100);

                                    $product_name = htmlspecialchars($discount["product_name"]);
                                    $image_url = !empty($discount["image"]) ? htmlspecialchars($discount["image"]) : 'https://via.placeholder.com/150';
                                    $discount_badge = "-" . number_format($discount_percentage, 0) . "%";
                                    $original_price_formatted = "$" . number_format($original_price, 2);
                                    $discounted_price_formatted = "$" . number_format($discounted_price, 2);
                                    ?>
                                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                        <div class="discount-product-card">
                                            <div class="discount-badge"><?php echo $discount_badge; ?></div>
                                            <div class="product-image" style="background-image: url('<?php echo $image_url; ?>')">
                                                <ul class="discount-product-hover">
                                                    <li><a href="#" class="image-zoom" data-image="<?php echo $image_url; ?>"><span class="arrow_expand"></span></a></li>
                                                    <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                                    <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="product-info">
                                                <h5 class="product-name"><?php echo $product_name; ?></h5>
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="price">
                                                    <span class="original-price"><?php echo $original_price_formatted; ?></span>
                                                    <?php echo $discounted_price_formatted; ?>
                                                </div>
                                                <button class="add-to-cart" data-product-name="<?php echo $product_name; ?>" data-product-price="<?php echo $discounted_price; ?>" data-product-image="<?php echo $image_url; ?>">Add to Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                    <?php $hasDiscount = true; ?>
                                    <?php break; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            <?php if (!$hasDiscount): ?>
                                <?php
                                $price = number_format($product['price'], 2);
                                $image = !empty($product['image']) ? htmlspecialchars($product['image']) : 'https://via.placeholder.com/150';
                                $productLink = "product-page.php?id=" . htmlspecialchars($product['product_id']);
                                ?>
                                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                    <div class="general-product-item">
                                        <div class="general-product-pic">
                                            <img src="<?php echo $image; ?>" alt="<?php echo htmlspecialchars($product['product_name']); ?>" style="width: 100%; height: 300px; object-fit: cover;">
                                            <ul class="general-product-hover">
                                                <li><a href="#" class="image-zoom" data-image="<?php echo $image; ?>"><span class="arrow_expand"></span></a></li>
                                                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                                            </ul>
                                        </div>
                                        <div class="general-product-text">
                                            <h6><a href="<?php echo $productLink; ?>"><?php echo htmlspecialchars($product['product_name']); ?></a></h6>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="general-product-price">$<?php echo $price; ?></div>
                                            <button class="add-to-cart" data-product-name="<?php echo htmlspecialchars($product['product_name']); ?>" data-product-price="<?php echo $price; ?>" data-product-image="<?php echo $image; ?>">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>

                        <?php
                        if (empty($products)) {
                            echo '<p>No products available.</p>';
                        }
                        ?>
                        <div class="col-12 text-center">
                            <div class="pagination__option">
                                <a href="#" class="active">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cart Panel -->
    <div class="cart-panel">
        <div class="cart-header">
            <h3>Cart (<span id="cart-item-count">0 items</span>)</h3>
            <div class="close-cart">×</div>
        </div>
        <div class="cart-items">
            <!-- Cart items will be dynamically added here -->
        </div>
        <div class="cart-footer">
            <div class="subtotal">
                <span>Subtotal</span>
                <span id="subtotal-amount">$0.00</span>
            </div>
            <button class="view-cart-btn" onclick="window.location.href='view-card';">View Cart</button>
        </div>
    </div>

    <!-- Image Zoom Modal -->
    <div class="image-zoom-modal">
        <div class="image-zoom-content">
            <img id="zoomed-image" src="" alt="Zoomed Image">
            <button class="back-btn">Back</button>
        </div>
    </div>

    <!-- Trend Section -->
    <section class="trend spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="trend__content">
                        <div class="section-title">
                            <h4>Hot Trend</h4>
                        </div>
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img src="https://i.pinimg.com/474x/89/4b/e1/894be1215c80e3965b0491231bc6075d.jpg" alt="">
                            </div>
                            <div class="trend__item__text">
                                <h6>Chain bucket bag</h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">$ 59.0</div>
                            </div>
                        </div>
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img src="https://i.pinimg.com/474x/b4/86/be/b486be4be2fb841b3d47086f2b51633d.jpg" alt="">
                            </div>
                            <div class="trend__item__text">
                                <h6>Pendant earrings</h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">$ 59.0</div>
                            </div>
                        </div>
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img src="https://i.pinimg.com/736x/3e/64/02/3e6402e4eb500ffc0922f5f70b0e4731.jpg" alt="">
                            </div>
                            <div class="trend__item__text">
                                <h6>Cotton T-Shirt</h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">$ 59.0</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="trend__content">
                        <div class="section-title">
                            <h4>Best Seller</h4>
                        </div>
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img src="https://i.pinimg.com/474x/9d/5e/25/9d5e25c90e573425cc16819ae631a034.jpg" alt="">
                            </div>
                            <div class="trend__item__text">
                                <h6>Cotton T-Shirt</h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">$ 59.0</div>
                            </div>
                        </div>
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img src="https://i.pinimg.com/736x/ed/be/b1/edbeb10ea557019c3e31c22c3bc72835.jpg" alt="">
                            </div>
                            <div class="trend__item__text">
                                <h6>Zip-pockets pebbled tote <br />briefcase</h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">$ 59.0</div>
                            </div>
                        </div>
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img src="https://i.pinimg.com/736x/9d/51/66/9d5166a83e131e42c453ec6f4e08b6e4.jpg" alt="">
                            </div>
                            <div class="trend__item__text">
                                <h6>Round leather bag</h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">$ 59.0</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="trend__content">
                        <div class="section-title">
                            <h4>Feature</h4>
                        </div>
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img src="https://i.pinimg.com/474x/3c/c0/08/3cc00805f2ce6c4705078480a5916895.jpg" alt="">
                            </div>
                            <div class="trend__item__text">
                                <h6>Bow wrap skirt</h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">$ 59.0</div>
                            </div>
                        </div>
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img src="https://i.pinimg.com/474x/e9/da/78/e9da7876efb69a798cc268a65bb29bc1.jpg" alt="">
                            </div>
                            <div class="trend__item__text">
                                <h6>Metallic earrings</h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">$ 59.0</div>
                            </div>
                        </div>
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img src="https://i.pinimg.com/474x/e9/da/78/e9da7876efb69a798cc268a65bb29bc1.jpg" alt="">
                            </div>
                            <div class="trend__item__text">
                                <h6>Flap cross-body bag</h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">$ 59.0</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Inline CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        /* Shared Styles for Add to Cart Button */
        .add-to-cart {
            background-color: pink;
            color: white;
            border: none;
            padding: 8px 15px;
            margin-top: 10px;
            cursor: pointer;
            width: 100%;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .add-to-cart:hover {
            background-color: #ff6699;
            transform: translateY(-2px);
        }

        .add-to-cart a {
            text-decoration: none;
            color: white;
            transition: color 0.3s ease;
        }

        /* Discounted Product Card Styles */
        .discount-product-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
        }

        .discount-product-card:hover {
            transform: scale(1.03);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .product-image {
            height: 300px;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
            transition: filter 0.3s ease;
        }

        .discount-product-card:hover .product-image {
            filter: brightness(110%);
        }

        .discount-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #ff5252;
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
            font-weight: bold;
            z-index: 1;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }

        .discount-product-card:hover .discount-badge {
            animation: pulse 1s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        .discount-product-hover {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            flex-direction: row;
            gap: 10px;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            padding: 0;
            z-index: 2;
        }

        .discount-product-card:hover .discount-product-hover {
            opacity: 1;
            visibility: visible;
        }

        .discount-product-hover li {
            list-style: none;
            margin: 0;
            transition: all 0.3s ease;
        }

        .discount-product-hover li a {
            display: block;
            width: 40px;
            height: 40px;
            background: #ffffff;
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            transition: all 0.3s ease;
            text-decoration: none;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .discount-product-hover li a:hover {
            background: #ff5252;
            color: #ffffff;
            transform: scale(1.15);
        }

        .discount-product-hover li a span {
            font-size: 16px;
            color: #111111;
            transition: color 0.3s ease;
        }

        .discount-product-hover li a:hover span {
            color: #ffffff;
        }

        .product-info {
            padding: 15px;
            text-align: center;
        }

        .product-name {
            font-weight: 600;
            color: #333;
            margin-bottom: 5px;
            transition: color 0.3s ease;
        }

        .discount-product-card:hover .product-name {
            color: #ff5252;
        }

        .rating {
            color: #ffc107;
            margin-bottom: 5px;
        }

        .price {
            font-weight: bold;
            color: #0d6efd;
            font-size: 1.1rem;
            transition: color 0.3s ease;
        }

        .discount-product-card:hover .price {
            color: #ff5252;
        }

        .original-price {
            text-decoration: line-through;
            color: #6c757d;
            font-size: 0.9rem;
            margin-right: 8px;
        }

        /* General Product Item Styles */
        .general-product-item {
            position: relative;
            background: #fff;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 20px;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .general-product-item:hover {
            transform: scale(1.03);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .general-product-pic {
            position: relative;
            width: 100%;
            height: 300px;
            overflow: hidden;
        }

        .general-product-pic img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.4s ease;
        }

        .general-product-item:hover .general-product-pic img {
            transform: scale(1.1);
        }

        .general-product-hover {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            flex-direction: row;
            gap: 10px;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            padding: 0;
            z-index: 2;
        }

        .general-product-item:hover .general-product-hover {
            opacity: 1;
            visibility: visible;
        }

        .general-product-hover li {
            list-style: none;
            margin: 0;
            transition: all 0.3s ease;
        }

        .general-product-hover li a {
            display: block;
            width: 40px;
            height: 40px;
            background: #ffffff;
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            transition: all 0.3s ease;
            text-decoration: none;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .general-product-hover li a:hover {
            background: #e7ab3c;
            color: #ffffff;
            transform: scale(1.15);
        }

        .general-product-hover li a span {
            font-size: 16px;
            color: #111111;
            transition: color 0.3s ease;
        }

        .general-product-hover li a:hover span {
            color: #ffffff;
        }

        .general-product-text {
            padding: 15px;
            text-align: center;
            transition: all 0.3s ease;
        }

        .general-product-text h6 {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .general-product-text h6 a {
            color: #333;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .general-product-item:hover .general-product-text h6 a {
            color: #e7ab3c;
        }

        .general-product-price {
            font-weight: bold;
            font-size: 16px;
            color: #333;
            transition: color 0.3s ease;
        }

        .general-product-item:hover .general-product-price {
            color: #e7ab3c;
        }

        /* Cart Panel Styles */
        .cart-panel {
            position: fixed;
            top: 0;
            right: 0;
            width: 350px;
            height: 100%;
            background: #fff;
            box-shadow: -5px 0 15px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            transform: translateX(100%);
            transition: transform 0.3s ease;
        }

        .cart-panel.active {
            transform: translateX(0);
        }

        .cart-header {
            background-color: #ffb6c1;
            color: #000;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .cart-header h3 {
            margin: 0;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .close-cart {
            font-size: 1.5rem;
            cursor: pointer;
            color: #000;
            transition: transform 0.3s ease;
        }

        .close-cart:hover {
            transform: rotate(90deg);
        }

        .cart-items {
            padding: 20px;
            max-height: calc(100% - 150px);
            overflow-y: auto;
        }

        .cart-item {
            display: flex;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid #eee;
        }

        .cart-item img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            margin-right: 15px;
            border-radius: 5px;
        }

        .cart-item-details {
            flex-grow: 1;
        }

        .cart-item-name {
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
        }

        .cart-item-price {
            font-weight: bold;
            color: #ff6699;
        }

        .cart-item-quantity {
            display: flex;
            align-items: center;
            margin-top: 5px;
        }

        .quantity-btn {
            background: none;
            border: none;
            font-size: 1.2rem;
            cursor: pointer;
            color: #333;
            padding: 0 5px;
        }

        .quantity-input {
            width: 40px;
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 3px;
            margin: 0 5px;
        }

        .cart-item-total {
            font-weight: bold;
            color: #333;
        }

        .delete-btn {
            margin-left: 10px;
            cursor: pointer;
            color: #777;
            transition: color 0.3s ease;
        }

        .delete-btn:hover {
            color: #ff3333;
        }

        .cart-footer {
            padding: 20px;
            border-top: 1px solid #eee;
            position: absolute;
            bottom: 0;
            width: 100%;
            background: #fff;
        }

        .subtotal {
            display: flex;
            justify-content: space-between;
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .view-cart-btn {
            background-color: #ffb6c1;
            color: #000;
            border: none;
            padding: 10px;
            width: 100%;
            font-weight: bold;
            cursor: pointer;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        .view-cart-btn:hover {
            background-color: #ff9eb5;
        }

        /* Image Zoom Modal Styles */
        .image-zoom-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            z-index: 2000;
            justify-content: center;
            align-items: center;
            transition: opacity 0.3s ease;
        }

        .image-zoom-modal.active {
            display: flex;
            opacity: 1;
        }

        .image-zoom-content {
            position: relative;
            text-align: center;
        }

        #zoomed-image {
            max-width: 90%;
            max-height: 80vh;
            object-fit: contain;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        }

        .back-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background: #ffffff;
            color: #333;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: background 0.3s ease, transform 0.3s ease;
        }

        .back-btn:hover {
            background: #ff5252;
            color: #ffffff;
            transform: scale(1.05);
        }

        /* Trend Section Styles */
        .trend {
            padding: 30px 0;
        }

        .section-title h4 {
            font-size: 20px;
            font-weight: bold;
            position: relative;
            display: inline-block;
            padding-bottom: 5px;
        }

        .section-title h4::after {
            content: "";
            display: block;
            width: 50px;
            height: 3px;
            background-color: red;
            margin-top: 5px;
        }

        .trend__content {
            padding: 10px;
        }

        .trend__item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .trend__item__pic img {
            width: 200px;
            height: 150px;
            object-fit: cover;
            border-radius: 5px;
        }

        .trend__item__text {
            margin-left: 15px;
        }

        .trend__item__text h6 {
            font-size: 14px;
            margin-bottom: 5px;
        }

        .product__price {
            font-weight: bold;
            font-size: 16px;
        }

        /* Pagination Styles */
        .pagination__option {
            margin-top: 30px;
        }

        .pagination__option a {
            display: inline-block;
            width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            border-radius: 50%;
            margin: 0 5px;
            color: #333;
            text-decoration: none;
            transition: all 0.3s;
        }

        .pagination__option a.active,
        .pagination__option a:hover {
            background: #e7ab3c;
            color: #fff;
        }

        .pagination__option i {
            font-size: 16px;
            line-height: 40px;
        }
    </style>

    <!-- JavaScript -->
    <script src="Views/E-commerce-user/assets/js/jquery-3.3.1.min.js"></script>
    <script src="Views/E-commerce-user/assets/js/main.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cartPanel = document.querySelector('.cart-panel');
            const closeCart = document.querySelector('.close-cart');
            const addToCartButtons = document.querySelectorAll('.add-to-cart');
            const cartItemsContainer = document.querySelector('.cart-items');
            const cartItemCount = document.querySelector('#cart-item-count');
            const subtotalAmount = document.querySelector('#subtotal-amount');
            const imageZoomModal = document.querySelector('.image-zoom-modal');
            const zoomedImage = document.querySelector('#zoomed-image');
            const backBtn = document.querySelector('.back-btn');
            const zoomButtons = document.querySelectorAll('.image-zoom');
            let cartItems = [];

            // Cart Functionality
            function toggleCart() {
                cartPanel.classList.toggle('active');
            }

            closeCart.addEventListener('click', toggleCart);

            addToCartButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const productName = this.getAttribute('data-product-name');
                    const productPrice = parseFloat(this.getAttribute('data-product-price'));
                    const productImage = this.getAttribute('data-product-image');

                    const existingItem = cartItems.find(item => item.name === productName);
                    if (existingItem) {
                        existingItem.quantity += 1;
                        updateCartItem(existingItem);
                    } else {
                        const newItem = {
                            name: productName,
                            price: productPrice,
                            image: productImage,
                            quantity: 1
                        };
                        cartItems.push(newItem);
                        addCartItem(newItem);
                    }

                    if (!cartPanel.classList.contains('active')) {
                        toggleCart();
                    }
                    updateCartSummary();
                });
            });

            function addCartItem(item) {
                const cartItem = document.createElement('div');
                cartItem.classList.add('cart-item');
                cartItem.innerHTML = `
                    <img src="${item.image}" alt="${item.name}">
                    <div class="cart-item-details">
                        <div class="cart-item-name">${item.name}</div>
                        <div class="cart-item-price">$${item.price.toFixed(2)}</div>
                        <div class="cart-item-quantity">
                            <button class="quantity-btn decrease-btn">-</button>
                            <input type="number" class="quantity-input" value="${item.quantity}" min="1">
                            <button class="quantity-btn increase-btn">+</button>
                        </div>
                    </div>
                    <div class="cart-item-total">$${(item.price * item.quantity).toFixed(2)}</div>
                    <div class="delete-btn"><i class="fa fa-trash"></i></div>
                `;
                cartItemsContainer.appendChild(cartItem);

                attachItemListeners(cartItem, item);
            }

            function updateCartItem(item) {
                const cartItem = Array.from(cartItemsContainer.querySelectorAll('.cart-item')).find(
                    el => el.querySelector('.cart-item-name').textContent === item.name
                );
                const input = cartItem.querySelector('.quantity-input');
                input.value = item.quantity;
                cartItem.querySelector('.cart-item-total').textContent = `$${(item.price * item.quantity).toFixed(2)}`;
                updateCartSummary();
            }

            function attachItemListeners(cartItem, item) {
                const decreaseBtn = cartItem.querySelector('.decrease-btn');
                const increaseBtn = cartItem.querySelector('.increase-btn');
                const quantityInput = cartItem.querySelector('.quantity-input');
                const deleteBtn = cartItem.querySelector('.delete-btn');

                decreaseBtn.addEventListener('click', () => {
                    if (item.quantity > 1) {
                        item.quantity--;
                        updateCartItem(item);
                    }
                });

                increaseBtn.addEventListener('click', () => {
                    item.quantity++;
                    updateCartItem(item);
                });

                quantityInput.addEventListener('change', () => {
                    let value = parseInt(quantityInput.value);
                    if (value < 1 || isNaN(value)) value = 1;
                    item.quantity = value;
                    updateCartItem(item);
                });

                deleteBtn.addEventListener('click', () => {
                    cartItem.remove();
                    cartItems = cartItems.filter(i => i.name !== item.name);
                    updateCartSummary();
                });
            }

            function updateCartSummary() {
                const totalItems = cartItems.reduce((sum, item) => sum + item.quantity, 0);
                const subtotal = cartItems.reduce((sum, item) => sum + item.price * item.quantity, 0);
                cartItemCount.textContent = `${totalItems} items`;
                subtotalAmount.textContent = `$${subtotal.toFixed(2)}`;
            }

            // Image Zoom Functionality
            zoomButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const imageUrl = this.getAttribute('data-image');
                    zoomedImage.src = imageUrl;
                    imageZoomModal.classList.add('active');
                    document.body.style.overflow = 'hidden'; // Prevent scrolling
                });
            });

            backBtn.addEventListener('click', function() {
                imageZoomModal.classList.remove('active');
                document.body.style.overflow = 'auto'; // Restore scrolling
            });

            // Close modal when clicking outside the image
            imageZoomModal.addEventListener('click', function(e) {
                if (e.target === imageZoomModal) {
                    imageZoomModal.classList.remove('active');
                    document.body.style.overflow = 'auto';
                }
            });
        });
    </script>
</body>

</html>