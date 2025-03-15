<div class="page p-4">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Product Edit Category</h4>
                <h6>Edit Product Category</h6>
            </div>
        </div>

        <form class="my-3" action="/category/update?id=<?= $categories['category_id'] ?>" method="POST" enctype="multipart/form-data">

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="name">Category Name</label>
                                <input type="text" id="name" name="name" value="<?= $categories['category_name'] ?>" required>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" class="form-control" required><?= $categories['description'] ?></textarea>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="image">Category Image</label>
                                <div class="image-upload">
                                    <input type="file" name="image" id="image" class="form-control" accept="image/*">
                                    <div class="image-uploads">
                                        <?php if (!empty($categories["image_url"])): ?>
                                            <img src="<?= htmlspecialchars($categories["image_url"]) ?>" alt="Category image" style="max-width: 100%; height: auto;">
                                        <?php else: ?>
                                            <h4 class="form-text text-muted">No image uploaded</h4>
                                        <?php endif; ?>
                                        <h4 class="form-text text-muted">Drag and drop a file to upload</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-submit me-2">Submit</button>
                            <a href="/category" class="btn btn-cancel">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
