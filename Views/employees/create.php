<?php require __DIR__ . '/../layout/header.php'; ?>
<div class="container">
    <form action="/employees/store" method="POST">
        <div class="form-group">
            <label for="name" class="form-label">Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email" class="form-label">Email:</label>
            <input type="text" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="phone" class="form-label">Phone:</label>
            <input type="text" name="phone" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="department_id" class="form-label">Department:</label>
            <select name="department_id" class="form-control" required>
                <option value="">Select a department</option>
                <?php foreach ($departments as $department): ?>
                    <option value="<?= $department['id'] ?>"><?= $department['name'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <button type="submit" class="btn btn-success mt-3">Submit</button>
    </form>
</div>
<?php require __DIR__ . '/../layout/footer.php'; ?>
