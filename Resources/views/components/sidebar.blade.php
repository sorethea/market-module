<div class="sidebar ">
    <!-- user information -->
    @include("market::components.profile-sidebar")
    <!-- user emnu navigation -->
    <div class="row">
        <div class="col-12">
            <ul class="nav nav-pills">
                <x-market-nav-item url="/message" name="Message"/>

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
