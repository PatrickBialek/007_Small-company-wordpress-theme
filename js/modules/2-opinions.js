const Flickity = require("flickity");
const elm = document.querySelector("#carousel-container");

console.log(elm);

if (elm) {
	const flkty = new Flickity(elm, {
		cellAlign: 'left',
		contain: true,
		wrapAround: true
	});
}