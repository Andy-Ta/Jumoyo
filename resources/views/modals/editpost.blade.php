<div class="modal fade" id="myEditModal" role="dialog">
    <div class="modal-dialog modalwidth">
        <!-- Modal content-->
        <div class="modal-content modalwidth">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">EDIT</h4>
            </div>
            <form method="post" action="#" id="editPostForm">
                <div class="modal-body">
                    <div id="displayError" style="color: red;"></div>
                    <div class="container-fluid">
                        <div class="form-group">
                            <label>Service*</label>
                            <select name="editSelect" class="form-control" id="editSelect">
                                @foreach ($serviceName as $value)
                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="postId" id="postId" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Title*</label>
                            <input type="text" name="editTitle" id="editTitle" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Description*</label>
                            <textarea name="editText" id="editText" class="form-control"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button id="editPost" type="submit" class="btn btn-primary modelfooter">DONE</button>
                            <button type="button" class="btn btn-warning modelfooter" data-dismiss="modal">CANCEL</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>