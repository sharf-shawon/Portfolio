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

mix.js('resources/js/app.js', 'public/js')
    .scripts([
        'resources/frontend/js/plugins/jquery.min.js',
        'resources/frontend/js/plugins/anime.min.js',
        'resources/frontend/js/plugins/swiper.min.js',
        'resources/frontend/js/plugins/progressbar.min.js',
        'resources/frontend/js/plugins/smooth-scrollbar.min.js',
        'resources/frontend/js/plugins/overscroll.min.js',
        'resources/frontend/js/plugins/typing.min.js',
        'resources/frontend/js/plugins/isotope.min.js',
        'resources/frontend/js/plugins/fancybox.min.js',
        'resources/frontend/js/plugins/swup.min.js',
        'resources/frontend/js/main.js'
    ], 'public/js/main.js')
    .styles([
        'resources/frontend/css/plugins/bootstrap.min.css',
        'resources/frontend/css/plugins/font-awesome.min.css',
        'resources/frontend/css/plugins/swiper.min.css',
        'resources/frontend/css/plugins/fancybox.min.css',
        'resources/frontend/css/style.css'
    ], 'public/css/style.css')
    .sass('resources/sass/app.scss', 'public/css');