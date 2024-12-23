document.addEventListener('DOMContentLoaded', function () {
    const burgerIcon = document.getElementById('burger-icon');
    const mobileMenu = document.getElementById('mobile-menu');

    burgerIcon.addEventListener('click', function () {
        mobileMenu.classList.toggle('open');
        burgerIcon.classList.toggle('open');
    });
});