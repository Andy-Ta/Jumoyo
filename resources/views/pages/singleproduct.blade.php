@extends('layouts.default')

@section('content')
@include('includes.searchbar')

<div class="container-fluid single-product-details">
    <div class="container">
        <div class="col-md-8 col-xs-12">
            <div class=" single-content-left">
                <div class="single-heading list">
                    <h4 class="personnameclass">{{ $service->business_name }}</h4>
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
                    </span>
                </div>
                @if(session()->get('id'))
                    @if(\App\Gateways\ClientGateway::isFav($service->service_id))
                        <div class="single-follow">
                            <a href="/service/favorite/{{$service->service_id}}">
                                <span class="glyphicon glyphicon-heart-empty"
                                      style="font-size: 200%"></span>
                            </a>
                        </div>
                    @else
                        <div class="single-follow">
                            <a href="/service/unfavorite/{{$service->service_id}}">
                                <span class="glyphicon glyphicon-heart"
                                      style="color: red; font-size: 200%"></span>
                            </a>
                        </div>
                    @endif
                @else
                    <div class="single-follow">
                        <a onclick="followLoginAlert()" href="#" title="Please log in to follow.">
                            <span class="glyphicon glyphicon-heart-empty"
                                      style="font-size: 200%;"></span>
                        </a>
                    </div>
                @endif
            </div>
            <div class="clearfix"></div>
            <div class="single-image">
                @if($service->image_url)
                    <img src="{{ URL::asset($service->image_url) }}" class="img-responsive" style="width: 100%;">
                @else
                    <img src="{{ URL::asset('img/services/default.png') }}" class="img-responsive" style="width: 100%;">
                @endif
            </div>
        </div>
        <div class="col-md-4 col-xs-12" style="margin-top: 10%;">
            <div class=" right-content">
                <div class="right-details">
                    <i class="fa fa-location-arrow" aria-hidden="true"></i>
                    <span>{{ $service->address }}, {{ $service->city }}, {{ $service->state }}
                            , {{ $service->country }}</span>
                    <p>{{ $service->description }}</p>
                </div>
                <div class="right-details">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <span id="clickseeno">{{ $service->mobile }}</span>
                </div>

                <div class="right-details">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <span id="clickseeemail">{{ $service->email }}</span>
                </div>

                <div id="timeDiv" class="right-details">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                    <span> Business Hour</span>
                </div>

                <div class="right-details">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <span>Service</span>
                    <div class="right-sub-main">
                        <span class="right-sub-left">{{ $service->services_name }}</span>
                        @if($service->price != 0 && $service->price_hourly != 0)
                        <span class="right-sub-right">{{ $service->price }}$ | {{ $service->price_hourly }}
                                    $/hour</span>
                        @elseif($service->price_hourly != 0)
                        <span class="right-sub-right">{{ $service->price_hourly }}$/hour</span>
                        @else
                        <span class="right-sub-right">{{ $service->price }}$</span>
                        @endif
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="right-details">
                    @if(!session()->get('id'))
                        <a href="#" title="Please log in to book.">
                            <button onclick="bookLoginAlert()" class="btn btn-primary bookbtn bootbutton">Book Service</button>
                        </a>
                    @else
                        <a href="#" title="Book the service now.">
                            <button id="bookbtn" class="btn btn-primary bookbtn bootbutton"
                                    data="{{$service->service_id}}">Book Service
                            </button>
                        </a>
                    @endif
                    @if(!session()->get('id'))
                        <a href="#" title="Please log in to contact business.">
                            <button onclick="bookLoginAlert()" class="btn btn-primary bookbtn bootbutton">Contact Business</button>
                        </a>
                    @else
                        <a href="#" title="Contact the business.">
                            <button id="cbBtn" class="btn btn-primary bookbtn bootbutton"
                                    data="{{$service->service_id}}">Contact Business
                            </button>
                        </a>
                    @endif
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
@if(!empty(session()->get('id')))
    <div class="container-fluid work-carousel">
        <div class="container">
            <div class="col-md-12">
                <h2> Posts </h2>
            </div>
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
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/{{$post->url}}" frameborder="0" allow="encrypted-media" allowfullscreen></iframe>
                            @endif
                            @if(!empty($post->image))
                            <br>
                            <img width="560" height="315" src="/{{$post->image}}">
                            @endif
                        </p>

                        <div class="post-icons">
                            <a href="javascript:void(0)" data-post-id="{{$post->post_id}}" data-type="like" data-likes="{{$post->like_count}}">
                                <i class="fa {{empty($post->like_id) ? 'fa-thumbs-o-up' : 'fa-thumbs-up' }}"></i>
                            </a>
                        </div>
                        <div class="comment-composer">
                            <div contenteditable="true" placeholder="Write your comment here" class="comment-composer-text"></div>
                            <div class="comment-composer-options">
                                <button class="btn postPostComment" data-post-id="{{$post->post_id}}"> Post Comment </button>
                            </div>
                        </div>
                        <div class="post-comments">
                            @if(count($post->comments) == 0)
                                <p>No comments</p>
                            @else  
                                @foreach ($post->comments as $comment)                        
                                    <div class="single-comment">
                                        <div class="review-profile"><img src="{{ $comment->image ? $comment->image : img/review-icon.png }}" class="img-rounded"></div>
                                        <div class="commenter">{{ $comment->first_name . " " . $comment->last_name }}
                                            <span class="comment-time" data-moment-format="YYYY-MM-DD H:mm" data-moment-date="{{$comment->date_time}}"></span>
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
    </div>
@endif
<div class="container-fluid work-carousel">
    <div class="container">
        <div class="col-xs-12">
            <h2> Portfolio </h2>
        </div>
        <div class="col-xs-12 carousel-slider">
            <div class="carousel-logo">
                <div class="carousel slide" id="myCarousel">
                    <div class="carousel-inner" style="margin: 0 auto; max-width: 50%;">
                    </div>
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

<div class="container-fluid work-carousel">
    <div class="container">
        <div class="col-xs-12">
            <h2> Reviews </h2>
            @if(session()->get('id'))
            <div class="add-review">
                <button  id="reviewBtn" class="btn-primary bookbtn addreview" type="button"
                         data-serviceId="{{ $service->service_id }}"> Add Review
                </button>
            </div>
            @endif
        </div>
        <div class="clearfix"></div>
        @if(count($reviews) === 0)
        <div>There are no reviews yet.</div>
        @endif
        @foreach($reviews as $value)
        <div class="col-xs-12 single-review">
            <div class="review-profile">
                @if($value->image !== null)
                <img class="img-rounded" src="{{URL::asset($value->image)}}">
                @else
                <img class="img-rounded" src="{{URL::asset('/img/review-icon.png')}}">
                @endif
            </div>
            <div class="reviewer">
                <h4>{{ $value->first_name }}</h4>
                <span class="stars">
                            @for($i = 1; $i <= $value->stars; $i++)
                                <i class="fa fa-star" aria-hidden="true"></i>
                            @endfor

                            @if(fmod($value->stars,1) != 0)
                                <i class="fa fa-star-half" aria-hidden="true"></i>
                            @endif
                        </span>
                <p>{{ $value->text }}</p>
                <span class="comment-time" data-moment-format="YYYY-MM-DD H:mm" data-comment-time="{{ $value->date_time }}"></span>
                @if(session('id') == $value->reviewer_id)
                <span><br><a href="/delete/{{ $value->review_id }}" id="deleteReview">Delete</a></span>
                @endif
            </div>
        </div>
        @endforeach
    </div>
</div>

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
