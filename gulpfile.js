const gulp = require('gulp');
const imagemin = require('gulp-imagemin');
 
gulp.task('default', () =>
    gulp.src('media/img-src/**/*')
        .pipe(imagemin())
        .pipe(gulp.dest('media/img'))
);
