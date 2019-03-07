// Packages
var browserSync     = require('browser-sync').create();
var gulp            = require('gulp');
var concat          = require('gulp-concat');
var imagemin        = require('gulp-imagemin');
var newer           = require('gulp-newer');
var notify          = require('gulp-notify');
var rename          = require('gulp-rename');
var include         = require('gulp-include');
var sass            = require('gulp-sass');
var svgmin          = require('gulp-svgmin');
var svgstore        = require('gulp-svgstore');
var cheerio         = require('gulp-cheerio');
var twig            = require('gulp-twig');
var uglify          = require('gulp-uglify');
var sassGlob        = require('gulp-sass-glob');
//var babel           = require('gulp-babel');

// Paths
var cssSrc          = './assets/scss/global.scss';
var cssDist         = './assets/dist/';
var jsSrc           = './assets/js/*.js';
var jsDist          = './assets/dist/';
var imgSrc          = './assets/img/**';
var imgDist         = './assets/img/';
var spriteSrc       = './assets/sprite/sprite.svg';
var spriteDist      = './assets/sprite/';
var fontSrc         = 'src/assets/fonts/**';
var fontDist        = 'dist/assets/fonts/';
var svgIcons        = './assets/sprite/svg/*'


// Task: sass
gulp.task('sass', function() {
  return gulp.src(cssSrc)
  .pipe(include())
  .pipe(sassGlob())
  .pipe(sass({outputStyle: 'compressed'}).on("error", notify.onError(function (error) {
      return "Error: " + error.message;
    })))
  .pipe(rename('global.min.css'))
  .pipe(gulp.dest(cssDist))
  .pipe(browserSync.stream());
});

// Task: scripts
gulp.task('scripts', function() {
  return gulp.src(jsSrc)
  .pipe(include())
  .pipe(concat('scripts.js'))
  // .pipe(babel({
  //     presets: ['es2015']
  //   }))
  .pipe(uglify())
  .pipe(rename('scripts.min.js'))
  .pipe(gulp.dest(jsDist))
  .pipe(browserSync.stream());
});


// Task: image
gulp.task('images', function() {
  return gulp.src(imgSrc)
  .pipe(newer(imgDist))
  .pipe(imagemin())
  .pipe(gulp.dest(imgDist));
});

// Task: fonts
gulp.task('fonts', function() {
  return gulp.src(fontSrc)
  .pipe(gulp.dest(fontDist));
});

// Task: icons
gulp.task('icons', function() {
  return gulp.src(svgIcons)
    .pipe(svgmin())
    .pipe(svgstore({
      fileName: 'icon-sprite.svg',
      inlineSvg: true
    }))
    .pipe(cheerio({
      run: function ($, file) {
          $('svg').addClass('hide')
          $('[fill]').removeAttr('fill')
      },
      parserOptions: { xmlMode: true }
    }))
    .pipe(rename('sprite.svg'))
    .pipe(gulp.dest('./assets/sprite/'))
    .pipe(gulp.dest(spriteDist));
});

gulp.task('serve', gulp.series('sass', function() {

  browserSync.init({
      proxy: "dav.test"
  });


  gulp.watch("./assets/scss/**/*.scss",  gulp.series('sass'));
  gulp.watch("./assets/js/*.js",  gulp.series('scripts'));
  gulp.watch("./assets/img/*",  gulp.series('images'));
  gulp.watch("./assets/sprite/svg/*",  gulp.series('icons'));
  gulp.watch("./assets/fonts/*", gulp.series('fonts'));

  gulp.watch("./**/*.*").on('change', browserSync.reload);
}));



// Task: watch
// gulp.task('watch', function() {
// });

// Run task: sass, scripts, images, fonts, templates & svgstore
gulp.task('default', gulp.series(['serve']));
