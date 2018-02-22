<!-- MODEL -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modalwidth">

        <!-- Modal content-->
        <div class="modal-content modalwidth">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add to portfolio</h4>
            </div>
            <form method="post" action="#" id="addPortfolioForm" enctype="multipart/form-data">
                <div class="modal-body">
                    <div id="displayErrors"></div>
                    <div class="container-fluid">
                        <!--<div class="col-md-12">-->
                        <div class="form-group files">
                            <label>Images</label>
                            <div class="filebrd">
                                <input name="image" type="file" class="form-style-base" multiple="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Youtube Link</label>
                            <input name="link" type="text" class="form-control" title="link">
                        </div>
                        <div class="form-group">
                            <label>Services</label>
                            <select name="service" class="form-control" id="sel1" title="link">
                                @foreach ($serviceName as $value)
                                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary modelfooter" value="ADD">
                    <br>
                    <button type="button" class="btn btn-warning modelfooter" data-dismiss="modal">CANCEL</button>
                </div>
            </form>
        </div>

    </div>
</div>
<!-- MODEL COMPLETE -->