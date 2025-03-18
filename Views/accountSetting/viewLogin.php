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
        }
    </style>

<div class="container">
    <h3><i class="fas fa-users"></i> Admin History</h3>
    
    <div class="card">
        <!-- Search Bar -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div class="search-container">
                <i class="fas fa-search search-icon"></i>
                <input type="text" class="form-control" id="searchInput" placeholder="Search by name or email..." onkeyup="filterTable()">
            </div>
        </div>

        <table class="table table-bordered table-hover mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th><i class="fas fa-user"></i> Full Name</th>
                    <th><i class="fas fa-envelope"></i> Email</th>
                    <th><i class="fas fa-calendar-alt"></i> Created At</th>
                    <th><i class="fas fa-user-tag"></i> Profile</th>
                </tr>
            </thead>
            <tbody id="user-list">
                <?php if (!empty($admins)): ?>
                    <?php foreach ($admins as $admin): ?>
                        <tr>
                            <td><?php echo isset($admin['admin_id']) ? (int)$admin['admin_id'] : 'N/A'; ?></td>
                            <td><?php echo htmlspecialchars($admin['name']); ?></td>
                            <td><?php echo htmlspecialchars($admin['email']); ?></td>
                            <td><?php echo htmlspecialchars($admin['created_at']); ?></td>
                            <td>
                                <img src="<?php echo !empty($admin['profile_picture']) ? '/' . $admin['profile_picture'] : '/Views/assets/img/avatars/1.png'; ?>" 
                                     alt="Profile Picture" 
                                     class="profile-pic">
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" class="text-center">No accounts found.</td>
                    </tr>
                <?php endif; ?>
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
            var email = rows[i].getElementsByTagName("td")[2].textContent.toLowerCase();
            if (name.includes(input) || email.includes(input)) {
                rows[i].style.display = "";
            } else {
                rows[i].style.display = "none";
            }
        }
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


