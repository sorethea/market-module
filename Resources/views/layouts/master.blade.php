<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Module Market</title>

       {{-- Laravel Vite - CSS File --}}
       {{-- {{ module_vite('build-market', 'Resources/assets/sass/app.scss') }} --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" >
        <!-- style css for this template -->
        <link rel="stylesheet" href="{{ asset('modules/market/scss/style.css') }}">

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
