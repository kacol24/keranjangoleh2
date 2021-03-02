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

const theme = 'keranjangoleh2';

mix.setPublicPath('../../../public/themes/' + theme + '/assets');

mix.options({
       processCssUrls: false
   })
   .sass('assets/sass/keranjangoleh2.scss', 'css');

if (mix.inProduction()) {
    mix.version();
}
