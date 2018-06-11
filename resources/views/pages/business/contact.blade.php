@extends('layouts.business.default')
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Contacts</li>
            </ol>
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

            <div class="text-center">
                <button class="btn_1 medium" data-toggle="modal" data-target="#addcontactModal">Add A Contact</button>
            </div>
            <br>
            <div class="box_general">
                <div class="header_box">
                    <h2><i class="fa fa-users"></i>Contacts</h2>
                </div>
                <div class="list_general">
                    @if(!empty($contacts))
                        <ul>
                        @foreach($contacts as $contact)
                            <li>
                                <figure>
                                    @if($contact->image !== null)
                                        <img src="{{URL::asset($contact->image)}}">
                                    @else
                                        <img src="{{URL::asset('/img/review-icon.png')}}">
                                    @endif
                                </figure>
                                <h4>
                                    {{$contact->name}}
                                </h4>
                                <ul class="booking_details">
                                    <li>
                                        <strong><i class="fa fa-fw fa-phone"></i> Telephone</strong>
                                        {{$contact->phone_number}}
                                    </li>
                                    <li>
                                        <strong><i class="fa fa-fw fa-envelope"></i> Email</strong>
                                        {{$contact->email}}
                                    </li>
                                    <li>
                                        <strong><i class="fa fa-fw fa-map-marker"></i> Address</strong>
                                        {{$contact->address}}
                                    </li>
                                </ul>
                                <ul class="buttons">
                                    <li>
                                    <a class="btn_1 gray approve editContactBtn" 
                                        data-toggle="modal"
                                        data-target="#editContactModal"
                                        data-id="{{$contact->id}}"
                                        data-name="{{$contact->name}}"
                                        data-phone="{{$contact->phone_number}}"
                                        data-email="{{$contact->email}}"
                                        data-address="{{$contact->address}}">Edit</a>
                                    </li>
                                    <li>
                                        <a id="deleteContactBtn" class="btn_1 gray delete" 
                                            data-toggle="modal"
                                            data-target="#deleteContactModal" 
                                            data-id="{{ $contact->id }}">Remove</a>
                                    </li>
                                </ul>
                            </li>
                        @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <script src="{{ URL::asset("js/contact.js") }}" type="text/javascript"></script>
    @include("modals.contact")
@stop