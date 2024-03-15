const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const autoprefixer = require("autoprefixer");
const cssnano = require("cssnano");
const postcss = require("gulp-postcss");
const sourcemaps = require("gulp-sourcemaps");
const terser = require("gulp-terser-js");
const concat = require("gulp-concat");
const rename = require("gulp-rename");
const plumber = require("gulp-plumber");
const loadWebp = async () => {
  const webpModule = await import("gulp-webp");
  return webpModule.default;
};

const convertirWebp = async () => {
  const webp = await loadWebp();
  const gulpInstance = gulp;

  return gulpInstance
    .src("src/img/*.jpg")
    .pipe(
      webp({
        quality: 80,
      })
    )
    .pipe(gulpInstance.dest("src/img"));
};

function css(done) {
  gulp
    .src("src/scss/**/*.scss")
    .pipe(sourcemaps.init())
    .pipe(plumber())
    .pipe(sass())
    .pipe(postcss([autoprefixer(), cssnano()]))
    .pipe(sourcemaps.write("."))
    .pipe(gulp.dest("build/css"));
  done();
}

function javascript(done) {
  gulp
    .src("src/js/**/*.js")
    .pipe(sourcemaps.init())
    .pipe(concat("bundle.js")) // final output file name
    .pipe(terser())
    .pipe(sourcemaps.write("."))
    .pipe(rename({ suffix: ".min" }))
    .pipe(dest("./build/js"));
  done();
}

function dev(done) {
  gulp.watch("src/scss/**/*.scss", css);
  gulp.watch("src/js/**/*.js", javascript);
  done();
}

exports.convertirWebp = convertirWebp;
exports.css = css;
exports.dev = dev;
