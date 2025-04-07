<style>
        body {
            background: #f4f6f9;
            font-family: 'Poppins', sans-serif;
        }

        .container {
            margin-top: 50px;
        }
        
        .card {
            border-radius: 12px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            padding: 25px;
            background: #ffffff;
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        h3 {
            font-size: 35px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 25px;
           
        }

        .search-container {
            position: relative;
            width: 100%;
            max-width: 500px;
            margin: 0 auto 20px auto;
        }

        .search-container input {
            width: 100%;
            padding: 12px 15px 12px 45px;
            border: 2px solid #007bff;
            border-radius: 25px;
            font-size: 16px;
            transition: 0.3s;
            background: #fff;
            box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .search-container input:focus {
            border-color: #0056b3;
            box-shadow: 0 0 10px rgba(0, 91, 187, 0.5);
            outline: none;
        }

        .search-container .search-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 18px;
            color: #007bff;
        }

        .table th {
            background-color: #007bff;
            color: red;
            text-align: center;
        }

        .table th, .table td {
            vertical-align: middle;
            text-align: center;
        }

        .table-hover tbody tr:hover {
            background: #e9ecef;
            transition: 0.3s;
        }

        .profile-pic {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            object-fit: cover;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            border: 2px solid transparent; /* Default border */
        }

        .profile-pic.active {
            border-color: lightgreen; /* Green border for active users */
        }

        .inactive {
            color: gray; /* Optional: Set a color for inactive users */
        }

        .active-now {
            color: lightgreen; /* Set the color for "Active now" text */
            font-weight: bold;
        }
    </style>

<div class="container">
<h3><i class="fas fa-users"></i> Active Admins and shopOwners</h3>
    
    <div class="card">
        <!-- Search Bar -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div class="search-container">
                <i class="fas fa-search search-icon"></i>
                <input type="text" class="form-control" id="searchInput" placeholder="Search by name or phone..." onkeyup="filterTable()">
            </div>
        </div>

        <table class="table table-bordered table-hover mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th><i class="fas fa-user"></i> Full Name</th>
                    <th><i class="fas fa-phone"></i> Phone/Email</th>
                    <th><i class="fas fa-user-tag"></i> Role</th>
                    <th><i class="fas fa-calendar-alt"></i> Login At</th>
                    <th><i class="fas fa-user-tag"></i> Profile</th>
                </tr>
            </thead>
            <tbody id="user-list">
                <?php 
                require_once __DIR__ . '/../../Models/UserModel.php';   
                $userModel = new UserModel();

                try {
                    $activeUsers = $userModel->getActiveUsers();

                    // Filter to show only admins and shopowners
                    $filteredUsers = array_filter($activeUsers, function($user) {
                        return in_array(strtolower($user['role']), ['admin', 'shopowner']);
                    });

                    if (!empty($filteredUsers)): ?>
                        <?php foreach ($filteredUsers as $user): ?>
                            <tr>
                                <td><?php echo isset($user['admin_id']) ? (int)$user['admin_id'] : 'N/A'; ?></td>
                                <td><?php echo htmlspecialchars($user['name']); ?></td>
                                <td>
                                    <?php if (!empty($user['email'])): ?>
                                        <?php echo htmlspecialchars($user['email']); ?>
                                    <?php elseif (!empty($user['phone'])): ?>
                                        <?php echo htmlspecialchars($user['phone']); ?>
                                    <?php else: ?>
                                        <span class="text-muted">N/A</span>
                                    <?php endif; ?>
                                </td>
                                <td><?php echo htmlspecialchars($user['role']); ?></td>
                                <td><?php echo htmlspecialchars($user['login_at']); ?></td>
                                <td>
                                    <img src="<?php echo !empty($user['profile_picture']) ? '/' . $user['profile_picture'] : '/Views/assets/img/avatars/1.png'; ?>" 
                                         alt="Profile Picture" 
                                         class="profile-pic <?php echo $user['minutes_ago'] <= 3 ? 'active' : ''; ?>">
                                    <div>
                                        <?php 
                                        if ($user['minutes_ago'] <= 3) {
                                            echo "<span class='active-now'>Active now</span>";
                                        } elseif ($user['minutes_ago'] > 3 && $user['minutes_ago'] <= 10) {
                                            echo "<span class='inactive'>Active " . $user['minutes_ago'] . "m ago</span>";
                                        }
                                        ?>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="6" class="text-center">No active users found.</td>
                        </tr>
                    <?php endif; ?>
                <?php 
                } catch (Exception $e) { ?>
                    <tr>
                        <td colspan="6" class="text-center text-danger">Error fetching user list: <?php echo htmlspecialchars($e->getMessage()); ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    function filterTable() {
        var input = document.getElementById("searchInput").value.toLowerCase();
        var rows = document.getElementById("user-list").getElementsByTagName("tr");

        for (var i = 0; i < rows.length; i++) {
            var name = rows[i].getElementsByTagName("td")[1].textContent.toLowerCase();
            var phone = rows[i].getElementsByTagName("td")[2].textContent.toLowerCase();
            if (name.includes(input) || phone.includes(input)) {
                rows[i].style.display = "";
            } else {
                rows[i].style.display = "none";
            }
        }
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


