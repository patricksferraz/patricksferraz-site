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
mix.scripts([
        'resources/js/jquery-3.3.1.js',
        'resources/js/materialize.js',
        'resources/js/init.js'
    ], 'public/js/all.js')

    .styles([
        'resources/css/materialize.css',
        'resources/css/fonts-google.css',
        'resources/css/psferraz.css'
    ], 'public/css/all.css')

    .copy('resources/favicon.png', 'public')
    .copyDirectory('resources/img', 'public/img');

if (mix.inProduction()) {
    mix.version();
}
