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
    <link rel="stylesheet" href="Views/E-commerce-user/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="Views/E-commerce-user/assets/css/style.css">
    
    <style>
        .product__item {
            transition: all 0.3s ease;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
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

        .label.new { background: #2196f3; }
        .label.sale { background: #e91e63; }
        .label.stockout { background: #666; }

        .categories__accordion .card {
            border: none;
            margin-bottom: 10px;
        }

        @media (max-width: 768px) {
            .product__item__pic {
                height: 200px;
            }
        }
    </style>
</head>
<body>
    <section class="shop spad py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 mb-4">
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
                                                    <li><a href="#">Moisturizers</a></li>
                                                    <li><a href="#">Cleansers</a></li>
                                                    <li><a href="#">Serums</a></li>
                                                    <li><a href="#">Masks</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Add more categories as needed -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9 col-md-8">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="product__item">
                                <div class="product__item__pic" style="background-image: url('https://i.pinimg.com/474x/89/4b/e1/894be1215c80e3965b0491231bc6075d.jpg')">
                                    <div class="label new">New</div>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="product-page.php?id=1">Furry Hooded Parka</a></h6>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product__price">$59.00</div>
                                </div>
                            </div>
                        </div>
                        <!-- Add more product items here following the same structure -->
                        <div class="col-12 text-center mt-4">
                            <div class="pagination__option">
                                <a href="#" class="btn btn-outline-primary mx-1">1</a>
                                <a href="#" class="btn btn-outline-primary mx-1">2</a>
                                <a href="#" class="btn btn-outline-primary mx-1">3</a>
                                <a href="#" class="btn btn-outline-primary mx-1"><i class="fa fa-angle-right"></i></a>
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