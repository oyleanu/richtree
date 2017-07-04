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

mix.combine([
    'vendor/resources/assets/plugins/H-ui.admin/lib/jquery/1.9.1/jquery.min.js',
    'vendor/resources/assets/plugins/H-ui.admin/lib/layer/2.4/layer.js',
    'vendor/resources/assets/plugins/H-ui.admin/static/h-ui/js/H-ui.min.js',
    'vendor/resources/assets/plugins/H-ui.admin/static/h-ui.admin/js/H-ui.admin.js',
    'vendor/resources/assets/plugins/H-ui.admin/lib/jquery.contextmenu/jquery.contextmenu.r2.js'], 'public/js/H-ui-footer.js');

mix.combine([
    'vendor/resources/assets/plugins/H-ui.admin/lib/html5shiv.js',
    'vendor/resources/assets/plugins/H-ui.admin/lib/respond.min.jss'], 'public/js/H-ui-ie9.js');

mix.sass('vendor/resources/assets/plugins/bootstrap/_navbar.scss', 'public/css/bootstrap_navbar.css');
mix.js('vendor/resources/assets/plugins/H-ui.admin/lib/DD_belatedPNG_0.0.8a-min.js', 'public/js/H-ui-ie6.js');
