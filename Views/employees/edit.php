<?php require __DIR__ . '/../layout/header.php' ?>
<div class="main-panel">
    <div class="container">
        <form action="/employees/update?id=<?= $employee['id'] ?>" method="POST">
            <div class="form-group">
                <label for="name" class="form-label">Name:</label>
                <input type="text" name="name" class="form-control" value="<?= $employee['name'] ?>" required>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Email:</label>
                <input type="text" step="0.01" name="email" class="form-control" value="<?= $employee['email'] ?>" required>
            </div>
            <div class="form-group">
                <label for="phone" class="form-label">Phone Number:</label>
                <input type="number" name="phone" class="form-control" value="<?= $employee['phone'] ?>" required>
            </div>
            <div class="form-group">
                <label for="department_id" class="form-label">Department:</label>
                <select name="department_id" class="form-control" required>
                    <option value="">Select a department</option>
                    <?php foreach ($departments as $department): ?>
                        <option value="<?= $department['id'] ?>" <?= $employee['department_id'] == $department['id'] ? 'selected' : '' ?>>
                            <?= $department['name'] ?>
                        </option>
                    <?php endforeach ?>
                </select>
            </div>
            <button type="submit" class="btn btn-success mt-3">Update</button>
        </form>
    </div>
</div>
<?php require __DIR__ . '/../layout/footer.php' ?>