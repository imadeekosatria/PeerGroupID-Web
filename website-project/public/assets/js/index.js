//Darkmode Toggle Button

const header = document.getElementById('header');
const siapa_desc = document.getElementById('siapa');
const section = document.querySelectorAll('.section-title, .text-artikel, .selengkapnya-artikel, .title-activity, .text-activity');
const kontak = document.querySelector('.kontak-container');
const mobile_sosmed = document.getElementById('mobile-sosmed');
const mobile_icon = document.querySelectorAll('.mobile-sosmed-link');


chk.addEventListener('change', () => {
    dark();
});


function dark() {
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
}
/*===== SCROLL REVEAL ANIMATION =====*/
const sr = ScrollReveal({
    origin: 'top',
    distance: '80px',
    duration: 2000,
    reset: true
});

/*SCROLL HOME*/
sr.reveal('.title',{});
sr.reveal('.desc',{delay: 400});
sr.reveal('.kepoin', {delay: 400});


/*SCROLL ABOUT*/
sr.reveal('.about__img',{}); 
sr.reveal('.siapa',{delay: 400}); 
sr.reveal('.about__text',{delay: 400});

/*SCROLL ABOUT*/
sr.reveal('.title-artikel-mobile',{}); 
sr.reveal('.box-artikel-mobile',{delay: 400});

