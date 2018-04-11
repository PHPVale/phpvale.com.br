let gulp    = require('gulp'),
	  sass    = require('gulp-sass'),
	  concat  = require('gulp-concat'),
	  connect = require('gulp-connect');

gulp.task('default', ['sass', 'connect', 'watch']);

gulp.task('sass', () => {
	gulp.src('assets/src/scss/**/style.scss')
	.pipe(concat('style.min.css'))
	.pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
	.pipe(gulp.dest('assets/dist/css/'));
});

gulp.task('connect', () => {
  connect.server({
    livereload: true,
    port: 9001
  });
});

gulp.task('watch', () => {
  gulp.watch('assets/src/scss/**/*.scss', ['sass']);
}); 