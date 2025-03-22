<!-- <div class="page p-4">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Product Details</h4>
                <h6>Full details of a product</h6>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="productdetails">
                            <ul class="product-bar">
                                <li>
                                    <h4>Product</h4>
                                    <h6><?php echo ($products['product_name']); ?> </h6>
                                </li>
                                <li>
                                    <h4>Category</h4>
                                    <h6>
                                    <?php foreach ($categories as $key => $category) : ?>
                                            <?php if ($category['category_id'] === $products["category_id"]) {
                                                echo $category['category_name'];
                                            } ?>
                                        <?php endforeach; ?>
                                    </h6>
                                </li>
                                <li>
                                    <h4>Brand</h4>
                                    <h6>
                                        <?php foreach ($brands as $brand) : ?>
                                            <?php if ($brand["id"] == $products["brand_id"]) {
                                                echo ($brand["brand_name"]);
                                            } ?>
                                        <?php endforeach; ?>
                                    </h6>
                                </li>
                                <li>
                                    <h4>Quantity</h4>
                                    <h6><?php echo ($products['quantity']); ?> </h6>
                                </li>
                                <li>
                                    <h4>Price</h4>
                                    <h6><?php echo ($products['price']); ?> </h6>
                                </li>
                                <li>
                                    <h4>Status</h4>
                                    <h6>Instock</h6>
                                </li>
                                <li>
                                    <h4>Description</h4>
                                    <h6><?php echo ($products['product_content']); ?> </h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-12 v-img "  >

                <div class="card p-3">
                    <?php if (!empty($products['image'])) : ?>
                        <img class="rounded" src="../../../<?php echo ($products['image']); ?>" alt="Product Image" />
                        <h3 class="mt-2" style="text-align: center;"><?php echo ($products['product_name']); ?> </h3>
                    <?php else : ?>
                        <img src="/images/default-image.jpg"  alt="No Image Available" />
                    <?php endif; ?>
                    <div class="card-body">

                    </div>
                </div>

            </div>
        </div>

        <button type="button" class="btn btn-warning" onclick="window.history.back()">Back</button>
    </div>
</div>
<div class="slider-product">

<style>
    .v-img{
        width: 15rem;
        
    }
     @media (max-width: 680px) {
        .v-img{
            width: 100%;
        }
        
     }
</style> -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }

        .container {
            display: flex;
            flex-direction: column;
            max-width: 95%;
            margin: auto;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .image-section {
            padding: 15px;
            text-align: center;
        }

        .image-section img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            transition: transform 0.3s;
        }

        .image-section img:hover {
            transform: scale(1.05);
        }

        .info-section {
            padding: 15px;
        }

        .info-section h1 {
            font-size: 20px;
            /* Smaller font for mobile */
            margin: 0;
        }

        .info-section p {
            margin: 8px 0;
            color: #777;
            font-size: 14px;
            /* Smaller font for mobile */
        }

        .rating,
        .quantity,
        .price,
        .total-price {
            margin: 8px 0;
        }

        .price {
            font-size: 22px;
            /* Smaller font for mobile */
            color: #333;
        }

        .total-price {
            font-size: 18px;
            /* Smaller font for mobile */
            margin: 15px 0;
        }

        .add-to-cart {
            background-color: #007bff;
            color: white;
            padding: 10px 10px;
        
            border: none;
            border-radius: 5px;
           
            cursor: pointer;
            font-size: 16px;
          
            transition: background-color 0.3s, transform 0.2s;
            
            width: 25%;
            
            box-shadow: 0 4px 8px rgba(0, 123, 255, 0.3);
      
            margin-top: 20px;
        }

        .add-to-cart:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
            /* Lift the button on hover */
        }

        .add-to-cart:active {
            background-color: #004085;
            /* Darker shade when pressed */
            transform: translateY(1px);
            /* Pressed effect */
        }

        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background: white;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
        }

        .close {
            cursor: pointer;
            color: red;
            font-weight: bold;
            margin-top: 10px;
            font-size: 14px;
        }

        @media (min-width: 600px) {
            .container {
                flex-direction: row;
            }

            .image-section,
            .info-section {
                flex: 1;
            }

            .info-section {
                padding-left: 40px;
            }
        }

        @media (max-width: 400px) {
            .container {
                display: flex;
            }

            .image-section {
                width: 80%;
                display: flex;
                padding-left: 100px;
            }

            .info-section h1 {
                font-size: 18px;
                /* Even smaller font for very small screens */
            }

            .price,
            .total-price {
                font-size: 16px;
                /* Smaller font for mobile */
            }

            .add-to-cart {
                margin-top: 20px;
                font-size: 12px;
                /* Smaller button text for mobile */
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="image-section">
            <img class="rounded" src="../../../<?php echo ($products['image']); ?>" alt="Product Image" />
        </div>
        <div class="info-section">
            <h1><?php echo ($products['product_name']); ?></h1>
            <p class="rating">★★★★☆ (8 reviews)</p>
            <p class="total-price"><strong>Price: $</strong><span id="total-price"><?php echo ($products['price']); ?></span></p>
           
            <div class="quantity">
                <p><strong>Quantity:</strong> <?php echo ($products['quantity']); ?></p>
            </div>
            <p>
                <strong>Category:</strong>
                <?php foreach ($categories as $key => $category) : ?>
                    <?php if ($category['category_id'] === $products["category_id"]) {
                                                    echo $category['category_name'];} ?>
                <?php endforeach; ?>
                    </p>
            <p><strong>Brand:</strong>  <?php foreach ($brands as $brand) : ?>
                                            <?php if ($brand["id"] == $products["brand_id"]) {
                                                echo ($brand["brand_name"]);
                                            } ?>
                                        <?php endforeach; ?></p>
            <p><strong>Description:</strong> <?php echo ($products['product_content']); ?></p>
            <button class="add-to-cart" onclick="window.history.back()">Back</button>
        </div>
    </div>  



</body>

</html> 