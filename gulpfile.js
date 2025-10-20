const { src, dest, watch, series, parallel } = require('gulp');
const sass       = require('gulp-dart-sass');
const postcss    = require('gulp-postcss');
const autoprefix = require('autoprefixer');
const cleanCSS   = require('gulp-clean-css');
const sourcemaps = require('gulp-sourcemaps');
const babel      = require('gulp-babel');
const terser     = require('gulp-terser');
const concat     = require('gulp-concat');
const rename     = require('gulp-rename');

const paths = {
	scss: { src: 'src/scss/main.scss', watch: 'src/scss/**/*.scss', out: 'dist/css' },
	js:   { src: 'src/js/**/*.js', out: 'dist/js' }
};

function styles() {
	return src(paths.scss.src)
	.pipe(sourcemaps.init())
	.pipe(sass.sync({ outputStyle: 'expanded' }).on('error', sass.logError))
	.pipe(postcss([autoprefix()]))
	.pipe(cleanCSS({ level: 2 }))
	.pipe(rename('main.min.css'))
	.pipe(sourcemaps.write('.'))
	.pipe(dest(paths.scss.out));
}

function scripts() {
  	return src(paths.js.src, { sourcemaps: true })
	.pipe(concat('main.js'))
	.pipe(babel({ presets: [['@babel/preset-env', { targets: 'defaults' }]] }))
	.pipe(terser())
	.pipe(rename('main.min.js'))
	.pipe(dest(paths.js.out, { sourcemaps: '.' }));
}

function watcher() {
	watch(paths.scss.watch, styles);
	watch(paths.js.src, scripts);
}

exports.styles = styles;
exports.scripts = scripts;
exports.build = parallel(styles, scripts);
exports.default = series(parallel(styles, scripts), watcher);
