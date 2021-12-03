//Darkmode Toggle Button
const aboutsiapa = document.querySelector('.aboutsiapa');
chk.addEventListener('change', () => {
	dark()
});

function dark() {
    document.body.classList.toggle('dark');
    header.classList.toggle('dark');
    aboutsiapa.classList.toggle('dark');
}
