<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>oneuiux V2.0 - Mobile HTML template</title>

    <!-- manifest meta -->
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{asset('modules/market/img/favicon180.png')}}" sizes="180x180">
    <link rel="icon" href="{{asset('modules/market/img/favicon32.png')}}" sizes="32x32" type="image/png">
    <link rel="icon" href="{{asset('modules/market/img/favicon16.png')}}" sizes="16x16" type="image/png">

    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- style css for this template -->
    <link rel="stylesheet" href="{{ asset('modules/market/scss/style.css') }}" id="style">
</head>

<body class="body-scroll d-flex flex-column h-100 theme-red" data-page="signin">

<!-- loader section -->
{{--<x-market-page-loading />--}}
<!-- loader section ends -->

<!-- Header -->
<header class="header position-fixed header-filled">
    <div class="row">
        <x-market-page-brand/>
        <div class="col-auto">
            <a href="signup.html" target="_self">
                Sign up
            </a>
        </div>
    </div>
</header>
<!-- Header ends -->

<!-- Begin page content -->
<main class="container-fluid h-100 ">
    <div class="row h-100">
        <div class="col-11 col-sm-11 col-md-6 col-lg-5 col-xl-3 mx-auto align-self-center py-4">
            <h2 class="mb-4"><span class="text-secondary fw-light">Sign in to</span><br />your account</h2>
            <div class="form-group form-floating mb-3 is-valid">
                <input type="text" class="form-control" value="maxartkiller" id="email" placeholder="Username">
                <label class="form-control-label" for="email">Username</label>
            </div>

            <div class="form-group form-floating is-invalid mb-3">
                <input type="password" class="form-control " id="password" placeholder="Password">
                <label class="form-control-label" for="password">Password</label>
                <button type="button" class="text-danger tooltip-btn" data-bs-toggle="tooltip" data-bs-placement="left" title="Enter valid Password" id="passworderror">
                    <i class="bi bi-info-circle"></i>
                </button>
            </div>
            <p class="mb-3 text-end">
                <a href="forgot-password.html" class="">
                    Forgot your password?
                </a>
            </p>
        </div>
        <div class="col-11 col-sm-11 mt-auto mx-auto py-4">
            <div class="row ">
                <div class="col-12 d-grid">
                    <a href="index.html" class="btn btn-default btn-lg btn-rounded shadow-sm">Sign In</a>
                </div>
            </div>
        </div>
    </div>
</main>


<script src="{{ asset('modules/market/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('modules/market/js/popper.min.js') }}"></script>
<script src="{{ asset('modules/market/vendor/bootstrap-5/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('modules/market/js/main.js') }}"></script>
<script src="{{ asset('modules/market/js/color-scheme.js') }}"></script>

<script src="{{ asset('modules/market/js/pwa-services.js')}}"></script>
<script src="{{ asset('modules/market/js/app.js') }}"></script>
</body>

</html>
