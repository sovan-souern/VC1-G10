<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .offcanvas{
            display: none;
        }
        .container-fluid{
            display: none;
        }
       footer{
            display: none;
        }
        .dot-container{
            display: none;
        }
       header{
            display: none;
        }
        .slideshow-container{
            display: none;
        }
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            font-size: 2.5rem;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 30px;
            text-align: center;
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease;
            margin-bottom: 20px;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .slideshow-container {
            position: relative;
            max-width: 100%;
        }
        .mySlides {
            display: none;
        }
        .mySlides:first-child {
            display: block;
        }
        .product-image {
            width: 100%;
            height: 350px;
            object-fit: cover;
            border-radius: 15px 15px 0 0;
        }
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            padding: 10px;
            color: white;
            font-weight: bold;
            font-size: 20px;
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 5px;
            user-select: none;
            transition: background-color 0.3s ease;
        }
        .prev {
            left: 10px;
        }
        .next {
            right: 10px;
        }
        .prev:hover, .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }
        .card-body {
            padding: 30px;
            text-align: center;
        }
        
        .price {
            font-size: 1.6rem;
            font-weight: 600;
            color: #e74c3c;
            margin-bottom: 15px;
        }
        .category, .stock-status {
            font-size: 1rem;
            color: #7f8c8d;
            margin-bottom: 10px;
        }
        .description-title {
            font-size: 1.0rem;
            font-weight: 600;
            color: #2c3e50;
            margin-top: 20px;
            margin-bottom: 15px;
        }
        .description {
            font-size: 1rem;
            color: #666;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        .btn-custom {
            background-color: #ff3f3f;
            color: white;
            border: none;
            border-radius: 25px;
            padding: 12px 30px;
            /* font-size: 1rem;
            font-weight: 500;
            text-transform: uppercase;
            transition: background-color 0.3s ease, transform 0.2s ease;
            margin: 5px; */
        }
        .btn-custom:hover {
            background-color: #ff3f3f;
            transform: scale(1.05);
        }
        .quantity-selector {
            margin: 20px 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .quantity-selector label {
            margin-right: 10px;
            font-weight: 500;
            color: #2c3e50;
        }
        .quantity-selector input {
            width: 60px;
            padding: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
            text-align: center;
        }
        .reviews {
            margin-top: 30px;
            text-align: left;
        }
        .reviews p {
            font-size: 0.1rem;
            color: #666;
            margin-bottom: 10px;
        }
        .reviews p strong {
            color: #2c3e50;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            h1 {
                font-size: 2rem;
            }
            .card {
                margin: 0 10px;
            }
            .product-image {
                height: 250px;
            }
            .card-title {
                font-size: 1.5rem;
            }
            .price {
                font-size: 1.4rem;
            }
            .btn-custom {
                padding: 10px 20px;
                font-size: 0.9rem;
            }
            .quantity-selector input {
                width: 50px;
            }
        }
        @media (max-width: 576px) {
            h1 {
                font-size: 1.8rem;
            }
            .product-image {
                height: 200px;
            }
            .card-body {
                padding: 20px;
            }
            .card-title {
                font-size: 1.3rem;
            }
            .price {
                font-size: 1.2rem;
            }
            .description {
                font-size: 0.9rem;
            }
            .btn-custom {
                padding: 8px 15px;
                font-size: 0.8rem;
            }
        }
    </style>
    <style>
        .price-container {
            margin: 20px 0;
        }

        .original-price {
            font-size: 1.0rem;
            color: #555;
        }

        .discounted-price {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .price-label {
            margin-right: 10px;
        }

        .text-danger {
            color: #e74c3c;
            font-weight: bold;
        }

        .text-muted {
            color: #6c757d;
        }
    </style>
</head>
<body>

        

<div class="container">
    <!-- <h1 >Product Detail</h1> -->
    
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <?php if ($products) : ?> <!-- Check if products are present -->
                    <img class="card-img-top product-image" src="<?php echo htmlspecialchars($products['image']); ?>" alt="<?php echo htmlspecialchars($products['product_name']); ?>">
                    <div class="card-body text-center">
                        <h2 class="card-title"><?php echo htmlspecialchars($products['product_name']); ?></h2>
                        
                        <div class="price-container">
                            <p class="original-price">
                                <span class="price-label"><b>Original Price:</b></span>
                                <span class="text-muted"><s>$<?php echo htmlspecialchars(number_format($products['price'], 2)); ?></s></span>
                            </p>
                            
                            <?php 
                                $discountedPrice = $products['price'];
                                if (!empty($products['discount_percentage'])) {
                                    $discountedPrice -= ($discountedPrice * ($products['discount_percentage'] / 100)); 
                            ?>
                                    <p class="discounted-price">
                                        <span class="price-label">Discounted Price:</span>
                                        <span class="text-danger">$<?php echo htmlspecialchars(number_format($discountedPrice, 2)); ?></span>
                                    </p>
                                    <p class="text-danger"><strong><?php echo htmlspecialchars($products['discount_percentage']); ?>% off</strong></p>
                            <?php } else { ?>
                                    <p class="discounted-price">
                                        <span class="price-label">Price:</span>
                                        <span>$<?php echo htmlspecialchars(number_format($products['price'], 2)); ?></span>
                                    </p>
                            <?php } ?>
                        </div>

                        <p><b>Category:</b> <?php echo htmlspecialchars($products['category_name'] ?? $products['category_id']); ?></p>

                        <p><b>Stock Status:</b> <?php echo $products['quantity'] > 0 ? 'In Stock' : 'Out of Stock'; ?></p>

                        <h6 class="mt-3"><b>Description:</b> <?php echo htmlspecialchars($products['product_content']); ?></h6>

                        <button class="btn-custom" onclick="window.history.back()">Back</button>
                    </div>
                <?php else : ?>
                    <div class="card-body text-center">
                        <p>No product details available.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
