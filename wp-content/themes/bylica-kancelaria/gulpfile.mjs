import gulp from 'gulp';
import gulpSass from 'gulp-sass';
import cleanCSS from 'gulp-clean-css';
import rename from 'gulp-rename';
import uglify from 'gulp-uglify';
import babel from 'gulp-babel';
import browserSync from 'browser-sync';
import concat from 'gulp-concat';
import autoprefixer from 'gulp-autoprefixer';
import sourcemaps from 'gulp-sourcemaps';
import * as sassCompiler from 'sass';
import { deleteAsync } from 'del';
import gulpIf from 'gulp-if';
import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';

// Explanation: Define __dirname variable in ES module context
const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

const sass = gulpSass(sassCompiler);
const browserSyncInstance = browserSync.create();

const stylesOutputFileName = 'all';
const scriptsOutputFileName = 'all';
const bootstrapStylesOutputFileName = 'optimized-bootstrap';

const paths = {
  styles: {
    src: [
      'src/**/*.scss',
      'src/**/*.css',
      'shared/**/*.scss',
      'shared/**/*.css'
    ],
    dest: 'dist/css'
  },
  scripts: {
    src: [
      'src/**/*.js',
      'shared/**/*.js',
      '!src/**/_*.js',
      '!shared/**/_*.js'
    ],
    dest: 'dist/js'
  },
  php: {
    src: './**/*.php'
  },
  bootstrap: {
    src: 'node_modules/bootstrap/scss/**/*',
    dest: 'optimized/bootstrap/scss'
  },
  optimizedStyles: {
    src: 'optimized/bootstrap/scss/bootstrap.scss',
    dest: 'dist/css'
  },
  bootstrapImportFile: 'optimized/bootstrap/scss/bootstrap.scss'
};

function build_styles(src, dest, outputFileName) {
  return gulp
    .src(src)
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer())
    .pipe(concat(`${outputFileName}.css`))
    .pipe(gulp.dest(dest))
    .pipe(rename({ suffix: '.min' }))
    .pipe(cleanCSS())
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(dest))
    .pipe(browserSyncInstance.stream());
}

function build_scripts() {
  return gulp
    .src(paths.scripts.src)
    .pipe(sourcemaps.init())
    .pipe(concat(`${scriptsOutputFileName}.js`))
    .pipe(
      babel({
        presets: ['@babel/env'],
      })
    )
    .pipe(gulp.dest(paths.scripts.dest))
    .pipe(rename({ suffix: '.min' }))
    .pipe(uglify())
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(paths.scripts.dest))
    .pipe(browserSyncInstance.stream());
}

function copy_bootstrap_scss_from_node_modules() {
  const bootstrapScssExists = fs.existsSync(path.join(__dirname, paths.bootstrapImportFile));

  return gulp
    .src(paths.bootstrap.src)
    .pipe(gulpIf(file => !bootstrapScssExists || !file.relative.endsWith('bootstrap.scss'), gulp.dest(paths.bootstrap.dest)));
}

function task_build_styles_bootstrap() {
  return build_styles(paths.optimizedStyles.src, paths.optimizedStyles.dest, bootstrapStylesOutputFileName);
}

function task_build_app_styles() {
  return build_styles(paths.styles.src, paths.styles.dest, stylesOutputFileName);
}

function task_build_app_scripts() {
  return build_scripts();
}

function task_clean_dist_directory() {
  return deleteAsync(['dist']);
}

/*
 * Function: recompileBootstrap
 * Description:
 *  Copies Bootstrap SCSS files from node_modules to 'optimized' folder and creates an optimized version of Bootstrap.
 * Usage:
 *  To create an optimized Bootstrap version:
 *    1. Run this function once to copy the files.
 *    2. Edit 'optimized/bootstrap/scss/bootstrap.scss' to comment out unwanted imports. (styles that will not be used in the project)
 *    3. Run this function again to build the customized Bootstrap CSS files in 'dist/css' folder.
 */
const task_recompile_bootstrap = gulp.series(copy_bootstrap_scss_from_node_modules, task_build_styles_bootstrap);

const task_build = gulp.series(task_clean_dist_directory, gulp.parallel(task_build_app_styles, task_build_app_scripts, task_recompile_bootstrap));

function task_watch() {
  gulp.watch(paths.styles.src, task_build_app_styles);
  gulp.watch(paths.scripts.src, task_build_app_scripts);
}

function task_watch_reload() {
  browserSyncInstance.init({
    proxy: 'your-local-url.example',
    open: 'external',
  });

  task_build_styles_bootstrap();
  gulp.watch(paths.styles.src, task_build_app_styles).on('change', browserSyncInstance.reload);
  gulp.watch(paths.scripts.src, task_build_app_scripts).on('change', browserSyncInstance.reload);
  gulp.watch(paths.php.src).on('change', browserSyncInstance.reload);
}

export {
  task_build_app_styles as styles,
  task_build_app_scripts as scripts,
  task_build as build,
  task_watch as watch,
  task_watch_reload as watchReload,
  task_recompile_bootstrap as recompileBootstrap,
};

export default task_build;
