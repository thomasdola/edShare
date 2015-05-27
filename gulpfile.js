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


	//Start mixing for study Hub
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

});

elixir(function(mix) {
   mix.copy('resources/assets/studyHub/vendor/js', 'public/js/studyHub');

});

elixir(function(mix){
	elixir.config.sourcemaps = false;
	//Start mixing for edBase
		mix.styles([
			'plugins/fullcalendar/fullcalendar.css',
			'css/style.css',
		], 'public/css/edBase/all_styles.min.css', 'resources/assets/edBase/vendor/assets');

		mix.styles([
			'styleTheme1.css',
			'styleTheme2.css',
			'styleTheme3.css',
			'styleTheme4.css',
		], 'public/css/edBase/all_themes.min.css', 'resources/assets/edBase/vendor/assets/css');

		mix.scripts([
			'js/jquery.min.js',
			'js/jquery.ui.min.js',
			'plugins/bootstrap/bootstrap.min.js',
		], 'public/js/edBase/all_jquery.min.js', 'resources/assets/edBase/vendor/assets');


		mix.scripts([
			'js/modernizr/modernizr.js',
			'plugins/mmenu/jquery.mmenu.js',
			'js/styleswitch.js',
		], 'public/js/edBase/all_html5.min.js', 'resources/assets/edBase/vendor/assets');

		mix.scripts([
			'form/form.js',
			'datetime/datetime.js',
			'pluginsForBS/pluginsForBS.js',
			'miscellaneous/miscellaneous.js',
			'datable/jquery.dataTables.min.js',
			'datable/dataTables.bootstrap.js',
		], 'public/js/edBase/all_plugins.min.js', 'resources/assets/edBase/vendor/assets/plugins');


		mix.scripts([
			'selectnav/selectnav.min.js',
			'fancybox/jquery.fancybox.js',
		], 'public/js/edBase/all_plugins_front.min.js', 'resources/assets/edBase/vendor/assets/plugins');


		mix.copy('resources/assets/edBase/vendor/assets/js/caplet.custom.js', 'public/js/edBase/caplet.min.js');

		mix.copy('resources/assets/edBase/vendor/assets/plugins/fancybox/jquery.fancybox.css', 'public/css/edBase/fancy.min.css');
});


elixir(function(mix){

	mix.scripts([
		'jquery.min.js',
		'bootstrap.js',
		'easing.js',
		'jquery.magnific-popup.js',
		'move-top.js',
		'preview.js',
		], 'public/js/supportingHand/js/all_js.min.js', 'resources/assets/supportingHand/vendor/js');

	mix.styles([
		'bootstrap.css',
		'magnific-popup.css',
		'style.css',
		], 'public/css/supportingHand/css/all_css.min.css', 'resources/assets/supportingHand/vendor/css');

});


