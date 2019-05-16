let devBuild = (process.env.NODE_ENV || "development").trim().toLowerCase() === "development";

//const { series, parallel} = require("gulp");

const dev = require('./tasks/dev');
const build = require('./tasks/build');



exports.dev = dev;
exports.build = build;

exports.default = dev;
