const { src, dest } = require("gulp");
const paths = require('./paths');

function fontsDev(){
	return src(paths.srcFonts + '/*.*')
		.pipe(dest(paths.devDir + paths.staticDir + '/fonts'));
}

function fontsBuild(){
	return src(paths.srcFonts + '/*.*')
		.pipe(dest(paths.buildDir + paths.staticDir + '/fonts'));
}

const fontsDevTask = fontsDev;
const fontsBuildTask = fontsBuild;

module.exports = {
	fontsBuildTask,
	fontsDevTask
};