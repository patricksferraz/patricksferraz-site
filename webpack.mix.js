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

// Assets Default
mix.js('resources/js/jquery-3.3.1.min.js', 'public/js')
    .js('resources/js/materialize.js', 'public/js')
    .js('resources/js/app.js', 'public/js')
    .js('resources/js/init.js', 'public/js')

    .styles('resources/css/psferraz.css', 'public/css/psferraz.css')
    .styles('resources/css/materialize.css', 'public/css/materialize.css')
    .styles('resources/css/fonts-google.css', 'public/css/fonts-google.css')

    .sass('resources/sass/app.scss', 'public/css')

    .copy('resources/img/patrick.jpg', 'public/img/patrick.jpg');
