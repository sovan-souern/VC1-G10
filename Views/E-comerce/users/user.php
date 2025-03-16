<!-- user.php -->
<div class="page p-4">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>User List</h4>
                <h6>View/Search Users</h6>
            </div>
            <div class="page-btn">
                <a href="user/create" class="btn btn-added">
                    <img src="/Views/assets/img1/icons/plus.svg" class="me-1" alt="img">Add User
                </a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="table-top">
                    <div class="search-set">
                        <div class="search-path">
                            <a class="btn btn-filter" id="filter_search">
                                <img src="/Views/assets/img1/icons/filter.svg" alt="img">
                                <span><img src="/Views/assets/img1/icons/closes.svg" alt="img"></span>
                            </a>
                        </div>
                        <div class="search-input">
                            <a class="btn btn-searchset"><img src="/Views/assets/img1/icons/search-white.svg" alt="img"></a>
                        </div>
                    </div>
                    <div class="wordset">
                        <ul>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img src="/Views/assets/img1/icons/pdf.svg" alt="img"></a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img src="/Views/assets/img1/icons/excel.svg" alt="img"></a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img src="/Views/assets/img1/icons/printer.svg" alt="img"></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table datanew">
                        <thead>
                            <tr>
                                <th>
                                    <label class="checkboxs">
                                        <input type="checkbox" id="select-all">
                                        <span class="checkmarks"></span>
                                    </label>
                                </th>
                                <th>ID</th>
                                <th>Profile Image</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $index => $user): ?>
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td><?= $index + 1 ?></td>
                                    <td>
                                        <?php if (!empty($user['profile'])) : ?>
                                            <img src="/uploads/<?= htmlspecialchars($user['profile'], ENT_QUOTES, 'UTF-8') ?>" width="50" alt="User Profile Image">
                                        <?php else : ?>
                                            <img src="/Views/assets/img1/default-image.jpg" width="50" alt="No Image">
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?= htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8') ?>
                                    </td>
                                    <td><?= htmlspecialchars($user['email'], ENT_QUOTES, 'UTF-8') ?></td>
                                    <td><?= htmlspecialchars($user['phone'], ENT_QUOTES, 'UTF-8') ?></td>
                                    <td><?= htmlspecialchars($user['role_name'], ENT_QUOTES, 'UTF-8') ?></td>
                                    <td>
                                        <a class="me-3" href="/user/edit?id=<?= $user['user_id'] ?>">
                                            <img src="/Views/assets/img1/icons/edit.svg" alt="Edit">
                                        </a>
                                        <a class="me-3" href="#" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal<?= $user['user_id'] ?>">
                                            <img src="/Views/assets/img1/icons/delete.svg" alt="Delete">
                                        </a>
                                        <!-- Delete Confirmation Modal -->
                                        <div class="modal fade" id="deleteConfirmModal<?= $user['user_id'] ?>" tabindex="-1" aria-labelledby="deleteConfirmLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="deleteConfirmLabel">Confirm Deletion</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body text-dark">
                                                        Are you sure you want to delete this user?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                                        <form action="/user/delete" method="POST">
                                                            <input type="hidden" name="id" value="<?= $user['user_id'] ?>">
                                                            <button type="submit" class="btn btn-primary">Yes, Delete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>