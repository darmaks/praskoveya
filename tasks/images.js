const { src, dest, parallel } = require("gulp");
const image = require('gulp-image');
const paths = require('./paths');

function imagesDev(){
	return src(paths.srcImages + '/**/*.*')
		.pipe(dest(paths.devDir + paths.staticDir + '/img'));
}

function svgDev(){
	return src(paths.srcSVG + '/*.*')
		.pipe(dest(paths.devDir + paths.staticDir + '/svg'));
}

function imagesBuild(){
	return src(paths.srcImages + '/**/*.*')
		.pipe(image())
		.pipe(dest(paths.buildDir + paths.staticDir + '/img'));
}

function svgBuild(){
	return src(paths.srcSVG + '/*.*')
		.pipe(image({
			svgo: true
		  }))
		.pipe(dest(paths.buildDir + paths.staticDir + '/svg'));
}

const imagesDevTask = parallel(imagesDev, svgDev);
const imagesBuildTask = parallel(imagesBuild);


module.exports = {
	imagesDevTask,
	imagesBuildTask
};