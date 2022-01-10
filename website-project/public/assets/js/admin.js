const sideMenu = document.querySelector("aside");
const menuBtn = document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#close-btn");
const themeToggle = document.querySelector(".theme-toggler");
const date = document.getElementById("date-filter");
const container = document.getElementById('recent-post');

// Show sidebar
menuBtn.addEventListener("click", () => {
    sideMenu.style.display = "block";
})

// Close sidebar
closeBtn.addEventListener("click", () => {
    sideMenu.style.display = "none";
})

// Change theme
themeToggle.addEventListener("click", () => {
    document.body.classList.toggle('dark-theme-variables');

    themeToggle.querySelector('span:nth-child(1)').classList.toggle('active');
    themeToggle.querySelector('span:nth-child(2)').classList.toggle('active');
})

//Buat AJAX
var xhr = new XMLHttpRequest();
//Date Pick
date.addEventListener('change', () => {
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            container.innerHTML = xhr.responseText;
        }
    }
    xhr.open('GET', 'admin-panel/ajax/'+ date.value, true);
    xhr.send();
})
