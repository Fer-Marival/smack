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
//frontend
// mix.js('resources/js/frontend/app.js', 'public/js/frontend/app.js');
//    .sass('resources/sass/app.scss', 'public/css/frontend');

// Backend
mix.js('resources/js/Backend/all.js', 'public/admin/js');
//frontend
<<<<<<< HEAD
// admin
=======
>>>>>>> 41dd626237f2942a500c20ecdfb0c4fd55117f41
mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');
