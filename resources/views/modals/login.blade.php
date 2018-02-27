<div class="modal fade large-modal" id="loginModal" role="dialog">
    <div class="modal-dialog">
        <form action="/register" id="loginForm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="fa fa-remove"></i></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4 col-sm-offset-4">
                                <h2 class="modal-title">Sign In</h2>
                                <div id="loginError"></div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control input-md" placeholder="Email" name="email"/>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control input-md" placeholder="Password"
                                           name="password"/>
                                    <!--<span class="pull-right"><a href="#" style="color: grey;">Forgot Password?</a></span>-->
                                </div>
                                <div class="form-group">
                                    <input type="submit" id="loginButton" class="btn-blue full" value="Login"/>
                                </div>
                                <!--
                                <div class="form-group">
                                    <input type="submit" class="btn btn-block btn-md btn-primary" style="background: #3B5998;" value="LOGIN WITH FACEBOOK"/>
                                </div>
                                -->
                                <div class="text-center">
                                    <div class="separator"></div>
                                    <h3 style="margin: 0 0 20px 0;">No Account</h3>
                                    <a class="btn-gray full" href="#" id="signUpNow" data-toggle="modal"
                                       data-target="#signupModal">Register Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="<?php echo e(URL::asset('js/login.js')); ?>" type="text/javascript"></script>