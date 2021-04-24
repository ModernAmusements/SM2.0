let mix = require("laravel-mix");

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

  mix.sass('resources/scss/argon-dashboard.scss', 'public/css')
// mix.js('resources/js/app.js', 'public/js')
//     .js('resources/js/PreVueScreening/src/main.js', 'public/js')
