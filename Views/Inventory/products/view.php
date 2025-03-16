<div class="page p-4">
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

            <div class="col-lg-4 col-sm-12">

                <div class="card p-3" style="width: 18rem;">
                    <?php if (!empty($products['image'])) : ?>
                        <img class="rounded" src="../../../<?php echo ($products['image']); ?>" alt="Product Image" />
                        <h3 class="mt-2" style="text-align: center;"><?php echo ($products['product_name']); ?> </h3>
                    <?php else : ?>
                        <img src="/images/default-image.jpg" width="175" height="200" alt="No Image Available" />
                    <?php endif; ?>
                    <div class="card-body">

                    </div>
                </div>

            </div>
        </div>

        <button type="button" class="btn btn-warning" href="">Back</button>
    </div>
</div>
<div class="slider-product">