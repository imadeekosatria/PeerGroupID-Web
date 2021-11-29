//Darkmode Toggle Button

const header = document.getElementById('header');
const siapa_desc = document.getElementById('siapa');
const section = document.querySelectorAll('.section-title, .text-artikel, .selengkapnya-artikel, .title-activity, .text-activity');
const kontak = document.querySelector('.kontak-container');
const mobile_sosmed = document.getElementById('mobile-sosmed');
const mobile_icon = document.querySelectorAll('.mobile-sosmed-link');
chk.addEventListener('change', () => {
    document.body.classList.toggle('dark');
    header.classList.toggle('dark');
    siapa_desc.classList.toggle('dark');
    kontak.classList.toggle('dark');
    mobile_sosmed.classList.toggle('dark');
    for (i = 0; i < section.length; i++) {
        section[i].classList.toggle('dark');
    }

    for (i = 0; i < mobile_icon.length; i++) {
        mobile_icon[i].classList.toggle('dark');
    }
});
