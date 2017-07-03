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
mix.combine([
    'vendor/resources/assets/plugins/H-ui.admin/static/h-ui/css/H-ui.min.css',
    'vendor/resources/assets/plugins/H-ui.admin/static/h-ui.admin/css/H-ui.admin.css',
    'vendor/resources/assets/plugins/H-ui.admin/lib/Hui-iconfont/1.0.8/iconfont.css',
    'vendor/resources/assets/plugins/H-ui.admin/static/h-ui.admin/skin/default/skin.css',
    'vendor/resources/assets/plugins/H-ui.admin/static/h-ui.admin/css/style.css'], 'public/css/H-ui.css');

mix.js('vendor/resources/assets/js/app.js', 'public/js')
   .sass('vendor/resources/assets/sass/app.scss', 'public/css');


