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
    .js('resources/assets/js/bs_servicos.js', 'public/js')
    .js('resources/assets/js/sb_bancos.js', 'public/js')
    .js('resources/assets/js/init_sb_servicos.js', 'public/js')
    .js('resources/assets/js/init_bs_bancos.js', 'public/js')
    .js('resources/assets/js/bs_resultados.js', 'public/js')
    .js('resources/assets/js/sb_resultados.js', 'public/js')
    .js('resources/assets/js/admin_home.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');
