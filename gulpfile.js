var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass(['bootstrap.scss', 'cards.scss'], 'resources/assets/css/app.css')
    .styles([
    	'animate.css',
    	'icomoon.css',
    	'magnific-popup.css',
    	'owl.carousel.min.css',
    	'owl.theme.default.min.css',
    	'easy-responsive-tabs.css',
        'sweetalert.css',
    	'app.css'
    	])
    .scripts([
    	'jquery.min.js',
		'jquery.easing.1.3.js',
		'bootstrap.min.js',
	   	'jquery.waypoints.min.js',
		'owl.carousel.min.js',
		'jquery.magnific-popup.min.js',
		'jquery.stellar.min.js',
		'jquery.countTo.js',
		'wow.min.js',
		'easyResponsiveTabs.js',
        'sweetalert.min.js',
		'main.js'
    	]);

});
