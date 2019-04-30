const browserSync = require('browser-sync');
const server = browserSync.create();

const locals = require('./_locals');

function reload(done){
    server.reload();
    done();
}


function serveDev(done){
    server.init({
        // server: {
        //     baseDir: './'
        // }
        proxy: locals.proxy
    });
    done();
}

function serveBuild(done){
    server.init({
        server: {
            baseDir: './build'
        }
    });
    done();
}

module.exports = {
    serveDev,
    serveBuild,
    server,
    reload,
    browserSync
};


