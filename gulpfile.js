var gulp = require('gulp');
var browserSync = require('browser-sync');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var watch = require('gulp-watch');
var babel = require("gulp-babel");
var concat = require("gulp-concat");

gulp.task('serve', ['sass', 'js'], function() {
    browserSync.init({
        server: "./"
    });

    gulp.watch("sass/*.sass", ['sass']);
    gulp.watch("scripts/*.js", ['js']);
    gulp.watch("index.php").on('change', browserSync.reload);
});

gulp.task('sass', function() {
    return gulp.src("sass/style.sass")
        .pipe(sass({
            outputStyle: 'compressed'
        }).on('error', sass.logError))
        .pipe(autoprefixer({
            browsers: ['ie >= 10', 'last 10 versions']
        }))
        .pipe(gulp.dest("styles/"))
        .pipe(browserSync.stream());
});

gulp.task("js", function() {
    return gulp.src(['scripts/js1.js', 'scripts/js2.js', 'scripts/js3.js', 'scripts/form.js'])

    .pipe(concat('script.js'))
        .pipe(babel({
            presets: ['es2015']
        }))
        .pipe(gulp.dest("scripts/"))
        .pipe(browserSync.stream());
});


gulp.task('default', ['serve']);