<div class="top-menu">
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img class="imgresponsive logo"
                                                      src="{{URL::asset('img/Logo/Logo_Blanc_Jumoyo.png')}}"/></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    @if (session()->has('id'))
                        <li>
                            <a class="btn dropdown-toggle" type="button" id="dropdownBusiness" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="true">
                                My Business
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownBusiness">
                                <li><a href="/business/"> Schedule <span class="badge">10</span></a> </li>
                                <li><a href="/business/post"> Post</a> </li>
                                <li><a href="/business/portfolio"> Portfolio</a> </li>
                                <li><a href="/business/review_rating"> Review & Rating</a> </li>
                                <!--<li><a href="../business/static_report"> <i class="fa fa-pie-chart" aria-hidden="true"></i> <span>Static & Report</span> </a> </li>-->
                                <li><a href="/business/businessinfo"> Business Settings</a> </li>
                                <li><a href="/business/myservices"> My Services </a></li>
                                <li><a href="/business/contact"> Contact </a> </li>
                                <!--<li><a href="../business/public_profile" target="_blank"> <i class="fa fa-user-circle-o" aria-hidden="true"></i> <span>Public Profile</span> </a> </li>-->
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="btn dropdown-toggle" type="button" id="dropdownAccount"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                @if(session('image') !== null )
                                    <img src="{{URL::asset(session('image'))}}"
                                         class="header-avatar img-circle ml10" alt="user" title="user"/>
                                @else
                                    <img src="{{URL::asset('/img/review-icon.png')}}"
                                         class="header-avatar img-circle ml10" alt="user" title="user"/>
                                @endif
                                Welcome, {{ session('firstName') }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownAccount">
                                <li><a href="/account/#profile" id="welcomeuser">Account</a></li>
                                <li><a href="/account/#bookings" id="welcomeuser">Bookings <span class="badge">5</span></a>
                                </li>
                                <li><a href="/account/#favorites" id="welcomeuser">Favorites</a></li>
                                <li><a href="/account/#reviews" id="welcomeuser">Reviews</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a class="" href="/logout">Logout</a></li>
                            </ul>
                        </li>
                    @else
                        <li>
                            <a href="#" id="loginuser" data-toggle="modal" data-target="#loginModal">Login</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</div>
<script>
    window.onscroll = function (ev) {
        var B = document.body; //IE 'quirks'
        var D = document.documentElement; //IE with doctype
        D = (D.clientHeight) ? D : B;

        if (D.scrollTop != 0) {
            $('.top-menu').addClass('scroll');
        }
        else {
            $('.top-menu').removeClass('scroll');
        }
    };
</script>