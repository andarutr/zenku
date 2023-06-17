const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles([
    'public/app/css/bootstrap.min.css',
    'public/app/plugins/fontawesome/css/fontawesome.min.css',
    'public/app/plugins/fontawesome/css/all.min.css',
    'public/app/plugins/slick/slick.css',
    'public/app/plugins/slick/slick-theme.css',
    'public/app/plugins/aos/aos.css',
    'public/app/css/style.css'
], 
'public/css/zenkuapp.css').version();