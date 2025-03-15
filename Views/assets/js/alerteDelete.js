document.addEventListener("DOMContentLoaded", function () {
    const deleteLinks = document.querySelectorAll(".delete-product");
    const confirmDeleteBtn = document.getElementById("confirmDeleteBtn");
    const cancelDeleteBtn = document.getElementById("cancelDeleteBtn");
    const deleteModalElement = document.getElementById("deleteConfirmModal");
    const deleteModal = new bootstrap.Modal(deleteModalElement);
    let deleteUrl = "";

    deleteLinks.forEach(link => {
        link.addEventListener("click", function (event) {
            event.preventDefault();
            deleteUrl = this.href;
            deleteModal.show();
        });
    });

    confirmDeleteBtn.addEventListener("click", function () {
        window.location.href = deleteUrl;
    });

    cancelDeleteBtn.addEventListener("click", function () {
        deleteModal.hide();
    });
});