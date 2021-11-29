//Darkmode Toggle Button
const aboutsiapa = document.querySelector('.aboutsiapa');
chk.addEventListener('change', () => {
	document.body.classList.toggle('dark');
    header.classList.toggle('dark');
    aboutsiapa.classList.toggle('dark');
});
