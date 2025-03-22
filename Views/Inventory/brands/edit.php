<div class="container mt-4">
        <div class="card p-4">
            <h4>Edit Brand</h4>
            <form class="my-3" action="/brand/update" method="POST" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?= $brand['id'] ?>">
            <input type="hidden" name="existing_image" value="<?= $brand['brand_image'] ?>">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label>Brand Name</label>
                    <input type="text" class="form-control" name="brand_name" value="<?= $brand['brand_name'] ?>">
                </div>
                <div class="col-md-6 " >
                    <label class="">Brand Content</label>
                    <textarea class="form-control h-75 mt-2 p-4" style="height: 100px;" name="description"><?= $brand['description'] ?></textarea>
                </div>
                <div class="col-lg-6 md-3">
                    <div class="form-group">
                        <label>Brand Image</label>
                        <div class="image-upload h-75">
                            <input type="file" name="image">
                            <div class="image-uploads">
                            <img src="../../../<?= ($brand["brand_image"]) ?>" alt="product" style="max-width: 60px ; height: 60px;">
                                <h4>Drag and drop a file to upload</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="button" class="btn btn-warning">Back</button>
                              </div>
                </div>
            </form>
        </div>
    </div>
