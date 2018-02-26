<div class="modal fade" id="loginModal" role="dialog" >
    <div class="modal-dialog">
        <form action="/register" id="loginForm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">LOGIN</h4>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div id="loginError"></div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control input-md" placeholder="Email" name="email"/>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control input-md" placeholder="Password" name="password"/>
                            <!--<span class="pull-right"><a href="#" style="color: grey;">Forgot Password?</a></span>-->
                        </div>
                        <div class="form-group">
                            <input style="background: #08306C;" type="submit" id="loginButton" class="btn btn-block btn-md btn-primary" value="LOGIN"/>
                        </div>
                        <!--
                        <div class="form-group">
                            <input type="submit" class="btn btn-block btn-md btn-primary" style="background: #3B5998;" value="LOGIN WITH FACEBOOK"/>
                        </div>
                        -->
                        <div class="text-center">
                            <div class="separation-or">
                                <span>Or</span>
                            </div>
                            <a class="btn-signUp-modal" href="#" id="signUpNow" data-toggle="modal" data-target="#signupModal">Sign up</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="<?php echo e(URL::asset('js/login.js')); ?>" type="text/javascript"></script>