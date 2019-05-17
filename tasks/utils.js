const { src, dest, parallel } = require('gulp');
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

function cleanCssFolder(cb) {
	return del('./css').then(() => {
		cb();
	});
}

function cleanJsFolder(cb) {
	return del('./js').then(() => {
		cb();
	});
}

function cleanImgFolder(cb) {
	return del('./img').then(() => {
		cb();
	});
}

const cleanForBuild = parallel(
	cleanCssFolder, 
	//cleanImgFolder,
	cleanJsFolder
); 

module.exports = {
	cleanBuild,
	cleanDev,
	cleanForBuild
};