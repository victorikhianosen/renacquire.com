// window.addEventListener('DOMContentLoaded', function () {
//     const navSection = document.querySelector('.nav-section');
//     const navContainer = document.querySelector('.nav-container');
//     const navLinks = document.querySelectorAll('.nav-menu-link');

//     let lastScrollTop = 0;

//     function handleScroll() {
//         const currentScroll = window.scrollY;

//         if (currentScroll > lastScrollTop) {
//             // Scroll Down - Hide Navbar
//             navSection.classList.add('hidden');
//         } else {
//             // Scroll Up - Show Navbar
//             navSection.classList.remove('hidden');
//         }

//         lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // Prevent negative scrolling

//         // Adding class for scrolled state
//         if (window.scrollY > 0) {
//             navSection.classList.add('scrolled');
//             navContainer.classList.add('scrolledbg');
//             navLinks.forEach(link => link.classList.add('white-bg'));
//         } else {
//             navSection.classList.remove('scrolled');
//             navContainer.classList.remove('scrolledbg');
//             navLinks.forEach(link => link.classList.remove('white-bg'));
//         }
//     }

//     window.addEventListener('scroll', handleScroll);
// });





const navbar = document.getElementById('navbar');
let lastScrollY = window.scrollY;

window.addEventListener('scroll', () => {
    const currentScroll = window.scrollY;

    if (currentScroll === 0) {
        // We're at the top
        navbar.style.transform = 'translateY(0)';
        navbar.classList.remove('bg-white');
        navbar.classList.add('bg-primary');
    } else if (currentScroll > lastScrollY) {
        // Scrolling down
        navbar.style.transform = 'translateY(-100%)';
        navbar.classList.remove('bg-primary');
        navbar.classList.add('bg-white');
    } else {
        // Scrolling up
        navbar.style.transform = 'translateY(0)';
        navbar.classList.remove('bg-primary');
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



