<!-- Role ID -->
<div class="col-lg-6 col-sm-12">
    <div class="form-group">
        <label for="role_id">Role</label>
        <select name="role_id" class="form-control" required>
            <option value="">Select Role</option>
            <?php foreach ($roles as $role): ?>
                <option value="<?= $role['role_id'] ?>"><?= $role['role_name'] ?></option>
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
                <option value="<?= $admin['admin_id'] ?>"><?= $admin['name'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
</div>