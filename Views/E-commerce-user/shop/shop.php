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
 
</body>

</html>

<style>
  /* Base Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    /* font-family: 'Montserrat', sans-serif;
    background-color: #f8f9fa;
    color: #333; */
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
    margin: 0 -10px; /* Reduced margin for tighter grid */
}

.col-lg-2, .col-lg-10, .col-md-2, .col-md-10, .col-sm-12 {
    padding: 0 10px; /* Reduced padding for tighter grid */
    position: relative;
    width: 100%;
}

.col-sm-12 {
    flex: 0 0 100%;
    max-width: 100%;
}

.mb-4 {
    margin-bottom: 1rem; /* Reduced from 1.5rem */
}

.py-5 {
    padding-top: 2rem; /* Reduced from 3rem */
    padding-bottom: 2rem; /* Reduced from 3rem */
}

.text-center {
    text-align: center;
}

/* Sidebar Styles */
.shop__sidebar {
    background-color: #fff;
    border-radius: 8px;
    padding: 15px; /* Reduced from 20px */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
}

.section-title h4 {
    font-size: 16px; /* Reduced from 18px */
    font-weight: 600;
    margin-bottom: 12px; /* Reduced from 15px */
    color: #333;
}

.card-heading a {
    font-weight: 600;
    color: #333;
    text-decoration: none;
    display: block;
    margin-bottom: 8px; /* Reduced from 10px */
    font-size: 14px; /* Added smaller font size */
}

.category-list {
    list-style: none;
    padding: 0;
}

.category-list li {
    margin-bottom: 8px; /* Reduced from 10px */
}

.category-filter {
    text-decoration: none;
    color: #333;
    transition: color 0.3s ease;
    display: block;
    padding: 3px 0; /* Reduced from 5px */
    font-size: 13px; /* Added smaller font size */
}

.category-filter:hover,
.category-filter.active {
    color: #ff5252;
    font-weight: bold;
}

/* Product Grid Styles */
#product-container {
    display: flex;
    flex-wrap: wrap;
    margin: 0 -10px; /* Reduced margin for tighter grid */
}

.product-col {
    padding: 0 10px; /* Reduced padding for tighter grid */
    margin-bottom: 20px; /* Reduced from 30px */
}

/* General Product Item Styles */
.general-product-item {
    position: relative;
    background: #fff;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border-radius: 8px;
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
    height: 180px; /* Reduced from 300px */
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
    padding: 10px; /* Reduced from 15px */
    text-align: center;
    transition: all 0.3s ease;
}

.general-product-text h6 {
    font-size: 14px; /* Reduced from 16px */
    margin-bottom: 5px; /* Reduced from 10px */
}

.general-product-text h6 a {
    color: #000000;
    text-decoration: none;
    transition: color 0.3s ease;
}

.general-product-item:hover .general-product-text h6 a {
    color: #e7ab3c;
}

.general-product-price {
    font-weight: bold;
    font-size: 14px; /* Reduced from 16px */
    color: #333;
    margin: 5px 0; /* Reduced from 10px */
    transition: color 0.3s ease;
}

.general-product-item:hover .general-product-price {
    color: #e7ab3c;
}

