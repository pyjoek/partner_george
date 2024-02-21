// const mix = require('laravel-mix');

// /*
//  |--------------------------------------------------------------------------
//  | Mix Asset Management
//  |--------------------------------------------------------------------------
//  |
//  | Mix provides a clean, fluent API for defining some Webpack build steps
//  | for your Laravel applications. By default, we are compiling the CSS
//  | file for the application as well as bundling up all the JS files.
//  |
//  */

// mix.js('resources/js/*.js', 'public/js')
//     .postCss('resources/css/*.css', 'public/css/', [
//         //
//     ]);


const mix = require('laravel-mix');

mix.js('resources/css/inc/materialize.min.js', 'public/js/materialize.min.js')  

    .js('resources/css/inc/jquery.min.js', 'public/js/jquery.min.js')  
    .js('resources/js/app.js', 'public/js/app.js')  

    .setPublicPath('public')
    .postCss('resources/css/app.css', 'public/css', [// if you're using Tailwind CSS
        // Add any other PostCSS plugins you need here
    ])
    .copyDirectory('resources/css/inc/img', 'public/images')
    .postCss('resources/css/babylon.css', 'public/css/babylon.css', {}) // Watch and compile all CSS files recursively
    .postCss('resources/css/inc/gold.css', 'public/css/gold.css', {}) // Watch and compile all CSS files recursively
    .postCss('resources/css/inc/material-icons.css', 'public/css/material-icons.css', {}) // Watch and compile all CSS files recursively
    .postCss('resources/css/inc/materialize.min.css', 'public/css/materialize.min.css', {}) // Watch and compile all CSS files recursively
 // Watch and compile all CSS files recursively
    .version();

