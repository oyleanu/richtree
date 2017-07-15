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
mix.js('vendor/resources/assets/js/app.js', 'public/js')
    .sass('vendor/resources/assets/sass/app.scss', 'public/css')
    .extract(['jquery']);;

mix.styles(['vendor/resources/assets/plugins/H-ui.admin/static/h-ui.admin/css/H-ui.admin.css'], 'public/css/H-ui.css');

mix.js('vendor/resources/assets/plugins/H-ui.admin/static/h-ui.admin/js/H-ui.admin.js','public/js/H-ui.admin.js')