<div class="modal fade" id="pickup" role="dialog">
    <div class="modal-dialog book-model">
        <div class="modal-content">
            <div class="modal-header" style="background: #08306C;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Pick a Date & Time</h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row" style="padding-bottom: 10%;">
                        <div id="dispError" class="formIssue"></div>
                        <div class="col-md-6 padding-0">
                            <div class="col-md-12 media-padding"><h4>Date</h4></div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input id="date" name="date" type="text" class="date-input form-control"/>
                                    <div id="date-picker"></div>
                                </div>
                            </div>
                            <div class="col-md-12 media-padding">
                                <div class="selector"></div>
                            </div>
                        </div>

                        <div class="col-md-6 padding-0">
                            <h4>Time</h4>

                            <label for="start">From</label>
                            <select id="start">
                                <option>Please select a date.</option>
                            </select>

                            <label for="end">To</label>
                            <select id="end">
                                <option>Please select a date.</option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <a data="{{ $service->service_id }}" id="confirmDetailsBtn" href="#">
                    <button type="button" style="width: auto;" class="btn btn-primary pickup">Confirm Booking</button>
                </a>
            </div>
        </div>
    </div>
</div>

<script src="{{ URL::asset('vendor/pickadate/picker.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('vendor/pickadate/picker.date.js') }}" type="text/javascript"></script>