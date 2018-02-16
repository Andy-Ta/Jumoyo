@extends('layouts.business.default')

@section('content')
    <div class = "app layout-fixed-header">
    <form method="post" id="businessEditForm">
        <div class="container">
            <h3 class="businesscontent">Business Profile</h3>
        </div>
        <div class="container">
            <div class="row backrow">
                <div id="displayErrors" style="text-align: center;">
                </div>
                <div class="col-md-6 form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" id="name" name="name" value = "{{$business->name}}"/>
                </div>
                <div class="col-md-6 form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" id="address" name="address" value = "{{$business->address}}"/>
                </div>
                <div class="col-md-6 form-group">
                    <label>City</label>
                    <input type="text" class="form-control" id="city" name="city" value = "{{$business->city}}"/>
                </div>
                <div class="col-md-6 form-group">
                    <label>Postal Code</label>
                    <input type="text" class="form-control" id="postal_code" name="postal_code" value = "{{$business->postal_code}}"/>
                </div>
                <div class="col-md-6 form-group">
                    <label>State</label>
                    <input type="text" class="form-control" id="state" name="state" value = "{{$business->state}}"/>
                </div>
                <div class="col-md-6 form-group">
                    <label>Country</label>
                    <input type="text" class="form-control" id="country" name="country" value = "{{$business->country}}"/>
                </div>
                <!--
                <div class="col-md-6 form-group">
                    <label>Facebook</label>
                    <input type="text" class="form-control" id="facebook" name="facebook" value = ""/>
                </div>
                <div class="col-md-6 form-group">
                    <label>Twitter</label>
                    <input type="text" class="form-control" id="twitter" name="twitter" value = ""/>
                </div>
                <div class="col-md-6 form-group">
                    <label>Instagram</label>
                    <input type="text" class="form-control" id="instagram" name="instagram" value = ""/>
                </div>
                -->
                <div class="col-md-12">
                    <div class="form-group">
                        <input id="businessEditButton" type="submit" class="btn btn-block btn-md btn-primary" value="UPDATE">
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script src="../js/businessedit.js" type="text/javascript"></script>
    </div>
@stop