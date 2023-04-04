<div class="sidebar ">
    <!-- user information -->
    @include("market::components.profile-sidebar")
    <!-- user emnu navigation -->
    <div class="row">
        <div class="col-12">
            <ul class="nav nav-pills">
                <x-market-nav-item url="market/message" name="Message" icon="chat-text"/>

                <x-market-nav-dropdown />
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
