// /////////////////////////////////////////////////////
// Required
// /////////////////////////////////////////////////////

var gulp = require('gulp'),
	plumber = require('gulp-plumber'),
	autoprefixer = require('autoprefixer'),
	rename = require('gulp-rename'),
    cleanCSS = require("gulp-clean-css"),
    notify = require('gulp-notify'),
    postcss = require('gulp-postcss'),
	sass = require('gulp-ruby-sass'),
	sourcemaps = require('gulp-sourcemaps');

// /////////////////////////////////////////////////////
// postCSS Options
// /////////////////////////////////////////////////////

var postcssOptions = {
    optimizers: {
        "autoprefixer": true,
        "minifier": true
    }
};

// /////////////////////////////////////////////////////
// SASS Tasks
// /////////////////////////////////////////////////////

gulp.task('sass', function(){
	sass('scss/*.scss', {
		style: "compressed",
		loadPath: ['sass']
	})
	.pipe(plumber())
	.on('error', notify.onError(function(error){
		return "Error: " + error.message;
	}))
	.pipe(postcss([ autoprefixer({ browsers: ['last 2 versions'] }) ]))
	.pipe(sourcemaps.init())
	.pipe(cleanCSS())
	.pipe(sourcemaps.write())
	.pipe(gulp.dest('css'))
});

// /////////////////////////////////////////////////////
// HTML/PHP Tasks
// /////////////////////////////////////////////////////

gulp.task('html/php', function(){
	gulp.src(['**/*.html', '**/*.php']);
});

// /////////////////////////////////////////////////////
// Watch Task
// /////////////////////////////////////////////////////

gulp.task('watch', function(){
	gulp.watch('scss/**/*.scss', ['sass']);
	gulp.watch(['**/*.html', '**/*.php'], ['html/php']);
});

// /////////////////////////////////////////////////////
// Default Task
// /////////////////////////////////////////////////////

gulp.task('default', ['sass', 'html/php', 'watch']);