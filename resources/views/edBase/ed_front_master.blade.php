<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta information -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<!-- Title-->
<title>CAPLET |  Admin HTML Themes</title>
<!-- Favicons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/ico/favicon.ico">
<!-- CSS Stylesheet-->
<link type="text/css" rel="stylesheet" href="{{ asset('assets/css/bootstrap/bootstrap.min.css') }}" />
<link type="text/css" rel="stylesheet" href="{{ asset('assets/css/bootstrap/bootstrap-themes.css') }}" />
<link type="text/css" rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

</head>


	@yield('content')

<!--
////////////////////////////////////////////////////////////////////////
//////////     JAVASCRIPT  LIBRARY     //////////
/////////////////////////////////////////////////////////////////////
-->
		
<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/bootstrap/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/modernizr/modernizr.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/selectnav/selectnav.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/fancybox/jquery.fancybox.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/fancybox/jquery.fancybox.css') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/caplet.custom.js') }}"></script>

</body>
</html>