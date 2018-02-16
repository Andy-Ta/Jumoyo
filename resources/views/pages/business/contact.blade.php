@extends('layouts.business.default')
@section('content')
    <div class="app layout-fixed-header">
        <div class="main-panel">
            <div class="main-content">
                @if (Session::has('error_msg'))
                    <div class="alert alert-danger" style="margin-left: 18px; margin-right: 18px;">
                        <a class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <p class="text-center" style="color:red">{{ Session::get('error_msg') }}</p>
                    </div>
                @endif
                @if (Session::has('success_msg'))
                    <div class="alert alert-success" style="margin-left: 18px; margin-right: 18px;">
                        <a class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <p class="text-center" style="color:black">{{ Session::get('success_msg') }}</p>
                    </div>
                @endif
                <div class="col-md-12 text-center">
                    <a href="" class="btn btn-info add-on" data-toggle="modal" data-target="#addcontactModal">Add A
                        Contact</a>
                </div>
                <div class="row mb25">
                    @if(!empty($contacts))
                        @foreach($contacts as $contact)
                            <div class="col-md-6 contact-main">
                                <div class="panel">
                                    <div class="panel-body">
                                        <div class="col-sm-5 image-border">
                                            <div class="contact-image">
                                                @if($contact->image !== null)
                                                    <img src="{{URL::asset($contact->image)}}">
                                                @else
                                                    <img src="{{URL::asset('/img/review-icon.png')}}">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-7 contact-content">
                                            <h5> {{$contact->name}}</h5>
                                            <span><i class="fa fa-phone"></i>{{$contact->phone_number}}</span>
                                            <span><i class="fa fa-envelope"></i>{{$contact->email}}</span>
                                            <span><i class="fa fa-map-marker"></i> {{$contact->address}}</span>
                                            <span>
                                                <a class="btn btn-info add-on editContactBtn" data-toggle="modal"
                                                   data-target="#editContactModal"
                                                   data-id="{{$contact->id}}"
                                                   data-name="{{$contact->name}}"
                                                   data-phone="{{$contact->phone_number}}"
                                                   data-email="{{$contact->email}}"
                                                   data-address="{{$contact->address}}">Edit</a>
                                            </span>
                                            <span>
                                                <a id="deleteContactBtn" class="btn btn-info add-on" data-toggle="modal"
                                                   data-target="#deleteContactModal" data-id="{{ $contact->id }}">Remove</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
    <script src="{{ URL::asset("js/contact.js") }}" type="text/javascript"></script>
    @include("modals.contact")
@stop