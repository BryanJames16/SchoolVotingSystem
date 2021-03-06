<!--
	file: master.blade.php
	description: Master Blade Template
	longdescription: This file is inherited throughout the main views
	author: Bryan James
-->

<!DOCTYPE html>
<html lang="en" data-textdirection="LTR" class="loading">

    <head>
        <!-- Meta Tags -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="application-name" content="School Voting System">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description" content="School Voting Management System">
        <meta name="keywords" content="school, school voting, voting">
        <meta name="author" content="Bryan James Ilaga">
        @yield('meta-inclusion')

        <!-- Page Title -->
        <title>@yield('title-name')</title>

        <!-- Base CSS --> 
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('/app-assets/css/bootstrap.min.css') }}">
        @yield('base-css')

        <!-- Font CSS -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('/app-assets/fonts/icomoon.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('/app-assets/fonts/flag-icon-css/css/flag-icon.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('/app-assets/vendors/css/extensions/pace.css') }}">
        @yield('font-css')

        <!-- Robust CSS -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('/app-assets/css/bootstrap-extended.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('/app-assets/css/app.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('/app-assets/css/colors.css') }}">

        <!-- Page-Level CSS -->
        @yield('page-level-css')

        <!-- Custom CSS -->
        @yield('custom-css')
    </head>

    <body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns fixed-navbar">
        @yield('body-start')

        @yield('navbar')

        @yield('main-menu')

        @yield('body')

        @yield('body-end')

        <!-- Base Javascript -->
        <script src="{{ URL::asset('/app-assets/js/core/libraries/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('/app-assets/vendors/js/ui/tether.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('/app-assets/js/core/libraries/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('/app-assets/vendors/js/ui/perfect-scrollbar.jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('/app-assets/vendors/js/ui/unison.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('/app-assets/vendors/js/ui/blockUI.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('/app-assets/vendors/js/ui/jquery.matchHeight-min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('/app-assets/vendors/js/ui/screenfull.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('/app-assets/vendors/js/extensions/pace.min.js') }}" type="text/javascript"></script>

        <!-- Robust Javascript --> 
        <script src="{{ URL::asset('/app-assets/js/core/app-menu.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('/app-assets/js/core/app.js') }}" type="text/javascript"></script>

        <!-- Page-Level Javascript -->
        <!-- <script src="/js/concolor.js" type="text/javascript"></script> -->
        <!-- <script src="/js/securitystop.js" type="text/javascript"></script> -->
        
        @yield('group-level-js')

        @yield('page-level-js')
    </body>

</html>
