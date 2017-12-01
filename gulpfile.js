var gulp         = require('gulp'),
    sass         = require('gulp-sass'),
    postcss      = require("gulp-postcss"),
    cssnano      = require('gulp-cssnano'),
    autoprefixer = require('gulp-autoprefixer');

/* =============================================================================
   Regular Sass
   ========================================================================== */
    // Static Server + watching scss files
gulp.task('serve', ['stylesheets'], function() {
    gulp.watch("./etc/css/custom/*.scss", ['stylesheets']);
    gulp.watch("./etc/css/custom/variables/*.scss", ['stylesheets']);
    gulp.watch("./etc/css/scss/*.scss", ['stylesheets']);
});

    // Compile sass into CSS
gulp.task('sass', function () {
    return gulp.src('./etc/css/custom/styles.scss')
        .pipe(sass())
        .pipe(gulp.dest('./etc/css/compilation'));
});

    // CSSnano / PostCSS / Autoprefixer
gulp.task('stylesheets', ['sass'], function() {
    gulp.src("./etc/css/compilation/styles.css")
        .pipe(cssnano([,
            postcss(),
            autoprefixer({browsers: ['last 3 versions']})
        ]))
        .pipe(gulp.dest("./src/css/"));
});

gulp.task('default', ['serve']);

/* =============================================================================
   Framework Sass
   ========================================================================== */
    // Compile sass into CSS
gulp.task('sassFW', function () {
    return gulp.src('./framework/css/scss/styles.scss')
        .pipe(sass())
        .pipe(gulp.dest('./framework/compilation/'));
});

    // CSSnano / PostCSS / Autoprefixer
gulp.task('compileFW', ['sassFW'], function() {
    gulp.src("./framework/css/compilation/styles.css")
        .pipe(cssnano([,
            postcss(),
            autoprefixer({browsers: ['last 3 versions']})
        ]))
        .pipe(gulp.dest("./framework/css/"));
});

gulp.task('framework', ['compileFW']);