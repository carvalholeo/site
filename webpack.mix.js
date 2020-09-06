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
    'resources/css/custom.css',
    'resources/css/style.css'], 'public/css/all.css');

mix.styles([
    'resources/css/error.css'], 'public/css/error.css');

mix.babel('resources/js/custom/jquery.min.js', 'public/js/jquery.min.js');
mix.babel('resources/js/custom/jquery-migrate-3.1.0.min.js', 'public/js/jquery-migrate-3.1.0.min.js');
mix.babel('resources/js/custom/popper.min.js', 'public/js/popper.min.js');
mix.babel('resources/js/custom/bootstrap.min.js', 'public/js/bootstrap.min.js');
mix.babel('resources/js/custom/jquery.easing.1.3.js', 'public/js/jquery.easing.1.3.js');
mix.babel('resources/js/custom/jquery.waypoints.min.js', 'public/js/jquery.waypoints.min.js');
mix.babel('resources/js/custom/jquery.stellar.min.js', 'public/js/jquery.stellar.min.js');
mix.babel('resources/js/custom/owl.carousel.min.js', 'public/js/owl.carousel.min.js');
mix.babel('resources/js/custom/jquery.magnific-popup.min.js', 'public/js/jquery.magnific-popup.min.js');
mix.babel('resources/js/custom/aos.js', 'public/js/aos.js');
mix.babel('resources/js/custom/jquery.animateNumber.min.js', 'public/js/jquery.animateNumber.min.js');
mix.babel('resources/js/custom/scrollax.min.js', 'public/js/scrollax.min.js');
mix.babel('resources/js/custom/main.js', 'public/js/main.js');

mix.babel('resources/js/custom/extended.js', 'public/js/extended.js');

mix.babel('resources/js/custom/lazysize.js', 'public/js/lazysize.js');

if (mix.inProduction()) {
    mix.version();
}
