@extends('layouts.default')

@section('content')
@include('includes.searchbar')
<script type="javascript">
    $(function () {
        var hash = window.location.hash;
        hash && $('ul.nav a[href="' + hash + '"]').tab('show');

        $('.nav-tabs a').click(function (e) {
            $(this).tab('show');
            var scrollmem = $('body').scrollTop();
            window.location.hash = this.hash;
            $('html,body').scrollTop(scrollmem);
        });
    });
</script>
<div class="container">
    <div class="row">
        <div class="col-md-12 panelpad">
            <div class="tabbable">
                <ul class="nav nav-pills nav-stacked col-md-3">
                    <li class="active"><a href="#profile" data-toggle="tab">Account</a></li>
                    <li><a href="#bookings" data-toggle="tab">Bookings</a></li>
                    <li><a href="#favorites" data-toggle="tab">Favorites</a></li>
                    <li><a href="#reviews" data-toggle="tab">Reviews</a></li>
                </ul>
                <div class="tab-content col-md-9">
                    <!-- Account -->
                    <div class="tab-pane active" id="account">
                        <div class="row">
                            <div class="col-xs-12 tab-head">
                                <h2>Account</h2><br/>
                            </div>
                        </div>
                        <!-- Account info -->
                        <div class="row row_list">
                            <div class="col-sm-8 sidenav">
                                <form method="post" id="editAccInfoForm">
                                    <div id="displayAccInfoErrors"
                                         style="color: red; margin-right: 40px;"></div>
                                    <div class="form-group col-md-6">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" id="firstName"
                                               name="firstName"
                                               required value="{{ session('firstName') }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" id="lastName"
                                               name="lastName"
                                               required value="{{ session('lastName') }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Email</label>
                                        <input type="text" class="form-control" id="email" name="email"
                                               disabled
                                               value="{{ session('email') }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Phone Number</label>
                                        <input type="text" class="form-control" id="phone" name="phone"
                                               required
                                               value="{{ session('phone') }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <a class="btn btn-primary" type="submit" id="editAccInfoBtn"
                                           name="editAccInfoBtn">Save Changes</a>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <a class="btn btn-primary" data-toggle="modal"
                                           data-target="#changePswModal" id="changePsw" name="changePsw">Change
                                            Password</a>
                                    </div>
                                </form>
                            </div>
                            <div class="col-sm-4 sidenav">
                                <div class="form-group">
                                    <label>Image</label>
                                </div>
                                <div>
                                    @if(session()->get('image') !== null)
                                        <img class="imgbooking" src="{{URL::asset(session('image'))}}">
                                    @else
                                        <img class="imgbooking"
                                             src="{{URL::asset('/img/review-icon.png')}}">
                                @endif
                                <!-- <img class="imgbooking" src="images/pexels-photo.jpg"/> -->
                                </div>
                                <div class="row formpdg">
                                    <div class="col-md-6" style="float:left;">
                                        <a class="btn btn-primary" data-toggle="modal"
                                           data-target="#changeAccImgModal" id="changeAccImage"
                                           name="changeAccImage">CHANGE</a>
                                    </div>
                                    <div class="col-md-6" style="float:right;">
                                        <a class="btn btn-danger" data-toggle="modal"
                                           data-target="#deleteAccImgModal" id="removeAccImage"
                                           name="removeAccImage">DELETE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  Bookings -->
                    <div class="tab-pane fade" id="bookings">
                        <div class="row">
                            <div class="col-xs-12 tab-head">
                                <h2>Bookings</h2>
                            </div>
                        </div>
                        @if(count($bookings) == 0)
                            <div>You have no bookings.</div>
                        @endif
                        @foreach($bookings as $booking)
                            <div class="row row_list">
                                <div class="col-md-4 removepad">
                                    <div class="booking">
                                        @if($booking->image_name)
                                            <img src="{{ $booking->image_name }}" class="imgbooking"/>
                                        @else
                                            <img src="{{ URL::asset('img/services/default.png') }}"
                                                 class="imgbooking"/>
                                        @endif
                                        @if($booking->confirmed != 0)
                                            <div class="bookingbtn"><label class="labelconfirm">Confirmed</label>
                                            </div>
                                        @else
                                            <div class="bookingbtn"><label class="labelconfirm">Unconfirmed</label>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-12" style="color:#08306C;">
                                            <h4>{{ $booking->business_name }}</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h5 data-moment-format="YYYY-MM-DD"
                                                data-moment-date="{{$booking->date}}"></h5>
                                        </div>
                                    </div>
                                    <div class="row fontclr">
                                        <div class="col-md-6">
                                            <h4>{{ $booking->service_name }}</h4>
                                        </div>
                                        <div class="col-md-6 text-right" style="float:left;">
                                            <h4><span data-moment-format="H:mm"
                                                      data-moment-hour="{{$booking->start}}"></span> to <span
                                                        data-moment-format="H:mm"
                                                        data-moment-hour="{{$booking->end}}"></span></h4>
                                        </div>
                                    </div>
                                    <div class="row fontclr">
                                        <div class="col-md-12 text-right" style="float:left;">
                                            <h4>$ {{ $booking->price }}</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 text-right">
                                        </div>
                                        <div class="col-md-4 text-right">
                                            <a data-toggle="modal" data-target="#bookingdetail" class="details"
                                               data-bookingId="{{ $booking->booking_id }}"
                                               data-businessName="{{ $booking->business_name }}"
                                               data-address="{{ $booking->address }} {{ $booking->city }} {{ $booking->state }}
                                               {{ $booking->postal_code }} {{ $booking->country }}"
                                               data-phone="{{ $booking->mobile }}"
                                               data-confirmation="{{ $booking->confirmed }}"
                                               data-serviceName="{{ $booking->service_name }}"
                                               data-start="{{ $booking->start }}" data-end="{{ $booking->end }}"
                                               data-date="{{ $booking->date }}"
                                               data-image="{{ $booking->image_name }}">
                                                <button type="button" class="btn btn-primary" style="margin: 25px;">
                                                    Details
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                    <!--  END OF BOOKING -->
                    </div>
                    <!-- Favorites -->
                    <div class="tab-pane fade" id="favorites">
                        <div class="row">
                            <div class="col-xs-12 tab-head">
                                <h2>Favorites</h2><br/>
                            </div>
                        </div>
                        @if(count($favorites) == 0)
                            <div>You have no favorited service.</div>
                        @endif
                        @foreach($favorites as $value)
                            <div class="col-xs-12 rowlist">
                                <div class="col-md-4 removepad">
                                    @if($value->image_name)
                                        <img src="{{$value->image_name}}" class="imgbooking"/>
                                    @else
                                        <img src="{{ URL::asset('img/services/default.png') }}" class="imgbooking"/>
                                    @endif
                                </div>
                                <div class="col-md-8">
                                    <div class="list">
                                        <div class="heading">
                                            <h4>
                                                <a href="/service/{{$value->service_id}}">{{$value->service_name}}</a>
                                            </h4>
                                            <div class="starts">
                                                    <span class="stars">
                                                        @for($i = 1; $i <= $value->stars; $i++)
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        @endfor

                                                        @if(fmod($value->stars,1) != 0)
                                                            <i class="fa fa-star-half" aria-hidden="true"></i>
                                                        @endif
                                                        <span>({{ count($reviews) }})</span>
                                                    </span>
                                            </div>
                                            <div class="favourite">
                                                <div class="single-follow">
                                                    <a href="/service/unfavfromacc/{{$value->service_id}}">
                                                            <span class="glyphicon glyphicon-heart"
                                                                  style="color: red; font-size: 150%"></span>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                        <span> {{$value->category}} </span>
                                        <div class="des">
                                            <p>Details: {{$value->description}}</p>
                                        </div>
                                        <div class="heading">
                                            <div class="favourite">
                                                @if($value->price_hourly != 0)
                                                    <span>${{$value->price_hourly}}/hr</span>
                                                @endif
                                                @if($value->price_hourly != 0 && $value->price != 0)
                                                    <span> | </span>
                                                @endif
                                                @if($value->price != 0)
                                                    <span>${{$value->price}}</span>
                                                @endif
                                                <span><a href="/service/{{$value->service_id}}"><button
                                                                type="button"
                                                                class="btn-primary bookbtn bookconfirm"> Book </button></a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Reviews -->
                    <div class="tab-pane fade" id="reviews">
                        <div class="row">
                            <div class="col-xs-12 tab-head">
                                <h2>Review</h2>
                            </div>
                            <div class="col-md-12">
                                <div class="tab-content">
                                    <!-- GIVEN REVIEWS -->
                                    @if(count($reviews) == 0)
                                        <div>You have not given any reviews.</div>
                                    @endif
                                    @foreach($reviews as $value)
                                        <div class="box boxcontent">
                                            <div class="box-content">
                                                <div class="col-sm-1 text-center removepad">
                                                    <div>
                                                        @if($value->image !== null)
                                                            <img class="img-rounded"
                                                                 src="{{URL::asset($value->image)}}">
                                                        @else
                                                            <img class="img-rounded"
                                                                 src="{{URL::asset('/img/review-icon.png')}}">
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-sm-10 respanel">
                                                    <div class="review-block-title">

                                                        @for($i = 1; $i <= $value->stars; $i++)
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        @endfor

                                                        @if(fmod($value->stars,1) != 0)
                                                            <i class="fa fa-star-half" aria-hidden="true"></i>
                                                        @endif</div>

                                                    <div class="review-block-description">{{ $value->text }}</div>
                                                    <div class="review-block-description review-block-description-clr">{{ $value->date_time }}
                                                        <span><br><a href="/delete/{{ $value->review_id }}"
                                                                     id="deleteReview">Delete</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="{{ URL::asset('js/account.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ URL::asset('vendor/india/scripts/moment.min.js') }}"></script>
</div>

@include("modals.editAccInfo")
@include("modals.bookdetails")

@stop

