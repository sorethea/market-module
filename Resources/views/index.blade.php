@extends('market::layouts.master')

@section('content')
    <!-- loader section -->
    <div class="container-fluid loader-wrap">
        <div class="row h-100">
            <div class="col-10 col-md-6 col-lg-5 col-xl-3 mx-auto text-center align-self-center">
                <div class="circular-loader">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <p class="mt-4"><span class="text-secondary">Shopping Experience Unlimited</span><br><strong>Please
                        wait...</strong></p>
            </div>
        </div>
    </div>
    <!-- loader section ends -->

    <!-- Sidebar main menu -->
    <div class="sidebar-wrap  sidebar-overlay">
        <!-- Add pushcontent or fullmenu instead overlay -->
        <div class="closemenu text-secondary">Close Menu</div>
        <div class="sidebar ">
            <!-- user information -->
            <div class="row">
                <div class="col-12 profile-sidebar">
                    <div class="row">
                        <div class="col-auto">
                            <figure class="avatar avatar-100 rounded-20 shadow-sm">
                                <img src="assets/img/user1.jpg" alt="">
                            </figure>
                        </div>
                        <div class="col px-0 align-self-center">
                            <h5 class="mb-2">John Winsels</h5>
                            <p class="text-muted size-12">New York City,<br />United States</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- user emnu navigation -->
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">
                                <div class="avatar avatar-40 icon"><i class="bi bi-house-door"></i></div>
                                <div class="col">Shop</div>
                                <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                                <div class="avatar avatar-40 icon"><i class="bi bi-cart"></i></div>
                                <div class="col">Shop pages</div>
                                <div class="arrow"><i class="bi bi-chevron-down plus"></i> <i class="bi bi-chevron-up minus"></i>
                                </div>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item nav-link" href="products.html">
                                        <div class="avatar avatar-40 icon"><i class="bi bi-box-seam"></i>
                                        </div>
                                        <div class="col align-self-center">All Products</div>
                                        <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item nav-link" href="product.html">
                                        <div class="avatar avatar-40 icon"><i class="bi bi-box-seam"></i>
                                        </div>
                                        <div class="col align-self-center">Product</div>
                                        <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item nav-link" href="cart.html">
                                        <div class="avatar avatar-40 icon"><i class="bi bi-bag"></i>
                                        </div>
                                        <div class="col align-self-center">Cart</div>
                                        <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item nav-link" href="myorders.html">
                                        <div class="avatar avatar-40 icon"><i class="bi bi-view-list"></i>
                                        </div>
                                        <div class="col align-self-center">My Orders</div>
                                        <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item nav-link" href="payment.html">
                                        <div class="avatar avatar-40 icon"><i class="bi bi-cash-stack"></i>
                                        </div>
                                        <div class="col align-self-center">Payment</div>
                                        <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item nav-link" href="invoice.html">
                                        <div class="avatar avatar-40 icon"><i class="bi bi-receipt"></i>
                                        </div>
                                        <div class="col align-self-center">Invoice</div>
                                        <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="chat.html" tabindex="-1">
                                <div class="avatar avatar-40 icon"><i class="bi bi-chat-text"></i></div>
                                <div class="col">Messages</div>
                                <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="notifications.html" tabindex="-1">
                                <div class="avatar avatar-40 icon"><i class="bi bi-bell"></i></div>
                                <div class="col">Notification</div>
                                <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="blog.html" tabindex="-1">
                                <div class="avatar avatar-40 icon"><i class="bi bi-newspaper"></i></div>
                                <div class="col">Blogs</div>
                                <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="style.html" tabindex="-1">
                                <div class="avatar avatar-40 icon"><i class="bi bi-palette"></i></div>
                                <div class="col">Style <i class="bi bi-star-fill text-warning small"></i></div>
                                <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="pages.html" tabindex="-1">
                                <div class="avatar avatar-40 icon"><i class="bi bi-file-earmark-text"></i></div>
                                <div class="col">Pages <span class="badge bg-info fw-light">new</span></div>
                                <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="signin.html" tabindex="-1">
                                <div class="avatar avatar-40 icon"><i class="bi bi-box-arrow-right"></i></div>
                                <div class="col">Logout</div>
                                <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Sidebar main menu ends -->

    <!-- Begin page -->
    <main class="h-100">

        <!-- Header -->
        <header class="header position-fixed header-filled">
            <div class="row">
                <div class="col-auto">
                    <button type="button" class="btn btn-light btn-44 btn-rounded menu-btn">
                        <i class="bi bi-list"></i>
                    </button>
                </div>
                <div class="col">
                    <div class="logo-small">
                        <img src="assets/img/logo.png" alt="" class="rounded-circle" />
                        <h5>OneUIUX<br /><span class="text-secondary fw-light">Shopping</span></h5>
                    </div>
                </div>
                <div class="col-auto">
                    <a href="notifications.html" target="_self" class="btn btn-light btn-44 btn-rounded">
                        <i class="bi bi-bell"></i>
                        <span class="count-indicator"></span>
                    </a>
                    <a href="profile.html" target="_self" class="btn btn-light btn-44 btn-rounded ms-2">
                        <i class="bi bi-person-circle"></i>
                    </a>
                </div>
            </div>
        </header>
        <!-- Header ends -->

        <!-- main page content -->
        <div class="main-container container">

            <!-- search -->
            <div class="row mb-3">
                <div class="col-12 overflow-hidden">
                    <!-- input -->
                    <div class="row">
                        <div class="col position-relative align-self-center">
                            <div class="form-group form-floating mb-3 is-valid">
                                <input type="text" class="form-control" value="" id="searchmain" placeholder="Search">
                                <label class="form-control-label" for="searchmain">Search</label>
                            </div>
                        </div>
                        <div class="col-auto align-self-center">
                            <button class="btn btn-light btn-44 filter-btn">
                                <i class="bi bi-filter size-22"></i>
                            </button>
                        </div>
                    </div>

                </div>
            </div>

            <!--categories -->
            <div class="row mb-3">
                <div class="col-12 px-0">
                    <!-- swiper categories -->
                    <div class="swiper-container connectionwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide text-center">
                                <a href="products.html" class="card text-center mb-2">
                                    <div class="card-body p-1">
                                        <figure class="avatar avatar-80 rounded-18">
                                            <img src="assets/img/categories1.png" alt="">
                                        </figure>
                                    </div>
                                </a>
                                <p class="size-10 text-secondary">Electronics</p>
                            </div>

                            <div class="swiper-slide text-center">
                                <a href="products.html" class="card text-center mb-2">
                                    <div class="card-body p-1">
                                        <figure class="avatar avatar-80 rounded-20">
                                            <img src="assets/img/categories2.png" alt="">
                                        </figure>
                                    </div>
                                </a>
                                <p class="size-10 text-secondary">Clothing</p>
                            </div>

                            <div class="swiper-slide text-center">
                                <a href="products.html" class="card text-center mb-2">
                                    <div class="card-body p-1">
                                        <figure class="avatar avatar-80 rounded-20">
                                            <img src="assets/img/categories3.png" alt="">
                                        </figure>
                                    </div>
                                </a>
                                <p class="size-10 text-secondary">Appliences</p>
                            </div>

                            <div class="swiper-slide text-center">
                                <a href="products.html" class="card text-center mb-2">
                                    <div class="card-body p-1">
                                        <figure class="avatar avatar-80 rounded-20">
                                            <img src="assets/img/categories4.png" alt="">
                                        </figure>
                                    </div>
                                </a>
                                <p class="size-10 text-secondary">Mobiles</p>
                            </div>
                            <div class="swiper-slide text-center">
                                <a href="products.html" class="card text-center mb-2">
                                    <div class="card-body p-1">
                                        <figure class="avatar avatar-80 rounded-20">
                                            <img src="assets/img/categories5.png" alt="">
                                        </figure>
                                    </div>
                                </a>
                                <p class="size-10 text-secondary">iPhone</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!--high light -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="card theme-bg">
                        <img src="assets/img/apple-watch.png" alt="" class="iwatchposition" />
                        <div class="card-body py-3">
                            <div class="row">
                                <div class="col-auto align-self-center">
                                    <h4><span class="fw-light">15% OFF</span><br />iWatch</h4>
                                </div>
                                <div class="col-auto align-self-center ms-auto text-end">
                                    <img src="assets/img/visa.png" alt="" />
                                    <p class="size-10"><span class="text-muted">Buy at 1450.00</span><br />Using Credit
                                        Card</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--products -->
            <div class="row mb-3">
                <div class="col-12 px-0">
                    <!-- swiper categories -->
                    <div class="swiper-container connectionwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide text-center">
                                <a href="product.html" class="card text-center bg-theme text-white">
                                    <div class="card-body p-1">
                                        <figure class="avatar avatar-90 rounded-15 mb-1">
                                            <img src="assets/img/categories3.jpg" alt="">
                                        </figure>
                                        <p class="text-center size-12"><small class="text-muted">LAVAA
                                                3500</small><br />$ 459.00</p>
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide text-center">
                                <a href="product.html" class="card text-center bg-theme text-white">
                                    <div class="card-body p-1">
                                        <figure class="avatar avatar-90 rounded-15 mb-1">
                                            <img src="assets/img/categories4.png" alt="">
                                        </figure>
                                        <p class="text-center size-12"><small class="text-muted">Galaxy
                                                S20</small><br />$ 459.00</p>
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide text-center">
                                <a href="product.html" class="card text-center bg-theme text-white">
                                    <div class="card-body p-1">
                                        <figure class="avatar avatar-90 rounded-15 mb-1">
                                            <img src="assets/img/categories5.png" alt="">
                                        </figure>
                                        <p class="text-center size-12"><small class="text-muted">iPhone
                                                12SR</small><br />$ 1012.00</p>
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide text-center">
                                <a href="product.html" class="card text-center bg-theme text-white">
                                    <div class="card-body p-1">
                                        <figure class="avatar avatar-90 rounded-15 mb-1">
                                            <img src="assets/img/categories3.jpg" alt="">
                                        </figure>
                                        <p class="text-center size-12"><small class="text-muted">LAVAA
                                                3500</small><br />$ 459.00</p>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide text-center">
                                <a href="product.html" class="card text-center bg-theme text-white">
                                    <div class="card-body p-1">
                                        <figure class="avatar avatar-90 rounded-15 mb-1">
                                            <img src="assets/img/categories4.png" alt="">
                                        </figure>
                                        <p class="text-center size-12"><small class="text-muted">Galaxy
                                                S20</small><br />$ 459.00</p>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- product medsize box  -->
            <div class="row mb-2">
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card mb-3">
                        <div class="card-body p-1 position-relative">
                            <div class="position-absolute start-0 top-0 m-2 z-index-1">
                                <div class="tag tag-small bg-theme text-white">
                                    26% OFF
                                </div>
                            </div>
                            <div class="position-absolute end-0 top-0 p-2 z-index-1 ">
                                <button class="btn btn-sm btn-26 roudned-circle shadow-sm shadow-danger text-white bg-danger">
                                    <i class="bi bi-heart size-10 vm"></i>
                                </button>
                            </div>
                            <figure class="avatar w-100 rounded-15 border">
                                <img src="assets/img/categories4.png" alt="" class="w-100">
                            </figure>
                        </div>
                        <div class="card-body pt-2">
                            <div class="row">
                                <div class="col">
                                    <p class="small"><small class="text-muted size-12">LAVA B500</small><br />$ 265.00
                                    </p>
                                </div>
                                <div class="col-auto px-0">
                                    <button class="btn btn-sm btn-link text-color-theme">
                                        <i class="bi bi-bag-plus"></i>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card mb-3">
                        <div class="card-body p-1 position-relative">
                            <div class="position-absolute start-0 top-0 m-2 z-index-1">
                                <div class="tag tag-small bg-theme text-white">
                                    30% OFF
                                </div>
                            </div>
                            <div class="position-absolute end-0 top-0 p-2 z-index-1 ">
                                <button class="btn btn-sm btn-26 roudned-circle shadow-sm shadow-danger text-danger">
                                    <i class="bi bi-heart size-10 vm"></i>
                                </button>
                            </div>
                            <figure class="avatar w-100 rounded-15 border">
                                <img src="assets/img/categories1.png" alt="" class="w-100">
                            </figure>
                        </div>
                        <div class="card-body pt-2">
                            <div class="row">
                                <div class="col">
                                    <p class="small"><small class="text-muted size-12">Smasung S500</small><br />$
                                        459.00</p>
                                </div>
                                <div class="col-auto px-0">
                                    <button class="btn btn-sm btn-link text-color-theme">
                                        <i class="bi bi-bag-plus"></i>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card mb-3">
                        <div class="card-body p-1 position-relative">
                            <div class="position-absolute start-0 top-0 m-2 z-index-1">
                                <div class="tag tag-small bg-danger text-white">
                                    SALE
                                </div>
                            </div>
                            <div class="position-absolute end-0 top-0 p-2 z-index-1 ">
                                <button class="btn btn-sm btn-26 roudned-circle shadow-sm shadow-danger text-white bg-danger">
                                    <i class="bi bi-heart size-10 vm"></i>
                                </button>
                            </div>
                            <figure class="avatar w-100 rounded-15 border">
                                <img src="assets/img/categories2.png" alt="" class="w-100">
                            </figure>
                        </div>
                        <div class="card-body pt-2">
                            <div class="row">
                                <div class="col">
                                    <p class="small"><small class="text-muted size-12">Clothing</small><br />$ 265.00
                                    </p>
                                </div>
                                <div class="col-auto px-0">
                                    <button class="btn btn-sm btn-link text-color-theme">
                                        <i class="bi bi-bag-plus"></i>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card mb-3">
                        <div class="card-body p-1 position-relative">
                            <div class="position-absolute start-0 top-0 m-2 z-index-1">
                                <div class="tag tag-small bg-warning text-white">
                                    1 Offer
                                </div>
                            </div>
                            <div class="position-absolute end-0 top-0 p-2 z-index-1 ">
                                <button class="btn btn-sm btn-26 roudned-circle shadow-sm shadow-danger text-danger">
                                    <i class="bi bi-heart size-10 vm"></i>
                                </button>
                            </div>
                            <figure class="avatar w-100 rounded-15 border">
                                <img src="assets/img/categories3.png" alt="" class="w-100">
                            </figure>
                        </div>
                        <div class="card-body pt-2">
                            <div class="row">
                                <div class="col">
                                    <p class="small"><small class="text-muted size-12">Wash.Machine</small><br />$
                                        254.00</p>
                                </div>
                                <div class="col-auto px-0">
                                    <button class="btn btn-sm btn-link text-color-theme">
                                        <i class="bi bi-bag-plus"></i>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- offer banner-->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="card theme-bg overflow-hidden">
                        <div class="card-body py-3">
                            <div class="row">
                                <div class="col-10 align-self-center">
                                    <h1 class="mb-3"><span class="fw-light">15% OFF</span><br>GiftCard</h1>
                                    <p>Thank you for spending with us, You have received Gift Card.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- product medsize box no gap -->
            <div class="row mb-4 g-0 ">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="row mx-0">
                                <div class="col-6 col-md-4 col-lg-3 border-end p-3">
                                    <div class="position-relative">
                                        <div class="position-absolute start-0 top-0 z-index-1">
                                            <div class="tag tag-small bg-theme text-white">
                                                26% OFF
                                            </div>
                                        </div>
                                        <div class="position-absolute end-0 top-0 z-index-1 ">
                                            <button class="btn btn-sm btn-26 roudned-circle shadow-sm shadow-danger text-danger">
                                                <i class="bi bi-heart size-10 vm"></i>
                                            </button>
                                        </div>
                                        <figure class="avatar w-100 rounded-15">
                                            <img src="assets/img/categories4.png" alt="" class="w-100">
                                        </figure>

                                        <div class="row">
                                            <div class="col">
                                                <p class="small"><small class="text-muted size-12">LAVA
                                                        B500</small><br />$
                                                    265.00</p>
                                            </div>
                                            <div class="col-auto px-0">
                                                <button class="btn btn-sm btn-link text-color-theme">
                                                    <i class="bi bi-bag-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-3">
                                    <div class="position-relative">
                                        <div class="position-absolute start-0 top-0  z-index-1">
                                            <div class="tag tag-small bg-theme text-white">
                                                30% OFF
                                            </div>
                                        </div>
                                        <div class="position-absolute end-0 top-0  z-index-1 ">
                                            <button class="btn btn-sm btn-26 roudned-circle shadow-sm shadow-danger text-danger">
                                                <i class="bi bi-heart size-10 vm"></i>
                                            </button>
                                        </div>
                                        <figure class="avatar w-100 rounded-15">
                                            <img src="assets/img/categories1.png" alt="" class="w-100">
                                        </figure>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p class="small"><small class="text-muted size-12">Smasung
                                                    S500</small><br />$ 459.00</p>
                                        </div>
                                        <div class="col-auto px-0">
                                            <button class="btn btn-sm btn-link text-color-theme">
                                                <i class="bi bi-bag-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-0 border-top">
                                <div class="col-6 col-md-4 col-lg-3 border-end p-3">
                                    <div class="position-relative">
                                        <div class="position-absolute start-0 top-0 z-index-1">
                                            <div class="tag tag-small bg-danger text-white">
                                                SALE
                                            </div>
                                        </div>
                                        <div class="position-absolute end-0 top-0 z-index-1 ">
                                            <button class="btn btn-sm btn-26 roudned-circle shadow-sm shadow-danger text-white bg-danger">
                                                <i class="bi bi-heart size-10 vm"></i>
                                            </button>
                                        </div>
                                        <figure class="avatar w-100 rounded-15">
                                            <img src="assets/img/categories2.png" alt="" class="w-100">
                                        </figure>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p class="small"><small class="text-muted size-12">Clothing</small><br />$
                                                65.00</p>
                                        </div>
                                        <div class="col-auto px-0">
                                            <button class="btn btn-sm btn-link text-color-theme">
                                                <i class="bi bi-bag-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-3">
                                    <div class="position-relative">
                                        <div class="position-absolute start-0 top-0 z-index-1">
                                            <div class="tag tag-small bg-warning text-white">
                                                1 Offer
                                            </div>
                                        </div>
                                        <div class="position-absolute end-0 top-0 z-index-1 ">
                                            <button class="btn btn-sm btn-26 roudned-circle shadow-sm shadow-danger text-danger">
                                                <i class="bi bi-heart size-10 vm"></i>
                                            </button>
                                        </div>
                                        <figure class="avatar w-100 rounded-15">
                                            <img src="assets/img/categories3.png" alt="" class="w-100">
                                        </figure>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p class="small"><small class="text-muted size-12">Wash.Machine</small><br />$
                                                254.00</p>
                                        </div>
                                        <div class="col-auto px-0">
                                            <button class="btn btn-sm btn-link text-color-theme">
                                                <i class="bi bi-bag-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- popular shopping  -->
            <div class="row mb-3 gap-0">
                <div class="col">
                    <h6 class="title">Popular</h6>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <ul class="list-group list-group-flush bg-none">
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-50 border rounded-15">
                                                <img src="assets/img/categories2.png" alt="" />
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-0">
                                            <p class="text-secondary size-10 mb-0">Clothing</p>
                                            <p>ZIVACA SK10</p>
                                        </div>
                                        <div class="col align-self-center text-end">
                                            <p class="text-secondary text-muted size-10 mb-0">On Sale</p>
                                            <p>80.00</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-50 border rounded-15">
                                                <img src="assets/img/categories4.png" alt="" />
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-0">
                                            <p class="text-secondary size-10 mb-0">Mobiles</p>
                                            <p>LAVAA 3005</p>
                                        </div>
                                        <div class="col align-self-center text-end">
                                            <p class="text-secondary text-muted size-10 mb-0">Best Exchange</p>
                                            <p>250.00</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-50 border rounded-15">
                                                <img src="assets/img/categories1.png" alt="" />
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-0">
                                            <p class="text-muted size-10 mb-0">Electronics</p>
                                            <p>Samsung CT30</p>
                                        </div>
                                        <div class="col align-self-center text-end">
                                            <p class="text-secondary text-muted size-10 mb-0">20% OFF</p>
                                            <p>355.00</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- main page content ends -->


    </main>
    <!-- Page ends-->

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
@endsection
