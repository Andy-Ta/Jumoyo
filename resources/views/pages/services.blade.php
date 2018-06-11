@extends('layouts.default')

@section('content')
    @include('includes.searchbar')
    <div class="container filterheader">

        <!--<div class="col-md-3 hidden-xs hidden-md hidden-sm">
            <div class="row fontclr">
                <div class="col-md-1">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                </div>
                <div class="col-md-10">Availability</div>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10 cal from-group"><input class="form-control calendar" placeholder="calendar 1">
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10 cal from-group">
                    <select class="form-control dropdownfilter" id="sel1">
                        <option selected="selected">Any Time</option>
                        <option>Morning (until 12pm)</option>
                        <option>Afternoon (12pm-5pm)</option>
                        <option>Evening (From 5pm)</option>
                    </select>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row fontclr">
                <div class="col-md-1">
                    <i class="fa fa-map-marker fa-1x" aria-hidden="true"></i>
                </div>
                <div class="col-md-10">Location</div>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10 cal">
                    <input type="text" style="border: 1px solid #3c8dc7;" class="form-control"/>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row fontclr">
                <div class="col-md-1"><span class="glyphicon glyphicon-star"></span></div>
                <div class="col-md-10">Rating</div>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-1">
                    <input type="checkbox"/>
                </div>
                <div class="col-md-8">
                    <div class="starts">
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span>(10)</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-1">
                    <input type="checkbox"/>
                </div>
                <div class="col-md-8">
                    <div class="starts">
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        <span>(8)</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-1">
                    <input type="checkbox"/>
                </div>
                <div class="col-md-8">
                    <div class="starts">
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        <span>(6)</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-1">
                    <input type="checkbox"/>
                </div>
                <div class="col-md-8">
                    <div class="starts">
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        <span>(4)</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-1">
                    <input type="checkbox"/>
                </div>
                <div class="col-md-8">
                    <div class="starts">
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        <span>(2)</span>
                    </div>
                </div>
            </div>-->
    </div>

    <div class="filters_listing">
        <div class="container">
            <ul class="clearfix">
                <li>
                    <!-- old code for the sort by -->
                    {{--<div class="col12style" id="filterpart" style="margin: 0 auto;">--}}
                        {{--<div class="row filterbar">--}}
                            {{--<div class="heading filtericn">--}}
                                {{--<!--<i class="fa fa-filter" id="opensidebar" aria-hidden="true"></i>--}}
                                {{--<span>Filter</span>-->--}}
                                {{--<ul class="breadcrumb favourite">--}}
                                    {{--<li>Sort By :</li>--}}
                                    {{--<li id="stars" class="sorter"><a href="#">Recommended <span></span></a></li>--}}
                                    {{--<li id="reviews" class="sorter"><a href="#">Most Popular <span></span></a></li>--}}
                                    {{--<li id="price" class="sorter"><a href="#">Price <span></span></a></li>--}}
                                    {{--<li id="price_hourly" class="sorter"><a href="#">Hourly Price <span></span></a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div id="serviceContainer">--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    <h6>Sort by</h6>
                    <div class="col12style" id="filterpart" style="margin: 0 auto;">
                        <div class="row filterbar">
                            <div class="heading filtericn">
                                <!--<i class="fa fa-filter" id="opensidebar" aria-hidden="true"></i>
                                <span>Filter</span>-->
                                <ul class="breadcrumb favourite">
                                    <li id="stars" class="sorter"><a href="#">Recommended <span></span></a></li>
                                    <li id="reviews" class="sorter"><a href="#">Most Popular <span></span></a></li>
                                    <li id="price" class="sorter"><a href="#">Price <span></span></a></li>
                                    <li id="price_hourly" class="sorter"><a href="#">Hourly Price <span></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--<select name="orderby" id="selectbox">
                        <option id="stars" class="sorter" value="stars">Recommended</option>
                        <option id="reviews" class="sorter" value="reviews">Most Popular</option>
                        <option id="price" class="sorter" value="price">Price</option>
                        <option id="price_hourly" class="sorter" value="price_hourly">Hourly Price</option>
                    </select>

                    <div id="sbHolder" class="sbHolder">
                        <a id="sbToggle" href="#" class="sbToggle"></a>

                    <a id="sbSelector" href="#" class="sbSelector">Most Popular</a>
                    <ul id="sbOptions" class="sbOptions" style="top: 32px; max-height: 291.667px;">
                        <li>
                            <a href="#" rel="stars">Recommended</a>
                        </li>
                        <li>
                            <a href="#" rel="reviews">Most Popular</a>
                        </li>
                        <li>
                            <a href="#" rel="price">Price</a>
                        </li>
                        <li>
                            <a href="#" rel="price_hourly">Hourly Price</a>
                        </li>
                    </ul>
                    </div>
                    -->
                </li>
            </ul>
        </div>
    </div>


    <div id="serviceContainer">
        <div class="container margin_60_35" >
            <div class="row">
                <div class="col-md-8">
                    <div class="strip_list wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                        <a href="#0" class="wish_bt"></a>
                        <figure>
                            <a class="imglink" href="#">
                                <img class="image-url" src="img/services/default.png"/>
                            </a>
                        </figure>

                        <h3><a class="personname"></a></h3>

                        <div class="address">
                            <p class="addresslist"></p>
                        </div>
                        <div class="des clickshow">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <a class="phone"></a>
                        </div>
                        <div class="des clickshow">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <a class="email"></a>
                        </div>
                        <div class="des">
                            <p></p>
                        </div>
                        <div class="stars">
                        </div>
                        <div class="row" style="margin: 0;">
                            <h4 class="service"></h4>
                        </div>
                        <!--<ul>
                             in case using it?
                            <li><a href="#0" onclick="onHtmlClick('Doctors', 2)" class="btn_listing">View on Map</a></li>
                            <li><a href="https://www.google.com/maps/dir//Downtown,+Montreal,+QC/@45.5034587,-73.6385299,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x4cc91a42465421bd:0xfbb91c3e6b1f6a78!2m2!1d-73.5684895!2d45.5034801" target="_blank">Directions</a></li>
                            <li><a href="detail-page.html">Book now</a></li>
                        </ul>-->
                    </div>

                    <nav aria-label="" class="add_top_20">
                        <ul class="pagination pagination-sm">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </div>

    <!-- LOGIN MODAL -->
    @include('modals.login')

    <!-- SIGNUP MODAL -->
    @include('modals.signup')

    <script src="js/services.js" type="text/javascript"></script>
    <!--<script src="http://maps.googleapis.com/maps/api/js"></script>
    <script src="js/map_listing.js"></script>-->
    <script> data = {!! $services !!}; </script>
@stop




