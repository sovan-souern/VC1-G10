
    <style>
        body {
            background: #f8f9fa;
        }
        h3{
            margin-left: -800px;

            font-size: 30px;
            font-weight: bold;
            margin-bottom: 30px;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .table thead {
            background-color: #007bff;
            color:rgb(255, 255, 255);
            text-align: center;
        }
        .table th, .table td {
            vertical-align: middle;
            text-align: center;
            
        }
        .badge-user {
            background-color: #28a745;
            color: white;
        }
        .badge-shop {
            background-color: #ffc107;
            color: black;
        }
        .search-container {
            position: relative;
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
        }
        .search-container input {
            width: 100%;
            padding: 12px 20px 12px 45px;
            border: 2px solid #007bff;
            border-radius: 30px;
            font-size: 16px;
            transition: 0.3s;
            background: #fff;
            box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1);
        }
        .search-container input:focus {
            border-color: #0056b3;
            box-shadow: 0 0 8px rgba(0, 91, 187, 0.5);
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

        
        .table-hover tbody tr:hover {
            background: #e9ecef;
            transition: 0.3s;
        }
    </style>


<div class="container">
    <h3 class="text-center mb-4"><i class="fas fa-users"></i> Users & Shop Owners</h3>
    
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
                    <th><i class="fas fa-phone"></i> Phone</th>
                    <th><i class="fas fa-user-tag"></i> Role</th>
                    <th><i class="fas fa-calendar-alt"></i> Created At</th>
                </tr>
            </thead>
            <tbody id="user-list">
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>johndoe@example.com</td>
                    <td>+1 123 456 7890</td>
                    <td><span class="badge badge-user">User</span></td>
                    <td>2024-03-12</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jane Smith</td>
                    <td>janesmith@example.com</td>
                    <td>+44 789 456 1230</td>
                    <td><span class="badge badge-shop">Shop Owner</span></td>
                    <td>2024-03-10</td>
                </tr>
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

