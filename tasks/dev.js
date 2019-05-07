const { series, parallel, watch } = require("gulp");

const { cssDevTask } = require('./sass');
const { jsDevTask } = require('./script');
const { fontsDevTask } = require('./fonts');
const { imagesDevTask }  = require('./images');
const { serveDev, reload } = require('./serve');

const paths = require('./paths');


function watchDev(){
    watch([paths.srcSass+'/**/*.sass', paths.srcSass+'/**/*.scss'], series(cssDevTask, reload));
    //watch(paths.srcPug+'/**/*.pug', series(htmlDevTask, insertHashedCss, reload));
    //watch(['./**/*.php', './**/*.html'], reload);
    watch(paths.srcFonts+'/*.*', series(fontsDevTask, reload));
    watch(paths.srcJs+'/**/*.*', series(jsDevTask, reload));
    watch(paths.srcImages+'/**/*.*', series(imagesDevTask, reload));
}

module.exports = series(
    parallel(cssDevTask, jsDevTask, fontsDevTask, imagesDevTask),
    serveDev, 
    watchDev
);