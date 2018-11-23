var gulp = require('gulp');
var browserSync = require('browser-sync').create();

gulp.task('browser-sync', function() {
  browserSync.init({
    proxy: 'crud.localhost'
  });

  gulp.watch('src/*.php').on('change', browserSync.reload);
  gulp.watch('src/css/style.css').on('change', browserSync.reload);
  gulp.watch('src/js/index.js').on('change', browserSync.reload);
});

gulp.task('default', ['browser-sync']);
