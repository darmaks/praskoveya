const { src, dest } = require('gulp');
const del = require("del");
const paths = require('./paths');

// clean "dev" folder
function cleanDev(cb) {
	return del(paths.devDir).then(() => {
		cb();
	});
}

// clean "build" folder
function cleanBuild(cb) {
	return del(paths.buildDir).then(() => {
		cb();
	});
}

module.exports = {
	cleanBuild,
	cleanDev
};