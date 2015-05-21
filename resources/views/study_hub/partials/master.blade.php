<!DOCTYPE html>
<html class="transition-navbar-scroll top-navbar-xlarge bottom-footer" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Learning</title>

        <!-- Compressed Vendor BUNDLE
        Includes vendor (3rd party) styling such as the customized Bootstrap and other 3rd party libraries used for the current theme/module -->
        <link href="{{ asset('css/studyHub/vendor.min.css') }}" rel="stylesheet">
        <!-- Compressed Theme BUNDLE
    Note: The bundle includes all the custom styling required for the current theme, however
    it was tweaked for the current theme/module and does NOT include ALL of the standalone modules;
    The bundle was generated using modern frontend development tools that are provided with the package
    To learn more about the development process, please refer to the documentation. -->
        <!-- <link href="css/theme.bundle.min.css" rel="stylesheet"> -->
        <!-- Compressed Theme CORE
    This variant is to be used when loading the separate styling modules -->
        <link href="{{ asset('css/studyHub/theme-core.min.css') }}" rel="stylesheet">
        <!-- Standalone Modules
        As a convenience, we provide the entire UI framework broke down in separate modules
        Some of the standalone modules may have not been used with the current theme/module
        but ALL modules are 100% compatible -->
        <link href="{{ asset('css/studyHub/module-essentials.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/studyHub/module-material.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/studyHub/module-layout.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/studyHub/module-sidebar.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/studyHub/module-sidebar-skins.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/studyHub/module-navbar.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/studyHub/module-messages.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/studyHub/module-carousel-slick.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/studyHub/module-charts.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/studyHub/module-maps.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/studyHub/module-colors-alerts.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/studyHub/module-colors-background.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/studyHub/module-colors-buttons.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/studyHub/module-colors-text.min.css') }}" rel="stylesheet" />

</head>


    @yield('body')


</html>


