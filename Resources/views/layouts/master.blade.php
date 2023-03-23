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
        <link rel="manifest" href="{{asset('modules/market/manifest.json')}}" />

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
    <footer class="footer">
        <div class="container">
            <ul class="nav nav-pills nav-justified">
                <li class="nav-item">
                    <a class="nav-link active" href="index.html">
                        <span>
                            <i class="nav-icon bi bi-house"></i>
                            <span class="nav-text">Home</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="stats.html">
                        <span>
                            <i class="nav-icon bi bi-binoculars"></i>
                            <span class="nav-text">Statistics</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item centerbutton">
                    <a href="cart.html" class="nav-link" id="centermenubtn">
                        <span class="theme-linear-gradient">
                            <i class="bi bi-basket size-22"></i>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="myorders.html">
                        <span>
                            <i class="nav-icon bi bi-bag"></i>
                            <span class="nav-text">Orders</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="wallet.html">
                        <span>
                            <i class="nav-icon bi bi-wallet2"></i>
                            <span class="nav-text">Wallet</span>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </footer>
    <!-- Footer ends-->

    <!-- filter menu -->
    <div class="filter">
        <div class="card shadow h-100">
            <div class="card-header">
                <div class="row">
                    <div class="col align-self-center">
                        <h6 class="mb-0">Filter Criteria</h6>
                        <p class="text-secondary small">2154 products</p>
                    </div>
                    <div class="col-auto px-0">
                        <button class="btn btn-link text-danger filter-close">
                            <i class="bi bi-x size-22"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-body overflow-auto">
                <div class="mb-4">
                    <h6>Select Range</h6>
                    <div id="rangeslider" class="mt-4"></div>
                </div>

                <div class="row mb-4">
                    <div class="col">
                        <div class="form-floating">
                            <input type="number" class="form-control" min="0" max="500" value="100" step="1" id="input-select">
                            <label for="input-select">Minimum</label>
                        </div>
                    </div>
                    <div class="col-auto align-self-center"> to </div>
                    <div class="col">
                        <div class="form-floating">
                            <input type="number" class="form-control" min="0" max="500" value="200" step="1" id="input-number">
                            <label for="input-number">Maximum</label>
                        </div>
                    </div>
                </div>

                <div class="form-floating mb-4">
                    <select class="form-control" id="filtertype">
                        <option selected>Cloths</option>
                        <option>Electronics</option>
                        <option>Furniture</option>
                    </select>
                    <label for="filtertype">Select Shopping Type</label>
                </div>

                <div class="form-group floating-form-group active mb-4">
                    <h6 class="mb-3">Select Facilities</h6>

                    <div class="form-check form-switch mb-2">
                        <input type="checkbox" class="form-check-input" id="men" checked>
                        <label class="form-check-label" for="men">Men</label>
                    </div>
                    <div class="form-check form-switch mb-2">
                        <input type="checkbox" class="form-check-input" id="woman" checked>
                        <label class="form-check-label" for="woman">Women</label>
                    </div>
                    <div class="form-check form-switch mb-2">
                        <input type="checkbox" class="form-check-input" id="Sport">
                        <label class="form-check-label" for="Sport">Sport</label>
                    </div>
                    <div class="form-check form-switch mb-2">
                        <input type="checkbox" class="form-check-input" id="homedecor">
                        <label class="form-check-label" for="homedecor">Home Decor</label>
                    </div>
                    <div class="form-check form-switch mb-2">
                        <input type="checkbox" class="form-check-input" id="kidsplay">
                        <label class="form-check-label" for="kidsplay">Kid's Play</label>
                    </div>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="Keyword">
                    <label for="input-select">Keyword</label>
                </div>

                <div class="form-floating mb-3">
                    <select class="form-control" id="discount">
                        <option>10% </option>
                        <option>30%</option>
                        <option>50%</option>
                        <option>80%</option>
                    </select>
                    <label for="discount">Offer Discount</label>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-default w-100 shadow-sm shadow-success btn-rounded">Search</button>
            </div>
        </div>
    </div>
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
        <script src="{{ asset('modules/market/js/vendor/bootstrap-5/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('modules/market/js/main.js') }}"></script>
        <script src="{{ asset('modules/market/js/color-scheme.js') }}"></script>
        <script src="{{ asset('modules/market/js/app.js') }}"></script>
    </body>
</html>
