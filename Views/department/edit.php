<?php require __DIR__ . '/../layout/header.php'; ?>
<div class="main-panel">
    <div class="container">
        <?php if (isset($error)): ?>
            <div class="alert alert-danger">
                <?= htmlspecialchars($error) ?>
            </div>
        <?php endif; ?>

        <form action="/department/update?id=<?= $department['id'] ?>" method="POST">
            <div class="form-group">
                <label for="name" class="form-label">Name:</label>
                <input type="text" name="name" class="form-control" value="<?= htmlspecialchars($department['name']) ?>" required>
            </div>
            <div class="form-group">
                <label for="description" class="form-label">Description:</label>
                <input type="text" name="description" class="form-control" value="<?= htmlspecialchars($department['description']) ?>" required>
            </div>
            <button type="submit" class="btn btn-success mt-3">Update</button>
        </form>
    </div>
</div>
<?php require __DIR__ . '/../layout/footer.php'; ?>