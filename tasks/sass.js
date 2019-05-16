const { series, parallel, src, dest } = require("gulp");
const del = require("del");
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const csso = require('gulp-csso');
const paths = require('./paths');
const sourcemaps = require('gulp-sourcemaps');
const { browserSync } = require('./serve');

// remove all "CSS" files from "dev"
function cleanCss(cb) {
	return del(paths.devDir + paths.staticDir + '/css').then(() => {
		cb();
	});
}


// compile SASS to CSS and paste into dev folder
function cssDev(){
	return src('./src/sass/main.sass')
		.pipe(sourcemaps.init({largeFile: true}))
		.pipe(sass().on('error', sass.logError))
		.pipe(autoprefixer({
			browsers: [
				'Android 2.3',
				'Android >= 4',
				'Chrome >= 20',
				'Firefox >= 24', // Firefox 24 is the latest ESR
				'Explorer >= 8',
				'iOS >= 6',
				'Opera >= 12',
				'Safari >= 6'
			],
			cascade: false
		}))
		//.pipe(hash({
		//	"format": "{name}.{hash}{ext}"
		//}))
		.pipe(sourcemaps.write('./map'))
		.pipe(dest(paths.devDir + paths.staticDir + '/css'));
}

function cssBuild(){
	return src('./src/sass/main.sass')
		.pipe(sass().on('error', sass.logError))
		.pipe(autoprefixer({
			browsers: [
				'Android 2.3',
				'Android >= 4',
				'Chrome >= 20',
				'Firefox >= 24', // Firefox 24 is the latest ESR
				'Explorer >= 8',
				'iOS >= 6',
				'Opera >= 12',
				'Safari >= 6'
			],
			cascade: false
		}))
		.pipe(csso({
			restructure: false,
			sourceMap: false,
			debug: true
		}))
		.pipe(dest(paths.devDir + paths.staticDir + '/css'));
}

const cssDevTask = series(cleanCss, cssDev); 
const cssBuildTask = cssBuild;

module.exports = {
	cssBuildTask,
	cssDevTask
}