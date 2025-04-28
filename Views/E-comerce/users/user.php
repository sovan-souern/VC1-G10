<?php require_once "Views/assets/css/prodcut_style.php" ?>

<head>
    <link rel="stylesheet" href="/Views/assets/css/custom.css">
</head>

<div class="page p-4">
    <div class="content">
        <div class="page-header d-flex justify-content-between align-items-center">
            <div class="page-title">
                <h4 class="fw-bold text-primary">User List</h4>
                <h6 class="text-muted">Manage your Users</h6>
            </div>
            <div class="page-btn">
                <a href="/admin-register" class="btn btn-primary">
                    <img src="/Views/assets/img1/icons/plus.svg" alt="img" class="me-1">Add New User
                </a>
            </div>
        </div>

        <div class="card shadow-sm mt-4">
            <div class="card-body">
                <div class="table-top d-flex justify-content-between align-items-center mb-3">
                    <div class="search-set d-flex align-items-center">
                        <form id="searchForm" class="form-inline d-flex" method="GET" action="/users">
                            <input id="brandSearch" name="search" class="form-control me-2" type="search" placeholder="Search Username or Phone" aria-label="Search" value="<?= htmlspecialchars($_GET['search'] ?? '') ?>">
                        </form>
                    </div>
                    <div class="wordset">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item"><a data-bs-toggle="tooltip" data-bs-placement="top" title="PDF">
                                <img src="/Views/assets/img1/icons/pdf.svg" alt="img"></a></li>
                            <li class="list-inline-item"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Excel">
                                <img src="/Views/assets/img1/icons/excel.svg" alt="img"></a></li>
                            <li class="list-inline-item"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Print">
                                <img src="/Views/assets/img1/icons/printer.svg" alt="img"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle">
                        <thead class="table-primary">
                            <tr>
                                <th>ID</th>
                                <th>Profile</th> 
                                <th>Username</th>
                                <th>Phone/Email</th> <!-- Updated header -->
                                <th>
                                    <div class="dropdown">
                                        <button class="btn btn-link dropdown-toggle p-0 d-flex align-items-center" type="button" id="roleFilterDropdown" data-bs-toggle="dropdown" aria-expanded="false" title="Filter by Role">
                                            Role <i class="bi bi-caret-down-fill ms-1"></i>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="roleFilterDropdown">
                                            <li><a class="dropdown-item" href="?role=all">Show All</a></li>
                                            <li><a class="dropdown-item" href="?role=admin">Admins</a></li>
                                            <li><a class="dropdown-item" href="?role=shopowner">Shopowners</a></li>
                                            <li><a class="dropdown-item" href="?role=user">Users</a></li>
                                        </ul>
                                    </div>
                                </th>
                                <th>Create At</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="user-list">
                            <?php 
                            $filteredRole = isset($_GET['role']) && $_GET['role'] !== 'all' ? $_GET['role'] : null;
                            $filteredUsers = $filteredRole ? array_filter($users, fn($user) => strtolower($user['role']) === strtolower($filteredRole)) : $users;
                            ?>
                            <?php if (!empty($filteredUsers)) : ?>
                                <?php foreach ($filteredUsers as $index => $user) : ?>
                                    <tr>
                                        <td><?= $index + 1 ?></td>
                                        <td>
                                            <img src="<?= !empty($user['profile_picture']) ? htmlspecialchars($user['profile_picture']) : '/Views/assets/img/avatars/default.png' ?>" 
                                                 alt="Profile Picture" class="rounded-circle" style="width: 40px; height: 40px; object-fit: cover;">
                                        </td>
                                        <td><?= htmlspecialchars($user["name"]) ?></td>
                                        <td>
                                            <?php if (!empty($user["email"])) : ?>
                                                <?= htmlspecialchars($user["email"]) ?>
                                            <?php elseif (!empty($user["phone"])) : ?>
                                                <?= htmlspecialchars($user["phone"]) ?>
                                            <?php else : ?>
                                                <span class="text-muted">N/A</span>
                                            <?php endif; ?>
                                        </td>
                                        <td><?= ucfirst(htmlspecialchars($user["role"])) ?></td>
                                        <td><?= htmlspecialchars($user["created_at"]) ?></td>
                                            <td>
                                            <?php if ($user["status"] == 1) : ?>
                                                <span class="badge bg-success" title="User is active">Active</span>
                                            <?php else : ?>
                                                <span class="badge bg-danger" title="User is inactive">Inactive</span>
                                            <?php endif ?>
                                        </td>
                                        
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-light dropdown-toggle" type="button" id="actionDropdown<?= $user['admin_id'] ?>" data-bs-toggle="dropdown" aria-expanded="false" title="Actions">
                                                    <i class="bi bi-three-dots"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="actionDropdown<?= $user['admin_id'] ?>">
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center" href="/user/edit?id=<?= $user['admin_id'] ?>" title="Edit this user">
                                                            <i class="bi bi-pencil-square me-2 text-primary"></i> Edit
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center text-danger" href="/user/delete?id=<?= $user['admin_id'] ?>" onclick="return confirm('Are you sure you want to delete this user?')" title="Delete this user">
                                                            <i class="bi bi-trash me-2"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            <?php else: ?>
                                <tr><td colspan="8" class="text-center">No users found</td></tr>
                            <?php endif ?>
                        </tbody>
                    </table>
                </div>

                <!-- Pagination Controls -->
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <div>
                        Showing <?= count($users) ?> of <?= isset($totalUsers) ? $totalUsers : 0 ?> users
                    </div>
                    <nav>
                        <ul class="pagination pagination-modern">
                            <!-- Previous Button -->
                            <?php if ($currentPage > 1): ?>
                                <li class="page-item">
                                    <a class="page-link" href="?page=<?= $currentPage - 1 ?>" aria-label="Previous">
                                        &laquo; Previous
                                    </a>
                                </li>
                            <?php else: ?>
                                <li class="page-item disabled">
                                    <span class="page-link">&laquo; Previous</span>
                                </li>
                            <?php endif; ?>

                            <!-- Page Numbers -->
                            <?php
                            $startPage = max(1, $currentPage - 2);
                            $endPage = min($totalPages, $currentPage + 2);

                            if ($startPage > 1): ?>
                                <li class="page-item">
                                    <a class="page-link" href="?page=1">1</a>
                                </li>
                                <?php if ($startPage > 2): ?>
                                    <li class="page-item disabled">
                                        <span class="page-link">...</span>
                                    </li>
                                <?php endif; ?>
                            <?php endif; ?>

                            <?php for ($i = $startPage; $i <= $endPage; $i++): ?>
                                <li class="page-item <?= $i == $currentPage ? 'active' : '' ?>">
                                    <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                                </li>
                            <?php endfor; ?>

                            <?php if ($endPage < $totalPages): ?>
                                <?php if ($endPage < $totalPages - 1): ?>
                                    <li class="page-item disabled">
                                        <span class="page-link">...</span>
                                    </li>
                                <?php endif; ?>
                                <li class="page-item">
                                    <a class="page-link" href="?page=<?= $totalPages ?>"><?= $totalPages ?></a>
                                </li>
                            <?php endif; ?>

                            <!-- Next Button -->
                            <?php if ($currentPage < $totalPages): ?>
                                <li class="page-item">
                                    <a class="page-link" href="?page=<?= $currentPage + 1 ?>" aria-label="Next">
                                        Next &raquo;
                                    </a>
                                </li>
                            <?php else: ?>
                                <li class="page-item disabled">
                                    <span class="page-link">Next &raquo;</span>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('brandSearch').addEventListener('input', function () {
        const form = document.getElementById('searchForm');
        clearTimeout(form.dataset.timer); // Clear previous timer
        form.dataset.timer = setTimeout(() => form.submit(), 500); // Submit after 500ms delay
    });
</script>