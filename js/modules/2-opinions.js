const Flickity = require('flickity');
const elm = document.querySelector('#opinions-container');

console.log(elm);

const flkty = new Flickity(elm, {
	cellAlign: 'left',
	contain: true
});