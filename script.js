// Dark Mode Toggle
const themeToggleBtn = document.getElementById("theme-toggle");
const body = document.body;

// Memeriksa apakah pengguna sebelumnya memilih dark mode
const currentTheme = localStorage.getItem("theme");
if (currentTheme) {
    body.classList.remove("light-mode", "dark-mode");
    body.classList.add(currentTheme);
    themeToggleBtn.textContent = currentTheme === "dark-mode" ? "Light Mode" : "Dark Mode";
}

// Event listener untuk tombol dark mode/light mode
themeToggleBtn.addEventListener("click", function () {
    if (body.classList.contains("light-mode")) {
        body.classList.remove("light-mode");
        body.classList.add("dark-mode");
        themeToggleBtn.textContent = "Light Mode";
        localStorage.setItem("theme", "dark-mode");
    } else {
        body.classList.remove("dark-mode");
        body.classList.add("light-mode");
        themeToggleBtn.textContent = "Dark Mode";
        localStorage.setItem("theme", "light-mode");
    }
});

// Hamburger Menu Toggle
const hamburger = document.getElementById("hamburger");
const navbar = document.getElementById("navbar");

hamburger.addEventListener("click", function () {
    navbar.classList.toggle("show");
});
document.getElementById('search').addEventListener('input', function() {
    const searchValue = this.value;

    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'search_orders.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
        if (xhr.status === 200) {
            document.getElementById('orderTableBody').innerHTML = xhr.responseText;
        }
    };
    xhr.send('search=' + encodeURIComponent(searchValue));
});