/* Discount Product Card Styles */
.discount-product-card {
    background-color: white;
    border-radius: 8px;
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
    height: 180px; /* Reduced from 300px */
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
    top: 5px; /* Reduced from 10px */
    right: 5px; /* Reduced from 10px */
    background-color: #ff5252;
    color: white;
    padding: 3px 8px; /* Reduced from 5px 10px */
    border-radius: 3px; /* Reduced from 4px */
    font-weight: bold;
    z-index: 1;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease;
    font-size: 11px; /* Added smaller font size */
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

.product-info {
    padding: 10px; /* Reduced from 15px */
    text-align: center;
}

.product-info h5 {
    font-weight: 600;
    color: #000000;
    margin-bottom: 3px; /* Reduced from 5px */
    font-size: 14px; /* Added smaller font size */
    transition: color 0.3s ease;
}

.discount-product-card:hover .product-info h5 {
    color: #ff5252;
}

/* Product Hover Shared Styles */
.product-hover-shared {
    position: absolute;
    bottom: 5px; /* Reduced from 10px */
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    flex-direction: row;
    gap: 5px; /* Reduced from 10px */
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
    display: flex;
    align-items: center;
    justify-content: center;
    width: 30px; /* Reduced from 40px */
    height: 30px; /* Reduced from 40px */
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
    font-size: 12px; /* Added smaller font size */
}

.product-hover-shared li a:hover .icon {
    color: #fff;
}

/* Rating Stars */
.rating {
    color: #ffc107;
    margin-bottom: 3px; /* Reduced from 5px */
    font-size: 12px; /* Added smaller font size */
}

/* Price Styles */
.price {
    margin: 5px 0; /* Reduced from 10px */
    font-size: 14px; /* Added smaller font size */
}

.original-price {
    text-decoration: line-through;
    color: #999;
    margin-right: 5px; /* Reduced from 8px */
    font-size: 12px; /* Added smaller font size */
}

/* Add to Cart Button */
.add-to-cart {
    background-color: #ffb6c1;
    color: white;
    border: none;
    padding: 6px 12px; /* Reduced from 8px 15px */
    margin-top: 5px; /* Reduced from 10px */
    cursor: pointer;
    width: 100%;

    transition: all 0.3s ease;
    font-weight: 500;
    font-size: 12px; /* Added smaller font size */
}

.add-to-cart:hover {
    background-color: #ff6699;
    transform: translateY(-2px);
}

/* Pagination Styles */
.pagination__option {
    margin-top: 20px; /* Reduced from 30px */
    display: inline-block;
}

.pagination__option a {
    display: inline-block;
    width: 30px; /* Reduced from 40px */
    height: 30px; /* Reduced from 40px */
    line-height: 30px; /* Reduced from 40px */
    text-align: center;
    border-radius: 50%;
    margin: 0 3px; /* Reduced from 5px */
    color: #333;
    text-decoration: none;
    transition: all 0.3s;
    font-size: 12px; /* Added smaller font size */
}

.pagination__option a.active,
.pagination__option a:hover {
    background: #ff5252;
    color: #fff;
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
        flex: 0 0 25%; /* Changed from 33.333333% to show more items per row */
        max-width: 25%; /* Changed from 33.333333% to show more items per row */
    }
}

@media (max-width: 991px) and (min-width: 768px) {
    .product-col {
        flex: 0 0 33.333333%;
        max-width: 33.333333%;
    }
}

@media (max-width: 767px) {
    .product-col {
        flex: 0 0 50%;
        max-width: 50%;
    }
    
    .col-sm-12 {
        flex: 0 0 100%;
        max-width: 100%;
    }
    
    .general-product-pic,
    .product-image {
        height: 150px; /* Reduced from 200px */
    }
}

