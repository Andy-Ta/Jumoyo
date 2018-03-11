<div class="modal fade" id="confirmdetail" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bgcolor">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Confirm Details</h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form id="bookForm" action="/book" method="post">
                        <input id="confirmationDate" name="date" type="hidden" value="" />
                        <input id="confirmationStart" name="start" type="hidden" value="" />
                        <input id="confirmationEnd" name="end" type="hidden" value="" />
                        <input id="Idservice" name="serviceid" type="hidden" value="" />
                        <input id="price" name="price" type="hidden" value="" />
                        <div class="row fontclr">
                            <h4 id="confirm-service">Grooming Services By Greg Chappell</h4>
                        </div>
                        <div id="confirm-address" class="row">
                            344 Sainte-Hélène St, Montreal, QC H2Y 2K7
                        </div>
                        <div class="row">
                            <label id="confirm-datetime" class="col-md-12 control-label labeldate" for="textarea">Tuesday, 29 August, 2017,
                                09:00PM</label>
                        </div>
                        <div class="row">
                            <div id="confirm-servicename" class="col-md-6 servicetitle">Service Name</div>
                            <div id="confirm-time" class="col-md-6 servicetime">09:00PM To 10:00PM</div>
                        </div>
                        <div class="row">
                            <div id="confirm-price" class="col-md-12 servicetitle text-right">Total : $120</div>
                        </div>
                        <div class="row bgclr">
                            <div class="row notescls">
                                <div class="form-group">
                                    <label>Notes(Optional)</label>
                                    <textarea id="notes" name="notes" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row notescls">
                                <p>By booking you agree to our <a href="#">terms of service</a> and <a href="#"> privacy
                                        policy</a></p>
                            </div>
                            <div class="row notescls">
                                <input type="submit" class="btn btn-primary bookreq" value="Book My Request"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" style="width: auto;" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>