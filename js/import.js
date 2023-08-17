const uri = new URL(window.location);
const origin = uri.origin;

document.write(`<script src="${origin}/wp-content/themes/FurnitureDesign2/js/libs/NavMenu.js"></script>`);
document.write(`<script src=${origin}/wp-content/themes/FurnitureDesign2/js/libs/HeroSlider.js></script>`);
document.write(`<script src=${origin}/wp-content/themes/FurnitureDesign2/js/libs/ScrollObserver.js></script>`);
document.write(`<script src=${origin}/wp-content/themes/FurnitureDesign2/js/libs/TextAnimation.js></script>`);
