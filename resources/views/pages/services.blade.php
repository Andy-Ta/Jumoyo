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
        <div class="col12style" id="filterpart" style="margin: 0 auto;">
            <div class="row filterbar">
                <div class="heading filtericn">
                    <!--<i class="fa fa-filter" id="opensidebar" aria-hidden="true"></i>
                    <span>Filter</span>-->
                    <ul class="breadcrumb favourite">
                        <li>Sort By :</li>
                        <li id="stars" class="sorter"><a href="#">Recommended <span></span></a></li>
                        <li id="reviews" class="sorter"><a href="#">Most Popular <span></span></a></li>
                        <li id="price" class="sorter"><a href="#">Price <span></span></a></li>
                        <li id="price_hourly" class="sorter"><a href="#">Hourly Price <span></span></a></li>
                    </ul>
                </div>
            </div>
            <div id="serviceContainer">
            </div>
        </div>
    </div>

    <!-- LOGIN MODAL -->
    @include('modals.login')

    <!-- SIGNUP MODAL -->
    @include('modals.signup')

    <script src="js/services.js" type="text/javascript"></script>
    <script> data = {!! $services !!}; </script>
@stop




