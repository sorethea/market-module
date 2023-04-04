<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="generator" content="">
        <title>HiEAT</title>

        <!-- manifest meta -->
        <meta name="apple-mobile-web-app-capable" content="yes">
{{--        <link rel="manifest" href="{{asset('modules/market/manifest.json')}}" />--}}

        <!-- Favicons -->
        <link rel="apple-touch-icon" href="{{asset('modules/market/img/favicon180.png')}}" sizes="180x180">
        <link rel="icon" href="{{asset('modules/market/img/favicon32.png')}}" sizes="32x32" type="image/png">
        <link rel="icon" href="{{asset('modules/market/img/favicon16.png')}}" sizes="16x16" type="image/png">

        <!-- Google fonts-->

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

        <!-- bootstrap icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

        <!-- nouislider CSS -->
        <link href="{{asset('modules/market/vendor/nouislider/nouislider.min.css')}}" rel="stylesheet">

        <!-- date rage picker -->
        <link rel="stylesheet" href="{{asset('modules/market/vendor/daterangepicker/daterangepicker.css')}}">

        <!-- swiper carousel css -->
        <link rel="stylesheet" href="{{asset('modules/market/vendor/swiperjs-6.6.2/swiper-bundle.min.css')}}">

        <link rel="stylesheet" href="{{ asset('modules/market/scss/style.css') }}">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" >

    </head>
    <body class="body-scroll theme-red">
    <!-- loader section -->
        @include("market::components.loading")
    <!-- loader section ends -->
    <!-- menu section -->
        @include("market::components.menu")
    <!-- Begin page -->
    <main class="h-100">
        @include("market::components.header")
    <!-- menu section ends -->
        @yield('content')
    </main>
    <!-- Footer -->
    @include("market::components.footer")
    <!-- Footer ends-->

    <!-- filter menu -->
    @include("market::components.filter")
    <!-- filter menu ends-->

    <!-- PWA app install toast message -->
    <div class="position-fixed bottom-0 start-50 translate-middle-x  z-index-99">
        <div class="toast mb-3" role="alert" aria-live="assertive" aria-atomic="true" id="toastinstall" data-bs-animation="true">
            <div class="toast-header">
                <img src="assets/img/favicon32.png" class="rounded me-2" alt="...">
                <strong class="me-auto">Install PWA App</strong>
                <small>now</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                <div class="row">
                    <div class="col">
                        Click "Install" to install PWA app & experience indepedent.
                    </div>
                    <div class="col-auto align-self-center ps-0">
                        <button class="btn-default btn btn-sm btn-rounded" id="addtohome">Install</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page ends-->
        <script src="{{ asset('modules/market/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('modules/market/js/popper.min.js') }}"></script>
        <script src="{{ asset('modules/market/vendor/bootstrap-5/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('modules/market/js/main.js') }}"></script>
        <script src="{{ asset('modules/market/js/color-scheme.js') }}"></script>
        <script src="{{ asset('modules/market/vendor/chart-js-3.3.1/chart.min.js')}}"></script>
        <script src="{{ asset('modules/market/vendor/progressbar-js/progressbar.min.js')}}"></script>
        <script src="{{ asset('modules/market/vendor/swiperjs-6.6.2/swiper-bundle.min.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
        <script src="{{ asset('modules/market/vendor/daterangepicker/daterangepicker.js')}}"></script>
        <script src="{{ asset('modules/market/vendor/nouislider/nouislider.min.js')}}"></script>
        <script src="{{ asset('modules/market/js/pwa-services.js')}}"></script>
        <script src="{{ asset('modules/market/js/app.js') }}"></script>
    </body>
</html>
