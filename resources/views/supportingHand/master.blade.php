<!DOCTYPE html>
<html>
<head>
<title></title>
<link href="{{ asset('css/supportingHand/all_css.min.css') }}" rel="stylesheet" type="text/css" media="all">
<!--web-fonts-->
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
<!--js-->

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }>
</script>
<meta name="keywords" content="My Charity Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndriodCompatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!-- start-smoth-scrolling -->
<!-- //end-smoth-scrolling -->
</head>
<body>
<!--header start here-->


	@yield('content')

	@include('supportingHand.partials.footer')
<!--/footer end here-->
</body>
</html>