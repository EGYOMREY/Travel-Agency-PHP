var gulp = require('gulp'),
    sass = require('gulp-sass'),
    browserSync = require('browser-sync'),
    autoprefixer = require('gulp-autoprefixer');

//Watch our files
//How does this work: gulp.watch('what-to-watch', ['which', 'tasks', 'to', 'run']);
gulp.watch("src/scss/**/*.scss", ['scss-watch']);
gulp.watch('src/images/**/*').on('change', function () {
    browserSync.reload();
  });
gulp.watch('**/*.php').on('change', function () {
    browserSync.reload();
  });


// Static Server + watching scss files
gulp.task('serve', function() {

  browserSync.init({
       proxy: "localhost/Travel-Agency-PHP/src"
  });


// this runs the tasks that are being watched, which run the required scripts
gulp.task('scss-watch', ['styles'], browserSync.reload);



});

// Compile sass into CSS & auto-inject into browsers
gulp.task('styles', function() {
  return gulp.src("src/scss/**/*.scss")
    .pipe(sass({
            outputStyle: 'compressed'
        }).on('error', sass.logError))
        .pipe(autoprefixer({
            browsers: ['last 2 versions']
        }))
        .pipe(gulp.dest('src/css'))
        .pipe(browserSync.stream());
});




//we deploy all our tasks by typing gulp
gulp.task('default', ['styles', 'serve']);




    
