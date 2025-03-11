document.addEventListener("DOMContentLoaded", function () {
    let searchInput = document.getElementById("brandSearch");

    if (searchInput) {
        searchInput.addEventListener("keyup", function () {
            let input = this.value.toLowerCase();
            let rows = document.querySelectorAll(".table tbody tr");

            rows.forEach(row => {
                let brandName = row.children[2].textContent.toLowerCase();
                if (brandName.startsWith(input)) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            });
        });
    }
});
