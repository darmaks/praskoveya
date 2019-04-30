const { series, parallel, watch } = require("gulp");


const { cleanBuild } = require('./utils');
const { imagesBuildTask }  = require('./images');
const { htmlBuildTask } = require('./html');
const { cssBuildTask } = require('./sass');
const { fontsBuildTask } = require('./fonts');
const { jsBuildTask } = require('./script');
const { serveBuild } = require('./serve');


module.exports = series(
    cleanBuild,
    parallel(
        htmlBuildTask,
        imagesBuildTask,
        cssBuildTask,
        fontsBuildTask,
        jsBuildTask
    ),
    serveBuild
);