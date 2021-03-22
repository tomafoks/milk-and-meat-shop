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
    'resources/admin/css/all.css',
    'resources/admin/css/adminlte.css',
], 'public/assets/admin/css/admin.css');

mix.scripts([
    'resources/admin/plugins/jquery/jquery.js',
    'resources/admin/plugins/bootstrap/js/bootstrap.bundle.js',
    'resources/admin/js/adminlte.js',
    'resources/admin/js/demo.js',
], 'public/assets/js/admin.js');

mix.copyDirectory([
    'resources/admin/plugins/fontawesome-free/webfonts',
], 'public/assets/admin/webfonts');

mix.copyDirectory([
    'resources/admin/img',
], 'public/assets/admin/img')
