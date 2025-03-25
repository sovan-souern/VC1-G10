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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="Views/E-commerce-user/assets/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="Views/E-commerce-user/assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="Views/E-commerce-user/assets/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="Views/E-commerce-user/assets/css/style.css" type="text/css">
</head>

<body>
<section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="row">
                        <?php
                        if (empty($products)) {
                            echo '<p>No products available.</p>';
                        } else {
                            foreach ($products as $product) {
                                $price = number_format($product['price'], 2);
                                $image = !empty($product['image']) ? htmlspecialchars($product['image']) : 'https://via.placeholder.com/150';
                                $productLink = "product-page.php?id=" . htmlspecialchars($product['product_id']);
                        ?>
                                <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                                    <div class="product__item">
                                        <div class="product__item__pic">
                                            <img src="<?php echo $image; ?>" alt="<?php echo htmlspecialchars($product['product_name']); ?>" style="width: 100%; height: 300px; object-fit: cover;">
                                            <ul class="product__hover">
                                                <li><a href="<?php echo $image; ?>" class="image-popup"><span class="arrow_expand"></span></a></li>
                                                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__item__text">
                                            <h6><a href="<?php echo $productLink; ?>"><?php echo htmlspecialchars($product['product_name']); ?></a></h6>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="product__price"><a href="view-card?=<?php echo $productLink; ?>">$ <?php echo $price; ?></a></div>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                        ?>
                        <div class="col-lg-12 text-center">
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
                            <h4>Best seller</h4>
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
    <!-- Shop Section End -->

    <!-- Js Plugins -->
    <script src="Views/E-commerce-user/assets/js/jquery-3.3.1.min.js"></script>
    <script src="Views/E-commerce-user/assets/js/main.js"></script>
</body>

</html>


<style>
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

    .rating {
        color: gold;
        font-size: 12px;
    }

    .product__price {
        font-weight: bold;
        font-size: 16px;
    }
    .shop.spad {
            /* padding: 30px 0; */
        }

        .product__item {
            position: relative;
            background: #fff;
            transition: all 0.3s;
            margin-bottom: 20px;
            border-radius: 5px;
            overflow: hidden;
        }

        .product__item:hover .product__hover {
            opacity: 1;
            visibility: visible;
        }

        .product__item__pic {
            position: relative;
            width: 100%;
            height: 300px; 
        }

        .product__item__pic img {
            width: 100%;
            height: 100%;
            object-fit: cover; 
            display: block;
        }

        .product__hover {
            position: absolute;
            /* right: 20px;  */
            /* top: 20px; */
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .product__hover li {
            list-style: none;
            /* margin-bottom: 10px; */
        }

        .product__hover li a {
            display: block;
            width: 40px;
            
            background: #ffffff;
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            transition: all 0.3s;
            text-decoration: none;
        }

        .product__hover li a:hover {
            background: #e7ab3c;
            color: #ffffff;
        }

        .product__hover li a span {
            font-size: 16px;
            color: #111111;
            /* line-height: 40px; */
        }
        .product__item {
            transition: all 0.3s ease;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }   
        .product__hover li a:hover span {
            color: #ffffff;
        }

        .product__item__text {
            padding: 15px;
            text-align: center;
        }

        .product__item__text h6 {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .product__item__text h6 a {
            color: #333;
            text-decoration: none;
        }

        .product__item__text h6 a:hover {
            color: #e7ab3c;
        }

        .rating {
            color: #f5c518;
            font-size: 12px;
            margin-bottom: 10px;
        }

        .product__price {
            font-weight: bold;
            font-size: 16px;
            color: #333;
        }

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