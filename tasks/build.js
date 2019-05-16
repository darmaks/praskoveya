const { series, parallel, watch } = require("gulp");


const { cleanBuild, cleanForBuild } = require('./utils');
const { imagesBuildTask }  = require('./images');
const { cssBuildTask } = require('./sass');
const { fontsBuildTask } = require('./fonts');
const { jsBuildTask } = require('./script');
const { serveBuild } = require('./serve');


module.exports = series(
    cleanForBuild,
    parallel(
        imagesBuildTask,
        cssBuildTask,
        jsBuildTask
    )
);