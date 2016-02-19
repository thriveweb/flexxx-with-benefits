var gulp        = require('gulp');
var browserSync = require('browser-sync');
var sass        = require('gulp-sass');
var reload      = browserSync.reload;

var src = {
  scss: 'scss/*.scss',
  css:  './',
  html: './*.php'
};

// Static Server + watching scss/html files
gulp.task('serve', ['sass'], function() {

  browserSync({
    proxy: "192.168.1.110:8888"
  });

  gulp.watch(src.scss, ['sass']);
  gulp.watch(src.html).on('change', reload);
});

// Compile sass into CSS
gulp.task('sass', function() {
  return gulp.src(src.scss)
    .pipe(sass({outputStyle: 'expanded'})
    .on('error', function(err){
        browserSync.notify(err.message, 3000);
        this.emit('end');
    }))
    .pipe(gulp.dest(src.css))
    .pipe(reload({stream: true}));
});

gulp.task('default', ['serve']);
