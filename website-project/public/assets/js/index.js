//Darkmode Toggle Button

const header = document.getElementById('header');
const siapa_desc = document.getElementById('siapa');
const section = document.querySelectorAll('.section-title, .text-artikel, .selengkapnya-artikel, .title-activity, .text-activity');


chk.addEventListener('change', () => {
    document.body.classList.toggle('dark');
    header.classList.toggle('dark');
    siapa_desc.classList.toggle('dark');
    for (i = 0; i < section.length; i++) {
        section[i].classList.toggle('dark');
    }
});
