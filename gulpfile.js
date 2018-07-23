'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');


gulp.task('sass', function () {
  return gulp.src(['./assets/src/sass/palette.sass', './assets/src/sass/**/*.sass'])
  	.pipe(concat('all.sass'))
    .pipe(sass({indentedSyntax: true}).on('error', sass.logError))
    .pipe(gulp.dest('./assets/build/css'));
});

gulp.task('watch', function () {
  gulp.watch('./assets/src/sass/**/*.sass', ['sass']);
});

gulp.task('default', ['sass', 'watch']);
