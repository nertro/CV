var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();

gulp.task('sass', function(){
    return gulp.src('assets/scss/main.scss')
        .pipe(sass())
        .pipe(gulp.dest('assets/css'))
        .pipe(browserSync.reload({
            stream: true
        }));
});

gulp.task('watch',['browserSync', 'sass'], function(){
    gulp.watch('assets/scss/**/*.scss', ['sass']); 
    gulp.watch('site/**/*.php', browserSync.reload);
    gulp.watch('**/*.js', browserSync.reload);
});

gulp.task('browserSync', function(){
    browserSync.init({
        proxy: 'http://localhost:8888/'
    })
});