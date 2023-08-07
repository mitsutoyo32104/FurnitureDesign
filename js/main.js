document.addEventListener("DOMContentLoaded", function () {
    new NavMenu(".menu-btn", ".header");
    const hero = new HeroSlider('.swiper');
    hero.stop();
});