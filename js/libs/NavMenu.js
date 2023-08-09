class NavMenu {
    constructor(trigger, el) {
        this.trigger = document.querySelector(trigger);
        this.el = document.querySelector(el);
        this._addEvent();
    }

    _addEvent() {
        this.trigger.addEventListener('click', this._toggleClass.bind(this));
    }

    _toggleClass() {
        this.el.classList.toggle('open');
    }
}