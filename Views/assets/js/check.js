
    document.addEventListener("DOMContentLoaded", function() {
        const selectAllCheckbox = document.getElementById("select-all");
        const productCheckboxes = document.querySelectorAll(".product input[type='checkbox']");

        selectAllCheckbox.addEventListener("change", function() {
            productCheckboxes.forEach(checkbox => {
                checkbox.checked = selectAllCheckbox.checked;
            });
        });
    });
