<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords"
        content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title> {{ env('app-name', 'شجره العائله') }}
    </title>
    <link rel="apple-touch-icon" href="../../../template/app-assets/images/ico/apple-icon-120.png">
    {{-- <link rel="shortcut icon" type="image/x-icon" href="{{asset('uploads/' . $OrganizationProfile->logo)}}"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@500&display=swap" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/app-assets/css-rtl/vendors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/app-assets/vendors/css/weather-icons/climacons.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/app-assets/fonts/meteocons/style.css') }}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/app-assets/css-rtl/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/app-assets/css-rtl/custom-rtl.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/app-assets/css-rtl/core/menu/menu-types/horizontal-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/app-assets/css-rtl/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/app-assets/fonts/simple-line-icons/style.css') }}">
    <!-- END MODERN CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/assets/css/style-rtl.css') }}">
    <!-- END Custom CSS-->
    <!--Livewire-->
    @livewireStyles
    <!--END Livewire-->
        
    @stack('styles')
    
    
</head>

<body class="horizontal-layout horizontal-menu horizontal-menu-padding 2-columns   menu-expanded"
data-open="click" data-menu="horizontal-menu" data-col="2-columns">

    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow navbar-static-top navbar-light navbar-brand-center">
        @include('backend.layout.partials.topbar')
    </nav>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-fixed navbar-dark navbar-without-dd-arrow navbar-shadow"
    role="navigation" data-menu="menu-wrapper">
        @include('backend.layout.partials.topmenu')
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content container center-layout mt-2" style="min-height: 80vh;">
        <div class="content-wrapper">
            <div class="content-header row">
                {{ $header }}
            </div>
            <div class="content-body">
                {{ $slot }}
            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <footer class="footer footer-dark navbar-shadow">
        @include('backend.layout.partials.footer')
    </footer>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <!-- BEGIN VENDOR JS-->
    <script src="{{ asset('template/app-assets/vendors/js/vendors.min.js') }}" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN MODERN JS-->
    <script src="{{ asset('template/app-assets/js/core/app-menu.js') }}" type="text/javascript"></script>
    <script src="{{ asset('template/app-assets/js/core/app.js') }}" type="text/javascript"></script>
    <script src="{{ asset('template/app-assets/js/scripts/customizer.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('template/app-assets/vendors/js/ui/jquery.sticky.js') }}"></script>
    <!-- END MODERN JS-->
    <!--Livewire-->
    @livewireScripts
    <!--END Livewire-->
    {{-- alpinejs --}}
    <script defer src="{{ asset('template/app-assets/vendors/js/alpine.min.js') }}"></script>
    {{-- alpinejs --}}

    @stack('scripts')

</body>

</html>
