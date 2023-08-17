document.addEventListener("DOMContentLoaded", function () {
    new Main();
});

class Main {
    constructor() {
        this._init();
        this._scrollInit();
        this._textAnimationInit();
    }

    _init() {
        // navigation menu
        new NavMenu(".menu-btn", ".header");
    
        // slider
        const hero = new HeroSlider(".swiper");
        hero.stop();
    }

    // section-title-animation
    _textAnimationInit() {
        const targets = document.querySelectorAll(".title");
        targets.forEach((target) => {
            new TextAnimation(target);
        });
    }

    _scrollInit() {
        // product-item scrollobserver
        new ScrollObserver(".products__item", this._callback, {
            root: null,
            rootMargin: "-100px 0px",
            threshold: 0,
        });

        // section-title scrollobserver
        new ScrollObserver(".title", this._callback, {
            root: null,
            rootMargin: "-100px 0px",
            threshold: 0,
        });
    }

    // scrollobserver callback
    _callback(target) {
        target.classList.add("inview");
    }
}
