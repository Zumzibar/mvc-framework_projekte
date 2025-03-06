import gulp from 'gulp';
import concat from 'gulp-concat';
import uglify from 'gulp-terser';
import imagemin from 'gulp-imagemin';
import imageminGifsicle from 'imagemin-gifsicle';
import imageminMozjpeg from 'imagemin-mozjpeg';
import imageminOptipng from 'imagemin-optipng';
import imageminSvgo from 'imagemin-svgo';
import changed from 'gulp-changed';
import rename from 'gulp-rename';
import *as dartSass from 'sass';
import gulpSass from 'gulp-sass';
const sass = gulpSass(dartSass);
import cssmin from 'gulp-clean-css';
import cleanCSS from 'gulp-clean-css';



let config = {
    defaultConfigDir : './resources/bootstrap',
    defaultCustomDir : './resources/custom',
    publicDir : './public'
}

gulp.task('plugins', function () {
    return gulp.src(config.defaultCustomDir + '/plugins/**/*')
        .pipe(gulp.dest(config.publicDir + '/plugins'));
});

gulp.task('css', function () {
    return gulp.src([
        config.defaultCustomDir + '/scss/bootstrap/app.scss',  // 1. defaultCustomDir/scss/bootstrap/app.scss -> einbinden von bootstrap
        config.defaultCustomDir + '/css/**/*.{css,scss}',      // 2. defaultCustomDir/css -> einbinden alle '.css und '.scss dateien mit Unterordner
        config.defaultConfigDir + '/**/*.{css,scss}'        // 3. alle Dateien zusammenfassen
    ], { allowEmpty: true }) // Fehler vermeiden, wenn eine Datei fehlt
        .pipe(sass.sync().on('error', sass.logError))  // SCSS zu CSS kompilieren
        .pipe(concat('app.css'))  // 4.umbenennen in app.css
        .pipe(gulp.dest(config.publicDir + '/css'))  // In publicDir speichern
        .pipe(cleanCSS({ compatibility: 'ie8' }))   // CSS minifizieren
        .pipe(rename({ suffix: '.min' })) // Umbenennen in app.min.css
        .pipe(gulp.dest(config.publicDir + '/css')); // In publicDir speichern
});

gulp.task('images', function () {
    return gulp.src(config.defaultCustomDir + '/images/**/*')
        .pipe(gulp.dest(config.publicDir + '/images'));
});

gulp.task('fonts', function () {
    return gulp.src(config.defaultCustomDir + '/fonts/**/*')
        .pipe(gulp.dest(config.publicDir + '/fonts'));
});

// Standard-Task
gulp.task('alles ausfuehren', gulp.series('css', 'fonts', 'images', 'plugins'),);

