<?php require __DIR__ . '/../layout/header.php'; ?>
<div class="container">
    <form action="/department/store" method="POST">
        <div class="form-group">
            <label for="name" class="form-label">Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description" class="form-label">Description:</label>
            <input type="text" name="description" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success mt-3">Submit</button>
    </form>
</div>
<?php require __DIR__ . '/../layout/footer.php'; ?>
