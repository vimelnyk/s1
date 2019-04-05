var gulp = require('gulp'),
    plumber = require('gulp-plumber'),
    sass = require('gulp-sass'),
    path = require('path'),
    postcss = require('gulp-postcss'),
    concat = require('gulp-concat'),
    autoprefixer = require('autoprefixer'),
    cssnano = require('cssnano'),
    sourcemaps = require('gulp-sourcemaps'),
    terser = require('gulp-terser'),
    rename = require('gulp-rename'),
    browserSync = require('browser-sync').create();


    function style(){
        return gulp.src('assets/scss/main.scss')
            .pipe(sourcemaps.init())
            .pipe(plumber())
            .pipe(sass({
            paths: [ path.join(__dirname, 'scss', 'includes') ]
            }))

            .pipe(postcss([
                autoprefixer()
            ]))
            .pipe(gulp.dest('assets/dist'))
            .pipe(postcss([
                cssnano()
            ]))
            .pipe(rename('main.min.css'))
            .pipe(sourcemaps.write())
            .pipe(gulp.dest('assets/prod'))
            .pipe(browserSync.stream())
    }

    exports.style = style

    function scripts(){
        return gulp.src([                       
                        'node_modules/slick-carousel/slick/slick.js',
                        'node_modules/aos/dist/aos.js',                        
                        'assets/js/scripts.js'])
            .pipe(plumber())
            .pipe(concat('all.js'))
            .pipe(gulp.dest('assets/dist'))
            .pipe(rename('all.min.js'))
            .pipe(terser())
            .pipe(gulp.dest('assets/prod'))
            .pipe(browserSync.stream())
    }
    exports.scripts = scripts

    function reload(){
        browserSync.reload()
    }
    exports.reload = reload


    function watch(){
        browserSync.init()
        gulp.watch('assets/scss/**/*.scss', style);
        gulp.watch('assets/js/*.js', scripts);
        gulp.watch('**/*.php').on('change', reload);
    }

    exports.watch = watch
