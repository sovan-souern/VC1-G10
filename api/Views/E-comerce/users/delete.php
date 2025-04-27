<!-- delete.php -->
<div class="modal fade" id="user<?= $user['Admin_id'] ?>" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Delete User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete the user <strong><?= htmlspecialchars($user['username']) ?></strong>?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <a href="/user/delete<?= $user['Admin_id'] ?>" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
</div>