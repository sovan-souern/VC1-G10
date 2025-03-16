<div class="container mt-4">
    <div class="card p-4">
        <h4>Add Product</h4>
        <form class="my-3" action="/products/update?id=<?= $product['product_id'] ?>" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="product_name">Product Name</label>
                    <input type="text" name="product_name" id="product_name" class="form-control" value="<?= $product["product_name"] ?>">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="quantity">Quantity</label>
                    <input type="number" value="<?= $product["price"] ?>" name="quantity" id="quantity" class="form-control" step="0.01" min="0">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="price">Price</label>
                    <input type="number" name="price" id="price" class="form-control" step="0.01" min="0" value="<?= $product["price"] ?>">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="category_id">Category</label>
                    <select name="category_id" id="category_id" class="form-select" required>
                        <option value="">Choose Category</option>
                        <?php foreach ($categories as $category) : ?>
                            <option value="<?php echo $category['category_id']; ?>" <?php echo $category['category_id'] == $product['category_id'] ? 'selected' : ''; ?>>
                                <?php echo htmlspecialchars($category['category_name']); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="brand_id">Brand</label>
                    <select name="brand_id" id="brand_id" class="form-select">
                        <option value="">Choose Brand (Optional)</option>
                        <?php foreach ($brands as $brand) : ?>
                            <option value="<?php echo $brand['id']; ?>" <?php echo $brand['id'] == $product['brand_id'] ? 'selected' : ''; ?>>
                                <?php echo htmlspecialchars($brand['brand_name']); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label>Product Content</label>
                    <textarea name="product_content" value=" " id="product_content" class="form-control mt-2 p-4" style="height: 100px;" rows="3"> <?= $product["product_content"] ?></textarea>
                </div>
                <div class="col-lg-6 md-3">
                    <div class="form-group">
                        <label>Product Image</label>
                        <div class="image-upload">
                            <input type="file" name="image" id="image" class="form-control" accept="image/*">
                            <div class="image-uploads">
                                <?php if (!empty($product["image"])): ?>
                                    <img src="<?= htmlspecialchars($product["image"]) ?>" alt="product" style="max-width: 100%; height: auto;">
                                <?php else: ?>
                                    <h4 class="form-text text-muted">No image uploaded</h4>
                                <?php endif; ?>
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