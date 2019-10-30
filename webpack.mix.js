
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

// mix.setResourceRoot('/public/');
mix.js('resources/assets/js/app.js', 'public/js/app.js')
// mix.scripts([
//    'resources/assets/js/app.js',
//    'resources/assets/js/ap.js',ss
//    'resources/assets/js/main.js',
// ], 'public/js/app.js')
// mix.scripts([
//    'resources/assets/plugins/bootstrap-hover-dropdown.min.js',
//    'resources/assets/plugins/back-to-top.js',
//    'resources/assets/plugins/jquery-placeholder/jquery.placeholder.js',
//    'resources/assets/plugins/pretty-photo/js/jquery.prettyPhoto.js',
//    'resources/assets/plugins/flexslider/jquery.flexslider-min.js',
//    'resources/assets/plugins/jflickrfeed/jflickrfeed.min.js'
// ], 'public/plugins/js/plugin.js')
// .styles([
//    'resources/assets/css/app.css',
//    'resources/assets/css/styles.css'
// ], 'public/css/app.css')
// .styles([
//    'resources/assets/plugins/bootstrap/css/bootstrap.min.css',
//    'resources/assets/plugins/font-awesome/css/font-awesome.css',
//    'resources/assets/plugins/flexslider/flexslider.css',
//    'resources/assets/plugins/pretty-photo/css/prettyPhoto.css',
// ], 'public/plugins/css/plugin.css')
   .sass('resources/assets/sass/app.scss', 'public/css/app.css');
