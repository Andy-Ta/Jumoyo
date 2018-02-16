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
    <div class="app layout-fixed-header">
        <div class="main-panel">
            <div class="main-content">
                <div class="container-fluid">
                    <div class="col-md-12 text-right">
                        <a href="/business/services"><div class="widget bg-white"><h3>Add New Service</h3></div></a>
                    </div>
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
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ URL::asset('js/myservices.js') }}" type="text/javascript"></script>

@stop