@media (max-width: 480px) {
    .product-col {
        flex: 0 0 50%; /* Changed from 100% to show 2 items per row on mobile */
        max-width: 50%; /* Changed from 100% to show 2 items per row on mobile */
    }
    
    .general-product-pic,
    .product-image {
        height: 120px; /* Further reduced for very small screens */
    }
    
    .general-product-text,
    .product-info {
        padding: 8px;
    }
    
    .general-product-text h6,
    .product-info h5 {
        font-size: 12px;
    }
}
</style>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    // Handle category filter clicks
    const categoryFilters = document.querySelectorAll('.category-filter');
    const productItems = document.querySelectorAll('.product-col');
    
    categoryFilters.forEach(filter => {
        filter.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Get selected category ID
            const selectedCategoryId = this.getAttribute('data-category-id');
            
            // Update active class
            categoryFilters.forEach(f => f.classList.remove('active'));
            this.classList.add('active');
            
            // Filter products
            if (selectedCategoryId === 'all') {
                // Show all products with fade effect
                productItems.forEach(item => {
                    item.style.display = 'none';
                    setTimeout(() => {
                        item.style.display = 'block';
                        setTimeout(() => {
                            item.style.opacity = '1';
                        }, 10);
                    }, 300);
                });
            } else {
                // Hide all products first
                productItems.forEach(item => {
                    item.style.opacity = '0';
                    setTimeout(() => {
                        item.style.display = 'none';
                    }, 300);
                });
                
                // Show only products with matching category
                setTimeout(() => {
                    productItems.forEach(item => {
                        if (item.getAttribute('data-category-id') === selectedCategoryId) {
                            item.style.display = 'block';
                            setTimeout(() => {
                                item.style.opacity = '1';
                            }, 10);
                        }
                    });
                }, 300);
            }
            
            // Smooth scroll to product container
            const productContainer = document.getElementById('product-container');
            window.scrollTo({
                top: productContainer.offsetTop - 100,
                behavior: 'smooth'
            });
        });
    });
    
    // Add to cart functionality
    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    
    addToCartButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Get product info from parent elements
            let productName;
            let productPrice;
            
            if (this.closest('.general-product-text')) {
                productName = this.closest('.general-product-text').querySelector('h6 a').textContent;
                productPrice = this.closest('.general-product-text').querySelector('.general-product-price').textContent;
            } else if (this.closest('.product-info')) {
                productName = this.closest('.product-info').querySelector('.product-name').textContent;
                productPrice = this.closest('.product-info').querySelector('.price').textContent.trim().split(' ').pop();
            }
            
            // Animation effect
            this.classList.add('adding');
            this.textContent = 'Added!';
            
            // Reset button after animation
            setTimeout(() => {
                this.classList.remove('adding');
                this.textContent = 'Add to Cart';
            }, 1500);
            
            // Here you would typically add the product to a cart object or send to server
            console.log(`Added to cart: ${productName} - ${productPrice}`);
            
            // Show a toast notification
            showToast(`${productName} added to cart!`);
        });
    });
    
    // Image zoom functionality
    const zoomButtons = document.querySelectorAll('.image-zoom');
    
    zoomButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Get the image URL
            let imageUrl;
            if (this.closest('.general-product-pic')) {
                imageUrl = this.closest('.general-product-pic').querySelector('img').src;
            } else if (this.closest('.product-image')) {
                imageUrl = this.closest('.product-image').style.backgroundImage.slice(5, -2);
            }
            
            // Create modal for image zoom
            const modal = document.createElement('div');
            modal.classList.add('zoom-modal');
            modal.innerHTML = `
                <div class="zoom-modal-content">
                    <span class="zoom-close">&times;</span>
                    <img src="${imageUrl}" alt="Zoomed Image">
                </div>
            `;
            
            document.body.appendChild(modal);
            
            // Show modal with animation
            setTimeout(() => {
                modal.style.opacity = '1';
            }, 10);
            
            // Close modal when clicking close button or outside the image
            modal.querySelector('.zoom-close').addEventListener('click', () => {
                closeZoomModal(modal);
            });
            
            modal.addEventListener('click', (e) => {
                if (e.target === modal) {
                    closeZoomModal(modal);
                }
            });
        });
    });
    
    function closeZoomModal(modal) {
        modal.style.opacity = '0';
        setTimeout(() => {
            document.body.removeChild(modal);
        }, 300);
    }
    
    // Toast notification function
    function showToast(message) {
        // Create toast element if it doesn't exist
        let toast = document.querySelector('.toast-notification');
        
        if (!toast) {
            toast = document.createElement('div');
            toast.classList.add('toast-notification');
            document.body.appendChild(toast);
        }
        
        // Set message and show toast
        toast.textContent = message;
        toast.classList.add('show');
        
        // Hide toast after 3 seconds
        setTimeout(() => {
            toast.classList.remove('show');
        }, 3000);
    }
    
    // Add CSS for toast and zoom modal
    const style = document.createElement('style');
    style.textContent = `
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
        }
        
        .toast-notification.show {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
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
    `;
    
    document.head.appendChild(style);
    
    // Initialize - trigger "All Products" filter by default
    document.querySelector('.category-filter[data-category-id="all"]').click();
});
</script>




