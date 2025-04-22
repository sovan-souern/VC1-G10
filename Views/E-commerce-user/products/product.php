<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Skincare E-commerce">
    <meta name="keywords" content="skincare, beauty, natural, organic, cosmetics">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GlowUp | Skincare Essentials</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Css Styles -->
    <link rel="stylesheet" href="Views/E-commerce-user/assets/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="Views/E-commerce-user/assets/css/style.css" type="text/css">
    
    <style>
      
        
        /* Hero Banner Styles */
        .hero-banner {
            position: relative;
            overflow: hidden;
            margin-bottom: 40px;
        }
        
        .hero-banner .carousel-item {
            height: 500px;
        }
        
        .hero-banner .carousel-item img {
            object-fit: cover;
            height: 100%;
            width: 100%;
        }
        
        .hero-banner .carousel-caption {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            padding: 20px;
            max-width: 600px;
            margin: 0 auto;
            color: #333;
        }
        
        /* .hero-banner .carousel-caption h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 15px;
            color: #f8a4b9;
        }
         */
        .hero-banner .carousel-caption p {
            font-size: 1.2rem;
            margin-bottom: 20px;
            color: #555;
        }
        
        .hero-banner .btn-shop-now {
            background-color: #f8a4b9;
            color: white;
            padding: 10px 25px;
            border-radius: 30px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
        }
        
        .hero-banner .btn-shop-now:hover {
            background-color: #f5809e;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(248, 164, 185, 0.3);
        }
        
        
    
        
        /* Featured Products Carousel */
        .featured-products {
            margin-bottom: 40px;
        }
        
        .featured-products .section-title {
            margin-bottom: 30px;
            text-align: center;
        }
        
        .featured-products .section-title h2 {
            color: #f8a4b9;
        }
        
        .featured-carousel .carousel-control-prev,
        .featured-carousel .carousel-control-next {
            width: 40px;
            height: 40px;
            background-color: #f8a4b9;
            border-radius: 50%;
            top: 50%;
            transform: translateY(-50%);
            opacity: 0.8;
        }
        
        .featured-carousel .carousel-control-prev {
            left: -20px;
        }
        
        .featured-carousel .carousel-control-next {
            right: -20px;
        }
        
        .featured-carousel .carousel-control-prev:hover,
        .featured-carousel .carousel-control-next:hover {
            opacity: 1;
        }
        
        /* Testimonials Section */
        .testimonials {
            background-color: #f8f9fa;
            padding: 60px 0;
            margin-bottom: 40px;
        }
        
        .testimonials .section-title {
            text-align: center;
            margin-bottom: 40px;
        }
        
        .testimonials .section-title h2 {
            color: #f8a4b9;
        }
        
        .testimonial-card {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin: 15px;
            position: relative;
        }
        
        .testimonial-card .quote-icon {
            color: #f8a4b9;
            font-size: 2rem;
            position: absolute;
            top: 20px;
            right: 20px;
            opacity: 0.2;
        }
        
        .testimonial-content {
            font-style: italic;
            color: #666;
            margin-bottom: 20px;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
        }
        
        .testimonial-author img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 15px;
        }
        
        .testimonial-author-info h5 {
            margin-bottom: 5px;
            color: #333;
        }
        
        .testimonial-author-info p {
            color: #999;
            font-size: 0.9rem;
        }
        
        /* Brands Section */
        .brands {
            padding: 40px 0;
            margin-bottom: 40px;
        }
        
        .brands .section-title {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .brands .section-title h2 {
            color: #f8a4b9;
        }
        
        .brand-logo {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100px;
            padding: 15px;
            filter: grayscale(100%);
            opacity: 0.6;
            transition: all 0.3s ease;
        }
        
        .brand-logo:hover {
            filter: grayscale(0%);
            opacity: 1;
        }
        
        .brand-logo img {
            max-width: 100%;
            max-height: 70px;
        }
        
        /* Back to Top Button */
        .back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 40px;
            height: 40px;
            background-color: #f8a4b9;
            color: white;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 1000;
        }
        
        .back-to-top.show {
            opacity: 1;
            visibility: visible;
        }
        
        .back-to-top:hover {
            background-color: #f5809e;
            transform: translateY(-3px);
        }
        
        /* Responsive Adjustments */
        @media (max-width: 992px) {
            .hero-banner .carousel-item {
                height: 400px;
            }
            
            .hero-banner .carousel-caption h2 {
                font-size: 2rem;
            }
            
            .hero-banner .carousel-caption p {
                font-size: 1rem;
            }
        }
        
        @media (max-width: 768px) {
            .hero-banner .carousel-item {
                height: 350px;
            }
            
            .hero-banner .carousel-caption {
                max-width: 90%;
            }
            
            .hero-banner .carousel-caption h2 {
                font-size: 1.8rem;
            }
            
            
            
            .featured-carousel .carousel-control-prev,
            .featured-carousel .carousel-control-next {
                display: none;
            }
        }
        
        @media (max-width: 576px) {
            .hero-banner .carousel-item {
                height: 300px;
            }
            
            .hero-banner .carousel-caption h2 {
                font-size: 1.5rem;
            }
            
            .hero-banner .carousel-caption p {
                font-size: 0.9rem;
            }
        }

  .slideshow-container {
            display: none;
        }
        .dot-container{
            display: none;
        }
