<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ashion | Shop</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- CSS Styles -->
    <link rel="stylesheet" href="Views/E-commerce-user/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="Views/E-commerce-user/assets/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="Views/E-commerce-user/assets/css/style.css">
    <!-- Font Awesome for rating stars -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        /* [Your existing CSS styles with animations added] */
        .product__item {
            transition: all 0.3s ease;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .product__item__pic {
            position: relative;
            height: 300px;
            background-size: cover;
            background-position: center;
        }

        .product__item__text {
            padding: 15px;
            text-align: center;
            background: #fff;
        }

        .product__price {
            color: #e91e63;
            font-weight: 600;
            font-size: 18px;
        }

        .label {
            position: absolute;
            top: 10px;
            left: 10px;
            padding: 5px 10px;
            border-radius: 3px;
            font-size: 12px;
            color: white;
        }

        .label.new {
            background: #2196f3;
        }

        .label.sale {
            background: #e91e63;
        }

        .label.stockout {
            background: #666;
        }

        .categories__accordion .card {
            border: none;
            margin-bottom: 10px;
        }

        @media (max-width: 768px) {
            .product__item__pic {
                height: 200px;
            }
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

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

        /* Discounted Product Card Styles with Animations */
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
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }

            100% {
                transform: scale(1);
            }
        }

        .product-hover-shared {
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

        .discount-product-card:hover .discount-product-hover,
        .general-product-item:hover .general-product-hover {
            opacity: 1;
            visibility: visible;
        }

        .product-hover-shared li {
            list-style: none;
            margin: 0;
            transition: all 0.3s ease;
        }

        .product-hover-shared li a {
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

        .product-hover-shared li a:hover {
            background: #ff5252;
            color: #ffffff;
            transform: scale(1.15);
        }

        .product-info {
            padding: 15px;
            text-align: center;
        }

        .product-info h5 {
            font-weight: 600;
            color: #000000 !important;
            /* Black for product names */
            margin-bottom: 5px;
            transition: color 0.3s ease;
        }

        .discount-product-card:hover .product-info h5 {
            color: #ff5252;
        }

        /* General Product Item Styles with Animations */
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
            color: #000000 !important;
            /* Black for product names */
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

        /* Hover Button Icons */
        .product-hover-shared li a span {
            font-size: 16px;
            color: #000000 !important;
            /* Black for icons */
            transition: color 0.3s ease;
        }

        .product-hover-shared li a:hover span {
            color: #ffffff;
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

        @media (min-width: 768px) {
            .col-lg-2.custom-width {
                flex: 0 0 20%;
                max-width: 20%;
            }

            .col-lg-10.custom-width {
                flex: 0 0 80%;
                max-width: 80%;
            }

            .product-col {
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }
        }

        @media (max-width: 767px) {
            .product-col {
                flex: 0。0 50%;
                max-width: 50%;
            }

            .col-sm-12 {
                flex: 0 0 100%;
                max-width: 100%;
            }
        }

        .category-filter {
            text-decoration: none;
            color: #333;
            transition: color 0.3s ease;
        }

        .category-filter:hover,
        .category-filter.active {
            color: #e7ab3c;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <section class="shop spad py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-12 custom-width mb-4">
                    <div class="shop__sidebar">
                        <div class="sidebar__categories">
                            <div class="section-title mb-4">
                                <h4>Categories</h4>
                            </div>
                            <div class="categories__accordion">
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-heading">
                                            <a data-toggle="collapse" data-target="#collapseOne">Skin Care Serum</a>
                                        </div>
                                        <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <ul class="list-unstyled">
                                                    <?php
                                                    if (isset($categories) && is_array($categories) && !empty($categories)) {
                                                        foreach ($categories as $category) {
                                                            echo '<li><a href="#" class="category-filter" data-category-id="' . htmlspecialchars($category["category_id"]) . '">' . htmlspecialchars($category["category_name"]) . '</a></li>';
                                                        }
                                                    } else {
                                                        echo '<li>No categories available.</li>';
                                                    }
                                                    ?>
                                                    <li><a href="#" class="category-filter" data-category-id="all">All Products</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-10 col-md-10 col-sm-12 custom-width">
                    <div class="row" id="product-container">
                        <?php
                        // Sample products - replace with your actual data
                        $discounts = []; // Add your discount data here if needed

                        if (isset($products) && is_array($products) && !empty($products)) {
                            foreach ($products as $index => $product) {
                                $hasDiscount = false;
                                if (isset($discounts) && is_array($discounts)) {
                                    foreach ($discounts as $discount) {
                                        if ($product["product_id"] == $discount["product_id"] && $discount["end_date"] >= date("Y-m-d")) {
                                            $original_price = floatval($discount["price"]);
                                            $discount_percentage = floatval($discount["discount_percentage"]);
                                            $discounted_price = $original_price * (1 - $discount_percentage / 100);
                                            $product_name = htmlspecialchars($discount["product_name"]);
                                            $image_url = !empty($discount["image"]) ? htmlspecialchars($discount["image"]) : 'https://via.placeholder.com/150';
                                            $discount_badge = "-" . number_format($discount_percentage, 0) . "%";
                                            $original_price_formatted = "$" . number_format($original_price, 2);
                                            $discounted_price_formatted = "$" . number_format($discounted_price, 2);
                        ?>
                                            <div class="col product-col mb-4" data-category-id="<?php echo htmlspecialchars($product["category_id"]); ?>">
                                                <div class="discount-product-card">
                                                    <div class="discount-badge"><?php echo $discount_badge; ?></div>
                                                    <div class="product-image" style="background-image: url('<?php echo $image_url; ?>')">
                                                        <ul class="discount-product-hover product-hover-shared">
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
                                    <?php
                                            $hasDiscount = true;
                                            break;
                                        }
                                    }
                                }
                                if (!$hasDiscount) {
                                    $price = number_format(floatval($product['price']), 2);
                                    $image = !empty($product['image']) ? htmlspecialchars($product['image']) : 'https://via.placeholder.com/150';
                                    $productLink = "product-page.php?id=" . htmlspecialchars($product['product_id']);
                                    ?>
                                    <div class="col product-col mb-4" data-category-id="<?php echo htmlspecialchars($product["category_id"]); ?>">
                                        <div class="general-product-item">
                                            <div class="general-product-pic">
                                                <img src="<?php echo $image; ?>" alt="<?php echo htmlspecialchars($product['product_name']); ?>">
                                                <ul class="general-product-hover product-hover-shared">
                                                    <li><a href="#" class="image-zoom" data-image="<?php echo $image; ?>"><span class="arrow_expand"></span></a></li>
                                                    <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                                    <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="general-product-text">
                                                <h6><a href="<?php echo $productLink; ?>"><?php echo htmlspecialchars($product['product_name']); ?></a></h6>
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <span>Category: <?php echo htmlspecialchars($product["categoryId"]); ?></span>
                                                <div class="general-product-price">$<?php echo $price; ?></div>
                                                <button class="add-to-cart" data-product-name="<?php echo htmlspecialchars($product['product_name']); ?>" data-product-price="<?php echo $price; ?>" data-product-image="<?php echo $image; ?>">Add to Cart</button>
                                            </div>
                                        </div>
                                    </div>
                        <?php
                                }
                            }
                        } else {
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

    <!-- JavaScript Files -->
    <script src="Views/E-commerce-user/assets/js/jquery-3.3.1.min.js"></script>
    <script src="Views/E-commerce-user/assets/js/bootstrap.min.js"></script>
    <script src="Views/E-commerce-user/assets/js/main.js"></script>
    <script>
        $(document).ready(function() {
            // Handle category filter clicks
            $('.category-filter').on('click', function(e) {
                e.preventDefault();

                const selectedCategoryId = $(this).data('categoryId');

                // Update active class
                $('.category-filter').removeClass('active');
                $(this).addClass('active');

                // Filter products
                if (selectedCategoryId === 'all') {
                    $('#product-container .product-col').stop().hide().fadeIn(300);
                } else {
                    $('#product-container .product-col').stop().hide();
                    $(`#product-container .product-col[data-category-id="${selectedCategoryId}"]`).fadeIn(300);
                }

                // Smooth scroll to product container
                $('html, body').animate({
                    scrollTop: $("#product-container").offset().top - 100
                }, 500);
            });

            // Set "All Products" as default
            $('.category-filter[data-category-id="all"]').trigger('click');
        });
    </script>
</body>

</html>