<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="generator" content="">
        <title>oneuiux V2.0 - Mobile HTML template</title>

        <!-- manifest meta -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="manifest" href="{{asset('modules/market/manifest.json')}}" />

        <!-- Favicons -->
        <link rel="apple-touch-icon" href="{{asset('img/favicon180.png')}}" sizes="180x180">
        <link rel="icon" href="{{asset('img/favicon32.png')}}" sizes="32x32" type="image/png">
        <link rel="icon" href="{{asset('img/favicon16.png')}}" sizes="16x16" type="image/png">

        <!-- Google fonts-->

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

        <!-- bootstrap icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

        <!-- nouislider CSS -->
        <link href="{{asset('vendor/nouislider/nouislider.min.css')}}" rel="stylesheet">

        <!-- date rage picker -->
        <link rel="stylesheet" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}">

        <!-- swiper carousel css -->
        <link rel="stylesheet" href="{{asset('vendor/swiperjs-6.6.2/swiper-bundle.min.css')}}">

        <!-- style css for this template -->
        <link rel="stylesheet" href="{{ asset('modules/market/scss/style.css') }}">

       {{-- Laravel Vite - CSS File --}}
       {{-- {{ module_vite('build-market', 'Resources/assets/sass/app.scss') }} --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" >
        <!-- style css for this template -->


{{--        {{ module_vite('build-market', 'Resources/assets/scss/style.css') }}--}}
{{--        <link href="assets/scss/style.css" rel="stylesheet" id="style">--}}

    </head>
    <body class="body-scroll theme-red">
        @yield('content')

        {{-- Laravel Vite - JS File --}}
{{--        {{ module_vite('build-market', 'Resources/assets/js/jquery-3.3.1.min.js') }}
        {{ module_vite('build-market', 'Resources/assets/js/popper.min.js') }}
        {{ module_vite('build-market', 'Resources/assets/vendor/bootstrap-5/js/bootstrap.bundle.min.js') }}

        {{ module_vite('build-market', 'Resources/assets/js/main.js') }}
        {{ module_vite('build-market', 'Resources/assets/js/color-scheme.js') }}

        {{ module_vite('build-market', 'Resources/assets/js/app.js') }}--}}


        <script src="{{ asset('modules/market/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('modules/market/js/popper.min.js') }}"></script>
        <script src="{{ asset('modules/market/js/vendor/bootstrap-5/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('modules/market/js/main.js') }}"></script>
        <script src="{{ asset('modules/market/js/color-scheme.js') }}"></script>
        <script src="{{ asset('modules/market/js/app.js') }}"></script>

        {{--        <!-- Required jquery and libraries -->--}}
{{--        <script src="assets/js/jquery-3.3.1.min.js"></script>--}}
{{--        <script src="assets/js/popper.min.js"></script>--}}
{{--        <script src="assets/vendor/bootstrap-5/js/bootstrap.bundle.min.js"></script>--}}

{{--        <!-- Customized jquery file  -->--}}
{{--        <script src="assets/js/main.js"></script>--}}
{{--        <script src="assets/js/color-scheme.js"></script>--}}

{{--        <!-- page level custom script -->--}}
{{--        <script src="assets/js/app.js"></script>--}}
    </body>
</html>
