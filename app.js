const menuToggle = document.getElementById('menu-toggle');
const navLinks = document.querySelector('.menu-navbar');

menuToggle.addEventListener('click', () => {
    navLinks.classList.toggle('nav-active');
});