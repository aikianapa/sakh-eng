"use strict";

const {src, dest} = require("gulp");
const gulp = require("gulp");
const cssbeautify = require("gulp-cssbeautify");
const removeComments = require('gulp-strip-css-comments');
const rename = require("gulp-rename");
const sass = require("gulp-sass");
const cssnano = require("gulp-cssnano");
const plumber = require("gulp-plumber");
const del = require("del");
const browsersync = require("browser-sync").create();


/* Paths */
var path = {
    build: {
        css: "dist/assets/css/"
    },
    src: {
        css: "src/assets/sass/style.scss",
    },
    watch: {
        css: "src/assets/sass/**/*.scss",
    },
    clean: "./dist"
}



/* Tasks */
function browserSync(done) {
    browsersync.init({
        proxy: "http://localhost:8888"
    });
    gulp.watch("./app/*.php").on("change", browsersync.reload())
}

function css() {
    return src(path.src.css, { base: "src/assets/sass/" })
        .pipe(plumber())
        .pipe(sass())
/*         .pipe(autoprefixer({
            browsers: ['last 8 versions'],
            cascade: true,
            remove: false
        })) */
        .pipe(cssbeautify())
        .pipe(dest(path.build.css))
        .pipe(cssnano({
            zindex: false,
            discardComments: {
                removeAll: true
            }
        }))
        .pipe(removeComments())
        .pipe(rename({
            suffix: ".min",
            extname: ".css"
        }))
        .pipe(dest(path.build.css))
        .pipe(browsersync.stream());
}

function cssStatic() {
    return src(path.src.cssStatic, { base: "src/assets/css/" })
        .pipe(dest(path.build.css))
        .pipe(browsersync.stream());
}

function clean() {
    return del(path.clean);
}

function watchFiles() {
    gulp.watch([path.watch.css], css);
}

const build = gulp.series(clean, gulp.parallel(css, cssStatic));
const watch = gulp.parallel(build, watchFiles, browserSync);



/* Exports Tasks */

exports.css = css;
exports.cssStatic = cssStatic;
exports.clean = clean;
exports.build = build;
exports.watch = watch;
exports.default = watch;
