<div class="layer"></div>
<!-- Mobile menu overlay mask -->

<div id="preloader">
    <div data-loader="circle-side"></div>
</div>
<!-- End Preload -->

<header class="header_sticky">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-6">
                <div id="logo_home">
                    <h1><a href="/" title="Jumoyo">
                            <img src="{{ URL::asset('img/Logo/Logo_Bleu_Jumoyo.png') }}" width="163px" height="36px" />
                        </a></h1>
                </div>
            </div>
            <nav class="col-lg-9 col-6">
                <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="#0"><span>Menu mobile</span></a>
                <div class="main-menu">
                    <ul>
                        @if (session()->has('id'))
                        <li class="submenu">
                            <a href="/business" class="show-submenu">
                                @if(session()->has('businessid'))
                                    My Business
                                @else
                                    Register to Business
                                @endif
                            </a>
                        </li>
                        <li class="submenu">
                            <a href="/account" class="show-submenu">{{ session('firstName') }}<i class="icon-down-open-mini"></i></a>
                            <ul>
                                <li><a href="/account#account">Account</a></li>
                                <li><a href="/account#bookings">Bookings</a></li>
                                <li><a href="/account#favorites">Favorites</a></li>
                                <li><a href="/account#reviews">Reviews</a></li>
                                <li><a href="/logout">Logout</a></li>
                            </ul>
                        </li>
                        @else
                        <li class="submenu">
                            <a href="#" data-toggle="modal" data-target="#loginModal">Sign In</a>
                        </li>
                        @endif
                    </ul>
                </div>
                <!-- /main-menu -->
            </nav>
        </div>
    </div>
    <!-- /container -->
</header>
<!-- /header -->