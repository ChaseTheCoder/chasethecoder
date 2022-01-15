// list dependences
const { src, dest, watch, series } = require('gulp');
const sass = require('gulp-sass');
const prefix = require('gulp-qutoprefixer');
const minify = require('gulp-clearn-css');
const terser = require('gulp-terser');
const imagemin = require('gulp-imagemin');
const imagewebp = require('gulp-webp');

// create functions 
//-scss
function compilescss(){
  // returns files form src/scss folder then runs functions required above
  return src('src/scss/*.scss')
  .pipe(sass())
  .pipe(prefix())
  .pipe(minify())
  .pipe(dest('/dist/css')) //destination in this folder
}

// -js
function jsmin(){
  return src('src/js*.js')
    .pipe(terser())
    .pipe(dest('dist/js'))
}

function optimizeimg(){
  return src('src/images/*.{jpg,png}')
    .pipe(imagemin(
      imagemin.mozjpeg({ quality:80, progressive: true}), //progressive: true allows image to load fuzzy first rather than nothing until it is loaded
      imagemin.optipng({ optiminzationLevel: 2}),

    ))
    .pipe(dest('dist/images'))
}

// webp iamges
function webpImage() {
  return src('dist/images/*{jpg,png}')
    .pipe(imagewebp())
    .pipe(dest('dist/images'))
}

// create watchtask: when something happens in these folders it will call the task and run the function above
function watch(){
  watch('src/scss/*.scss', comilescss);
  watch('src/js/*.js', jsmin);
  watch('src/images/*{jpg,png}', optimizeing);
  watch('src/images/*{jpg,png}', webpImage);
}

// default gulp: allows to run 'gulp' in cli and run everything
// will run first four functions then 'watch' anytime anything is changed
exports.default = series(
  compilescss,
  jsmin,
  optimizeimg,
  webpImage,
  watch
)