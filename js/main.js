document.addEventListener('DOMContentLoaded', function() {
    const btn = document.querySelector('.menu-btn');
    const header = document.querySelector('.header');

    btn.addEventListener('click', function() {
        header.classList.toggle('open');
    });

    
});