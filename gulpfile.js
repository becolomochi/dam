var gulp = require('gulp');
var browserSync = require('browser-sync');

gulp.task('default', function() {
  browserSync.init({
    proxy: 'dam.becolomochi.dev/gezicht'
  });
  gulp.watch("./media/scss/**/*.scss", ['sass']);
  gulp.watch("./application/views/**/*.php").on('change', browserSync.reload);
});

var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');

gulp.task('sass', function () {
  return gulp.src('./media/scss/**/*.scss')
    .pipe(sourcemaps.init())
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(sourcemaps.write('./maps'))
    .pipe(gulp.dest('./media/css'));
});

gulp.task('sass:watch', function () {
  gulp.watch('./media/scss/**/*.scss', ['sass']);
});

var imgResize = require('gulp-image-resize');
var imgMin = require('gulp-imagemin');
var rename = require('gulp-rename');
var runSequence = require('run-sequence');

var inputResize = 'src/img_resize/';
var inputMin = 'src/img_min/';
var output = 'media/img/';

// gulp.task('default', function (callback) {
//  return runSequence(
//    [rename3x, imgResize2x, imgResize1x],
//    imgMin,
//    callback
//  );
// console.log('test');
// });

gulp.task('rename3x', function () {
  return gulp.src(inputResize + '*')
      .pipe(rename(function (path) { path.basename += "@3x"; }))
      .pipe(gulp.dest(inputMin));
});

gulp.task('imgResize2x', function () {
  return gulp.src(inputResize + '*')
      .pipe(imgResize({
        imageMagick: true,
        percentage: 66.6666666667
      }))
      .pipe(rename(function (path) { path.basename += "@2x"; }))
      .pipe(gulp.dest(inputMin));
});

gulp.task('imgResize1x', function () {
  return gulp.src(inputResize + '*')
      .pipe(imgResize({
        imageMagick: true,
        percentage: 33.3333333333
      }))
      .pipe(gulp.dest(inputMin));
});

gulp.task('imgMin', function () {
  return gulp.src(inputMin + '*')
      .pipe(imgMin())
      .pipe(gulp.dest(output));
});
