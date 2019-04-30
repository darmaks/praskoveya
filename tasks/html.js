const { series, src, dest } = require("gulp");
const prettyHtml = require('gulp-pretty-html');
const htmlmin = require('gulp-htmlmin');
const del = require("del");
const paths = require('./paths');

// remove all "html" files from "dev" folder in root
function cleanHtml(cb) {
	return del(paths.devDir + '/*.html').then(() => {
		cb();
	});
}

// compile Pug files to HTML into "dev" folder
function htmlDev() {
	return src("./pug/views/*.pug")
		.pipe(
			pug({
				basedir: "./pug/",
				doctype: "html"
			})
		)
		.pipe(prettyHtml({
			indent_size: 4,
			indent_char: ' ',
			unformatted: ['code', 'pre', 'em', 'strong', 'span', 'i', 'b', 'br']
		}))
		.pipe(dest(paths.devDir));
}

function htmlBuild() {
	return src(paths.devDir + "/*.html")
		.pipe(htmlmin({
			collapseWhitespace: true,
			removeComments: true
		  }))
		.pipe(dest(paths.buildDir));
}


const htmlDevTask = htmlDev;
const htmlBuildTask = htmlBuild;

//module.exports = series(cleanHtml, htmlDev);
module.exports = {
	htmlDevTask,
	htmlBuildTask
};