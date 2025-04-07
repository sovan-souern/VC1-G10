

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
    <link rel="stylesheet" href="Views/E-commerce-user/assets/css/style.css" type="text/css">
</head>
<style>
  .slideshow-container {
            display: none;
        }
        .dot-container{
            display: none;
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

/* Stock Status Badge Styles */
.stock-status-badge {
    position: absolute;
    top: 10px;
    left: 10px; /* Positioned on the left to avoid overlap with discount badge */
    color: white;
    padding: 5px 10px;
    border-radius: 4px;
    font-weight: bold;
    z-index: 1;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease;
    font-size: 0.85em; /* Slightly smaller font size for balance */
}

.stock-status-badge.low-stock {
    background-color: #f59e0b; /* Orange for low stock */
}

.stock-status-badge.out-of-stock {
    background-color: #ff5252; /* Red for out of stock */
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
    overflow: hidden;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.general-product-item:hover {
    transform: scale(1.03);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
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
.product-hover-shared {
    position: absolute;
    bottom: 5px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    flex-direction: row;
    gap: 15px;
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
}

.product-hover-shared li a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 30px;
    height: 30px;
    background: #ffffff;
    border-radius: 50%;
    text-align: center;
    transition: all 0.3s ease;
    text-decoration: none;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.product-hover-shared li a:hover {
    background: #ff5252;
    color: #ffffff;
    transform: scale(1.15);
}

.product-hover-shared li a .icon {
    color: #333;
    transition: color 0.3s ease;
    font-size: 12px;
}

.product-hover-shared li a:hover .icon {
    color: #fff;
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

/* Media Query for Smaller Screens */
@media (max-width: 736px) {
    /* Shop Section - 2 cards per row */
    .col-lg-3,
    .col-md-4,
    .col-sm-6 {
        flex: 0 0 50%;
        max-width: 50%;
    }

    /* Adjust product card styling for smaller screens */
    .discount-product-card,
    .general-product-item {
        margin-bottom: 15px;
    }

    .product-image,
    .general-product-pic {
        height: 200px;
    }

    .product-info,
    .general-product-text {
        padding: 10px;
    }

    .product-name,
    .general-product-text h6 {
        font-size: 14px;
    }

    .price,
    .general-product-price {
        font-size: 1rem;
    }

    .add-to-cart {
        padding: 6px 10px;
        font-size: 14px;
    }

    /* Adjust stock status badge for smaller screens */
    .stock-status-badge {
        padding: 4px 8px;
        font-size: 0.75em;
    }

    /* Trend Section - Stack items vertically */
    .trend .col-lg-4,
    .trend .col-md-4,
    .trend .col-sm-6 {
        flex: 0 0 100%;
        max-width: 100%;
        margin-bottom: 20px;
    }

    .trend__item__pic img {
        width: 150px;
        height: 100px;
    }

    .trend__item__text h6 {
        font-size: 13px;
    }

    .product__price {
        font-size: 14px;
    }
}
</style>

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
                                    <?php if ($discount["end_date"] >= date("Y-m-d") && $discount["start_date"] <= date("Y-m-d") ): ?>
                                        <?php
                                        $original_price = floatval($discount["price"]);
                                        $discount_percentage = floatval($discount["discount_percentage"]);
                                        $discounted_price = $original_price * (1 - $discount_percentage / 100);

                                        $product_name = htmlspecialchars($discount["product_name"]);
                                        $image_url = !empty($discount["image"]) ? htmlspecialchars($discount["image"]) : 'https://via.placeholder.com/150';
                                        $discount_badge = "-" . number_format($discount_percentage, 0) . "%";
                                        $original_price_formatted = "$" . number_format($original_price, 2);
                                        $discounted_price_formatted = "$" . number_format($discounted_price, 2);

                                        // Determine stock status
                                        $quantity = isset($product['quantity']) ? intval($product['quantity']) : 0;
                                        $stock_status = '';
                                        $stock_class = '';
                                        if ($quantity == 0) {
                                            $stock_status = 'Out of Stock';
                                            $stock_class = 'out-of-stock';
                                        } elseif ($quantity < 10) {
                                            $stock_status = 'Low Stock';
                                            $stock_class = 'low-stock';
                                        }
                                        ?>
                                        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                            <div class="discount-product-card">
                                                <?php if ($stock_status): ?>
                                                    <div class="stock-status-badge <?php echo $stock_class; ?>"><?php echo $stock_status; ?></div>
                                                <?php endif; ?>
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
                                <?php endif; ?>
                            <?php endforeach; ?>
                            <?php if (!$hasDiscount): ?>
                                <?php
                                $price = number_format($product['price'], 2);
                                $image = !empty($product['image']) ? htmlspecialchars($product['image']) : 'https://via.placeholder.com/150';
                                $productLink = "product-page.php?id=" . htmlspecialchars($product['product_id']);

                                // Determine stock status for general products
                                $quantity = isset($product['quantity']) ? intval($product['quantity']) : 0;
                                $stock_status = '';
                                $stock_class = '';
                                if ($quantity == 0) {
                                    $stock_status = 'Out of Stock';
                                    $stock_class = 'out-of-stock';
                                } elseif ($quantity < 10) {
                                    $stock_status = 'Low Stock';
                                    $stock_class = 'low-stock';
                                }
                                ?>
                                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                    <div class="general-product-item">
                                        <?php if ($stock_status): ?>
                                            <div class="stock-status-badge <?php echo $stock_class; ?>"><?php echo $stock_status; ?></div>
                                        <?php endif; ?>
                                        <div class="general-product-pic">
                                            <img src="<?php echo $image; ?>" alt="<?php echo htmlspecialchars($product['product_name']); ?>" style="width: 100%; height: 300px; object-fit: cover;">
                                            <ul class="general-product-hover product-hover-shared">
                                                <li><a href="#" class="image-zoom" data-image="<?php echo $image; ?>"><span class="arrow_expand"></span></a></li>
                                                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                                            </ul>
                                        </div>
                                        <div class="general-product-text">
                                            <h6><a href="<?php echo $productLink; ?>"><?php echo htmlspecialchars($product['product_name']); ?></a></h6>
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
</body>
</html>