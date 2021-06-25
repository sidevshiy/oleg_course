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

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
mix.copy('resources/fonts', 'public/fonts');
mix.copy('resources/css', 'public/css');
mix.copy('resources/js', 'public/js');
mix.copy('resources/img', 'public/img');
mix.copy('resources/images', 'public/images');
