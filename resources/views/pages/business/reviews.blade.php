@extends('layouts.business.default')

@section('content')
<style>
    body {
        background-color: #EBEDF2;
    }
</style>
<div class="layout-fixed-header" style="background-color: #EBEDF2;">
    <div class="main-panel">
        <div class="main-content">
            <div class="container-fluid">
                <div class="col-md-8 ratinguser">
                    <div class="row mb25">
                        <div class="col-md-14" style="padding-left: 20%;">
                            <div class="dropdown">
                                <button class="dropbtn">Filter By...</button>
                                <div class="dropdown-content">
                                    @foreach($serviceName as $value)
                                    <a href="#{{ $value->id }}" data-id="{{ $value->id }}" class="pickService">{{ $value->name }}</a>
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-content">
                                @if(count($reviews) == 0)
                                    <div>You do not have any reviews yet.</div>
                                @endif
                                @foreach($reviews as $review)
                                <div class="tab-pane active fade in" id="{{ $review->service_id }}">
                                    <div class="box boxcontent">
                                        <div class="box-content">
                                            <div class="col-sm-1 text-center removepad">
                                                @if($review->image !== null)
                                                    <img class="img-rounded" src="{{URL::asset($review->image)}}">
                                                @else
                                                    <img class="img-rounded" src="{{URL::asset('/img/review-icon.png')}}">
                                                @endif
                                            </div>
                                            <div class="col-sm-10 respanel">
                                                <div class="review-block-title"><b class="fontstyle">{{ $review->first_name }}</b></div>
                                                <span class="stars">
                                                @for($i = 1; $i <= $review->stars; $i++)
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                @endfor

                                                @if(fmod($review->stars,1) != 0)
                                                <i class="fa fa-star-half" aria-hidden="true"></i>
                                                @endif
                                                </span>
                                                <div class="review-block-description">{{ $review->text }}</div>
                                                <div class="review-block-description review-block-description-clr fontstyle">{{ $review->date_time }}</div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
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

<script src="{{ URL::asset('js/reviewBusiness.js') }}" type="text/javascript"></script>
@stop
