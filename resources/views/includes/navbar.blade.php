<div class="container-fluid">
    <div class="container">
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><img class="imgresponsive logo" src="{{URL::asset('img/Logo/Logo_Bleu_Jumoyo.png')}}" /></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        @if (session()->has('id'))
                        <li><a href="/account" id="welcomeuser">
                                @if(session('image') !== null )
                                    <img src="{{URL::asset(session('image'))}}" style="width: 1.5vh; margin-top: -6px;" class="header-avatar img-circle ml10" alt="user" title="user">
                                    {{ session('firstName') }}</a></li>
                                @else
                                    <img src="{{URL::asset('/img/review-icon.png')}}" style="width: 32px; margin-top: -6px;" class="header-avatar img-circle ml10" alt="user" title="user">
                                    {{ session('firstName') }}</a></li>
                                @endif
                        <li class="headerlipad">|</li>
                        <li>
                            <a href="/business">Business</a>
                        </li>
                        <li class="headerlipad linehide">|</li>
                        <li>
                            <a href="/logout">Logout</a>
                        </li>
                        @else
                        <li>
                            <a href="#" data-toggle="modal" data-target="#signupModal">Signup</a>
                        </li>
                        <li class="headerlipad">|</li>
                        <li>
                            <a href="#" id="loginuser" data-toggle="modal" data-target="#loginModal">Login</a>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

    </div>
</div>