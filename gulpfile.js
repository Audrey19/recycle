// Dependencies
var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var notify = require('gulp-notify');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');


// Launch browser synch
gulp.task('serve', ['sass', 'compress'], function () {
    browserSync.init({
        proxy: "localhost" //url of site
    });
    gulp.watch("scss/**/*.scss", ['sass']);
    gulp.watch("js/dev/**/*.js", ['compress']);
    gulp.watch("*.php").on('change', browserSync.reload);
});


// Compile Scripts
gulp.task('compress', function () {
    return gulp.src(['src/js/library/*.js', 'src/js/script/*.js'])
        .pipe(concat('main.js'))
        .pipe(uglify().on('error', function (err) {
            notify({
                title: 'Javascript error'
            }).write(err.line + ' : ' + err.message);
            return this.emit('end');
        }))
        .pipe(gulp.dest('./'));
});


// Compile Styles
gulp.task('sass', function () {
    return gulp.src("scss/**/*.scss")
        .pipe(sass().on('error', function (err) {
            notify({
                title: 'CSS error'
            }).write(err.line + ' : ' + err.message);
            return this.emit('end');
        }))
        .pipe(autoprefixer({
            browsers: ["ie >= 9", "ie_mob >= 10", "ff >= 30", "chrome >= 34", "safari >= 7", "opera >= 23", "ios >= 7", "android >= 4.4", "bb >= 10"],
            cascade: false
        }))
        .pipe(gulp.dest('./'))
        .pipe(browserSync.stream());
});


// Default ['Serve'] function
gulp.task('default', ['serve']);
