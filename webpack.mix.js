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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .styles([
        'node_modules/admin-lte/dist/css/AdminLTE.css',
        'node_modules/admin-lte/dist/css/skins/_all-skins.css',
    ], 'public/css/adminlte.css')
   .scripts([
        'node_modules/admin-lte/plugins/fastclick/fastclick.js',
        'node_modules/admin-lte/plugins/slimScroll/jquery.slimscroll.js',
        'node_modules/admin-lte/dist/js/demo.js',
    ], 'public/js/adminlte.js')
   .copy('node_modules/admin-lte/dist/img/', 'public/dist/img')
   .copy('node_modules/admin-lte/plugins/pace/pace.min.js', 'public/js/pace.js')
   .copy('node_modules/admin-lte/plugins/pace/pace.min.css', 'public/css/pace.css');
