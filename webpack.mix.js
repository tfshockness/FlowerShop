let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .styles(['resources/assets/css/bootstrap-reboot.css',
            'resources/assets/css/bootstrap.css',
            'resources/assets/css/bootstrap-grid.css'],
       'public/css/app.css');
