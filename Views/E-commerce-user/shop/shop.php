<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ashion | Shop</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <section class="shop spad py-5">
        <div class="container">
            <div class="row">
                <!-- SIDEBAR (Type Products Collapsible) -->
                <div class="col-lg-2 col-md-2 col-sm-12 custom-width mb-4">
                    <div class="shop__sidebar">
                        <div class="sidebar__categories">
                            <div class="section-title">
                                <h4><i class="fas fa-layer-group"></i> Categories</h4>
                            </div>
                            <div class="categories__accordion">
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-heading">
                                            <button class="category-toggle w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                <span>Type Products</span>
                                                <i class="fas fa-chevron-down toggle-icon"></i>
                                            </button>
                                        </div>
                                        <div id="collapseOne" class="collapse" data-bs-parent="#accordionExample">
                                            <div class="card-body">
                                                <ul class="category-list" id="categoryList">
                                                    <?php
                                                    if (isset($categories) && is_array($categories) && !empty($categories)) {
                                                        foreach ($categories as $category) {
                                                            echo '<li>
                                                                <button class="category-filter w-100" data-category-id="' . htmlspecialchars($category["category_id"]) . '">
                                                                    <span class="category-name">' . htmlspecialchars($category["category_name"]) . '</span>
                                                                    <span class="category-count badge rounded-pill">' . (isset($category["product_count"]) ? htmlspecialchars($category["product_count"]) : '') . '</span>
                                                                </button>
                                                            </li>';
                                                        }
                                                    } else {
                                                        echo '<li class="no-items">No categories available</li>';
                                                    }
                                                    ?>
                                                    <li>
                                                        <button class="category-filter all-products w-100" data-category-id="all">
                                                            <span class="category-name">All Products</span>
                                                            <span class="category-count badge rounded-pill"><?php echo isset($products) ? count($products) : '0'; ?></span>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Quick Filters -->
                            <div class="quick-filters">
                                <div class="section-title mt-4">
                                    <h4><i class="fas fa-tag"></i> Quick Filters</h4>
                                </div>
                                <button class="filter-item w-100" data-filter="new">
                                    <i class="fas fa-star"></i> New Arrivals
                                </button>
                                <button class="filter-item w-100" data-filter="popular">
                                    <i class="fas fa-fire"></i> Popular Items
                                </button>
                                <button class="filter-item w-100" data-filter="sale">
                                    <i class="fas fa-tag"></i> On Sale
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- MAIN CONTENT -->
                <div class="col-lg-10 col-md-10 col-sm-12 custom-width">
                    <div class="shop-controls mb-4">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control search-input" id="productSearch" placeholder="Search products...">
                            </div>
                            <div class="col-md-6">
                                <select class="form-control sort-select" id="sortSelect">
                                    <option value="default">Sort by: Default</option>
                                    <option value="price-asc">Price: Low to High</option>
                                    <option value="price-desc">Price: High to Low</option>
                                    <option value="name-asc">Name: A to Z</option>
                                    <option value="name-desc">Name: Z to A</option>
                                    <option value="rating-desc">Highest Rated</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="product-container">
                        <?php foreach ($products as $index => $product): ?>
                            <?php 
                                $hasDiscount = false;
                            ?>
                            <?php foreach ($discounts as $key => $discount): ?>
                                <?php if ($product["product_id"] == $discount["product_id"]): ?>
                                    <?php if ($discount["end_date"] >= date("Y-m-d") && $discount["start_date"] <= date("Y-m-d")): ?>
                                        <?php
                                            $original_price = floatval($discount["price"]);
                                            $discount_percentage = floatval($discount["discount_percentage"]);
                                            $discounted_price = $original_price * (1 - $discount_percentage / 100);
                                            $product_name = htmlspecialchars($discount["product_name"]);
                                            $image_url = !empty($discount["image"]) ? htmlspecialchars($discount["image"]) : 'https://via.placeholder.com/150';
                                            $discount_badge = "-" . number_format($discount_percentage, 0) . "%";
                                            $original_price_formatted = "$" . number_format($original_price, 2);
                                            $discounted_price_formatted = "$" . number_format($discounted_price, 2);
                                            $rating = isset($product['rating']) ? floatval($product['rating']) : 4.5;
                                            $brand = isset($product['brand']) ? htmlspecialchars($product['brand']) : 'brand1';
                                        ?>
                                        <div class="col product-col mb-4" 
                                             data-category-id="<?php echo htmlspecialchars($product["category_id"]); ?>" 
                                             data-price="<?php echo $discounted_price; ?>" 
                                             data-name="<?php echo $product_name; ?>" 
                                             data-rating="<?php echo $rating; ?>"
                                             data-brand="<?php echo $brand; ?>">
                                            <div class="discount-product-card">
                                                <div class="discount-badge"><?php echo $discount_badge; ?></div>
                                                <div class="product-image lazy-load" data-bg="<?php echo $image_url; ?>">
                                                    <ul class="discount-product-hover product-hover-shared">
                                                        <li><a href="#" class="quick-view" data-product-id="<?php echo $product['product_id']; ?>"><span class="arrow_expand"></span></a></li>
                                                        <li><a href="#" class="wishlist-btn" data-product-id="<?php echo $product['product_id']; ?>"><span class="icon_heart_alt"></span></a></li>
                                                        <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product-info">
                                                    <h5 class="product-name"><?php echo $product_name; ?></h5>
                                                    <div class="rating">
                                                        <?php
                                                        for ($i = 1; $i <= 5; $i++) {
                                                            echo $i <= floor($rating) ? '<i class="fas fa-star"></i>' : ($i <= ceil($rating) ? '<i class="fas fa-star-half-alt"></i>' : '<i class="far fa-star"></i>');
                                                        }
                                                        ?>
                                                    </div>
                                                    <div class="price">
                                                        <span class="original-price"><?php echo $original_price_formatted; ?></span>
                                                        <?php echo $discounted_price_formatted; ?>
                                                    </div>
                                                    <button class="add-to-cart" 
                                                            data-product-id="<?php echo $product['product_id']; ?>" 
                                                            data-product-name="<?php echo $product_name; ?>" 
                                                            data-product-price="<?php echo $discounted_price; ?>" 
                                                            data-product-image="<?php echo $image_url; ?>">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <?php 
                                            $hasDiscount = true;
                                            break;
                                        ?>
                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            <?php if (!$hasDiscount): ?>
                                <?php
                                    $price = number_format(floatval($product['price']), 2);
                                    $image = !empty($product['image']) ? htmlspecialchars($product['image']) : 'https://via.placeholder.com/150';
                                    $productLink = "product-page.php?id=" . htmlspecialchars($product['product_id']);
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
                                    $rating = isset($product['rating']) ? floatval($product['rating']) : 4.0;
                                    $brand = isset($product['brand']) ? htmlspecialchars($product['brand']) : 'brand2';
                                ?>
                                <div class="col product-col mb-4" 
                                     data-category-id="<?php echo htmlspecialchars($product["category_id"]); ?>" 
                                     data-price="<?php echo $price; ?>" 
                                     data-name="<?php echo htmlspecialchars($product['product_name']); ?>" 
                                     data-rating="<?php echo $rating; ?>"
                                     data-brand="<?php echo $brand; ?>">
                                    <div class="general-product-item">
                                        <?php if ($stock_status): ?>
                                            <div class="stock-status-badge <?php echo $stock_class; ?>"><?php echo $stock_status; ?></div>
                                        <?php endif; ?>
                                        <div class="general-product-pic">
                                            <img class="lazy-load" data-src="<?php echo $image; ?>" alt="<?php echo htmlspecialchars($product['product_name']); ?>">
                                            <ul class="general-product-hover product-hover-shared">
                                                <li><a href="#" class="quick-view" data-product-id="<?php echo $product['product_id']; ?>" data-image="<?php echo $image; ?>"><span class="arrow_expand"></span></a></li>
                                                <li><a href="#" class="wishlist-btn" data-product-id="<?php echo $product['product_id']; ?>"><span class="icon_heart_alt"></span></a></li>
                                                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                                            </ul>
                                        </div>
                                        <div class="general-product-text">
                                            <h6><a href="<?php echo $productLink; ?>"><?php echo htmlspecialchars($product['product_name']); ?></a></h6>
                                            <div class="rating">
                                                <?php
                                                for ($i = 1; $i <= 5; $i++) {
                                                    echo $i <= floor($rating) ? '<i class="fas fa-star"></i>' : ($i <= ceil($rating) ? '<i class="fas fa-star-half-alt"></i>' : '<i class="far fa-star"></i>');
                                                }
                                                ?>
                                            </div>
                                            <div class="general-product-price">$<?php echo $price; ?></div>
                                            <button class="add-to-cart" 
                                                    data-product-id="<?php echo $product['product_id']; ?>" 
                                                    data-product-name="<?php echo htmlspecialchars($product['product_name']); ?>" 
                                                    data-product-price="<?php echo $price; ?>" 
                                                    data-product-image="<?php echo $image; ?>">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        <div class="col-12 text-center">
                            <div class="pagination__option">
                                <a href="#" class="active">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Recently Viewed Products -->
                    <div class="recently-viewed mt-5">
                        <h3>Recently Viewed</h3>
                        <div class="row" id="recentlyViewedContainer"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mobile sidebar toggle button -->
    <button class="sidebar-toggle" id="sidebarToggle">
        <i class="fas fa-layer-group"></i>
    </button>

    <!-- Cart Panel -->
    <div class="cart-panel" id="cartPanel">
        <div class="cart-header">
            <h4>Your Cart</h4>
            <button class="cart-close"><i class="fas fa-times"></i></button>
        </div>
        <div class="cart-items" id="cartItems"></div>
        <div class="cart-footer">
            <div class="subtotal">
                <span>Subtotal:</span>
                <span id="cartSubtotal">$0.00</span>
            </div>
            <button class="view-cart-btn">View Cart</button>
        </div>
    </div>

    <!-- Wishlist Panel -->
    <div class="wishlist-panel" id="wishlistPanel">
        <div class="wishlist-header">
            <h4>Your Wishlist</h4>
            <button class="wishlist-close"><i class="fas fa-times"></i></button>
        </div>
        <div class="wishlist-items" id="wishlistItems"></div>
    </div>

    <!-- Overlay for mobile sidebar and panels -->
    <div class="overlay" id="overlay"></div>

    <!-- JavaScript Files -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<style>
    /* RESTORED ORIGINAL STYLES FOR SIDEBAR AND PRODUCT CARDS */
    .slideshow-container, .dot-container {
        display: none;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .stock-status-badge {
        position: absolute;
        top: 5px;
        left: 5px;
        color: white;
        padding: 3px 8px;
        border-radius: 3px;
        font-weight: bold;
        z-index: 1;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        font-size: 11px;
    }

    .stock-status-badge.low-stock {
        background-color: #f59e0b;
    }

    .stock-status-badge.out-of-stock {
        background-color: #ff5252;
    }

    .discount-product-card {
        background-color: white;
        border-radius: 0;
        overflow: hidden;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        position: relative;
        opacity: 1;
        display: flex;
        flex-direction: column;
        min-height: 300px;
    }

    .discount-product-card:hover {
        transform: scale(1.03);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
        opacity: 0.95;
    }

    .discount-product-card:hover .product-info h5 {
        color: #e7ab3c;
        transition: color 0.5s ease;
    }

    .discount-product-card:hover .price {
        color: #e7ab3c;
        transition: color 0.5s ease;
    }

    .discount-product-card:hover .original-price {
        color: #999 !important;
    }

    .general-product-item {
        position: relative;
        background: #fff;
        overflow: hidden;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.4s ease, box-shadow 0.4s ease, opacity 0.4s ease;
        opacity: 1;
        display: flex;
        flex-direction: column;
        min-height: 300px;
    }

    .general-product-item:hover {
        transform: scale(1.03);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
        opacity: 0.95;
    }

    .general-product-item:hover .general-product-text h6 a {
        color: #e7ab3c;
        transition: color 0.5s ease;
    }

    .general-product-item:hover .general-product-price {
        color: #e7ab3c;
        transition: color 0.5s ease;
    }

    .product-hover-shared {
        position: absolute;
        bottom: 10px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        flex-direction: row;
        gap: 8px;
        opacity: 0;
        visibility: hidden;
        padding: 0;
        z-index: 2;
        transition: opacity 0.33s ease;
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
        width: 35px;
        height: 35px;
        background: #ffffff;
        border-radius: 50%;
        text-align: center;
        text-decoration: none;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        transition: background 0.33s ease, transform 0.33s ease;
    }

    .product-hover-shared li a:hover {
        background: #ff5252;
        color: #ffffff;
        transform: scale(1.1);
    }

    .product-hover-shared li a .arrow_expand,
    .product-hover-shared li a .icon_heart_alt,
    .product-hover-shared li a .icon_bag_alt {
        color: #333;
        font-size: 14px;
    }

    .product-hover-shared li a:hover .arrow_expand,
    .product-hover-shared li a:hover .icon_heart_alt,
    .product-hover-shared li a:hover .icon_bag_alt {
        color: #fff;
    }

    .add-to-cart {
        background-color: #ffb6c1;
        color: white;
        border: none;
        padding: 6px 12px;
        margin-top: 5px;
        cursor: pointer;
        width: 100%;
        font-weight: 500;
        font-size: 12px;
        transition: background-color 0.33s ease;
    }

    .add-to-cart:hover {
        background-color: #ff6699;
    }

    body {
        line-height: 1.5;
    }

    .container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 15px;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        margin: 0 -10px;
    }

    .col-lg-2, .col-lg-10, .col-md-2, .col-md-10, .col-sm-12 {
        padding: 0 10px;
        position: relative;
        width: 100%;
    }

    .col-sm-12 {
        flex: 0 0 100%;
        max-width: 100%;
    }

    .mb-4 {
        margin-bottom: 1rem;
    }

    .py-5 {
        padding-top: 2rem;
        padding-bottom: 2rem;
    }

    .text-center {
        text-align: center;
    }

    .shop__sidebar {
        background: linear-gradient(135deg, #ffffff, #f9f9f9);
        border-radius: 12px;
        padding: 25px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease;
    }

    .shop__sidebar:hover {
        transform: translateY(-5px);
    }

    .section-title {
        margin-bottom: 20px;
    }

    .section-title h4 {
        font-size: 20px;
        font-weight: 700;
        color: #2c2c2c;
        display: flex;
        align-items: center;
        gap: 8px;
        position: relative;
        padding-bottom: 10px;
    }

    .section-title h4:after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 50px;
        height: 3px;
        background: linear-gradient(to right, #ff5252, #ff8a8a);
        border-radius: 2px;
    }

    .card {
        border: none;
        background: transparent;
    }

    .card-heading {
        padding: 5px 0;
    }

    .category-toggle {
        display: flex;
        justify-content: space-between;
        align-items: center;
        text-decoration: none;
        color: #333;
        font-weight: 600;
        font-size: 16px;
        padding: 12px 15px;
        border-radius: 8px;
        background: rgba(255, 255, 255, 0.8);
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
    }

    .category-toggle:hover {
        background: #ffebee;
        color: #ff5252;
        transform: translateX(5px);
    }

    .toggle-icon {
        transition: transform 0.3s ease;
    }

    .category-toggle[aria-expanded="true"] .toggle-icon {
        transform: rotate(180deg);
    }

    .card-body {
        padding: 15px 0 0 10px;
    }

    .category-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .category-list li {
        margin: 8px 0;
        transition: all 0.2s ease;
    }

    .category-filter {
        display: flex;
        justify-content: space-between;
        align-items: center;
        text-decoration: none;
        color: #555;
        font-size: 14px;
        padding: 8px 12px;
        border-radius: 6px;
        background: rgba(255, 255, 255, 0.9);
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
        text-align: left;
    }

    .category-filter:hover {
        background: #ffebee;
        color: #ff5252;
        padding-left: 15px;
    }

    .category-filter.active {
        background: #ff5252;
        color: white;
        font-weight: 600;
    }

    .category-count {
        background-color: #f0f0f0;
        color: #666;
        font-size: 11px;
        padding: 2px 8px;
        border-radius: 10px;
        transition: all 0.3s ease;
    }

    .category-filter:hover .category-count {
        background-color: rgba(255, 82, 82, 0.2);
    }

    .category-filter.active .category-count {
        background-color: rgba(255, 255, 255, 0.3);
        color: white;
    }

    .no-items {
        color: #999;
        font-style: italic;
        padding: 8px 12px;
    }

    .quick-filters {
        margin-top: 20px;
        border-top: 1px solid #eee;
        padding-top: 15px;
    }

    .filter-item {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 10px 12px;
        margin: 5px 0;
        border-radius: 6px;
        color: #444;
        font-size: 14px;
        cursor: pointer;
        background: rgba(255, 255, 255, 0.9);
        transition: all 0.3s ease;
        border: none;
        text-align: left;
    }

    .filter-item:hover {
        background: #fff3f3;
        color: #ff5252;
        transform: translateX(3px);
    }

    .filter-item.active {
        background: #ff5252;
        color: white;
    }

    .filter-item i {
        font-size: 14px;
    }

    .sidebar-toggle {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 1050;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: white;
        border: 1px solid #ddd;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        align-items: center;
        justify-content: center;
        cursor: pointer;
    }

    .overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        z-index: 999;
    }

    #product-container {
        display: flex;
        flex-wrap: wrap;
        margin: 0 -10px;
    }

    .product-col {
        padding: 0 10px;
        margin-bottom: 20px;
    }

    .general-product-pic {
        position: relative;
        width: 100%;
        aspect-ratio: 4 / 3;
        overflow: hidden;
    }

    .general-product-pic img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .general-product-text {
        padding: 10px;
        text-align: center;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .general-product-text h6 {
        font-size: 14px;
        margin-bottom: 5px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .general-product-text h6 a {
        color: #000000;
        text-decoration: none;
    }

    .general-product-price {
        font-weight: bold;
        font-size: 14px;
        color: #333;
        margin: 5px 0;
        transition: color 0.5s ease;
    }

    .product-image {
        aspect-ratio: 4 / 3;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
    }

    .discount-badge {
        position: absolute;
        top: 5px;
        right: 5px;
        background-color: #ff5252;
        color: white;
        padding: 3px 8px;
        border-radius: 3px;
        font-weight: bold;
        z-index: 1;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        font-size: 11px;
    }

    .product-info {
        padding: 10px;
        text-align: center;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .product-info h5 {
        font-weight: 600;
        color: #000000;
        margin-bottom: 3px;
        font-size: 14px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .price {
        margin: 5px 0;
        font-size: 14px;
        color: #333;
        transition: color 0.5s ease;
    }

    .original-price {
        text-decoration: line-through;
        color: #999;
        margin-right: 5px;
        font-size: 12px;
    }

    .pagination__option {
        margin-top: 20px;
        display: inline-block;
    }

    .pagination__option a {
        display: inline-block;
        width: 30px;
        height: 30px;
        line-height: 30px;
        text-align: center;
        border-radius: 50%;
        margin: 0 3px;
        color: #333;
        text-decoration: none;
        font-size: 12px;
    }

    .pagination__option a.active,
    .pagination__option a:hover {
        background: #ff5252;
        color: #fff;
    }

    /* NEW STYLES FOR ADDED FEATURES */
    .rating {
        color: #ffc107;
        margin-bottom: 5px;
        font-size: 12px;
    }

    .rating i {
        margin-right: 2px;
    }

    .recently-viewed h3 {
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 20px;
        color: #2c2c2c;
    }

    .recently-viewed .product-col {
        flex: 0 0 25%;
        max-width: 25%;
    }

    @media (max-width: 767px) {
        .recently-viewed .product-col {
            flex: 0 0 50%;
            max-width: 50%;
        }
    }

    .wishlist-panel {
        position: fixed;
        right: -400px;
        top: 0;
        width: 400px;
        height: 100%;
        background: white;
        box-shadow: -2px 0 10px rgba(0, 0, 0, 0.1);
        z-index: 1000;
        transition: right 0.3s ease;
        display: flex;
        flex-direction: column;
    }

    .wishlist-panel.active {
        right: 0;
    }

    .wishlist-header {
        padding: 20px;
        border-bottom: 1px solid #eee;
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: #f9f9f9;
    }

    .wishlist-header h4 {
        margin: 0;
        font-size: 20px;
    }

    .wishlist-close {
        background: none;
        border: none;
        font-size: 20px;
        cursor: pointer;
    }

    .wishlist-items {
        flex-grow: 1;
        overflow-y: auto;
        padding: 20px;
    }

    .wishlist-item {
        display: flex;
        align-items: center;
        padding: 15px 0;
        border-bottom: 1px solid #eee;
    }

    .wishlist-item img {
        width: 60px;
        height: 60px;
        object-fit: cover;
        margin-right: 15px;
        border-radius: 5px;
    }

    .wishlist-item-details {
        flex-grow: 1;
    }

    .wishlist-item-name {
        font-weight: bold;
        color: #333;
        margin-bottom: 5px;
    }

    .wishlist-item-price {
        font-weight: bold;
        color: #ff6699;
    }

    .wishlist-item-remove {
        margin-left: 10px;
        cursor: pointer;
        color: #777;
        transition: color 0.33s ease;
    }

    .wishlist-item-remove:hover {
        color: #ff3333;
    }

    .quick-view-modal {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 1000;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
    }

    .quick-view-modal.active {
        opacity: 1;
        visibility: visible;
    }

    .quick-view-content {
        background: white;
        max-width: 600px;
        width: 90%;
        border-radius: 10px;
        overflow: hidden;
        position: relative;
        transform: scale(0.8);
        transition: transform 0.3s ease;
    }

    .quick-view-modal.active .quick-view-content {
        transform: scale(1);
    }

    .quick-view-close {
        position: absolute;
        top: 10px;
        right: 10px;
        background: #ff5252;
        color: white;
        border: none;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
    }

    .quick-view-image {
        width: 100%;
        aspect-ratio: 4 / 3;
        object-fit: cover;
    }

    .quick-view-details {
        padding: 20px;
    }

    .quick-view-details h3 {
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .quick-view-details .price {
        font-size: 18px;
        font-weight: bold;
        color: #ff6699;
        margin-bottom: 10px;
    }

    .quick-view-details .rating {
        margin-bottom: 10px;
    }

    .quick-view-details p {
        font-size: 14px;
        color: #666;
        margin-bottom: 15px;
    }

    /* Existing styles for other components */
    .shop-controls {
        margin-bottom: 20px;
    }

    .search-input {
        border-radius: 20px;
        padding: 8px 15px;
        font-size: 14px;
    }

    .sort-select {
        border-radius: 20px;
        padding: 8px 15px;
        font-size: 14px;
    }

    .cart-panel {
        position: fixed;
        right: -400px;
        top: 0;
        width: 400px;
        height: 100%;
        background: white;
        box-shadow: -2px 0 10px rgba(0, 0, 0, 0.1);
        z-index: 1000;
        transition: right 0.3s ease;
        display: flex;
        flex-direction: column;
    }

    .cart-panel.active {
        right: 0;
    }

    .cart-header {
        padding: 20px;
        border-bottom: 1px solid #eee;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .cart-header h4 {
        margin: 0;
        font-size: 20px;
    }

    .cart-close {
        background: none;
        border: none;
        font-size: 20px;
        cursor: pointer;
    }

    .cart-items {
        flex-grow: 1;
        overflow-y: auto;
        padding: 20px;
    }

    .cart-item {
        display: flex;
        align-items: center;
        padding: 15px 0;
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
        transition: color 0.33s ease;
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
        transition: background 0.33s ease;
    }

    .view-cart-btn:hover {
        background-color: #ff9eb5;
    }

    .toast-notification {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background-color: #333;
        color: white;
        padding: 12px 20px;
        border-radius: 4px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        opacity: 0;
        visibility: hidden;
        transform: translateY(20px);
        transition: all 0.3s ease;
        z-index: 1000;
        font-size: 13px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .toast-notification.show {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    .toast-notification img {
        width: 40px;
        height: 40px;
        object-fit: cover;
        border-radius: 3px;
    }

    .zoom-modal {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.8);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 1000;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .zoom-modal-content {
        position: relative;
        max-width: 90%;
        max-height: 90%;
    }

    .zoom-modal-content img {
        max-width: 100%;
        max-height: 80vh;
        display: block;
        border: 5px solid white;
        border-radius: 5px;
    }

    .zoom-close {
        position: absolute;
        top: -40px;
        right: 0;
        color: white;
        font-size: 30px;
        font-weight: bold;
        cursor: pointer;
    }

    .add-to-cart.adding {
        background-color: #4CAF50;
    }

    /* Responsive Styles */
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
            flex: 0 0 25%;
            max-width: 25%;
        }
    }

    @media (max-width: 991px) and (min-width: 768px) {
        .product-col {
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }

        .general-product-item,
        .discount-product-card {
            min-height: 280px;
        }

        .general-product-pic,
        .product-image {
            aspect-ratio: 4 / 3;
        }

        .general-product-text,
        .product-info {
            padding: 8px;
        }

        .general-product-text h6,
        .product-info h5 {
            font-size: 13px;
            margin-bottom: 3px;
        }

        .general-product-price,
        .price {
            font-size: 13px;
        }

        .add-to-cart {
            padding: 5px 10px;
            font-size: 11px;
        }

        .stock-status-badge {
            padding: 2px 6px;
            font-size: 10px;
        }
    }

    @media (max-width: 767px) {
        .sidebar-toggle {
            display: flex;
        }
        
        .shop__sidebar {
            padding: 20px;
            border-radius: 12px 0 0 12px;
            height: 100vh;
            width: 280px;
            position: fixed;
            right: -280px;
            top: 0;
            z-index: 1000;
            transition: right 0.3s ease;
            overflow-y: auto;
        }
        
        .shop__sidebar.active {
            right: 0;
        }
        
        .shop__sidebar:hover {
            transform: none;
        }
        
        .overlay.active {
            display: block;
        }
        
        .col-lg-2.custom-width {
            display: block !important;
        }

        .col-lg-10.custom-width {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .product-col {
            flex: 0 0 50%;
            max-width: 50%;
        }
        
        .general-product-item,
        .discount-product-card {
            min-height: 260px;
        }

        .general-product-pic,
        .product-image {
            aspect-ratio: 4 / 3;
        }

        .general-product-text,
        .product-info {
            padding: 6px;
        }

        .general-product-text h6,
        .product-info h5 {
            font-size: 12px;
            margin-bottom: 2px;
        }

        .general-product-price,
        .price {
            font-size: 11px;
        }

        .add-to-cart {
            padding: 4px 8px;
            font-size: 10px;
        }

        .stock-status-badge {
            padding: 2px 6px;
            font-size: 9px;
        }

        .cart-panel,
        .wishlist-panel {
            width: 100%;
            right: -100%;
        }
    }

    @media (max-width: 480px) {
        .product-col {
            flex: 0 0 50%;
            max-width: 50%;
        }
        
        .general-product-item,
        .discount-product-card {
            min-height: 240px;
        }

        .general-product-pic,
        .product-image {
            aspect-ratio: 4 / 3;
        }

        .general-product-text,
        .product-info {
            padding: 5px;
        }

        .general-product-text h6,
        .product-info h5 {
            font-size: 11px;
        }

        .general-product-price,
        .price {
            font-size: 10px;
        }

        .add-to-cart {
            padding: 3px 6px;
            font-size: 9px;
        }

        .stock-status-badge {
            padding: 2px 5px;
            font-size: 8px;
        }
    }

    #product-container:hover {
        color: initial;
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Get elements
    const categoryFilters = document.querySelectorAll('.category-filter');
    const filterItems = document.querySelectorAll('.filter-item');
    const sidebarToggle = document.getElementById('sidebarToggle');
    const sidebar = document.querySelector('.shop__sidebar');
    const overlay = document.getElementById('overlay');
    const productItems = document.querySelectorAll('.product-col');
    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    const quickViewButtons = document.querySelectorAll('.quick-view');
    const wishlistButtons = document.querySelectorAll('.wishlist-btn');
    const cartPanel = document.getElementById('cartPanel');
    const cartClose = cartPanel.querySelector('.cart-close');
    const cartItemsContainer = document.getElementById('cartItems');
    const cartSubtotal = document.getElementById('cartSubtotal');
    const wishlistPanel = document.getElementById('wishlistPanel');
    const wishlistClose = wishlistPanel.querySelector('.wishlist-close');
    const wishlistItemsContainer = document.getElementById('wishlistItems');
    const productSearch = document.getElementById('productSearch');
    const sortSelect = document.getElementById('sortSelect');
    const recentlyViewedContainer = document.getElementById('recentlyViewedContainer');

    // Storage management
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    let wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];
    let recentlyViewed = JSON.parse(localStorage.getItem('recentlyViewed')) || [];

    // Lazy loading images
    function lazyLoadImages() {
        const images = document.querySelectorAll('.lazy-load');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const element = entry.target;
                    if (element.tagName === 'IMG') {
                        element.src = element.dataset.src;
                    } else {
                        element.style.backgroundImage = `url(${element.dataset.bg})`;
                    }
                    element.classList.add('loaded');
                    observer.unobserve(element);
                }
            });
        });

        images.forEach(image => observer.observe(image));
    }

    // Update cart
    function updateCart() {
        cartItemsContainer.innerHTML = '';
        let subtotal = 0;

        cart.forEach((item, index) => {
            const itemTotal = item.price * item.quantity;
            subtotal += itemTotal;

            const cartItem = document.createElement('div');
            cartItem.classList.add('cart-item');
            cartItem.innerHTML = `
                <img src="${item.image}" alt="${item.name}">
                <div class="cart-item-details">
                    <div class="cart-item-name">${item.name}</div>
                    <div class="cart-item-price">$${item.price.toFixed(2)}</div>
                    <div class="cart-item-quantity">
                        <button class="quantity-btn decrease" data-index="${index}">-</button>
                        <input type="number" class="quantity-input" value="${item.quantity}" min="1" data-index="${index}">
                        <button class="quantity-btn increase" data-index="${index}">+</button>
                    </div>
                </div>
                <div class="cart-item-total">$${itemTotal.toFixed(2)}</div>
                <i class="fas fa-trash delete-btn" data-index="${index}"></i>
            `;
            cartItemsContainer.appendChild(cartItem);
        });

        cartSubtotal.textContent = `$${subtotal.toFixed(2)}`;
        localStorage.setItem('cart', JSON.stringify(cart));

        document.querySelectorAll('.quantity-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const index = parseInt(this.dataset.index);
                if (this.classList.contains('increase')) {
                    cart[index].quantity++;
                } else if (cart[index].quantity > 1) {
                    cart[index].quantity--;
                }
                updateCart();
            });
        });

        document.querySelectorAll('.quantity-input').forEach(input => {
            input.addEventListener('change', function() {
                const index = parseInt(this.dataset.index);
                const value = parseInt(this.value);
                if (value >= 1) {
                    cart[index].quantity = value;
                    updateCart();
                }
            });
        });

        document.querySelectorAll('.delete-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const index = parseInt(this.dataset.index);
                cart.splice(index, 1);
                updateCart();
                showToast('Item removed from cart');
            });
        });
    }

    // Update wishlist
    function updateWishlist() {
        wishlistItemsContainer.innerHTML = '';

        wishlist.forEach((item, index) => {
            const wishlistItem = document.createElement('div');
            wishlistItem.classList.add('wishlist-item');
            wishlistItem.innerHTML = `
                <img src="${item.image}" alt="${item.name}">
                <div class="wishlist-item-details">
                    <div class="wishlist-item-name">${item.name}</div>
                    <div class="wishlist-item-price">$${item.price.toFixed(2)}</div>
                </div>
                <i class="fas fa-trash wishlist-item-remove" data-index="${index}"></i>
            `;
            wishlistItemsContainer.appendChild(wishlistItem);
        });

        localStorage.setItem('wishlist', JSON.stringify(wishlist));

        document.querySelectorAll('.wishlist-item-remove').forEach(btn => {
            btn.addEventListener('click', function() {
                const index = parseInt(this.dataset.index);
                wishlist.splice(index, 1);
                updateWishlist();
                showToast('Item removed from wishlist');
                updateWishlistButtonStates();
            });
        });
    }

    // Update wishlist button states
    function updateWishlistButtonStates() {
        wishlistButtons.forEach(btn => {
            const productId = btn.dataset.productId;
            const isInWishlist = wishlist.some(item => item.id === productId);
            btn.classList.toggle('active', isInWishlist);
            btn.querySelector('span').classList.toggle('fas', isInWishlist);
            btn.querySelector('span').classList.toggle('far', !isInWishlist);
        });
    }

    // Update recently viewed
    function updateRecentlyViewed() {
        recentlyViewedContainer.innerHTML = '';
        recentlyViewed.slice(0, 4).forEach(item => {
            const productCol = document.createElement('div');
            productCol.classList.add('col', 'product-col', 'mb-4');
            productCol.setAttribute('data-price', item.price);
            productCol.setAttribute('data-name', item.name);
            productCol.setAttribute('data-rating', item.rating || 4.0);
            productCol.setAttribute('data-brand', item.brand || 'brand1');

            const ratingStars = Array.from({ length: 5 }, (_, i) => {
                if (i < Math.floor(item.rating)) return '<i class="fas fa-star"></i>';
                if (i < Math.ceil(item.rating)) return '<i class="fas fa-star-half-alt"></i>';
                return '<i class="far fa-star"></i>';
            }).join('');

            productCol.innerHTML = `
                <div class="general-product-item">
                    <div class="general-product-pic">
                        <img class="lazy-load" data-src="${item.image}" alt="${item.name}">
                        <ul class="general-product-hover product-hover-shared">
                            <li><a href="#" class="quick-view" data-product-id="${item.id}"><span class="arrow_expand"></span></a></li>
                            <li><a href="#" class="wishlist-btn" data-product-id="${item.id}"><span class="icon_heart_alt"></span></a></li>
                            <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                        </ul>
                    </div>
                    <div class="general-product-text">
                        <h6><a href="product-page.php?id=${item.id}">${item.name}</a></h6>
                        <div class="rating">${ratingStars}</div>
                        <div class="general-product-price">$${item.price.toFixed(2)}</div>
                        <button class="add-to-cart" 
                                data-product-id="${item.id}" 
                                data-product-name="${item.name}" 
                                data-product-price="${item.price}" 
                                data-product-image="${item.image}">Add to Cart</button>
                    </div>
                </div>
            `;
            recentlyViewedContainer.appendChild(productCol);
        });

        // Reattach event listeners for new elements
        recentlyViewedContainer.querySelectorAll('.add-to-cart').forEach(btn => {
            btn.addEventListener('click', handleAddToCart);
        });
        recentlyViewedContainer.querySelectorAll('.quick-view').forEach(btn => {
            btn.addEventListener('click', handleQuickView);
        });
        recentlyViewedContainer.querySelectorAll('.wishlist-btn').forEach(btn => {
            btn.addEventListener('click', handleWishlist);
        });

        localStorage.setItem('recentlyViewed', JSON.stringify(recentlyViewed));
        lazyLoadImages();
    }

    // Category filter handling
    categoryFilters.forEach(filter => {
        filter.addEventListener('click', function(e) {
            e.preventDefault();
            const selectedCategoryId = this.getAttribute('data-category-id');
            categoryFilters.forEach(f => f.classList.remove('active'));
            this.classList.add('active');
            filterProducts();
        });
    });

    // Quick filter handling
    filterItems.forEach(filter => {
        filter.addEventListener('click', function() {
            this.classList.toggle('active');
            filterProducts();
        });
    });

    // Mobile sidebar toggle
    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', function() {
            sidebar.classList.toggle('active');
            overlay.classList.toggle('active');
        });
    }

    // Panel toggles
    cartClose.addEventListener('click', () => {
        cartPanel.classList.remove('active');
        overlay.classList.remove('active');
    });

    wishlistClose.addEventListener('click', () => {
        wishlistPanel.classList.remove('active');
        overlay.classList.remove('active');
    });

    // Overlay handling
    overlay.addEventListener('click', function() {
        sidebar.classList.remove('active');
        cartPanel.classList.remove('active');
        wishlistPanel.classList.remove('active');
        overlay.classList.remove('active');
    });

    // Add to cart handler
    function handleAddToCart() {
        const product = {
            id: this.dataset.productId,
            name: this.dataset.productName,
            price: parseFloat(this.dataset.productPrice),
            image: this.dataset.productImage,
            quantity: 1
        };

        const existingItem = cart.find(item => item.id === product.id);
        if (existingItem) {
            existingItem.quantity++;
        } else {
            cart.push(product);
        }

        this.classList.add('adding');
        this.textContent = 'Added!';
        
        setTimeout(() => {
            this.classList.remove('adding');
            this.textContent = 'Add to Cart';
        }, 1500);

        updateCart();
        showToast(`${product.name} added to cart!`, product.image);
    }

    addToCartButtons.forEach(button => {
        button.addEventListener('click', handleAddToCart);
    });

    // Wishlist handler
    function handleWishlist(e) {
        e.preventDefault();
        const productId = this.dataset.productId;
        const productCol = this.closest('.product-col');
        const product = {
            id: productId,
            name: productCol.dataset.name,
            price: parseFloat(productCol.dataset.price),
            image: this.closest('.general-product-pic')?.querySelector('img')?.dataset.src ||
                   this.closest('.product-image')?.dataset.bg,
            rating: productCol.dataset.rating
        };

        const existingItem = wishlist.find(item => item.id === productId);
        if (existingItem) {
            wishlist = wishlist.filter(item => item.id !== productId);
            showToast(`${product.name} removed from wishlist`);
        } else {
            wishlist.push(product);
            showToast(`${product.name} added to wishlist`, product.image);
        }

        updateWishlist();
        updateWishlistButtonStates();
    }

    wishlistButtons.forEach(button => {
        button.addEventListener('click', handleWishlist);
    });

    // Quick view handler
    function handleQuickView(e) {
        e.preventDefault();
        const productId = this.dataset.productId;
        const productCol = this.closest('.product-col');
        const product = {
            id: productId,
            name: productCol.dataset.name,
            price: parseFloat(productCol.dataset.price),
            image: this.closest('.general-product-pic')?.querySelector('img')?.dataset.src ||
                   this.closest('.product-image')?.dataset.bg,
            rating: parseFloat(productCol.dataset.rating)
        };

        // Add to recently viewed
        recentlyViewed = recentlyViewed.filter(item => item.id !== productId);
        recentlyViewed.unshift(product);
        if (recentlyViewed.length > 10) recentlyViewed.pop();
        updateRecentlyViewed();

        const ratingStars = Array.from({ length: 5 }, (_, i) => {
            if (i < Math.floor(product.rating)) return '<i class="fas fa-star"></i>';
            if (i < Math.ceil(product.rating)) return '<i class="fas fa-star-half-alt"></i>';
            return '<i class="far fa-star"></i>';
        }).join('');

        const modal = document.createElement('div');
        modal.classList.add('quick-view-modal');
        modal.innerHTML = `
            <div class="quick-view-content">
                <button class="quick-view-close"><i class="fas fa-times"></i></button>
                <img src="${product.image}" alt="${product.name}" class="quick-view-image">
                <div class="quick-view-details">
                    <h3>${product.name}</h3>
                    <div class="price">$${product.price.toFixed(2)}</div>
                    <div class="rating">${ratingStars}</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <button class="add-to-cart" 
                            data-product-id="${product.id}" 
                            data-product-name="${product.name}" 
                            data-product-price="${product.price}" 
                            data-product-image="${product.image}">Add to Cart</button>
                </div>
            </div>
        `;

        document.body.appendChild(modal);
        setTimeout(() => modal.classList.add('active'), 10);

        modal.querySelector('.quick-view-close').addEventListener('click', () => closeQuickViewModal(modal));
        modal.addEventListener('click', (e) => {
            if (e.target === modal) closeQuickViewModal(modal);
        });
        modal.querySelector('.add-to-cart').addEventListener('click', handleAddToCart);
    }

    quickViewButtons.forEach(button => {
        button.addEventListener('click', handleQuickView);
    });

    // Search and sort
    productSearch.addEventListener('input', filterProducts);
    sortSelect.addEventListener('change', filterProducts);

    // Filter products
    function filterProducts() {
        const selectedCategory = document.querySelector('.category-filter.active')?.dataset.categoryId;
        const searchTerm = productSearch.value.toLowerCase();
        const sortValue = sortSelect.value;
        const activeFilters = Array.from(filterItems)
            .filter(f => f.classList.contains('active'))
            .map(f => f.dataset.filter);

        let filteredItems = Array.from(productItems);

        // Category filter
        if (selectedCategory && selectedCategory !== 'all') {
            filteredItems = filteredItems.filter(item => 
                item.dataset.categoryId === selectedCategory);
        }

        // Search filter
        if (searchTerm) {
            filteredItems = filteredItems.filter(item => 
                item.dataset.name.toLowerCase().includes(searchTerm));
        }

        // Quick filters (simplified)
        if (activeFilters.length > 0) {
            // Add logic as needed
        }

        // Sort
        filteredItems.sort((a, b) => {
            const priceA = parseFloat(a.dataset.price);
            const priceB = parseFloat(b.dataset.price);
            const nameA = a.dataset.name.toLowerCase();
            const nameB = b.dataset.name.toLowerCase();
            const ratingA = parseFloat(a.dataset.rating);
            const ratingB = parseFloat(b.dataset.rating);

            switch (sortValue) {
                case 'price-asc':
                    return priceA - priceB;
                case 'price-desc':
                    return priceB - priceA;
                case 'name-asc':
                    return nameA.localeCompare(nameB);
                case 'name-desc':
                    return nameB.localeCompare(nameA);
                case 'rating-desc':
                    return ratingB - ratingA;
                default:
                    return 0;
            }
        });

        // Update display
        productItems.forEach(item => {
            item.style.opacity = '0';
            item.style.display = 'none';
        });

        setTimeout(() => {
            filteredItems.forEach(item => {
                item.style.display = 'block';
                setTimeout(() => item.style.opacity = '1', 10);
            });
        }, 300);
    }

    function closeQuickViewModal(modal) {
        modal.classList.remove('active');
        setTimeout(() => document.body.removeChild(modal), 300);
    }

    function showToast(message, image = null) {
        let toast = document.querySelector('.toast-notification');
        if (!toast) {
            toast = document.createElement('div');
            toast.classList.add('toast-notification');
            document.body.appendChild(toast);
        }

        toast.innerHTML = image ? 
            `<img src="${image}" alt="Product"><span>${message}</span>` :
            `<span>${message}</span>`;
        
        toast.classList.add('show');
        setTimeout(() => toast.classList.remove('show'), 3000);
    }

    // Initialize
    lazyLoadImages();
    updateCart();
    updateWishlist();
    updateRecentlyViewed();
    updateWishlistButtonStates();
    const allProductsFilter = document.querySelector('.category-filter[data-category-id="all"]');
    if (allProductsFilter) allProductsFilter.classList.add('active');
});
</script>
</body>
</html>