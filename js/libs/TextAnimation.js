class TextAnimation {
    constructor(el) {
        this.DOM = {};
        this.DOM.el = el;
        this.str = this.DOM.el.textContent.trim();
        this.strArry =  this.str.split('');
        this.concatStr = this._splitText();
        this.DOM.el.innerHTML = this.concatStr
    }

    _splitText() {
        return this.strArry.reduce((accu, curr) => {
            curr = curr.replace(' ', '&nbsp;');
            const concatStr = `${accu}<span class="char">${curr}</span>`;
            return concatStr;
        }, '');
    }
}

