@extends('layouts.default')

@section('content')

<main>
    <div class="bg_color_2">
        <div class="container margin_60_35">
            <div id="register">
                <h1>Please register to Jumoyo!</h1>
                <input type="hidden" name="_token" value="{{ csrf_token() }}"><br/>
                <div class="row justify-content-center">
                    <div class="col-md-5 register">
                        <form action="#" method="post" id="registerForm">
                            <div class="box_form">
                                <div id="displayErrors"></div>
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" name="firstName" id="firstName" class="form-control"
                                           placeholder="First name">
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" name="lastName" id="lastName" class="form-control"
                                           placeholder="Last name">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" id="password" class="form-control"
                                           placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label>Confirm password</label>
                                    <input type="password" name="password_confirmation" id="password_confirmation"
                                           class="form-control" placeholder="Confirm Password">
                                </div>
                                <div class="form-group">
                                    <label>Mobile</label>
                                    <input type="text" name="mobile" id="mobile" class="form-control"
                                           placeholder="Mobile">
                                </div>
                                <label for="check_2"><span>By signing up, I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
                                <div class="form-group text-center add_top_30">
                                    <input class="btn_1" id="registerButton" type="submit" value="Sign up"/>
                                </div>
                            </div>
                            <p class="text-center"><small>Has voluptua vivendum accusamus cu. Ut per assueverit temporibus dissentiet. Eum no atqui putant democritum, velit nusquam sententiae vis no.</small></p>
                        </form>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /register -->
        </div>
    </div>
</main>
<!-- /main -->

<!-- LOGIN MODAL -->
@include('modals.login')

<!-- MESSAGE MODAL -->
@include('modals.message')

<script src="{{ URL::asset('js/register.js') }}" type="text/javascript"></script>
<link href="{{ URL::asset('vendor/findoctor_v.1.5/html_menu_1/css/bootstrap.css') }}" rel="stylesheet">

@stop