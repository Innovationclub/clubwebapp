const mix = require('laravel-mix');

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

mix.js(['resources/js/breakpoints.min.js', 'resources/js/app.js', 'node_modules/util/util.js', 'resources/js/main.js'], 'public/js')
	.copy('resources/css/main.css', 'public/css/app.css')
	.copy('resources/css/noscript.css', 'public/css/noscript.css')
    .sass('resources/sass/app.scss', 'public/css');