/* Shared Styles for Add to Cart Button */
.add-to-cart {
    background-color: #f8a4b9;
    color: white;
    border: none;
    padding: 8px 15px;
    margin-top: 10px;
    cursor: pointer;
    width: 100%;
    transition: all 0.3s ease;
}

.add-to-cart:hover {
    background-color: #f5809e;
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
    background-color: #ef4444; /* Red for out of stock */
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
    background-color: #ef4444;
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
    background: #f8a4b9;
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
    color: #f8a4b9;
}

.rating {
    color: #ffc107;
    margin-bottom: 5px;
}

.price {
    font-weight: bold;
    color: #f8a4b9;
    font-size: 1.1rem;
    transition: color 0.3s ease;
}

.discount-product-card:hover .price {
    color: #f5809e;
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
    background: #f8a4b9;
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
    color: #f8a4b9;
}

.general-product-price {
    font-weight: bold;
    font-size: 16px;
    color: #f8a4b9;
    transition: color 0.3s ease;
}

.general-product-item:hover .general-product-price {
    color: #f5809e;
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
    background: #f8a4b9;
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
    background: #f8a4b9;
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
    color: #f8a4b9;
}

.section-title h4::after {
    content: "";
    display: block;
    width: 50px;
    height: 3px;
    background-color: #f8a4b9;
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
    color: #f8a4b9;
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
    background: #f8a4b9;
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
</head>

<body>
    <!-- Hero Banner Section -->
    <section class="hero-banner">
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://images.unsplash.com/photo-1570172619644-dfd03ed5d881?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" class="d-block w-100" alt="Natural Skincare">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Natural Skincare Collection</h2>
                        <p>Discover the power of nature for radiant, healthy skin.</p>
                        <!-- <button class="btn btn-shop-now" href="/shop">Shop Now</button> -->
                        <a href="/shop" class="btn btn-shop-now">Shop Now</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1556228720-195a672e8a03?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" class="d-block w-100" alt="Anti-Aging Products">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Anti-Aging Solutions</h2>
                        <p>Clinically proven formulas to reduce fine lines and wrinkles.</p>
                        <button class="btn btn-shop-now">Shop Now</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1598440947619-2c35fc9aa908?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" class="d-block w-100" alt="Organic Skincare">  class="d-block w-100" alt="Organic Skincare">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Organic Skincare Sale</h2>
                        <p>Up to 40% off on all organic skincare products. Limited time only!</p>
                        <button class="btn btn-shop-now">Shop Now</button>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

   

    <!-- Featured Products Carousel -->
    <section class="featured-products">
        <div class="container">
            <div class="section-title">
                <h2>Bestselling Products</h2>
                <p>Our customers' favorites</p>
            </div>
            <div id="featuredCarousel" class="carousel slide featured-carousel" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="discount-product-card">
                                    <div class="discount-badge">-20%</div>
                                    <div class="product-image" style="background-image: url('https://images.unsplash.com/photo-1608248543803-ba4f8c70ae0b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1412&q=80')">
                                        <ul class="discount-product-hover">
                                            <li><a href="#" class="image-zoom"><span class="arrow_expand"></span></a></li>
                                            <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                            <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name">Vitamin C Serum</h5>
                                        <div class="price">
                                            <span class="original-price">$49.99</span>
                                            $39.99
                                        </div>
                                        <button class="add-to-cart">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="discount-product-card">
                                    <div class="discount-badge">-15%</div>
                                    <div class="product-image" style="background-image: url('https://i.pinimg.com/474x/a6/97/bd/a697bd0bfc20e23ac9e9f5ed9198abd0.jpg')">
                                        <ul class="discount-product-hover">
                                            <li><a href="#" class="image-zoom"><span class="arrow_expand"></span></a></li>
                                            <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                            <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name">Hyaluronic Acid</h5>
                                        <div class="price">
                                            <span class="original-price">$39.99</span>
                                            $33.99
                                        </div>
                                        <button class="add-to-cart">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="discount-product-card">
                                    <div class="discount-badge">-25%</div>
                                    <div class="product-image" style="background-image: url('https://images.unsplash.com/photo-1620916566398-39f1143ab7be?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80')">
                                        <ul class="discount-product-hover">
                                            <li><a href="#" class="image-zoom"><span class="arrow_expand"></span></a></li>
                                            <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                            <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name">Retinol Night Cream</h5>
                                        <div class="price">
                                            <span class="original-price">$59.99</span>
                                            $44.99
                                        </div>
                                        <button class="add-to-cart">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="discount-product-card">
                                    <div class="discount-badge">-30%</div>
                                    <div class="product-image" style="background-image: url('https://images.unsplash.com/photo-1616394584738-fc6e612e71b9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80')">
                                        <ul class="discount-product-hover">
                                            <li><a href="#" class="image-zoom"><span class="arrow_expand"></span></a></li>
                                            <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                            <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name">Gentle Exfoliating Scrub</h5>
                                        <div class="price">
                                            <span class="original-price">$34.99</span>
                                            $24.49
                                        </div>
                                        <button class="add-to-cart">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="discount-product-card">
                                    <div class="discount-badge">-10%</div>
                                    <div class="product-image" style="background-image: url('https://images.unsplash.com/photo-1601049541289-9b1b7bbbfe19?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1471&q=80')">
                                        <ul class="discount-product-hover">
                                            <li><a href="#" class="image-zoom"><span class="arrow_expand"></span></a></li>
                                            <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                            <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name">Hydrating Face Mask</h5>
                                        <div class="price">
                                            <span class="original-price">$29.99</span>
                                            $26.99
                                        </div>
                                        <button class="add-to-cart">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="discount-product-card">
                                    <div class="discount-badge">-35%</div>
                                    <div class="product-image" style="background-image: url('https://images.unsplash.com/photo-1608248543803-ba4f8c70ae0b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1412&q=80')">
                                        <ul class="discount-product-hover">
                                            <li><a href="#" class="image-zoom"><span class="arrow_expand"></span></a></li>
                                            <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                            <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name">Niacinamide Serum</h5>
                                        <div class="price">
                                            <span class="original-price">$45.99</span>
                                            $29.89
                                        </div>
                                        <button class="add-to-cart">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="discount-product-card">
                                    <div class="discount-badge">-15%</div>
                                    <div class="product-image" style="background-image: url('https://images.unsplash.com/photo-1631730359585-38a4935cbec4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80')">
                                        <ul class="discount-product-hover">
                                            <li><a href="#" class="image-zoom"><span class="arrow_expand"></span></a></li>
                                            <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                            <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name">Peptide Eye Cream</h5>
                                        <div class="price">
                                            <span class="original-price">$39.99</span>
                                            $33.99
                                        </div>
                                        <button class="add-to-cart">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="discount-product-card">
                                    <div class="discount-badge">-40%</div>
                                    <div class="product-image" style="background-image: url('https://images.unsplash.com/photo-1611930022073-84f3bb4caa2b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80')">
                                        <ul class="discount-product-hover">
                                            <li><a href="#" class="image-zoom"><span class="arrow_expand"></span></a></li>
                                            <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                            <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name">Skin Renewal Kit</h5>
                                        <div class="price">
                                            <span class="original-price">$99.99</span>
                                            $59.99
                                        </div>
                                        <button class="add-to-cart">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#featuredCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#featuredCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

  

    <!-- Your existing Shop Section -->
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

   
    <!-- Your existing Trend Section -->
    <section class="trend spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="trend__content">
                        <div class="section-title">
                            <h4>New Arrivals</h4>
                        </div>
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img src="https://images.unsplash.com/photo-1608248543803-ba4f8c70ae0b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1412&q=80" alt="Vitamin C Serum">
                            </div>
                            <div class="trend__item__text">
                                <h6>Brightening Vitamin C Serum</h6>
                               
                                <div class="product__price">$ 49.99</div>
                            </div>
                        </div>
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img src="https://i.pinimg.com/474x/a6/97/bd/a697bd0bfc20e23ac9e9f5ed9198abd0.jpg" alt="Hyaluronic Acid">
                            </div>
                            <div class="trend__item__text">
                                <h6>Hydrating Hyaluronic Acid</h6>
                                
                                <div class="product__price">$ 39.99</div>
                            </div>
                        </div>
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img src="https://images.unsplash.com/photo-1620916566398-39f1143ab7be?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80" alt="Retinol  alt="Retinol Cream">
                            </div>
                            <div class="trend__item__text">
                                <h6>Anti-Aging Retinol Cream</h6>
                               
                                <div class="product__price">$ 59.99</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="trend__content">
                        <div class="section-title">
                            <h4>Best Sellers</h4>
                        </div>
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img src="https://images.unsplash.com/photo-1616394584738-fc6e612e71b9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Exfoliating Scrub">
                            </div>
                            <div class="trend__item__text">
                                <h6>Gentle Exfoliating Scrub</h6>
                              
                                <div class="product__price">$ 34.99</div>
                            </div>
                        </div>
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img src="https://images.unsplash.com/photo-1631730359585-38a4935cbec4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80" alt="Eye Cream">
                            </div>
                            <div class="trend__item__text">
                                <h6>Peptide Eye Cream</h6>
                               
                                <div class="product__price">$ 39.99</div>
                            </div>
                        </div>
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img src="https://images.unsplash.com/photo-1601049541289-9b1b7bbbfe19?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1471&q=80" alt="Face Mask">
                            </div>
                            <div class="trend__item__text">
                                <h6>Hydrating Face Mask</h6>
                             
                                <div class="product__price">$ 29.99</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="trend__content">
                        <div class="section-title">
                            <h4>Organic Collection</h4>
                        </div>
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img src="https://images.unsplash.com/photo-1576426863848-c21f53c60b19?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Organic Cleanser">
                            </div>
                            <div class="trend__item__text">
                                <h6>Organic Facial Cleanser</h6>
                              
                                <div class="product__price">$ 32.99</div>
                            </div>
                        </div>
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img src="https://images.unsplash.com/photo-1570172619644-dfd03ed5d881?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Organic Toner">
                            </div>
                            <div class="trend__item__text">
                                <h6>Organic Rose Water Toner</h6>
                               
                                <div class="product__price">$ 28.99</div>
                            </div>
                        </div>
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img src="https://images.unsplash.com/photo-1598440947619-2c35fc9aa908?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Organic Oil">
                            </div>
                            <div class="trend__item__text">
                                <h6>Organic Facial Oil</h6>
                               
                                <div class="product__price">$ 45.99</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Brands Section -->
    <section class="brands">
        <div class="container">
            <div class="section-title">
                <h2>Our Trusted Brands</h2>
                <p>We partner with the best skincare brands in the industry</p>
            </div>
            <div class="row">
                <div class="col-md-2 col-4">
                    <div class="brand-logo">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/37/Neutrogena_logo.svg/2560px-Neutrogena_logo.svg.png" alt="Neutrogena">
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="brand-logo">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f7/CeraVe_logo.svg/2560px-CeraVe_logo.svg.png" alt="CeraVe">
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="brand-logo">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/La_Roche-Posay_logo.svg/2560px-La_Roche-Posay_logo.svg.png" alt="La Roche-Posay">
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="brand-logo">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/24/The_Ordinary_logo.svg/2560px-The_Ordinary_logo.svg.png" alt="The Ordinary">
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="brand-logo">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9c/Kiehl%27s_logo.svg/2560px-Kiehl%27s_logo.svg.png" alt="Kiehl's">
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="brand-logo">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Clinique_logo.svg/2560px-Clinique_logo.svg.png" alt="Clinique">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Back to Top Button -->
    <div class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script>
        // Back to Top Button
        const backToTopButton = document.querySelector('.back-to-top');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.add('show');
            } else {
                backToTopButton.classList.remove('show');
            }
        });
        
        backToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        
      
        
        // Image Zoom Functionality
        const imageZoomLinks = document.querySelectorAll('.image-zoom');
        
        imageZoomLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const imageUrl = this.getAttribute('data-image');
                
                // Create modal for image zoom
                const modal = document.createElement('div');
                modal.style.position = 'fixed';
                modal.style.top = '0';
                modal.style.left = '0';
                modal.style.width = '100%';
                modal.style.height = '100%';
                modal.style.backgroundColor = 'rgba(0,0,0,0.9)';
                modal.style.display = 'flex';
                modal.style.alignItems = 'center';
                modal.style.justifyContent = 'center';
                modal.style.zIndex = '1050';
                
                const img = document.createElement('img');
                img.src = imageUrl;
                img.style.maxWidth = '90%';
                img.style.maxHeight = '90%';
                img.style.objectFit = 'contain';
                
                const closeBtn = document.createElement('span');
                closeBtn.innerHTML = '&times;';
                closeBtn.style.position = 'absolute';
                closeBtn.style.top = '20px';
                closeBtn.style.right = '30px';
                closeBtn.style.color = 'white';
                closeBtn.style.fontSize = '40px';
                closeBtn.style.fontWeight = 'bold';
                closeBtn.style.cursor = 'pointer';
                
                closeBtn.addEventListener('click', function() {
                    document.body.removeChild(modal);
                });
                
                modal.addEventListener('click', function(e) {
                    if (e.target === modal) {
                        document.body.removeChild(modal);
                    }
                });
                
                modal.appendChild(img);
                modal.appendChild(closeBtn);
                document.body.appendChild(modal);
            });
        });
    </script>
</body>
</html>