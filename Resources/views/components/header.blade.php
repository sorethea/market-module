<!-- Header -->
<header class="header position-fixed header-filled">
    <div>
        <div class="float-start">
            <div type="button" class=" menu-btn">
                <x-market-page-logo/>
                <div class="logo-small">
                    <h5>HiEAT<br /><span class="text-secondary fw-light">The best delivery services</span></h5>
                </div>
            </div>
        </div>
        <div class="float-end">
{{--            <a href="notifications.html" target="_self" class="btn btn-light btn-44 btn-rounded">
                <i class="bi bi-bell"></i>
                <span class="count-indicator"></span>
            </a>--}}
            <a href="{{route('market.cart')}}" target="_self" class="btn btn-light btn-44 btn-rounded ms-2">
                <i class="bi bi-cart"></i>
            </a>
        </div>
    </div>
</header>
<!-- Header ends -->
