@extends('layouts.business.default')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Reviews</li>
            </ol>
            <div class="box_general">
                <div class="header_box">
                    <h2 class="d-inline-block">Reviews List</h2>
                    <div class="filter">
                        <select name="orderby" class="selectbox">
                            <option>Filter by...</option>
                            @foreach($serviceName as $value)
                                <option value="#service{{ $value->id }}"
                                        data-id="{{ $value->id }}">{{ $value->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="list_general reviews">
                    <ul>
                        @if(count($reviews) == 0)
                            <li>
                                <h4>You do not have any reviews yet.</h4>
                            </li>
                        @endif
                        @foreach($reviews as $review)
                            <li data-id="{{ $review->service_id }}" class="service">
                        <span class="comment-time"
                              data-moment-format="YYYY-MM-DD H:mm"
                              data-comment-time="{{ $review->date_time }}"></span>
                                <span class="stars">
                            @for($i = 1; $i <= $review->stars; $i++)
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    @endfor

                                    @if(fmod($review->stars,1) != 0)
                                        <i class="fa fa-star-half" aria-hidden="true"></i>
                                    @endif
                        </span>
                                <figure>
                                    @if($review->image !== null)
                                        <img class="img-rounded" src="{{URL::asset($review->image)}}">
                                    @else
                                        <img class="img-rounded" src="{{URL::asset('/img/review-icon.png')}}">
                                    @endif
                                </figure>
                                <h4>{{ $review->first_name }}</h4>
                                <p>{{ $review->text }}</p>
                                <p class="btn_1 gray">{{ $review->services_name }}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- /box_general-->
        </div>
        <!-- /container-fluid-->
    </div>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>

    <script src="{{ URL::asset('js/reviewBusiness.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ URL::asset('vendor/india/scripts/moment.min.js') }}"></script>
@stop
