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
import fs from 'fs';


let config = {
    defaultConfigDir : './resources/bootstrap',
    defaultCustomDir : './resources/custom',
    defaultJqueryDir: './resources/jquery',
    publicDir : './public'
}
//plugins
gulp.task('plugins', function () {
    return gulp.src(config.defaultCustomDir + '/plugins/**/*')
        .pipe(gulp.dest(config.publicDir + '/plugins'));
});
//css
gulp.task('css', function () {
    return gulp.src([
        config.defaultCustomDir + '/scss/app.scss',  // 1. defaultCustomDir/scss/bootstrap/app.scss -> einbinden von bootstrap
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
//images
gulp.task(
    'images2',
    function () {
        return gulp.src(config.defaultCustomDir + '/images/**/*')
            .pipe(changed(config.publicDir + '/images'))
            .pipe(imagemin([
                imageminGifsicle({interlaced: true}),
                imageminMozjpeg({quality: 75, progressive: true}),
                imageminOptipng({optimizationLevel: 5}),
                imageminSvgo({
                    plugins: [{
                        name: 'removeViewBox',
                        active: false

                    }]
                })
            ]))
            .pipe(gulp.dest(config.publicDir + '/images'));
    });

gulp.task('images', function () {
    return gulp.src(config.defaultCustomDir + '/images/**/*', { encoding: false })
        .pipe(changed(config.publicDir + '/images'))
        .pipe(imagemin([
            imageminGifsicle({ interlaced: true }),
            imageminMozjpeg({ quality: 75, progressive: true }),
            imageminOptipng({ optimizationLevel: 5 }),
            imageminSvgo({
                plugins: [{
                    name: 'removeViewBox',
                    active: false
                }]
            })
        ]))
        .pipe(gulp.dest(config.publicDir + '/images'));
});

//fonts
gulp.task('fonts', function (done) {
    if(!fs.existsSync(config.publicDir + '/fonts')) {
        fs.mkdirSync(config.publicDir + '/fonts');
    }
    fs.copyFileSync(config.defaultCustomDir + '/fonts/bootstrap-icons.woff', config.publicDir + '/fonts/bootstrap-icons.woff');
    fs.copyFileSync(config.defaultCustomDir + '/fonts/bootstrap-icons.woff2', config.publicDir + '/fonts/bootstrap-icons.woff2');
    done();
});
//javascript
//JavaScript
gulp.task(
    'js', function () {
        return gulp.src([//Befehl laden alles aus dem Ordner
            config.defaultJqueryDir + '/jquery.min.js',
            config.defaultJqueryDir + '/jquery.session.js',
            config.defaultConfigDir + '/js/bootstrap.min.js',
            config.defaultConfigDir + '/js/bootstrap-filestyle.min.js',
            config.defaultCustomDir + '/js/**/*.js',
        ])
            .pipe(concat('app.min.js'))//fasst alle Javascript-Dateien zu einer Datei (app.min.js) zusammen
            .pipe(uglify())              //dann diese Datei minifizieren
            .pipe(gulp.dest(config.publicDir + '/js'));//speichert die Datei in den Ordner dist (config.publicDir + '/js')
    });
// Standard-Task
gulp.task('alles ausfuehren', gulp.series('css', 'fonts', 'images', 'plugins', 'js'),);