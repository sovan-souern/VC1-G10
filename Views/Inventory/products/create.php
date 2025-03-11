<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body> -->
<?php foreach ($categories as $key => $category) : ?>
    <?php echo $category["category_name"] ?>
    <!-- <?php var_dump($category) ?> -->

<?php endforeach ?>
<div class="container mt-4">
    <div class="card p-4">
        <h4>Add Product</h4>
        <form class="my-3" action="product/store" method="">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label>Product Name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-4 mb-3">
                    <label>Quantity</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-4 mb-3">
                    <label>Price</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-4 mb-3">
                    <label>Category</label>
                    <select class="form-select">
                        <option>Choose Category</option>
                        <?php foreach ($categories as $key => $category) : ?>

                            <option><?php echo $category["category_name"] ?></option>

                        <?php endforeach ?>
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label>Brand</label>
                    <select class="form-select">
                        <option>Choose Brand</option>
                        <?php foreach ($brands as $key => $brand) : ?>

<option><?php echo $brand["brand_name"] ?></option>

<?php endforeach ?>
                        <!-- <option>Brand A</option> -->
                    </select>
                </div>
              
                <div class="col-md-4 mb-3">
                    <label>Discount</label>
                    <select class="form-select">
                        <option>None</option>
                        <option>10%</option>
                    </select>
                </div>
                <div class="col-md-6  ">
                    <label class="">Product Content</label>
                    <textarea class="form-control mt-2 p-4 " style="height: 100px;"></textarea>
                </div>
                <div class="col-lg-6 md-3">
                    <div class="form-group">
                        <label> Product Image</label>
                        <div class="image-upload  ">
                            <input type="file">
                            <div class="image-uploads ">
                                <img src="/Views/assets/img1/icons/upload.svg" alt="img">
                                <h4>Drag and drop a file to upload</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6    ">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="button" class="btn btn-warning">Back</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- </body>
</html> -->