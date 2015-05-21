var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    //mix.less('app.less');

    elixir.config.sourcemaps = false;


    //mixing for home
	mix.styles([
		'bootstrap.min.css',
		'theme.css',
		'color-defaults.css',
		'swatch-white.css',
		'swatch-gray.css',
		'swatch-black.css',
		'fonts.css',
		'revolution.css'
	], 'public/css/home', 'resources/assets/home/vendor/css');

	mix.scripts([
		'packages.js',
		'theme.js',
		'revolution.js',
		'contact.min.js'
	], 'public/js/home', 'resources/assets/home/vendor/js');


	//mixing for study Hub
	mix.styles([
		'theme-core.css',
		'module-essentials.css',
		'module-material.css',
		'module-layout.css',
		'module-sidebar.css',
		'module-sidebar-skins.css',
		'module-navbar.css',
		'module-messages.css',
		'module-carousel-slick.css',
		'module-charts.css',
		'module-maps.css',
		'module-colors-alerts.css',
		'module-colors-background.css',
		'module-colors-buttons.css',
		'module-colors-text.css',
	], 'public/css/studyHub', 'resources/assets/studyHub/vendor/css');

	mix.scripts([
		'theme-core.js',
		'vendor-bundle-all.js',
		'module-essentials.js',
		'module-material.js',
		'module-layout.js',
		'module-sidebar.js',
		'module-carousel-slick.js',
		'module-player.js',
		'module-messages.js',
		'module-maps-google.js',
		'module-charts-flot.js',
	], 'public/js/studyHub', 'resources/assets/studyHub/vendor/js');

	elixir(function(mix) {
    mix.copy('resources/assets/studyHub/vendor/js', 'public/js/studyHub');
});

});
