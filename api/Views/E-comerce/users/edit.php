<!-- edit.php -->
<div class="container mt-5">
    <?php if (isset($error)): ?>
        <div class="alert alert-danger"><?= $error ?></div>
    <?php endif; ?>
    <div class="page-header mb-4 text-center">
        <h4 class="fw-bold text-primary">Edit User</h4>
        <h6 class="text-muted">Update user details below</h6>
    </div>

    <form action="/user/edit?id=<?= htmlspecialchars($user['admin_id']) ?>" method="POST" class="shadow-lg p-5 rounded bg-white">
        <div class="row g-4">
            <!-- Name -->
            <div class="col-lg-6 col-sm-12">
                <div class="form-group">
                    <label for="name" class="form-label fw-bold">Full Name</label>
                    <input type="text" id="name" name="name" class="form-control border-primary" value="<?= htmlspecialchars($user['name']) ?>" required>
                </div>
            </div>

            <!-- Phone -->
            <div class="col-lg-6 col-sm-12">
                <div class="form-group">
                    <label for="phone" class="form-label fw-bold">Phone Number</label>
                    <input type="text" id="phone" name="phone" class="form-control border-primary" value="<?= htmlspecialchars($user['phone']) ?>" required>
                </div>
            </div>

            <!-- Role -->
            <div class="col-lg-6 col-sm-12">
                <div class="form-group">
                    <label for="role" class="form-label fw-bold">Role</label>
                    <select id="role" name="role" class="form-select border-primary">
                        <option value="admin" <?= $user['role'] === 'admin' ? 'selected' : '' ?>>Admin</option>
                        <option value="shopowner" <?= $user['role'] === 'shopowner' ? 'selected' : '' ?>>Shopowner</option>
                        <option value="user" <?= $user['role'] === 'user' ? 'selected' : '' ?>>User</option>
                    </select>
                </div>
            </div>

            <!-- Submit/Cancel Buttons -->
            <div class="col-lg-12 text-center">
                <button type="submit" class="btn btn-primary px-4 me-2">
                    <i class="bi bi-save me-1"></i> Save Changes
                </button>
                <a href="/users" class="btn btn-secondary px-4">
                    <i class="bi bi-arrow-left me-1"></i> Cancel
                </a>
            </div>
        </div>
    </form>
</div>

<style>
    .form-control, .form-select {
        height: 50px;
        border-radius: 10px;
        font-size: 1rem;
        transition: all 0.3s ease;
    }

    .form-control:focus, .form-select:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    .btn {
        border-radius: 10px;
        font-size: 1rem;
        padding: 10px 20px;
        transition: all 0.3s ease;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
        transform: translateY(-2px);
    }

    .btn-secondary {
        background-color: #6c757d;
        border-color: #6c757d;
    }

    .btn-secondary:hover {
        background-color: #5a6268;
        border-color: #5a6268;
        transform: translateY(-2px);
    }

    .shadow-lg {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .form-label {
        font-size: 1rem;
        color: #333;
    }

    .page-header h4 {
        font-size: 1.8rem;
        color: #007bff;
    }

    .page-header h6 {
        font-size: 1rem;
        color: #666;
    }

    body {
        background-color: #f8f9fa;
    }

    form {
        background: linear-gradient(135deg, #ffffff, #f8f9fa);
        border-radius: 15px;
    }
</style>