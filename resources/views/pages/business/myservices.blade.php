<?php
/**
 * Created by PhpStorm.
 * User: quanta
 * Date: 2018-01-20
 * Time: 11:17 PM
 * This page displays every single services offered by the business user.
 */
?>

@extends('layouts.business.default')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/business/">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">My Services</li>
            </ol>
            <div class="text-center">
                <a href="/business/services/" class="btn_1 medium">Add New Service</a>
            </div>
            <br>
            <div class="box_general">
                <div class="header_box">
                    <h2><i class="fa fa-suitcase"></i>My services</h2>
                </div>
                <div class="list_general">
                    @if(!empty($data))
                        <ul>
                        @foreach($data as $i=>$service)
                            <li>
                                <figure>
                                    <!-- <h2 style="position: relative;top: 50%;transform: translateY(-50%) translateX(50%);">{{ $i+1 }}</h2> -->
                                </figure>
                                <h4>
                                    {{$service->name}}
                                </h4>
                                <ul class="booking_details">
                                    <li>
                                        <strong>Category</strong>
                                        {{$service->category}}
                                    </li>
                                    <li>
                                        <strong>Description</strong>
                                        {{$service->description}}
                                    </li>
                                    <li>
                                        <strong>Price</strong>
                                        {{$service->price}}
                                    </li>
                                    <li>
                                        <strong>Hourly Price</strong>
                                        {{$service->price_hourly}}
                                    </li>
                                </ul>
                                <ul class="buttons">
                                    <li><a href="/business/myservices/edit/{{ $service->id }}" class="btn_1 gray approve">Edit</a></li>
                                    <li><a href="/business/myservices/delete/{{ $service->id }}" class="btn_1 gray delete">Delete</a></li>
                                </ul>
                            </li>
                        @endforeach
                        </ul>
                    @endif
                </div>
            </div>

<!--             
            <div class="col-md-12">
                @foreach ($data as $value)
                    <div class="widget bg-white">
                        <div class="overflow-hidden post">
                            <span class="widget-title" id="serviceName">Service Name: {{ $value->name }}</span>
                            <p id="serviceCategory">Service Category: {{ $value->category }}</p>
                            <p id="serviceDescription">Service Description: {{ $value->description }}</p>
                            <p id="price">Price: {{ $value->price }}$<br></p>
                            <p id="priceHourly">Hourly Price: {{ $value->price_hourly }}$<br><br></p>

                            <div class="post-icons">
                                <a data-toggle="dropdown" id="post-menu"><i class="fa fa-bars"></i></a>
                                <ul id="drop-post" class="dropdown-menu">
                                    <li><a href="/business/myservices/edit/{{ $value->id }}">Edit</a></li>
                                    <li><a href="/business/myservices/delete/{{ $value->id }}">Delete</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div> -->
        </div>
    </div>

    <script src="{{ URL::asset('js/myservices.js') }}" type="text/javascript"></script>

@stop