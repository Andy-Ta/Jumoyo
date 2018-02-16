<!-- Add contact modal -->
<div class="modal fade" id="addcontactModal" role="dialog">
    <div class="modal-dialog modalwidth">

        <!-- Modal content-->
        <div class="modal-content modalwidth">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Contact</h4>
            </div>
            <div class="modal-body">
                <div id="displayErrors"></div>
                <div class="container-fluid">
                    <!--<div class="col-md-12">-->
                    <form action="/addContact" method="post" id="addContactForm" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" id="name" class="form-control input-md" required/>
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" name="phone" id="phone" class="form-control input-md" required/>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" id="email" class="form-control input-md" required/>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" id="address" name="address" class="form-control input-md" required/>
                        </div>
                        <div class="form-group files">
                            <label>Image</label>
                            <div class="filebrd">
                                <input type="file" name="image" id="image" class="form-style-base" accept="image/gif, image/jpeg, image/png">
                            </div>
                        </div>
                        <input type="submit" id="addContactButton" class="btn btn-default" value="ADD"/>
                        <button type="button" class="btn btn-default modelfooter" data-dismiss="modal">CANCEL</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Delete Contact modal -->
@if(isset($contact->id))
    <div class="modal fade" id="deleteContactModal" role="dialog">
        <div class="modal-dialog modalwidth">

            <!-- Modal content-->
            <div class="modal-content modalwidth">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Delete Contact</h4>
                </div>
                <div class="modal-body">
                    <div class="container-fluid text-center">
                        <!--<div class="col-md-12">-->
                        <h4>Are you sure you want to delete ?</h4>
                        </br>
                        <form>
                        <span><a id="removeContact" href="/removeContact/{{$contact->id}}" class="btn btn-default btn-danger"
                                 role="button"> DELETE </a></span>
                            <button type="button" class="btn btn-default" data-dismiss="modal">CANCEL</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
<!-- Edit Contact modal -->
@if(isset($contact))
    <div class="modal fade" id="editContactModal" role="dialog">
        <div class="modal-dialog modalwidth">

            <!-- Modal content-->
            <div class="modal-content modalwidth">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Contact</h4>
                </div>
                <div class="modal-body">
                    <div id="displayErrors"></div>
                    <div class="container-fluid">
                        <!--<div class="col-md-12">-->
                        <form action="/editContact" method="post" id="editContactForm" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="hidden" name="contactID" id="contactID" required/>
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" id="edit_name" class="form-control input-md" required/>
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" name="phone" id="edit_phone" class="form-control input-md" required/>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" id="edit_email" class="form-control input-md" required/>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" id="edit_address" name="address" class="form-control input-md" required/>
                            </div>
                            <div class="form-group files">
                                <label>Image</label>
                                <div class="filebrd">
                                    <input type="file" name="image" id="image" class="form-style-base"
                                           accept="image/gif, image/jpeg, image/png">
                                </div>
                            </div>
                            <input type="submit" id="editContactButton" class="btn btn-default" value="CHANGE"/>
                            <button type="button" class="btn btn-default" data-dismiss="modal">CANCEL
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif