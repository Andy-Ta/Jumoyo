<!-- Change Password modal -->
<div class="modal fade" id="changePswModal" role="dialog">
    <div class="modal-dialog modalwidth">

        <!-- Modal content-->
        <div class="modal-content modalwidth">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Change Password</h4>
            </div>
            <div class="modal-body">
                <div id="errors" style="color: red; margin-right: 40px;"></div>
                <div class="container-fluid">
                    <!--<div class="col-md-12">-->
                    <form action="/changePassword" method="post" id="changePswForm" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Current Password</label>
                            <input type="password" name="currentPassword" id="currentPassword" class="form-control input-md" required/>
                        </div>
                        <div class="form-group">
                            <label>New Password</label>
                            <input type="password" name="newPassword" id="newPassword" class="form-control input-md" required/>
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" name="newPassword_confirmation" id="newPassword_confirmation" class="form-control input-md" required/>
                        </div>
                        <input type="submit" id="changePswBtn" name="changePswBtn" class="btn btn-default" value="CHANGE"/>
                        <br>
                        <button type="button" class="btn btn-default" data-dismiss="modal">CANCEL
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Change image modal -->
<div class="modal fade" id="changeAccImgModal" role="dialog">
    <div class="modal-dialog modalwidth">

        <!-- Modal content-->
        <div class="modal-content modalwidth">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modify Account Image</h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <!--<div class="col-md-12">-->
                    <form action="/changeAccImg" method="post" id="changeAccImgForm" enctype="multipart/form-data">
                        <div class="form-group files">
                            <label>Select A New Image</label>
                            <div class="filebrd">
                                <input type="file" name="accountimg" id="accountimg" class="form-style-base"
                                       accept="image/gif, image/jpeg, image/png" required>
                            </div>
                        </div>
                        <input type="submit" id="changeAccImgBtn" name="changeAccImgBtn"
                               class="btn btn-default" value="SAVE THE NEW IMAGE"/>
                        <br>
                        <a class="btn btn-danger" data-toggle="modal"
                           data-target="#deleteAccImgModal" data-dismiss="modal" id="removeAccImage"
                           name="removeAccImage">DELETE CURRENT IMAGE</a>
                        <br>
                        <button type="button" class="btn btn-default" data-dismiss="modal">CANCEL</button>
                        <br>
                        <div id="changeImgError" style="color: red; margin-right: 40px;"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Delete image modal -->
<div class="modal fade" id="deleteAccImgModal" role="dialog">
    <div class="modal-dialog modalwidth">

        <!-- Modal content-->
        <div class="modal-content modalwidth">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Delete Image</h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid text-center">
                    <!--<div class="col-md-12">-->
                    <h4>Are you sure you want to delete ?</h4>
                    </br>
                    <form>
                        <span><a id="deleteAccImgBtn" href="/deleteAccImage" class="btn btn-default btn-danger"
                                 role="button"> DELETE </a></span>
                        <button type="button" class="btn btn-default" data-dismiss="modal">CANCEL</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>