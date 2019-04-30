const { series, parallel, src, dest } = require("gulp");
const del = require("del");
const concat = require('gulp-concat');
const paths = require('./paths');
const uglify = require('gulp-uglify');

// remove all "JS" files from "dev"
function cleanJs(cb) {
	return del(paths.devDir + paths.staticDir + '/js').then(() => {
		cb();
	});
}

function jsDev() {
	const jsPaths = [
		paths.srcJs + '/framework/**/*.js',
		paths.srcJs + '/libraries/**/*.js',
		paths.srcJs + '/plugins/**/*.js',
		paths.srcJs + '/*.js'
	];

	return src(jsPaths)
		.pipe(concat('main.js'))
		.pipe(dest( paths.devDir + paths.staticDir + '/js'));
}

function jsBuild() {
	return src(paths.devDir + paths.staticDir + '/js/*.js')
		.pipe(uglify())
		.pipe(dest( paths.buildDir + paths.staticDir + '/js'));
}

const jsDevTask = jsDev;
const jsBuildTask = jsBuild;

//module.exports = series(cleanJs, jsDev);
module.exports = {
	jsBuildTask,
	jsDevTask
};