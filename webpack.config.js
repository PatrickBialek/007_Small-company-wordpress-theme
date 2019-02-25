const path = require("path");

module.exports = {
	entry: './js/app.js',
	output: {
		path: path.join(__dirname, './src'),
		filename: "bundled.js"
	}
}