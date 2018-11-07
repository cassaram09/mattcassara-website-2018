var gulp = require('gulp');
var watch = require('gulp-watch');
var gutil = require('gulp-util');
var concat = require('gulp-concat');
var scss = require('gulp-sass');
var minifyCss = require('gulp-minify-css');
var rename = require('gulp-rename');
var browserSync = require('browser-sync').create();
var inject = require('gulp-inject');
var run = require('gulp-run');
const notifier = require('node-notifier');
var autoprefixer = require('autoprefixer');
var postcss = require('gulp-postcss');

var paths = {
  styleSheet: './wp-content/themes/master/scss/style.scss',
  scss: [
    './wp-content/themes/master/scss/components/**/*.scss',
  ],
  css: './wp-content/themes/master',
  theme: './wp-content/themes/master/**/*.*',
  js: './wp-content/themes/master/js/index.js'
};

gulp.task('browser-sync', function() {
    //watch files
    var files = [paths.theme]

    //initialize browsersync
    browserSync.init(files, {
    proxy: "development",
    notify: false
    });
});
 
gulp.task('scss', function(done) {
  var hasError = false;
  gulp.src(paths.styleSheet)
    .pipe(scss())
    .pipe(postcss( [ autoprefixer() ]))
    .on('error', function(error){
      hasError = true;
      notifier.notify({
        'title': 'Compile Failed',
        'message': error.message.split('\nError: ').slice(1).join(),
        'sound': true,
      });
    })
    .pipe(gulp.dest(paths.css))
    .pipe(minifyCss({
      keepSpecialComments: 0
    }))
    .pipe(rename({ extname: '.min.css' }))
    .pipe(gulp.dest(paths.css))
    .on('end',function(){
      if ( !hasError ){
        notifier.notify({
          'title': 'Compile Success',
          'message': 'Stylesheet successfully compiled.',
          'sound': true,
        });
      }
      done()
    });
});

gulp.task('serve', ['browser-sync'], function() {
  // if a file is added or deleted, reload our dependencies
  gulp.start('loadScss')
  gulp.start('bundleJs')
  watch(paths.scss, function(vinyl){
    console.log(vinyl)
    console.log(vinyl.event)
    if (vinyl.event == 'add' || vinyl.event == 'unlink'){
     notifier.notify({
        'title': 'File change',
        'message': vinyl.event,
        'sound': true,
      });
    }

    // wait for dependencies to load before we recompile!
    setTimeout(function(){
      gulp.start('scss')
    }, 2000)
  })
  
  watch('./wp-content/themes/master/scss/**/*.scss', function(vinyl){
    gulp.start('scss')
  })

  watch(paths.js, function(vinyl){
    gulp.start('bundleJs')
  })
})

// adds all scss stylesheets to styles.scss
gulp.task('loadScss', function(done){
  var hasError = false;
  var scss = gulp.src(paths.scss, {read: false})
 
  var scssOptions = {
    addRootSlash: false,
    addPrefix: '.',
    transform: function (filepath) {
      var rejectFiles = {
        style: filepath.slice(-10) === 'style.scss'
      }

      for ( var file in rejectFiles ){
        if ( rejectFiles[file] ){
          return
        }
      }
      return '@import "' + filepath + '";';
    }
  }

  gulp.src('./wp-content/themes/master/scss/_components.scss')
  .pipe(inject(scss, scssOptions))
  .on('error', function(error){
    hasError = true;
    notifier.notify({
      'title': 'SCSS Load Failed',
      'message': error.message.split('\nError: ').slice(1).join(),
      'sound': true,
    });
  })
  .pipe(gulp.dest('./wp-content/themes/master/scss/'))
  .on('done', function(){
    if ( !hasError ){
      notifier.notify({
        'title': 'SCSS Load Success',
        'message': 'SCSS files loaded.',
        'sound': true,
      });
    }

    done()
  })

})

gulp.task('bundleJs', function(done){
  run('npm run build').exec(function(error){

    if ( !error ) {
       notifier.notify({
        'title': 'JS bundled.',
        'message': 'Index.js compiled.',
        'sound': true,
      })
    } else {
       notifier.notify({
        'title': 'JS Bundle failed.',
        'message': 'Failed with error code: ' + error.status,
        'sound': true,
      })
    }
    
    done()

  })
 
})


