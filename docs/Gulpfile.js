'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function () {
    return gulp.src('./assets/sass/*.scss')
        .pipe(sass.sync().on('error', sass.logError))
        .pipe(gulp.dest('./assets/css'));
});

gulp.task('sass:watch', function () {
    gulp.watch('./assets/sass/*.scss', ['sass']);
});

gulp.task('copy-fonts', function() {
    gulp.src('./node_modules/font-awesome/fonts/**/*.{ttf,woff,eof,svg,woff2}')
        .pipe(gulp.dest('./assets/fonts'));
});

gulp.task('copy-js', function() {
    gulp.src('./node_modules/bootstrap-sass/assets/javascripts/bootstrap.js')
        .pipe(gulp.dest('./assets/js'))
});