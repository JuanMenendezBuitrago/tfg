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

// VENDOR STUFF
mix.copy('node_modules/font-awesome/css/font-awesome.min.css', 'public/css/vendor/font-awesome/css/')
   .copy('node_modules/font-awesome/fonts/*', 'public/css/vendor/font-awesome/fonts/')
   .copy('node_modules/proxima-nova-fonts/webfonts/*', 'public/css/vendor/bootstrap/webfonts/')
   .copy('node_modules/bootstrap-sass/assets/fonts/bootstrap/*', 'public/css/vendor/bootstrap/fonts/')
   .copy('node_modules/jquery/dist/jquery.min.js', 'public/js/vendor/jquery/')
   .copy('node_modules/js-cookie/src/js.cookie.js', 'public/js/vendor/js-cookie/')
   .copy('node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js', 'public/js/vendor/bootstrap/')
   .copy('node_modules/dropzone/dist/*.js', 'public/js/vendor/dropzone/')
   .copy('node_modules/dropzone/dist/*.css', 'public/css/vendor/dropzone/')
   .copy('resources/assets/js/jquery*','public/js/')
   .copy('resources/assets/img/*', 'public/img/');	

// OWN STUFF   
mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .sass('resources/assets/sass/tfg-bootstrap.scss', 'public/css/vendor/bootstrap/css/bootstrap.css').options({processCssUrls: false});

mix.version();
