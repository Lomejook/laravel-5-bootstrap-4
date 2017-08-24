const { mix } = require('laravel-mix');

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

mix.js('resources/assets/web/js/app.js', 'public/js/web.js')
   .sass('resources/assets/web/sass/bootstrap.scss', 'public/css/web.css');

mix.js('resources/assets/admin/js/app.js', 'public/js/admin.js')
   .sass('resources/assets/admin/sass/bootstrap.scss', 'public/css/admin.css');
