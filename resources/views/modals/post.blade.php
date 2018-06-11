<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modalwidth">
        <!-- Modal content-->
        <div class="modal-content modalwidth">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">POST</h4>
            </div>
            <form method="post" action="#" id="postForm" enctype="multipart/form-data">
                <div class="modal-body">
                    <div id="displayErrors"></div>
                    <div class="container-fluid">
                        <div class="form-group">
                            <label>Service*</label>
                            <select name="service"  class="form-control" id="select">
                                @foreach ($serviceName as $value)
                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Title*</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Description*</label>
                            <textarea name="text" id="text" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Youtube Link</label>
                            <input type="text" name="url" id="url" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Image</label><br>
                            <input type="file" name="image" id="image">
                        </div>
                        <div class="modal-footer">
                            <input id="postSubmit" type="submit" class="btn btn-primary modelfooter" value="ADD">
                            <button type="button" class="btn btn-warning modelfooter" data-dismiss="modal">CANCEL</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>