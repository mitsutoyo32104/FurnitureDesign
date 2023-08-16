document.addEventListener("DOMContentLoaded", function () {
    // navigation menu
    new NavMenu(".menu-btn", ".header");

    // slider
    const hero = new HeroSlider(".swiper");
    hero.stop();

    // scrollobserver callback
    const callback = function (target) {
        target.classList.add("inview");
    };

    // product-item scrollobserver
    new ScrollObserver(".products__item", callback, {
        root: null,
        rootMargin: "-100px 0px",
        threshold: 0,
    });

    // section-title scrollobserver
    new ScrollObserver(".title", callback, {
        root: null,
        rootMargin: "-100px 0px",
        threshold: 0,
    });

    // section-title-animation
    const targets = document.querySelectorAll(".title");
    targets.forEach((target) => {
        console.log(target);
        new TextAnimation(target);
    });

});
