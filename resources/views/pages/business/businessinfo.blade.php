@extends('layouts.business.default')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Business Settings</li>
            </ol>
            <div class="box_general padding_bottom">
                <form id="businessEditForm">
                    <div class="header_box version_2">
                        <h2><i class="fa fa-gears"></i>Profile</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Business Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                       value="{{$business->name}}">
                            </div>
                        </div>
                    </div>
                    <!-- /row-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" id="address" name="address"
                                       value="{{$business->address}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" class="form-control" id="city" name="city"
                                       value="{{$business->city}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Postal Code</label>
                                <input type="text" class="form-control" id="postal_code" name="postal_code"
                                       value="{{$business->postal_code}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>State</label>
                                <input type="text" class="form-control" id="state" name="state"
                                       value="{{$business->state}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Country</label>
                                <input type="text" class="form-control" id="country" name="country"
                                       value="{{$business->country}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" class="form-control" id="phone_number" name="phone_number"
                                       value="{{$business->phone_number}}">
                            </div>
                        </div>
                    </div>
                    <!-- /row-->
                </form>
            </div>
            <!-- /box_general-->
            <input id="businessEditButton" type="submit" class="btn_1 medium" value="UPDATE">
            <a class="btn_1 medium"
               href="https://connect.stripe.com/oauth/authorize?response_type=code&client_id={{ $client_id }}&scope=read_write">CHANGE
                STRIPE</a></p>
        </div>
        <!-- /.container-fluid-->
    </div>
    <!-- /.container-wrapper-->

    <script src="../js/businessedit.js" type="text/javascript"></script>
@stop