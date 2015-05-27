<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="yes" name="apple-mobile-web-app-capable">
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,300italic,400italic,600italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/home/all.css" media="screen">
    </head>
       <body class="normal-header">


        @include('home.partials.nav_bar')

        @yield('content')



        <script src="js/home/all.js"></script>
        <script type="text/javascript">
                jQuery(document).ready(function()
                {
                    jQuery('.tp-banner').show().revolution(
                    {
                        delay: 8000,
                        startwidth: 1170,
                        startheight: 480,
                        onHoverStop: "on", // Stop Banner Timer at Hover on Slide on/off
                        thumbWidth: 100, // Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
                        thumbHeight: 50,
                        thumbAmount: 3,
                        hideThumbs: 0,
                        navigationType: "bullet", // bullet, thumb, none
                        navigationArrows: "solo", // nexttobullets, solo (old name verticalcentered), none
                        navigationStyle: "round", // round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom
                        navigationHAlign: "center", // Vertical Align top,center,bottom
                        navigationVAlign: "bottom", // Horizontal Align left,center,right
                        navigationHOffset: 0,
                        navigationVOffset: 20,
                        soloArrowLeftHalign: "left",
                        soloArrowLeftValign: "center",
                        soloArrowLeftHOffset: 20,
                        soloArrowLeftVOffset: 0,
                        soloArrowRightHalign: "right",
                        soloArrowRightValign: "center",
                        soloArrowRightHOffset: 20,
                        soloArrowRightVOffset: 0,
                        touchenabled: "on", // Enable Swipe Function : on/off
                        stopAtSlide: -1, // Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
                        stopAfterLoops: -1, // Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic
                        hideCaptionAtLimit: 0, // It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
                        hideAllCaptionAtLilmit: 0, // Hide all The Captions if Width of Browser is less then this value
                        hideSliderAtLimit: 0, // Hide the whole slider, and stop also functions if Width of Browser is less than this value
                        fullWidth: "on",
                        shadow: 0
                    });
                });
                </script>

    </body>
</html>
