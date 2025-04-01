<div class="container mt-4">
    <div class="card p-4">
        <h4>Add Product</h4>
        <form class="my-3" action="/products/store" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="input-name ">
                    <label for="product_name">Product Name</label>
                    <input type="text" name="product_name" id="product_name" class="form-control" required>
                </div>
                <div class="input-Quantity">
                    <label for="quantity">Quantity</label>
                    <input type="number" name="quantity" id="quantity" class="form-control" min="0" required>
                </div>
                <div class="input-price">
                    <label for="price">Price</label>
                    <input type="number" name="price" id="price" class="form-control" step="0.01" min="0" required>
                </div>
                <div class="input-category">
                    <label for="category_id">Category</label>
                    <select name="category_id" id="category_id" class="form-select" required>
                        <option value="">Choose Category</option>
                        <?php foreach ($categories as $category) : ?>
                            <option value="<?php echo $category['category_id']; ?>">
                                <?php echo htmlspecialchars($category['category_name']); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="input-brand">
                    <label for="brand_id">Brand</label>
                    <select name="brand_id" id="brand_id" class="form-select">
                        <option value="">Choose Brand (Optional)</option>
                        <?php foreach ($brands as $brand) : ?>
                            <option value="<?php echo $brand['id']; ?>">
                                <?php echo htmlspecialchars($brand['brand_name']); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="product-content">
                    <label>Product Content</label>
                    <textarea name="product_content" id="product_content" class="form-control mt-2 p-4" style="height: 100px;"  rows="3"></textarea>
                </div>
                <div class="input-group">
                    <label>Product Image</label >
                    <div class="form-group">
                        <div class="image-upload">
                            <input type="file" name="image" id="image" class="form-control" accept="image/*">
                            <div class="image-uploads">
                                <img src="/Views/assets/img1/icons/upload.svg" alt="img">
                                <h4 class="form-text text-muted">Drag and drop a file to upload</h4>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="col-md-12 mb-3">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="button" class="btn btn-warning" onclick="window.history.back()">Back</button>
                </div>
            </div>
        </form>
    </div>
</div>

<style>
    .row {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        grid-template-areas: 
            "name quantity price"
            "category brand image"
            "content content image"
            "buttons buttons image"; 
        gap: 10px;
    }

    .input-name { grid-area: name; }
    .input-quantity { grid-area: quantity; }
    .input-price { grid-area: price; }
    .input-category { grid-area: category; }
    .input-brand { grid-area: brand; }
    .input-group { grid-area: image; }
    .product-content { grid-area: content; }
    .button-group { grid-area: buttons; text-align: center; }

    /* Ensure the image section takes up the same height as the content and brand sections */
    .input-group {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    .form-group{
        height:68%;
        
    }
    .form-group{
        position: relative;
        bottom: 37px;
    }

    .image-upload {
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .image-uploads {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .image-uploads img {
        max-width: 100%;
        height: auto;
    }

    .image-uploads h4 {
        margin: 0;
    }
    label{
        font-weight: bold;
    }
    .button-group { 
        grid-area: buttons; 
        text-align: left; /* Align buttons to the left */
    }
    @media (max-width: 600px) {
        .row {
            grid-template-columns: 1fr;
            grid-template-areas: 
                "name"
                "quantity"
                "price"
                "category"
                "brand"
                "content"
                "image"
                "buttons";
        }
        .form-group{
        height: 22vh;
        
    }
    .form-group{
        position: relative;
        top: 0px;
    }

    }   

    /* @media (min-width: 601px) and (max-width: 1024px) {
  body {
    background-color: lightgreen;
  }
} */
</style>