@extends('layouts.default')

@section('content')
    <main>
        <div class="container-fluid bg-no-overlay">
            <video autoplay muted loop id="myVideo">
                <source src="../video/bg.mp4" type="video/mp4">
                <source src="../video/bg.ogg" type="video/ogg">
                <source src="../video/bg.webm" type="video/webm">
                Your browser does not support HTML5 video.
            </video>
            <div class="container searchpad">
                <div class="row text-center">
                    <h1>Passionate People From Everywhere</h1>
                    <br><br>
                    <form action="search">
                        <div class="col-md-3"></div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="icon-addon addon-sm" style="border: 1px solid #fff;border-radius: 5px;">
                                    <input type="text" name="name" placeholder="Search" class="form-control"
                                           style="background: transparent;color:#fff;" id="name">
                                    <label for="name" class="glyphicon glyphicon-search" rel="tooltip" title="name"
                                           style="color: white;"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="icon-addon addon-sm" style="border: 1px solid #fff;border-radius: 5px;">
                                    <input type="text" name="city" placeholder="City" class="form-control"
                                           style="background: transparent;color:#fff;" id="city">
                                    <label for="city" class="glyphicon glyphicon-search" rel="tooltip" title="city"
                                           style="color: white;"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group">
                                <input type="submit" class="search-btn" value="Search"></input>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="container steps-container">
                <div class="row">
                    <div class="row" style="padding: 30px;">
                        <div class="col-md-3 text-center">
                            <div class="steps-home">
                                <div class="box-content">
                                    <i class="tag-title fa fa-id-card-o"></i>
                                    <h3>Post your Services for free</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <div class="steps-home">
                                <div class="box-content">
                                    <i class="tag-title fa fa-rocket"></i>
                                    <h3>Get Proposals in minutes</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <div class="steps-home">
                                <div class="box-content">
                                    <i class="tag-title fa fa-calendar-check-o"></i>
                                    <h3>Book an appointment</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <div class="steps-home">
                                <div class="box-content">
                                    <i class="tag-title fa fa-dollar"></i>
                                    <h3>Get Paid for your job</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Hero -->

        <div class="container margin_120_95">
            <div class="main_title">
                <h2>Discover the <strong>online</strong> appointment!</h2>
                <p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie.
                    Sed ad debet scaevola, ne mel.</p>
            </div>
            <div class="row add_bottom_30">
                <div class="col-lg-4">
                    <div class="box_feat" id="icon_1">
                        <span></span>
                        <h3>Find Services</h3>
                        <p>Easily find local barbers, lawyers, drivers and more self-employed professionals that will best suit your needs. View their profile , read customer reviews and create great business relationships .</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box_feat" id="icon_2">
                        <span></span>
                        <h3>24/7 in Services</h3>
                        <p>Easily find local barbers, lawyers, drivers and more self-employed professionals that will best suit your needs. View their profile , read customer reviews and create great business relationships .</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box_feat" id="icon_3">
                        <h3>Favourites</h3>
                        <p>Create your own contact list by following your favourite professionals. Stay updated and immediately receive all of their updates on your timeline .</p>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->

        <div id="app_section">
            <div class="container">
                <div class="row justify-content-around">
                    <div class="col-md-5">
                        <p><img src="{{ URL::asset('vendor/findoctor_v.1.5/html_menu_1/img/app_img.svg') }}" alt="" class="img-fluid" width="500" height="433"></p>
                    </div>
                    <div class="col-md-6">
                        <small>Application</small>
                        <h3>Download <strong>Jumoyo App</strong> Now!</h3>
                        <p class="lead">Tota omittantur necessitatibus mei ei. Quo paulo perfecto eu, errem percipit
                            ponderum no eos. Has eu mazim sensibus. Ad nonumes dissentiunt qui, ei menandri electram
                            eos. Nam iisque consequuntur cu.</p>
                        <div class="app_buttons wow" data-wow-offset="100">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 43.1 85.9"
                                 style="enable-background:new 0 0 43.1 85.9;" xml:space="preserve">
							<path stroke-linecap="round" stroke-linejoin="round" class="st0 draw-arrow"
                                  d="M11.3,2.5c-5.8,5-8.7,12.7-9,20.3s2,15.1,5.3,22c6.7,14,18,25.8,31.7,33.1"/>
                                <path stroke-linecap="round" stroke-linejoin="round" class="draw-arrow tail-1"
                                      d="M40.6,78.1C39,71.3,37.2,64.6,35.2,58"/>
                                <path stroke-linecap="round" stroke-linejoin="round" class="draw-arrow tail-2"
                                      d="M39.8,78.5c-7.2,1.7-14.3,3.3-21.5,4.9"/>
						</svg>
                            <a href="#0" class="fadeIn"><img src="{{ URL::asset('vendor/findoctor_v.1.5/html_menu_1/img/apple_app.png') }}" alt="" width="150" height="50"
                                                             data-retina="true"></a>
                            <a href="#0" class="fadeIn"><img src="{{ URL::asset('vendor/findoctor_v.1.5/html_menu_1/img/google_play_app.png') }}" alt="" width="150"
                                                             height="50" data-retina="true"></a>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /app_section -->
    </main>
    <!-- /main content -->

    <!--
    <div class="container-fluid bg-no-overlay">
        <video autoplay muted loop id="myVideo">
            <source src="../video/bg.mp4" type="video/mp4">
            <source src="../video/bg.ogg" type="video/ogg">
            <source src="../video/bg.webm" type="video/webm">
            Your browser does not support HTML5 video.
        </video>
        <div class="container searchpad">
            <div class="row text-center">
                <h1>Passionate People From Everywhere</h1>
                <br><br>
                <form action="search">
                    <div class="col-md-3"></div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <div class="icon-addon addon-sm" style="border: 1px solid #fff;border-radius: 5px;">
                                <input type="text" name="name" placeholder="Search" class="form-control"
                                       style="background: transparent;color:#fff;" id="name">
                                <label for="name" class="glyphicon glyphicon-search" rel="tooltip" title="name"
                                       style="color: white;"></label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <div class="icon-addon addon-sm" style="border: 1px solid #fff;border-radius: 5px;">
                                <input type="text" name="city" placeholder="City" class="form-control"
                                       style="background: transparent;color:#fff;" id="city">
                                <label for="city" class="glyphicon glyphicon-search" rel="tooltip" title="city"
                                       style="color: white;"></label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group">
                            <input type="submit" class="search-btn" value="Search"></input>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="container steps-container">
            <div class="row">
                <div class="row" style="padding: 30px;">
                    <div class="col-md-3 text-center">
                        <div class="steps-home">
                            <div class="box-content">
                                <i class="tag-title fa fa-id-card-o"></i>
                                <h3>Post your Services for free</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="steps-home">
                            <div class="box-content">
                                <i class="tag-title fa fa-rocket"></i>
                                <h3>Get Proposals in minutes</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="steps-home">
                            <div class="box-content">
                                <i class="tag-title fa fa-calendar-check-o"></i>
                                <h3>Book an appointment</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="steps-home">
                            <div class="box-content">
                                <i class="tag-title fa fa-dollar"></i>
                                <h3>Get Paid for your job</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="row" style="padding: 30px;">
                <div class="col-md-4 text-center">
                    <div class="box" style="min-height: 350px;">
                        <div class="box-content">
                            <h1 class="tag-title"><i class="glyphicon glyphicon-search" style="color:#000000;"></i></h1>
                            <h3>Find Services</h3>
                            <p>Easily find local barbers, lawyers, drivers and more self-employed professionals that
                                will
                                best suit your needs. View their profile , read customer reviews and create great
                                business
                                relationships .</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="box" style="min-height: 350px;">
                        <div class="box-content">
                            <h1 class="tag-title"><span class="glyphicon glyphicon-time"></span></h1>
                            <h3>24/7 in Services</h3>
                            <p>View availability and simply book an appointment at anytime of the day . Receive
                                notifications by email and on the website, reminding you all of your affairs.</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="box" style="min-height: 350px;">
                        <div class="box-content">
                            <h1 class="tag-title"><span class="glyphicon glyphicon-heart"></span></h1>
                            <h3>Favourites</h3>
                            <p>Create your own contact list by following your favourite professionals. Stay updated and
                                immediately receive all of their updates on your timeline .</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->

    <!-- LOGIN MODAL -->
    @include('modals.login')

    <!-- SIGNUP MODAL -->
    @include('modals.signup')

    <!-- MESSAGE MODAL -->
    @include('modals.message')

    <script src="js/home.js" type="text/javascript"></script>
@stop
