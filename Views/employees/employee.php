<div class="container mt-3">
    <a href="/employees/create" class="btn btn-primary">Add New</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Department</th> 
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employees as $index => $employee): ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= $employee['name'] ?></td>
                    <td><?= $employee['email'] ?></td>
                    <td><?= $employee['phone'] ?></td>
                    <td><?= $employee['department_name'] ?></td> 
                    <td>
                        <a href="/employees/edit?id=<?= $employee['id'] ?>" class="btn btn-warning">Edit</a> |
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#employee<?= $employee['id'] ?>">
                            Delete
                        </button>
                        <?php require 'delete.php';?>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
