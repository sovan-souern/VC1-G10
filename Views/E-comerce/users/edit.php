<!-- edit.php -->
<div class="container mt-3">
    <?php if (isset($error)): ?>
        <div class="alert alert-danger"><?= $error ?></div>
    <?php endif; ?>
    <div class="page-header">
        <div class="page-title">
            <h4>Edit User</h4>
            <h6>Update user details</h6>
        </div>
    </div>

    <form action="/user/update/<?= $user['user_id'] ?>" method="POST" enctype="multipart/form-data">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <!-- Username -->
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" class="form-control" value="<?= htmlspecialchars($user['username']) ?>" required>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" value="<?= htmlspecialchars($user['email']) ?>" required>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" class="form-control" value="<?= htmlspecialchars($user['phone'] ?? '') ?>">
                        </div>
                    </div>

                    <!-- Gender -->
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select name="gender" class="form-control">
                                <option value="">Select Gender</option>
                                <option value="Male" <?= $user['gender'] == 'Male' ? 'selected' : '' ?>>Male</option>
                                <option value="Female" <?= $user['gender'] == 'Female' ? 'selected' : '' ?>>Female</option>
                                <option value="Other" <?= $user['gender'] == 'Other' ? 'selected' : '' ?>>Other</option>
                            </select>
                        </div>
                    </div>

                    <!-- Role ID -->
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label for="role_id">Role</label>
                            <select name="role_id" class="form-control" required>
                                <option value="">Select Role</option>
                                <?php foreach ($roles as $role): ?>
                                    <option value="<?= $role['role_id'] ?>" <?= $user['role_id'] == $role['role_id'] ? 'selected' : '' ?>>
                                        <?= htmlspecialchars($role['role_name']) ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <!-- Admin ID -->
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label for="admin_id">Admin (Optional)</label>
                            <select name="admin_id" class="form-control">
                                <option value="">None</option>
                                <?php foreach ($admins as $admin): ?>
                                    <option value="<?= $admin['admin_id'] ?>" <?= $user['admin_id'] == $admin['admin_id'] ? 'selected' : '' ?>>
                                        <?= htmlspecialchars($admin['name']) ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <!-- Profile Image -->
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="profile">Profile Image</label>
                            <div class="image-upload">
                                <input type="file" name="profile" accept="image/*">
                                <div class="image-uploads">
                                    <?php if (!empty($user['profile'])): ?>
                                        <img src="/uploads/<?= $user['profile'] ?>" alt="Profile Image" width="100px">
                                    <?php else: ?>
                                        <img src="/Views/assets/img1/icons/upload.svg" alt="img">
                                        <h4>Drag and drop a file to upload</h4>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Submit/Cancel Buttons -->
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-primary me-2">Update</button>
                        <a href="/users" class="btn btn-secondary">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>