<!-- user.php -->
<div class="container mt-3">
    <?php if (isset($error)): ?>
        <div class="alert alert-danger"><?= $error ?></div>
    <?php endif; ?>
    <a href="/user/create" class="btn btn-primary">Add New</a>
    <table class="table mt-3">
        <thead class="table table-dark">
            <tr>
                <th>ID</th>
                <th>Profile</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Gender</th>
                <th>Role</th>
                <th>Admin</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if (isset($users) && is_array($users) && !empty($users)): ?>
                <?php foreach ($users as $index => $user): ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td>
                            <?php if (!empty($user['profile'])): ?>
                                <img src="/uploads/<?= $user['profile'] ?>" alt="Profile Image" width="35px" height="35px" style="border-radius: 25px;">
                            <?php else: ?>
                                No Image
                            <?php endif; ?>
                        </td>
                        <td><?= htmlspecialchars($user['username']) ?></td>
                        <td><?= htmlspecialchars($user['email']) ?></td>
                        <td><?= htmlspecialchars($user['phone'] ?? 'N/A') ?></td>
                        <td><?= htmlspecialchars($user['gender'] ?? 'N/A') ?></td>
                        <td><?= htmlspecialchars($user['role_name'] ?? 'N/A') ?></td>
                        <td><?= htmlspecialchars($user['admin_name'] ?? 'N/A') ?></td>
                        <td><?= htmlspecialchars($user['created_at']) ?></td>
                        <td>
                            <a href="/user/edit?id=<?= $user['user_id'] ?>" class="btn btn-warning">Edit</a> |
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#user<?= $user['user_id'] ?>">
                                Delete
                            </button>
                            <?php require 'delete.php' ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="10">No users found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>