let mix = require('laravel-mix');
//var tailwindcss = require('tailwindcss');

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
	.less('resources/assets/less/style.less', 'public/css')
	.sass('resources/assets/materialize-src/sass/materialize.scss', 'public/css', {
    	outputStyle: mix.inProduction ? 'compressed' : 'expanded'
  	})
   	.sourceMaps()
   	.version();

/*mix.js('resources/assets/js/app.js', 'public/js')
   .postCss('resources/assets/css/main.css', 'public/css', [
        tailwindcss('tailwind.js'),
   ])
   .less('resources/assets/less/app.less', 'public/css');*/
