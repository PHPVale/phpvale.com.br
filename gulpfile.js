let gulp    = require('gulp'),
	  sass    = require('gulp-sass'),
	  concat  = require('gulp-concat'),
	  connect = require('gulp-connect'),
	  minify  = require('gulp-minify');

gulp.task('default', ['sass', 'js', 'connect', 'watch']);

gulp.task('sass', () => {
	gulp.src('assets/src/scss/**/style.scss')
			.pipe(concat('style.min.css'))
			.pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
			.pipe(gulp.dest('assets/dist/css/'));
});

gulp.task('js', () => {
  gulp.src('assets/src/js/main.js')
      .pipe(concat('main.js'))
      .pipe(minify({
        ext:{
          min:'.min.js'
        },
        noSource: true
      }))
      .pipe(gulp.dest('assets/dist/js'))
});

gulp.task('connect', () => {
  connect.server({
    livereload: true,
    port: 9001
  });
});

gulp.task('watch', () => {
  gulp.watch('assets/src/scss/**/*.scss', ['sass']);
  gulp.watch('assets/src/js/**/*.js', ['js']);
}); 