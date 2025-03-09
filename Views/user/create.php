<?php require __DIR__ . '/../layout/header.php' ?>
<div class="main-panel">
    <div class="container">
        <form action="/user/store" method="POST">
            <div class="form-group">
                <label for="" class="form-label">Name:</label>
                <input type="text" value="" name="name" class="form-control">
            </div>
            <button type="submit" class="btn btn-success mt-3">Submit</button>
        </form>
    </div>
</div>
<?php require __DIR__ . '/../layout/footer.php' ?>