class HeroSlider {
    constructor(el) {
        this.el = el;
        this.swiper = this._initSwiper();
    }

    _initSwiper() {
        return new Swiper(".swiper", {
            // Optional parameters
            direction: "horizontal", 
            loop: true,
            effect: 'coverflow',
            centeredSlides: true,
            slidesPerView: 1,
            breakpoints: {
                1024: {
                    solidesPerView: 2,
                }
            },
            speed: 1000,
            grabCursor: true,
        
            pagination: {
                el: ".swiper-pagination",
            },
        
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        
            scrollbar: {
                el: ".swiper-scrollbar",
            },
        });
    }

    // 自動再生をstart
    start(options = {}) {
        options = Object.assign({
            delay: 4000,
            disableOnInteraction: false,
        }, options);
        
        this.swiper.params.autoplay = options;
        this.swiper.autoplay.start();
    }

	// 自動再生のstop
    stop() {
        this.swiper.autoplay.stop();
    }
}