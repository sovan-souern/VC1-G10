<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ashion | Shop</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- CSS Styles -->
    <link rel="stylesheet" href="Views/E-commerce-user/assets/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="Views/E-commerce-user/assets/css/style.css">
    <!-- Font Awesome for rating stars -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        /* Header Styles */
        header h1 {
            background: linear-gradient(135deg, #ff9a9e, #fad0c4);
            color: white;
            padding: 20px;
            text-align: center;
            margin: 0;
            font-size: 2.5rem;
            width: 100%;
        }

        header p {
            background: linear-gradient(135deg, #ff9a9e, #fad0c4);
            color: white;
            font-size: 1.2rem;
            text-align: center;
        }

        .container {
            padding: 20px;
        }

        .cards {
            display: flex;
            overflow-x: auto;
            gap: 20px;
            padding-bottom: 20px;
        }

        .card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            flex: 0 0 auto;
            overflow: hidden;
            transition: transform 0.3s ease;
            position: relative;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .card img:active {
            transform: scale(0.98);
            box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .card img {
            pointer-events: auto;
            user-select: none;
            -webkit-user-drag: none;
        }

        .card-content {
            padding: 15px;
        }

        .card-content h3 {
            margin: 0 0 10px;
            font-size: 1.5rem;
        }

        .card-content p {
            font-size: 1rem;
            color: #666;
        }

        .card-content a {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 15px;
            background: #ff6f61;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        .card-content a:hover {
            background: #ff3b2f;
        }

        .info {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background: rgba(224, 116, 116, 0.7);
            color: white;
            padding: 10px;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .card:hover .info,
        .card:active .info {
            opacity: 1;
        }

        .content-section {
            display: flex;
            align-items: center;
            gap: 40px;
            margin-top: 40px;
        }

        .text-content {
            flex: 1;
        }

        .text-content h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #333;
        }

        .text-content p {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #666;
        }

        .text-content .cta-button {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 25px;
            background: #ff6f61;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        .text-content .cta-button:hover {
            background: #ff3b2f;
        }

        .full-screen-image {
            width: 80%;
            height: 80vh;
            border-radius: 10px;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 60px auto 0;
            object-fit: cover;
        }

        .info-section {
            background-color: #fff;
            padding: 40px 0;
            text-align: center;
        }

        .info-section h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #333;
        }

        .info-section p {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #666;
            max-width: 800px;
            margin: 0 auto 20px;
        }

        .info-section .cta-button {
            display: inline-block;
            padding: 12px 25px;
            background: #ff6f61;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        .info-section .cta-button:hover {
            background: #ff3b2f;
        }

        .product-name:hover {
            color: #e7ab3c;
        }

        .price:hover {
            color: #e7ab3c;
        }

        .add-to-cart:hover {
            color: white;
        }

        .original-price:hover {
            color: #e7ab3c;
        }

        .product-card:hover {
            color: #e7ab3c;
        }

        .product-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
        }

        .product-card1 img {
            width: 100%;
            border-radius: 10px;
        }

        .product-card1 p {
            display: none;
            margin-top: 10px;
        }

        .learn-more {
            background-color: #ff6666;
            color: white;
            border: none;
            padding: 10px;
            margin-top: 10px;
            cursor: pointer;
            width: 100%;
            border-radius: 5px;
        }

        .discount-cards-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            padding: 20px;
        }

        .discount-products {
            padding: 40px 20px;
            background: #f9f3f3;
            margin: 40px 0;
            width: 100%;
        }

        .discount-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .discount-header h2 {
            font-size: 2.2rem;
            color: #ff6f61;
            margin-bottom: 10px;
        }

        .discount-header p {
            color: #666;
            font-size: 1.1rem;
        }

        .original-price {
            text-decoration: line-through;
            color: #999;
            font-size: 1rem;
            margin-right: 10px;
        }

        .products-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
        }

        @media (max-width: 1199px) {
            .products-container {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 767px) {
            .products-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 575px) {
            body {
                padding: 10px;
                font-size: 14px;
            }

            header h1 {
                font-size: 1.8rem;
                padding: 15px;
            }

            header p {
                font-size: 1.2rem;
            }

            .products-container {
                grid-template-columns: repeat(2, 1fr);
                gap: 15px;
            }

            .product-card {
                object-fit: cover;
                width: 100%;
                margin: 0;
                height: auto;
            }

            .product-image {
                object-fit: cover;
                height: 150px !important;
                border-radius: 8px 8px 0 0;
            }

            .product-info {
                padding: 10px;
            }

            .product-name {
                font-size: 1.2rem;
                margin-bottom: 5px;
                font-family: serif;
            }

            .price {
                font-size: 1.5rem;
            }

            .add-to-cart {
                padding: 5px;
                font-size: 0.9rem;
            }


            .discount-header h2 {
                font-size: 1.5rem;
            }

            .content-section {
                flex-direction: column;
                gap: 20px;
            }

            .text-content {
                order: 2;
            }

            .image-content-right,
            .image-content-left,
            .image-content-lefts {
                order: 1;
                width: 100%;
            }

            .image-content-right img,
            .image-content-left img,
            .image-content-lefts img {
                width: 100%;
                height: auto;
                max-height: 250px;
                object-fit: cover;
                border-radius: 10px !important;
            }

            .product-container {
                flex-direction: column;
                align-items: center;
            }

            .product-card1 {
                width: 100%;
                max-width: 300px;
                margin-bottom: 20px;
            }

            .product-card1 img {
                height: 180px;
                object-fit: cover;
            }

            .cards {
                gap: 10px;
                padding-bottom: 15px;
            }

            .card {
                width: 200px;
                flex: 0 0 auto;
            }

            .card img {
                height: 150px;
                animation: none !important;
            }

            .info {
                font-size: 0.85rem;
                padding: 8px;
            }

            .info-section {
                padding: 20px 10px;
            }

            .info-section h2 {
                font-size: 1.5rem;
            }

            .cta-button,
            .info-section .cta-button,
            .learn-more {
                padding: 10px 15px;
                font-size: 0.9rem;
            }

            img {
                max-width: 100%;
                height: auto;
            }

            .cart-panel {
                width: 90%;
                max-width: none;
            }

            .discount-badge {
                font-size: 0.8rem;
                padding: 3px 8px;
            }

            .container {
                padding: 10px;
            }

            .text-content {
                width: 100%;
            }

            .text-content h2 {
                font-size: 1.5rem;
            }

            .text-content p {
                font-size: 0.95rem;
            }
        }

        .product-card {
            position: relative;
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .product-image {
            height: 300px;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
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
        }

        .product-info {
            padding: 15px;
            text-align: center;
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
        }

        .product-name {
            font-weight: 600;
            color: #333;
            margin-bottom: 5px;
        }

        .rating {
            color: #ffc107;
            margin-bottom: 5px;
        }

        .price {
            font-weight: bold;
            color: #0d6efd;
            font-size: 1.1rem;
        }

        .original-price {
            text-decoration: line-through;
            color: #6c757d;
            font-size: 0.9rem;
            margin-right: 8px;
        }

        .product-card1 {
            width: 400px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            position: relative;
        }

        .add-to-cart {
            background-color: pink;
            color: white;
            border: none;
            padding: 8px 15px;
            margin-top: 10px;
            cursor: pointer;
            width: 100%;
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

        .general-product-hover li a span {
            font-size: 16px;
            color: #111111;
            transition: color 0.3s ease;
        }

        .general-product-hover li a:hover span {
            color: #ffffff;
        }

        .product-card:hover .general-product-hover {
            opacity: 1;
            visibility: visible;
            pointer-events: auto;
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            overflow: auto;
        }

        .modal-content {
            background-color: #fff;
            margin: 5% auto;
            padding: 20px;
            width: 90%;
            max-width: 900px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            display: flex;
            align-items: center;
            position: relative;
        }

        .close-btn {
            position: absolute;
            top: 15px;
            right: 20px;
            color: #ff5252;
            font-size: 30px;
            font-weight: bold;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .close-btn:hover {
            color: #e63946;
        }

        .modal-inner {
            display: flex;
            justify-content: space-between;
            width: 100%;
            align-items: stretch;
        }

        .modal-product-image {
            flex: 1;
            max-width: 40%;
            margin-right: 20px;
        }

        .modal-product-image img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            object-fit: cover;
            max-height: 400px;
        }

        .modal-product-info {
            flex: 2;
            max-width: 60%;
            padding-left: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .modal-product-info h2 {
            margin-top: 0;
            font-size: 1.8rem;
            color: #333;
            margin-bottom: 10px;
        }

        .modal-product-info p {
            font-size: 1rem;
            color: #666;
            margin: 8px 0;
            line-height: 1.5;
        }

        .modal-product-info .price {
            font-size: 1.2rem;
            color: #ff5252;
            font-weight: bold;
            margin: 10px 0;
        }

        #add-to-cart-modal {
            background-color: #ff6699;
            color: white;
            padding: 10px 20px;
            font-size: 1rem;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 15px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        #add-to-cart-modal:hover {
            background-color: #e63946;
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            .modal-content {
                margin: 10% auto;
                padding: 15px;
                width: 95%;
            }

            .modal-inner {
                flex-direction: column;
            }

            .modal-product-image {
                max-width: 100%;
                margin-right: 0;
                margin-bottom: 15px;
            }

            .modal-product-info {
                max-width: 100%;
                padding-left: 0;
            }

            .modal-product-info h2 {
                font-size: 1.5rem;
            }

            .modal-product-info p {
                font-size: 0.9rem;
            }

            #add-to-cart-modal {
                font-size: 0.9rem;
                padding: 8px 15px;
            }
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

        /* Additional Styles */
        .discount-product-card:hover .price {
            color: #e7ab3c;
        }

        .card img {
            animation: slideLeftRight 3s infinite alternate ease-in-out;
            background: none;
        }

        @keyframes slideLeftRight {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(10px);
            }
        }

        @media (max-width: 575px) {
            .card img {
                animation: none !important;
            }
        }
    </style>
</head>

<body>
    <section class="discount-products">
        <div class="discount-header">
            <h2>Special Discounts</h2>
        </div>

        <div class="container">
            <div class="products-container">
                <?php foreach ($products as $index => $product): ?>
                    <?php 
                    $hasDiscount = false;
                    foreach ($discounts as $key => $discount):
                        if ($product["product_id"] == $discount["product_id"]):
                            if ($discount["end_date"] >= date("Y-m-d") && $discount["start_date"] <= date("Y-m-d")):
                                $original_price = floatval($product["price"]);
                                $discount_percentage = floatval($discount["discount_percentage"]);
                                $discounted_price = $original_price * (1 - $discount_percentage / 100);
                                $product_name = htmlspecialchars($product["product_name"]);
                                $image_url = !empty($product["image"]) ? htmlspecialchars($product["image"]) : 'https://via.placeholder.com/150';
                                $discount_badge = "-" . number_format($discount_percentage, 0) . "%";
                                $original_price_formatted = "$" . number_format($original_price, 2);
                                $discounted_price_formatted = "$" . number_format($discounted_price, 2);
                                $product_content = isset($product["product_content"]) ? htmlspecialchars($product["product_content"]) : "No description available";
                                $product_quantity = isset($product["quantity"]) ? htmlspecialchars($product["quantity"]) : "No quantity available";
                    ?>
                                <div class="product-card">
                                    <div class="discount-badge"><?php echo $discount_badge; ?></div>
                                    <div class="product-image" style="background-image: url('<?php echo $image_url; ?>')">
                                        <ul class="general-product-hover product-hover-shared">
                                            <li>
                                                <a href="#" class="view-details-btn"
                                                   data-name="<?php echo $product_name; ?>"
                                                   data-price="<?php echo $discounted_price_formatted; ?>"
                                                   data-discount="<?php echo $discount_percentage; ?>"
                                                   data-image="<?php echo $image_url; ?>"
                                                   data-description="<?php echo $product_content; ?>"
                                                   data-quantity="<?php echo $product_quantity; ?>">
                                                    <i class="fas fa-eye"></i> <!-- Changed icon to "view" -->
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="add-to-favorites"
                                                   data-name="<?php echo $product_name; ?>"
                                                   data-price="<?php echo $discounted_price_formatted; ?>"
                                                   data-discount="<?php echo $discount_percentage; ?>"
                                                   data-image="<?php echo $image_url; ?>"
                                                   data-description="<?php echo $product_content; ?>"
                                                   data-quantity="<?php echo $product_quantity; ?>">
                                                    <span class="icon_heart_alt"></span>
                                                </a>
                                            </li>
                                            <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><?php echo $product_name; ?></h5>
                                        <div class="price">
                                            <span class="original-price"><?php echo $original_price_formatted; ?></span>
                                            <?php echo $discounted_price_formatted; ?>
                                        </div>
                                        <button class="add-to-cart"
                                data-product-name="<?php echo $product_name; ?>"
                                data-product-price="<?php echo $discounted_price; ?>"
                                data-product-image="<?php echo $image_url; ?>">
                            Add to Cart
                        </button>
                                    </div>
                                </div>
                                <?php 
                                $hasDiscount = true;
                                break;
                                ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
     <!-- About Section -->
     <section class="about-section py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <img src="https://cdn.shopify.com/s/files/1/0251/2184/9419/files/shutterstock_1051577057_1024x1024.jpg?v=1659125830" alt="About Our Products" class="img-fluid rounded-4 shadow">
                    </div>
                    <div class="col-lg-6 ps-lg-5">
                        <h2 class="section-title mb-4">Why Choose Glow Skincare?</h2>
                        <p class="lead mb-4">At Glow Skincare, we believe that everyone deserves to feel confident in their skin. Our products are crafted with the finest natural ingredients, smooth skin .</p>
                        <div class="features mb-4">
                            <div class="feature d-flex align-items-center mb-3">
                                <div class="feature-icon me-3">
                                    <i class="fas fa-leaf"></i>
                                </div>
                                <div class="feature-text">
                                    <h5 class="mb-1">100% Natural Ingredients</h5>
                                    <p class="mb-0 text-muted">We use only the finest natural ingredients in our products.</p>
                                </div>
                            </div>
                            <div class="feature d-flex align-items-center mb-3">
                                <div class="feature-icon me-3">
                                    <i class="fas fa-ban"></i>
                                </div>
                                <div class="feature-text">
                                    <h5 class="mb-1">Transparent skin from the inside</h5>
                                    <p class="mb-0 text-muted">Paraben, sulfate, and chemical-free.</p>
                                </div>
                            </div>
                            <div class="feature d-flex align-items-center">
                                <div class="feature-icon me-3">
                                    <i class="fas fa-heart"></i>
                                </div>  
                            </div>
                        </div>
                        <a href="#" class="btn btn-primary btn-lg">Discover Our Story</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Cards of Products -->
        <div class="cards">
            <div class="card">
                <img src="https://assets.unileversolutions.com/v1/104900175.jpg" alt="Vitamin C Serum">
            </div>
            <div class="card">
                <img src="https://down-my.img.susercontent.com/file/my-11134207-7r98o-ll243lh6bn3z4d" alt="Sunscreen SPF 50">
            </div>
            <div class="card">
                <img src="https://images-cdn.ubuy.co.in/645ebfeaec6ec921c03cc12e-dove-hair-and-skin-care-regimen-pack.jpg" alt="Hydrating Moisturizer">
            </div>
            <div class="card">
                <img src="https://assets.unileversolutions.com/v1/104900175.jpg" alt="Vitamin C Serum">
            </div>
            <div class="card">
                <img src="https://down-my.img.susercontent.com/file/my-11134207-7r98o-ll243lh6bn3z4d" alt="Sunscreen SPF 50">
            </div>
            <div class="card">
                <img src="https://www.beautypackaging.com/wp-content/uploads/sites/8/2024/11/017_main-13.jpg" alt="Sunscreen SPF 50">
            </div>
            <div class="card">
                <img src="https://assets.ajio.com/medias/sys_master/root/20230130/8F8S/63d803e2aeb269c6510329d0/-473Wx593H-4915693380-multi-MODEL.jpg" alt="Sunscreen SPF 50">
            </div>
            <div class="card">
                <img src="https://down-vn.img.susercontent.com/file/e51b7974a1af0f2ea03f5a96804217f5" alt="Sunscreen SPF 50">
            </div>
            <div class="card">
                <img src="https://s9.kh1.co/__image/w=600,h=600,fit=cover/1b/1be5d7c51a56e185757cc60b646d9e97d51a3a71.jpg" alt="Sunscreen SPF 50">
            </div>
            <div class="card">
                <img src="https://m.media-amazon.com/images/I/51Z2sQyCB-L.jpg" alt="Sunscreen SPF 50">
            </div>
            <div class="card">
                <img src="https://down-my.img.susercontent.com/file/my-11134207-7r98p-lyt0fqimk128fd" alt="Sunscreen SPF 50">
            </div>
            <div class="card">
                <img src="https://bellavitaorganic.com/cdn/shop/files/download_0315aafb-8c5d-4b3d-a00e-6cc8cc1b00b2.jpg?v=1732609831&width=1000" alt="Sunscreen SPF 50">
            </div>
            <div class="card">
                <img src="https://images.meesho.com/images/products/456587797/fwf1e_512.webp" alt="Sunscreen SPF 50">
            </div>
        </div>

        <!-- Bestsellers Section -->
        <section class="featured-products py-5">
            <div class="container">
                <h2 class="section-title text-center mb-5">Bestsellers</h2>
                <div class="products-container">
                    <div class="product-card">
                        <div class="discount-badge">New</div>
                        <div class="product-image" style="background-image: url('https://assets.vogue.com/photos/62f6a40746ad3eb633efe1aa/3:4/w_748%2Cc_limit/slide_12.jpg')">
                            <ul class="general-product-hover product-hover-shared">
                                <li>
                                    <a href="#" class="view-details-btn"
                                       data-name="Hydrating Moisturizer"
                                       data-price="$34.99"
                                       data-discount="0"
                                       data-image="https://assets.vogue.com/photos/62f6a40746ad3eb633efe1aa/3:4/w_748%2Cc_limit/slide_12.jpg"
                                       data-description="A lightweight, hydrating moisturizer for all skin types."
                                       data-quantity="50">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="add-to-favorites"
                                       data-name="Hydrating Moisturizer"
                                       data-price="$34.99"
                                       data-discount="0"
                                       data-image="https://assets.vogue.com/photos/62f6a40746ad3eb633efe1aa/3:4/w_748%2Cc_limit/slide_12.jpg"
                                       data-description="A lightweight, hydrating moisturizer for all skin types."
                                       data-quantity="50">
                                        <span class="icon_heart_alt"></span>
                                    </a>
                                </li>
                                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                            </ul>
                        </div>
                        <div class="product-info">
                            <h5 class="product-name">Hydrating Moisturizer</h5>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="price">$34.99</div>
                            <button class="add-to-cart"
                                    data-product-name="Hydrating Moisturizer"
                                    data-product-price="34.99"
                                    data-product-discount="0"
                                    data-product-image="https://assets.vogue.com/photos/62f6a40746ad3eb633efe1aa/3:4/w_748%2Cc_limit/slide_12.jpg">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="discount-badge">Popular</div>
                        <div class="product-image" style="background-image: url('https://assets.unileversolutions.com/v1/104900175.jpg')">
                            <ul class="general-product-hover product-hover-shared">
                                <li>
                                    <a href="#" class="view-details-btn"
                                       data-name="Vitamin C Serum"
                                       data-price="$42.99"
                                       data-discount="0"
                                       data-image="https://assets.unileversolutions.com/v1/104900175.jpg"
                                       data-description="Brightening serum with 20% Vitamin C."
                                       data-quantity="30">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="add-to-favorites"
                                       data-name="Vitamin C Serum"
                                       data-price="$42.99"
                                       data-discount="0"
                                       data-image="https://assets.unileversolutions.com/v1/104900175.jpg"
                                       data-description="Brightening serum with 20% Vitamin C."
                                       data-quantity="30">
                                        <span class="icon_heart_alt"></span>
                                    </a>
                                </li>
                                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                            </ul>
                        </div>
                        <div class="product-info">
                            <h5 class="product-name">Vitamin C Serum</h5>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="price">$42.99</div>
                            <button class="add-to-cart"
                                    data-product-name="Vitamin C Serum"
                                    data-product-price="42.99"
                                    data-product-discount="0"
                                    data-product-image="https://assets.unileversolutions.com/v1/104900175.jpg">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="discount-badge">Organic</div>
                        <div class="product-image" style="background-image: url('https://down-my.img.susercontent.com/file/my-11134207-7r98o-ll243lh6bn3z4d')">
                            <ul class="general-product-hover product-hover-shared">
                                <li>
                                    <a href="#" class="view-details-btn"
                                       data-name="Sunscreen SPF 50"
                                       data-price="$28.99"
                                       data-discount="0"
                                       data-image="https://down-my.img.susercontent.com/file/my-11134207-7r98o-ll243lh6bn3z4d"
                                       data-description="Broad-spectrum SPF 50 sunscreen."
                                       data-quantity="40">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="add-to-favorites"
                                       data-name="Sunscreen SPF 50"
                                       data-price="$28.99"
                                       data-discount="0"
                                       data-image="https://down-my.img.susercontent.com/file/my-11134207-7r98o-ll243lh6bn3z4d"
                                       data-description="Broad-spectrum SPF 50 sunscreen."
                                       data-quantity="40">
                                        <span class="icon_heart_alt"></span>
                                    </a>
                                </li>
                                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                            </ul>
                        </div>
                        <div class="product-info">
                            <h5 class="product-name">Sunscreen SPF 50</h5>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="price">$28.99</div>
                            <button class="add-to-cart"
                                    data-product-name="Sunscreen SPF 50"
                                    data-product-price="28.99"
                                    data-product-discount="0"
                                    data-product-image="https://down-my.img.susercontent.com/file/my-11134207-7r98o-ll243lh6bn3z4d">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="discount-badge">Limited</div>
                        <div class="product-image" style="background-image: url('https://images-cdn.ubuy.co.in/645ebfeaec6ec921c03cc12e-dove-hair-and-skin-care-regimen-pack.jpg')">
                            <ul class="general-product-hover product-hover-shared">
                                <li>
                                    <a href="#" class="view-details-btn"
                                       data-name="Complete Skincare Set"
                                       data-price="$89.99"
                                       data-discount="0"
                                       data-image="https://images-cdn.ubuy.co.in/645ebfeaec6ec921c03cc12e-dove-hair-and-skin-care-regimen-pack.jpg"
                                       data-description="Complete skincare set for daily routine."
                                       data-quantity="20">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="add-to-favorites"
                                       data-name="Complete Skincare Set"
                                       data-price="$89.99"
                                       data-discount="0"
                                       data-image="https://images-cdn.ubuy.co.in/645ebfeaec6ec921c03cc12e-dove-hair-and-skin-care-regimen-pack.jpg"
                                       data-description="Complete skincare set for daily routine."
                                       data-quantity="20">
                                        <span class="icon_heart_alt"></span>
                                    </a>
                                </li>
                                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                            </ul>
                        </div>
                        <div class="product-info">
                            <h5 class="product-name">Complete Skincare</h5>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="price">$89.99</div>
                            <button class="add-to-cart"
                                    data-product-name="Complete Skincare Set"
                                    data-product-price="89.99"
                                    data-product-discount="0"
                                    data-product-image="https://images-cdn.ubuy.co.in/645ebfeaec6ec921c03cc12e-dove-hair-and-skin-care-regimen-pack.jpg">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Product Details Modal -->
        <div id="product-modal" class="modal">
            <div class="modal-content">
                <span class="close-btn">&times;</span>
                <div class="modal-inner">
                    <div class="modal-product-image">
                        <img id="modal-product-image" src="" alt="Product Image">
                    </div>
                    <div class="modal-product-info">
                        <h2 id="modal-product-name"></h2>
                        <p id="modal-product-description"></p>
                        <p><strong>Price:</strong> <span id="modal-product-price"></span></p>
                        <button id="add-to-cart-modal">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize tooltips
            const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });

            // Cart Functionality
            const cartSidebar = document.getElementById('cart-sidebar');
            const cartOverlay = document.getElementById('cart-overlay');
            const closeCart = document.getElementById('close-cart');
            const cartItems = document.getElementById('cart-items');
            const cartSubtotal = document.getElementById('cart-subtotal');
            const cartCount = document.getElementById('cart-count');
            const clearCartBtn = document.getElementById('clear-cart');
            const emptyCartMessage = document.getElementById('empty-cart-message');
            const addToCartButtons = document.querySelectorAll('.add-to-cart');

            let cart = JSON.parse(localStorage.getItem('cart')) || [];

            function updateCartUI() {
                while (cartItems.firstChild && cartItems.firstChild !== emptyCartMessage) {
                    cartItems.removeChild(cartItems.firstChild);
                }

                if (cart.length === 0) {
                    emptyCartMessage.style.display = 'block';
                } else {
                    emptyCartMessage.style.display = 'none';
                    cart.forEach((item, index) => {
                        const cartItem = document.createElement('div');
                        cartItem.classList.add('cart-item');
                        cartItem.innerHTML = `
                            <img src="${item.image}" alt="${item.name}" class="cart-item-image">
                            <div class="cart-item-details">
                                <h6 class="cart-item-title">${item.name}</h6>
                                <div class="cart-item-price">$${item.price}</div>
                                <div class="cart-item-discount">Discount: ${item.discount}%</div>
                                <div class="cart-item-quantity">
                                    <button class="quantity-btn decrease-btn" data-index="${index}">-</button>
                                    <input type="number" class="quantity-input" value="${item.quantity}" min="1" data-index="${index}">
                                    <button class="quantity-btn increase-btn" data-index="${index}">+</button>
                                </div>
                            </div>
                            <div class="cart-item-remove" data-index="${index}">
                                <i class="fas fa-trash"></i>
                            </div>
                        `;
                        cartItems.insertBefore(cartItem, emptyCartMessage);
                        cartItem.querySelector('.decrease-btn').addEventListener('click', decreaseQuantity);
                        cartItem.querySelector('.increase-btn').addEventListener('click', increaseQuantity);
                        cartItem.querySelector('.quantity-input').addEventListener('change', updateQuantity);
                        cartItem.querySelector('.cart-item-remove').addEventListener('click', removeItem);
                    });
                }

                const totalItems = cart.reduce((total, item) => total + item.quantity, 0);
                const subtotal = cart.reduce((total, item) => total + (item.price * item.quantity), 0);
                cartCount.textContent = totalItems || 0;
                cartSubtotal.textContent = `$${subtotal.toFixed(2)}`;
                localStorage.setItem('cart', JSON.stringify(cart));
            }

            function addToCart(e) {
                const button = e.target;
                const name = button.getAttribute('data-product-name');
                const price = parseFloat(button.getAttribute('data-product-price'));
                const image = button.getAttribute('data-product-image');
                const discount = parseFloat(button.getAttribute('data-product-discount')) || 0;

                const existingItemIndex = cart.findIndex(item => item.name === name);
                if (existingItemIndex > -1) {
                    cart[existingItemIndex].quantity++;
                } else {
                    cart.push({ name, price, image, discount, quantity: 1 });
                }

                const toast = document.createElement('div');
                toast.classList.add('toast', 'show', 'position-fixed', 'bottom-0', 'end-0', 'm-3');
                toast.setAttribute('role', 'alert');
                toast.setAttribute('aria-live', 'assertive');
                toast.setAttribute('aria-atomic', 'true');
                toast.innerHTML = `
                    <div class="toast-header">
                        <strong class="me-auto">Added to Cart</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        ${name} has been added to your cart.
                    </div>
                `;
                document.body.appendChild(toast);
                setTimeout(() => toast.remove(), 3000);

                updateCartUI();
            }

            function decreaseQuantity(e) {
                const index = e.target.getAttribute('data-index');
                if (cart[index].quantity > 1) {
                    cart[index].quantity--;
                } else {
                    cart.splice(index, 1);
                }
                updateCartUI();
            }

            function increaseQuantity(e) {
                const index = e.target.getAttribute('data-index');
                cart[index].quantity++;
                updateCartUI();
            }

            function updateQuantity(e) {
                const index = e.target.getAttribute('data-index');
                const quantity = parseInt(e.target.value);
                if (quantity > 0) {
                    cart[index].quantity = quantity;
                } else {
                    cart.splice(index, 1);
                }
                updateCartUI();
            }

            function removeItem(e) {
                const index = e.target.closest('.cart-item-remove').getAttribute('data-index');
                cart.splice(index, 1);
                updateCartUI();
            }

            function clearCart() {
                cart = [];
                updateCartUI();
            }

            addToCartButtons.forEach(button => {
                button.addEventListener('click', addToCart);
            });

            // Favorites Functionality
            const addToFavoritesButtons = document.querySelectorAll('.add-to-favorites');
            let favorites = JSON.parse(localStorage.getItem('favorites')) || [];

            function addToFavorites(e) {
                e.preventDefault();
                const button = e.target.closest('.add-to-favorites');
                const name = button.getAttribute('data-name');
                const price = button.getAttribute('data-price');
                const image = button.getAttribute('data-image');
                const discount = parseFloat(button.getAttribute('data-discount')) || 0;
                const description = button.getAttribute('data-description');
                const quantity = button.getAttribute('data-quantity');

                const existingItemIndex = favorites.findIndex(item => item.name === name);
                if (existingItemIndex === -1) {
                    favorites.push({ name, price, image, discount, description, quantity });
                    localStorage.setItem('favorites', JSON.stringify(favorites));

                    const toast = document.createElement('div');
                    toast.classList.add('toast', 'show', 'position-fixed', 'bottom-0', 'end-0', 'm-3');
                    toast.setAttribute('role', 'alert');
                    toast.setAttribute('aria-live', 'assertive');
                    toast.setAttribute('aria-atomic', 'true');
                    toast.innerHTML = `
                        <div class="toast-header">
                            <strong class="me-auto">Added to Favorites</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                            ${name} has been added to your favorites.
                        </div>
                    `;
                    document.body.appendChild(toast);
                    setTimeout(() => toast.remove(), 3000);
                }
            }

            addToFavoritesButtons.forEach(button => {
                button.addEventListener('click', addToFavorites);
            });

            // Modal Functionality
            const viewDetailsButtons = document.querySelectorAll('.view-details-btn');
            const modal = document.getElementById('product-modal');
            const modalName = document.getElementById('modal-product-name');
            const modalImage = document.getElementById('modal-product-image');
            const modalDescription = document.getElementById('modal-product-description');
            const modalPrice = document.getElementById('modal-product-price');
            const addToCartModal = document.getElementById('add-to-cart-modal');
            const closeModalButton = document.querySelector('.close-btn');

            viewDetailsButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    modalName.textContent = this.dataset.name;
                    modalImage.src = this.dataset.image;
                    modalDescription.textContent = this.dataset.description;
                    modalPrice.textContent = this.dataset.price;
                    modal.style.display = 'block';

                    // Add to cart functionality for modal
                    addToCartModal.onclick = () => {
                        alert(`${this.dataset.name} added to cart!`);
                        modal.style.display = 'none';
                    };
                });
            });

            // Close modal functionality
            closeModalButton.addEventListener('click', function() {
                modal.style.display = 'none';
            });

            window.addEventListener('click', function(event) {
                if (event.target === modal) {
                    modal.style.display = 'none';
                }
            });

            // Cards Carousel Animation
            const container = document.querySelector('.cards');
            container.style.overflowX = 'hidden';
            const originalScrollWidth = container.scrollWidth;
            const cards = Array.from(container.querySelectorAll('.card'));
            cards.forEach(card => {
                const clone = card.cloneNode(true);
                container.appendChild(clone);
            });
            container.scrollLeft = originalScrollWidth;
            const speed = 100;
            let lastTime = performance.now();

            function animate(currentTime) {
                const deltaTime = (currentTime - lastTime) / 1000;
                container.scrollLeft -= speed * deltaTime;
                if (container.scrollLeft <= 0) {
                    container.scrollLeft += originalScrollWidth;
                }
                lastTime = currentTime;
                requestAnimationFrame(animate);
            }
            requestAnimationFrame(animate);

            const images = document.querySelectorAll('.card img');
            images.forEach(img => {
                img.style.animation = 'none';
            });

            // Animate on Scroll
            const animateElements = document.querySelectorAll('.product-card, .feature');
            function checkIfInView() {
                animateElements.forEach(element => {
                    const elementTop = element.getBoundingClientRect().top;
                    const elementVisible = 150;
                    if (elementTop < window.innerHeight - elementVisible) {
                        element.classList.add('animate');
                    }
                });
            }
            window.addEventListener('scroll', checkIfInView);
            checkIfInView();
        });
    </script>
</body>
</html>