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

mix.copy('resources/assets/css/app.min.css', 'public/assets/css')
    .copy('resources/assets/js/scripts', 'public/assets/js/scripts')
    .copy('resources/assets/js/app.min.js', 'public/assets/js')
    .copy('resources/assets/vendor', 'public/assets/vendor')
    .js('resources/assets/js/app.js', 'public/assets/js')
    .sass('resources/assets/sass/app.scss', 'public/assets/css')
    .postCss('resources/assets/css/app.css', 'public/assets/css', [
        //
    ]);
