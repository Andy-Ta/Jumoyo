<div class="modal large-modal fade" id="signupModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-remove"></i></button>
            </div>
            <form action="#" method="post" id="registerForm">
                <div class="modal-body">
                    <div class="container">
                        <div class="col-sm-8 col-sm-offset-2">
                            <h2 class="modal-title">Sign up</h2>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"><br/>
                            <div id="displayErrors"></div>
                            <div class="form-group col-md-6">
                                <label>First Name</label>
                                <input type="text" name="firstName" id="firstName" class="form-control input-md"
                                       placeholder="First name" required/>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Last Name</label>
                                <input type="text" name="lastName" id="lastName" class="form-control input-md"
                                       placeholder="Last name" required/>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Email</label>
                                <input type="text" name="email" id="email" class="form-control input-md" placeholder="Email"
                                       required/>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Password</label>
                                <input type="password" name="password" id="password" class="form-control input-md"
                                       placeholder="Password" required/>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Confirm Password</label>
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                       class="form-control input-md" placeholder="Confirm Password" required/>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Mobile</label>
                                <input type="text" name="mobile" id="mobile" class="form-control input-md"
                                       placeholder="Mobile" required/>
                            </div>
                            <div class="form-group col-md-12">
                                <span class="pull-left" style="color: grey;">By signing up you agree to our <a>terms of service</a> and <a>privacy policy</a></span>
                            </div>
                            <div class="form-group col-md-12">
                                <input id="registerButton" type="submit" class="btn-blue full" value="Sign up"/>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>

<script src="{{ URL::asset('js/register.js') }}" type="text/javascript"></script>