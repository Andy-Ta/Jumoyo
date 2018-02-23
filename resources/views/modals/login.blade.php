<div class="modal fade" id="loginModal" role="dialog" >
    <div class="modal-dialog" style="width: 33%;">
        <form action="/register" id="loginForm">
            <div class="modal-content">
                <div class="modal-header" style="background: #08306C;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">LOGIN</h4>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div id="loginError"></div>
                        <div class="form-group" style="margin-top: 5%; margin-bottom: 5%;">
                            <label>Email</label>
                            <input type="text" class="form-control input-md" placeholder="Email" name="email"/>
                        </div>
                        <div class="form-group" style="margin-top: 5%; margin-bottom: 5%;">
                            <label>Password</label>
                            <input type="password" class="form-control input-md" placeholder="Password" name="password"/>
                            <!--<span class="pull-right"><a href="#" style="color: grey;">Forgot Password?</a></span>-->
                            <span><a href="#" id="signUpNow" data-toggle="modal" style="color: grey;" data-target="#signupModal">
                                    New to Jumoyo? Signup now</a></span>
                        </div>
                        <div class="form-group" style="margin-top: 5%; margin-bottom: 5%;">
                            <input style="background: #08306C;" type="submit" id="loginButton" class="btn btn-block btn-md btn-primary" value="LOGIN"/>
                        </div>
                        <!--
                        <div class="form-group">
                            <input type="submit" class="btn btn-block btn-md btn-primary" style="background: #3B5998;" value="LOGIN WITH FACEBOOK"/>
                        </div>
                        -->
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="{{ URL::asset('js/login.js') }}" type="text/javascript"></script>