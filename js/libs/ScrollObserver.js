document.addEventListener('DOMContentLoaded', function() {

    const callback = function(target) {
        target.classList.add('inview');
    }

    new ScrollObserver('.products__item', callback)

});


class ScrollObserver {
    constructor(els, callback, options) {
        this.DOM = {}
        this.DOM.els = document.querySelectorAll(els);
        this.cb = callback;
        const defaultOptions = {
            root: null,
            rootMargin: "-10px 0px",
            threshold: 0,
        }
        this.options = Object.assign(defaultOptions, options);
        this._scrollInit();
    }

    _scrollInit() {
        const callback = function (entries, observer) {
            entries.forEach(entry => {
                if(entry.isIntersecting) {
                    this.cb(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }

        const io = new IntersectionObserver(callback.bind(this), this.options);
    
        this.DOM.els.forEach(el => {
            io.observe(el);
        });
    }
}