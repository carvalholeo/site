const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.sass('resources/sass/style.scss', 'resources/css');

mix.styles([
    'resources/css/open-iconic-bootstrap.min.css',
    'resources/css/animate.css',
    'resources/css/owl.carousel.min.css',
    'resources/css/owl.theme.default.min.css',
    'resources/css/magnific-popup.css',
    'resources/css/aos.css',
    'resources/css/ionicons.min.css',
    'resources/css/flaticon.css',
    'resources/css/icomoon.css',
    'resources/css/style.css'], 'public/css/all.css');

mix.scripts([
    'resources/js/custom/extended.js',
    'resources/js/custom/jquery.min.js',
    'resources/js/custom/jquery-migrate-3.0.1.min.js',
    'resources/js/custom/popper.min.js',
    'resources/js/custom/bootstrap.min.js',
    'resources/js/custom/jquery.easing.1.3.js',
    'resources/js/custom/jquery.waypoints.min.js',
    'resources/js/custom/jquery.stellar.min.js',
    'resources/js/custom/owl.carousel.min.js',
    'resources/js/custom/jquery.magnific-popup.min.js',
    'resources/js/custom/aos.js',
    'resources/js/custom/jquery.animateNumber.min.js',
    'resources/js/custom/scrollax.min.js',
    'resources/js/custom/main.js'], 'public/js/all.js');
