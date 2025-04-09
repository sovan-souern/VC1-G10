<div class="container mt-4">
    <div class="card p-4">
        <h4>Edit Category</h4>
        <form class="my-3" action="/category/update?id=<?= $categories['category_id'] ?>" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="input-name">
                    <label>Category Name</label>
                    <input type="text" id="name" name="name" class="form-control" value="<?= $categories['category_name'] ?>" required>
                </div>
                <div class="input-description">
                    <label>Description</label>
                    <textarea name="description" id="description" class="form-control" rows="4" required><?= $categories['description'] ?></textarea>
                </div>
                <div class="input-image">
                    <div class="form-group" style="height: 70%;">
                        <label>Category Image</label>
                        <div class="image-upload">
                            <input type="file" name="image" id="image" class="form-control-file" accept="image/*">
                            <div class="image-uploads">
                                <?php if (!empty($categories["image_url"])): ?>
                                    <img src="<?= htmlspecialchars($categories["image_url"]) ?>" alt="Category image">
                                <?php else: ?>
                                    <h4 class="form-text text-muted">No image uploaded</h4>
                                <?php endif; ?>
                                <h4 class="form-text text-muted">Drag and drop a file to upload</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="button-group">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <a href="/category" class="btn btn-warning">Cancel</a>
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
            "name name image"
            "description description image"
            "buttons buttons image";
        gap: 10px;
    }

    .input-name {
        grid-area: name;
    }

    .input-description {
        grid-area: description;
    }

    .input-image {
        grid-area: image;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 100%;
    }

    .button-group {
        grid-area: buttons;
        display: flex;
        justify-content: flex-start; 
        text-align: left; 
        gap: 10px;
    }

    label {
        font-weight: bold;
        margin-bottom: 5px;
    }

    .image-upload {
        height: 100%;
    }

    .image-uploads {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin-top: 10px;
        flex-grow: 1; 
    }

    .image-uploads img {
        max-width: 100%;
        height: auto;
        width: 100px;
    }

    @media (max-width: 600px) {
        .row {
            grid-template-columns: 1fr;
            grid-template-areas:
                "name"
                "description"
                "image"
                "buttons";
        }
        .image-uploads img {
            width: 70px;
        }
    }
<<<<<<< HEAD
<<<<<<< HEAD
</style>
=======
</style>
>>>>>>> feature/user-home
=======
</style>
>>>>>>> origin/main
