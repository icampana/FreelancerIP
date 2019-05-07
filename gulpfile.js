let gulp = require('gulp');
var less = require('gulp-less');
var cleanCSS = require('gulp-clean-css');
let rename = require('gulp-rename');
var header = require('gulp-header');
var uglify = require('gulp-uglify');
var pkg = require('./package.json');

// Set the banner content
var banner = ['/*!\n',
    ' * Freelancer - <%= pkg.title %> v<%= pkg.version %> (<%= pkg.homepage %>)\n',
    ' * Copyright 2018-' + (new Date()).getFullYear(), ' <%= pkg.author %>\n',
    ' * Licensed under <%= pkg.license.type %> (<%= pkg.license.url %>)\n',
    ' */\n',
    ''
].join('');

gulp.task('styles', () => {
    return gulp.src(['less/freelancer.less', 'less/freelancer-*.less'])
      .pipe(less())
      .pipe(header(banner, {
        pkg: pkg
      }))
      .pipe(cleanCSS({ compatibility: 'ie8' }))
      .pipe(rename({ suffix: '.min' }))
      .pipe(gulp.dest('assets/css'));
});

gulp.task('scripts', () => {
  return gulp.src('assets/js/freelancer.js')
    .pipe(uglify())
    .pipe(header(banner, {
      pkg: pkg
    }))
    .pipe(rename({
      suffix: '.min'
    }))
    .pipe(gulp.dest('assets/js'));
});


gulp.task('assets', (done) => {
  gulp.src(['node_modules/bootstrap/dist/**/*', '!**/npm.js', '!**/bootstrap-theme.*', '!**/*.map'])
    .pipe(gulp.dest('assets/vendor/bootstrap'));

  gulp.src(['node_modules/jquery/dist/jquery.js', 'node_modules/jquery/dist/jquery.min.js', 'node_modules/jquery.easing/bower_components/jquery-easing-original/jquery.easing.min.js'])
    .pipe(gulp.dest('assets/vendor/jquery'));

  gulp.src([
      'node_modules/font-awesome/**',
      '!node_modules/font-awesome/**/*.map',
      '!node_modules/font-awesome/.npmignore',
      '!node_modules/font-awesome/*.txt',
      '!node_modules/font-awesome/*.md',
      '!node_modules/font-awesome/*.json'
    ])
    .pipe(gulp.dest('assets/vendor/font-awesome'));
  done();
});

gulp.task('watch', () => {
    gulp.watch(['less/freelancer.less', 'less/freelancer-*.less'], gulp.series('styles'));
    gulp.watch('assets/js/*.js', gulp.series('scripts'));
});

gulp.task('default', gulp.parallel('styles', 'scripts', 'assets'));
