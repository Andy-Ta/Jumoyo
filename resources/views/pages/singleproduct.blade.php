@extends('layouts.default')

@section('content')
    @include('includes.searchbar')
    <div class="container margin_60">
        <div class="row">
            <div class="col-xl-8 col-lg-8">
                <nav id="secondary_nav">
                    <div class="container">
                        <ul class="clearfix">
                            <li><a href="#section_1" class="active">General info</a></li>
                            <li><a href="#section_2">Reviews</a></li>
                            <li><a href="#sidebar">Booking</a></li>
                        </ul>
                    </div>
                </nav>
                <div id="section_1">
                    <div class="box_general_3">
                        <div class="profile">
                            <div class="row">
                                <div class="col-lg-5 col-md-4">
                                    <figure>
                                        @if($service->image_url)
                                            <img src="{{ URL::asset($service->image_url) }}" class="img-responsive"
                                                 style="width: 100%;">
                                        @else
                                            <img src="{{ URL::asset('img/services/default.png') }}"
                                                 class="img-responsive" style="width: 100%;">
                                        @endif
                                    </figure>
                                </div>
                                <div class="col-lg-7 col-md-8">
                                    <small>{{ $service->category }}</small>
                                    <h1>{{ $service->business_name }}</h1>
                                    <span class="stars">
                                    @if(empty($reviews))
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        @else
                                            @for($i = 1; $i <= $avgStars; $i++)
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            @endfor
                                            @if(fmod($avgStars,1) != 0)
                                                <i class="fa fa-star-half" aria-hidden="true"></i>
                                            @endif
                                        @endif
                                        <span>({{ count($reviews) }})</span>
                                        @if(session()->get('id'))
                                            @if(\App\Gateways\ClientGateway::isFav($service->service_id))
                                                <a href="/service/favorite/{{$service->service_id}}">
                                                    <span class="glyphicon glyphicon-heart-empty"
                                                        style="font-size: 150%"></span>
                                                </a>
                                            @else
                                                <a href="/service/unfavorite/{{$service->service_id}}">
                                                    <span class="glyphicon glyphicon-heart"
                                                        style="color: red; font-size: 150%"></span>
                                                </a>
                                            @endif
                                        @endif
                                    </span>
                                    <ul class="contacts">
                                        <li>
                                            <h6>Address</h6>
                                            {{ $service->address }}, {{ $service->city }}, {{ $service->state }}
                                            , {{ $service->country }}
                                            <a href="https://www.google.ca/maps/place/{{ $service->address }}+{{ $service->city }}+{{ $service->state }}+{{ $service->country }}"
                                               target="_blank"> <strong>View on map</strong></a>
                                        </li>
                                        <li>
                                            <h6>Phone</h6>{{ $service->mobile }}
                                        </li>
                                        <li>
                                            <h6>Email</h6>{{ $service->email }}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <!-- /profile -->
                        <div class="indent_title_in">
                            <i class="pe-7s-user"></i>
                            <h3>Description</h3>
                        </div>
                        <div class="wrapper_indent">
                            <p>{{ $service->description }}</p>
                        </div>
                        <!-- /wrapper indent -->

                        <hr>

                        <div class="indent_title_in">
                            <i class="pe-7s-clock"></i>
                            <h3>Business Hour</h3>
                        </div>
                        <div class="wrapper_indent">
                            <div id="timeDiv" class="right-details">
                            </div>
                        </div>
                        <!--  End wrapper indent -->

                        <hr>

                        <div class="indent_title_in">
                            <i class="pe-7s-cash"></i>
                            <h3>Prices &amp; Payments</h3>
                        </div>
                        <div class="wrapper_indent">
                            <table class="table table-responsive table-striped">
                                <tbody>
                                @if($service->price != 0 && $service->price_hourly != 0)
                                    <tr>
                                        <td>Fixed</td>
                                        <td>${{ $service->price }}</td>
                                    </tr>
                                    <tr>
                                        <td>Hourly</td>
                                        <td>${{ $service->price_hourly }}/hour</td>
                                    </tr>
                                @elseif($service->price != 0 && $service->price_hourly == null)
                                    <tr>
                                        <td>Fixed</td>
                                        <td>${{ $service->price }}</td>
                                    </tr>
                                @else
                                    <tr>
                                        <td>Hourly</td>
                                        <td>${{ $service->price_hourly }}/hour</td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>

                        <hr>

                        <div class="indent_title_in">
                            <i class="pe-7s-photo"></i>
                            <h3>Portfolio</h3>
                        </div>
                        <div class="wrapper_indent">
                            <div class="carousel-slider">
                                <div class="carousel-logo">
                                    <div class="carousel slide" id="myCarousel">
                                        <div class="carousel-inner" style="margin: 0 auto; max-width: 50%;">
                                        </div>
                                        <div class="carousel-btns">
                                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                                <i class="glyphicon glyphicon-chevron-left"></i>
                                            </a>
                                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                                <i class="glyphicon glyphicon-chevron-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @if(!empty(session()->get('id')))
                            <hr>
                            <div class="indent_title_in">
                                <i class="pe-7s-news-paper"></i>
                                <h3>Posts</h3>
                            </div>
                            <div class="wrapper_indent">
                                @if (empty($data))
                                    <p> No posts </p>
                                @else
                                    <div class="postScrolling">
                                        @foreach ($data as $post)
                                            <div class="col-md-12 widget bg-white post">
                                                <span class="widget-title" id="postTitle">{{$post->title}}</span>
                                                <p id="serviceName">{{$post->name}}</p>
                                                <p id="postText">
                                                    {{$post->text}}
                                                    @if(!empty($post->url))
                                                        <br>
                                                        <iframe width="560" height="315"
                                                                src="https://www.youtube.com/embed/{{$post->url}}"
                                                                frameborder="0" allow="encrypted-media"
                                                                allowfullscreen></iframe>
                                                    @endif
                                                    @if(!empty($post->image))
                                                        <br>
                                                        <img width="560" height="315" src="/{{$post->image}}">
                                                    @endif
                                                </p>

                                                <div class="post-icons">
                                                    <i class="fa {{empty($post->like_id) ? 'fa-thumbs-o-up' : 'fa-thumbs-up' }}"></i>
                                                    <a href="javascript:void(0)" data-post-id="{{$post->post_id}}"
                                                       data-type="like"
                                                       data-likes="{{$post->like_count}}">
                                                    </a>
                                                </div>
                                                <div class="comment-composer">
                                                    <div contenteditable="true" placeholder="Write your comment here"
                                                         class="comment-composer-text"></div>
                                                    <div class="comment-composer-options">
                                                        <button class="btn postPostComment"
                                                                data-post-id="{{$post->post_id}}"> Post
                                                            Comment
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="post-comments">
                                                    @if(count($post->comments) == 0)
                                                        <p>No comments</p>
                                                    @else
                                                        @foreach ($post->comments as $comment)
                                                            <div class="single-comment">
                                                                <div class="review-profile"><img
                                                                            src="{{ $comment->image ? $comment->image : "img/review-icon.png" }}"
                                                                            class="img-rounded"></div>
                                                                <div class="commenter">{{ $comment->first_name . " " . $comment->last_name }}
                                                                    <span class="comment-time"
                                                                          data-moment-format="YYYY-MM-DD H:mm"
                                                                          data-moment-date="{{$comment->date_time}}"></span>
                                                                </div>
                                                                <p>{{ $comment->text }}</p>
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                    @endif


                    <!--  /wrapper_indent -->
                    </div>
                    <!-- /section_1 -->
                </div>
                <!-- /box_general -->

                <div id="section_2">
                    <div class="box_general_3">
                        <div class="reviews-container">
                            <!-- /row -->

                            @if(session()->get('id'))
                                <a id="reviewBtn" title="Please leave a review."
                                   data-serviceId="{{ $service->service_id }}" class="btn_1 full-width">Add Review</a>
                            @else
                                <a title="Please log in to add a review." onclick="bookLoginAlert()"
                                   class="btn_1 full-width">Add review</a>
                            @endif

                            <hr>

                            @if(count($reviews) === 0)
                                <p>There are no reviews yet.</p>
                            @endif

                            @foreach($reviews as $value)
                                <div class="review-box clearfix">
                                    @if($value->image !== null)
                                        <figure class="rev-thumb"><img src="{{URL::asset($value->image)}}" alt="">
                                        </figure>
                                    @else
                                        <figure class="rev-thumb"><img src="{{URL::asset('/img/review-icon.png')}}"
                                                                       alt=""></figure>
                                    @endif
                                    <div class="rev-content">
                                        <div class="rating">
                                            @for($i = 1; $i <= $value->stars; $i++)
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            @endfor

                                            @if(fmod($value->stars,1) != 0)
                                                <i class="fa fa-star-half" aria-hidden="true"></i>
                                            @endif
                                        </div>
                                        <div class="rev-info">
                                            {{ $value->first_name }} – <span class="comment-time"
                                                                             data-moment-format="YYYY-MM-DD H:mm"
                                                                             data-comment-time="{{ $value->date_time }}"></span>
                                        </div>
                                        <div class="rev-text">
                                            <p>{{ $value->text }}</p>
                                            @if(session('id') == $value->reviewer_id)
                                                <span><a href="/delete/{{ $value->review_id }}"
                                                         id="deleteReview">Delete</a></span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                        @endforeach
                        <!-- End review-box -->
                        </div>
                        <!-- End review-container -->
                    </div>
                </div>
                <!-- /section_2 -->
            </div>
            <!-- /col -->
            <aside class="col-xl-4 col-lg-4" id="sidebar">
                <div class="box_general_3 booking">
                    <form>
                        <div class="title">
                            <h3>Book The Service</h3>
                        </div>
                        @if(!session()->get('id'))
                            <a title="Please log in to book." onclick="bookLoginAlert()"
                               class="btn_1 full-width">Book
                                Now</a>
                        @else
                            <a title="Book the service now." id="bookbtn" class="btn_1 full-width"
                               data="{{$service->service_id}}">Book Now</a>
                        @endif
                    </form>
                </div>
                <!-- /box_general -->
            </aside>
            <!-- /asdide -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->


    <!-- LOGIN MODAL -->
    @include('modals.login')

    <!-- SIGNUP MODAL -->
    @include('modals.signup')

    <!-- BOOK MODAL -->
    @include('modals.book')

    <!-- BOOKDETAILS MODAL -->
    @include('modals.payment')

    <!-- BOOKCONF MODAL -->
    @include('modals.confirmdetails')

    <!-- REVIEW MODAL -->
    @include('modals.review')

    <!-- POST MODAL -->
    @include('modals.viewpost')

    <!-- CONTACT MODAL -->
    @include('modals.contactBusiness')

    <script src="{{ URL::asset('js/singleProduct.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('js/review.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ URL::asset('vendor/india/scripts/moment.min.js') }}"></script>
    <script type="text/javascript">
        days = '{{ $service->days }}';
        start = '{{ $service->start_time }}';
        end = '{{ $service->end_time }}';

        function followLoginAlert() {
            alert("Please log in to follow.");
        }

        function bookLoginAlert() {
            alert("Please log in to book the service.");
        }
    </script>
@stop
