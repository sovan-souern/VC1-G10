<?php require_once "Views/assets/css/prodcut_style.php" ?>

<div class="page p-4">
    <div class="content">
        <div class="page-header ">
            <div class="page-title">
                <h4>User List</h4>
                <h6>Manage your User</h6>
            </div>
            <div class="page-btn">
                <a href="users/create" class="btn btn-added">
                    <img src="/Views/assets/img1/icons/plus.svg" alt="img" class="me-1">Add New User
                </a>
            </div>
        </div>

        <div class="card bg-none w-100">
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
                            <form class="form-inline">
                                <input id="brandSearch" class="form-control mr-sm-2" type="search" 
                                       placeholder="Search Username" aria-label="Search">
                            </form>
                        </div>
                    </div>
                    <div class="wordset">
                        <ul>
                            <li><a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf">
                                <img src="/Views/assets/img1/icons/pdf.svg" alt="img"></a></li>
                            <li><a data-bs-toggle="tooltip" data-bs-placement="top" title="excel">
                                <img src="/Views/assets/img1/icons/excel.svg" alt="img"></a></li>
                            <li><a data-bs-toggle="tooltip" data-bs-placement="top" title="print">
                                <img src="/Views/assets/img1/icons/printer.svg" alt="img"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="card mb-0" id="filter_inputs">
                    <div class="card-body pb-0">
                        <div class="row">
                            <div class="col-lg col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Enter User Name">
                                </div>
                            </div>
                            <div class="col-lg col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Enter Phone">
                                </div>
                            </div>
                            <div class="col-lg col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Enter Email">
                                </div>
                            </div>
                            <div class="col-lg col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" class="datetimepicker cal-icon" placeholder="Choose Date">
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6 col-12">
                                <div class="form-group">
                                    <a class="btn btn-filters ms-auto">
                                        <img src="/Views/assets/img1/icons/search-whites.svg" alt="img">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table datanew">
                        <thead>
                            <tr>
                                <th id="font">ID</th>
                                <th id="font">Username</th>
                                <th id="font">Phone</th>
                                <th id="font">Create At</th>
                                <th id="font">Status</th>
                                <th id="font">Action</th>
                            </tr>
                        </thead>
                        <tbody id="user-list">
                            <?php if (!empty($users)) : ?>
                                <?php foreach ($users as $index => $user) : ?>
                                    <tr class="user">
                                        <td><?= $index + 1 ?></td>
                                        <td><?= htmlspecialchars($user["name"]) ?></td>
                                        <td><?= htmlspecialchars($user["phone"]) ?></td>
                                        <td><?= htmlspecialchars($user["created_at"]) ?></td>
                                        <td>
                                            <?php if ($user["status"] == 1) : ?>
                                                <span class="badge bg-success">Active</span>
                                            <?php else : ?>
                                                <span class="badge bg-danger">Inactive</span>
                                            <?php endif ?>
                                        </td>
                                        <td class="action">
                                            <a class="delete-user" href="users/delete?id=<?= $user['admin_id'] ?>">
                                                <img id="hight" src="/Views/assets/img1/icons/delete.svg" alt="img">
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            <?php else: ?>
                                <tr><td colspan="6" class="text-center">No users found</td></tr>
                            <?php endif ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>