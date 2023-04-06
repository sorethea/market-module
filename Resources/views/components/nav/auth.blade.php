@if(Auth::user())
    <li class="nav-item">
        <a class="nav-link" href="{{route("market.logout")}}" tabindex="-1">
            <div class="avatar avatar-40 icon"><i class="bi bi-box-arrow-right"></i></div>
            <div class="col">Logout</div>
            <div class="arrow"><i class="bi bi-chevron-right"></i></div>
        </a>
    </li>
@else
    <li class="nav-item">
        <a class="nav-link" href="{{route("market.login")}}" tabindex="-1">
            <div class="avatar avatar-40 icon"><i class="bi bi-box-arrow-left"></i></div>
            <div class="col">Login</div>
            <div class="arrow"><i class="bi bi-chevron-right"></i></div>
        </a>
    </li>
@endif
