const navbar = document.getElementById('navbar');
let lastScrollY = window.scrollY;

window.addEventListener('scroll', () => {
    const currentScroll = window.scrollY;

    if (currentScroll === 0) {
        // We're at the top
        navbar.style.transform = 'translateY(0)';
        // navbar.classList.remove('bg-white');
        navbar.classList.add('bg-white');
    } else if (currentScroll > lastScrollY) {
        // Scrolling down
        navbar.style.transform = 'translateY(-100%)';
        navbar.classList.remove('bg-white');
        navbar.classList.add('bg-primary');
    } else {
        // Scrolling up
        navbar.style.transform = 'translateY(0)';
        navbar.classList.remove('bg-white');
        navbar.classList.add('bg-white');
    }

    lastScrollY = currentScroll;
});

const openMenu = document.getElementById('open-menu');
const closeMenu = document.getElementById('close-menu');
const mobileMenu = document.getElementById('mobile-menu');

openMenu.addEventListener('click', () => {
    mobileMenu.classList.remove('translate-x-full');
    mobileMenu.classList.add('translate-x-0');
});

closeMenu.addEventListener('click', () => {
    mobileMenu.classList.remove('translate-x-0');
    mobileMenu.classList.add('translate-x-full');
});




// Slider

document.addEventListener("DOMContentLoaded", () => {
    const slider = document.getElementById('sliderContent');
    const images = slider.innerHTML;
    slider.innerHTML += images;
});



