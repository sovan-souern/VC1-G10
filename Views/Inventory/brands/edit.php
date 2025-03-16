<div class="container mt-4">
    <div class="card p-4">
        <h4>Edit Brand</h4>
        <form class="my-3" action="/brand/update" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $brand['id'] ?>">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label>Brand Name</label>
                    <input type="text" name="brand_name" class="form-control" value="<?= $brand['brand_name'] ?>">
                </div>
                <div class="col-md-6">
                    <label>Brand Content</label>
                    <textarea name="description" class="form-control mt-2 p-4" style="height: 100px;"><?= $brand['description'] ?></textarea>
                </div>
                <div class="col-lg-6 md-3">
                    <div class="form-group">
                        <label>Brand Image</label>
                        <div class="image-upload">
                            <input type="file" name="image" class="form-control">
                            <div class="image-uploads">
                                <?php if (!empty($brand["brand_image"])): ?>
                                    <img src="../../../<?=($brand["brand_image"]) ?>" alt="product" style="max-width: 20%; height: 50%;">
                                <?php else: ?>
                                    <h4 class="form-text text-muted">No image uploaded</h4>
                                <?php endif; ?>
                                <h4 class="form-text text-muted">Drag and drop a file to upload</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="button" class="btn btn-warning" onclick="window.history.back()">Back</button>
                </div>
            </div>
        </form>
    </div>
</div>
