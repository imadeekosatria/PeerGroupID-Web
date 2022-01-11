const sideMenu = document.querySelector("aside");
const menuBtn = document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#close-btn");
const themeToggle = document.querySelector(".theme-toggler");
const date = document.getElementById("date-filter");
const container = document.getElementById('recent-post');
let darkMode = localStorage.getItem("darkMode");
const addButton = document.getElementById("add-item");
const closePop = document.getElementById('close-modal');

// Show sidebar
menuBtn.addEventListener("click", () => {
    sideMenu.style.display = "block";
})

// Close sidebar
closeBtn.addEventListener("click", () => {
    sideMenu.style.display = "none";
})

// Change theme
const enabledDarkMode = () => {
    //Add dark mode
    document.body.classList.add('dark-theme-variables');
    //Set local storage
    localStorage.setItem('darkMode', 'enabled');
    themeToggle.querySelector('span:nth-child(2)').classList.add('active');
    themeToggle.querySelector('span:nth-child(1)').classList.remove('active');
    date.classList.add('invert');
}
const disableDarkMode = () => {
    //Add dark mode
    document.body.classList.remove('dark-theme-variables');
    //Set local storage
    localStorage.setItem('darkMode', null);
    themeToggle.querySelector('span:nth-child(2)').classList.remove('active');
    themeToggle.querySelector('span:nth-child(1)').classList.add('active');
    date.classList.remove('invert');
}

if (darkMode === 'enabled') {
    enabledDarkMode();    
}

themeToggle.addEventListener("click", () => {
    darkMode = localStorage.getItem('darkMode');
    if (darkMode !== 'enabled') {
        enabledDarkMode();
    }else {
        disableDarkMode();
    }
    // document.body.classList.toggle('dark-theme-variables');
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

//Tombol Tambah
addButton.addEventListener('click', () => {
    document.querySelector('.bg-modal').style.display = 'flex';
});

//Tombol close popup
closePop.addEventListener('click', () => {
    document.querySelector('.bg-modal').style.display = 'none';
    // console.log(closePop);
})