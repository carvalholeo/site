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

//Styles
//Styles that cannot be updated from npm
mix.styles('resources/css/animate.css', 'public/css/animate.compat.css');
mix.styles('resources/css/flaticon.css', 'public/css/flaticon.css');
mix.styles('resources/css/icomoon.css', 'public/css/icomoon.min.css');
mix.styles('resources/css/custom.css', 'public/css/custom.css');
mix.styles('resources/css/error.css', 'public/css/error.css');
mix.styles('resources/css/style.css', 'public/css/style.css');
//Styles from npm
mix.styles('node_modules/open-iconic/font/css/open-iconic-bootstrap.min.css', 'public/css/open-iconic-bootstrap.min.css');
mix.styles('node_modules/owl.carousel/dist/assets/owl.carousel.min.css', 'public/css/owl.carousel.min.css');
mix.styles('node_modules/owl.carousel/dist/assets/owl.theme.default.min.css', 'public/css/owl.theme.default.min.css');
mix.styles('node_modules/magnific-popup/dist/magnific-popup.css', 'public/css/magnific-popup.css');
mix.styles('node_modules/aos/dist/aos.css', 'public/css/aos.css');
mix.styles('node_modules/ionicons/dist/css/ionicons.min.css', 'public/css/ionicons.min.css');

//Javascript
//JS that cannot updated from npm
mix.babel('resources/js/custom/jquery.waypoints.min.js', 'public/js/jquery.waypoints.min.js');
mix.babel('resources/js/custom/popper.min.js', 'public/js/popper.min.js');
mix.babel('resources/js/custom/scrollax.min.js', 'public/js/scrollax.min.js');
mix.babel('resources/js/custom/main.js', 'public/js/main.js');
mix.babel('resources/js/custom/extended.js', 'public/js/extended.js');
//JS from npm
mix.babel('node_modules/lazysizes/lazysizes.min.js', 'public/js/lazysize.js');
mix.babel('node_modules/jquery/dist/jquery.min.js', 'public/js/jquery.min.js');
mix.babel('node_modules/jquery-migrate/dist/jquery-migrate.min.js', 'public/js/jquery-migrate-3.1.0.min.js');
mix.babel('node_modules/bootstrap/dist/js/bootstrap.min.js', 'public/js/bootstrap.min.js');
mix.babel('node_modules/jquery.easing/jquery.easing.js', 'public/js/jquery.easing.js');
mix.babel('node_modules/jquery.stellar/jquery.stellar.js', 'public/js/jquery.stellar.min.js');
mix.babel('node_modules/owl.carousel/dist/owl.carousel.min.js', 'public/js/owl.carousel.min.js');
mix.babel('node_modules/magnific-popup/dist/jquery.magnific-popup.min.js', 'public/js/jquery.magnific-popup.min.js');
mix.babel('node_modules/aos/dist/aos.js', 'public/js/aos.js');
mix.babel('node_modules/jquery.animate-number/jquery.animateNumber.min.js', 'public/js/jquery.animateNumber.min.js');


if (mix.inProduction()) {
    mix.version();
}
