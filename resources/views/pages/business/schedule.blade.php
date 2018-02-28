@extends('layouts.business.default')

@section('content')
    <div class="layout-fixed-header">
        <div class="main-panel">
            <div class="main-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="col-md-12">
                                <p><input class="flatpickr" type="hidden" data-inline=true /></p>
                            </div>
                        </div>
                        <div class="col-md-8 btncalender">
                            <div id='calendar'></div>
                            <div class="modal fade" id="fullcalpopup" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Event Description</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container-fluid">
                                                <div class="form-group row">
                                                    <div class="col-md-4" style="float:left;"> <label><b>Title :</b></label></div>
                                                    <div class="col-md-2" style="float:left;"></div>
                                                    <div class="col-md-6" style="float:left;"> <label id="title"></label></div>
                                                </div>
                                                <!--
                                                <div class="form-group row">
                                                    <div class="col-md-4" style="float:left;"> <label><b>Date</b></label></div>
                                                    <div class="col-md-2" style="float:left;"> : </div>
                                                    <div class="col-md-6" style="float:left;"> <label id="start"></label></div>
                                                </div>
                                                -->
                                                <div class="form-group row">
                                                    <div class="col-md-6" style="float:left;"> <label><b>Start Time :</b></label></div>
                                                    <!--<div class="col-md-2" style="float:left;"></div>-->
                                                    <div class="col-md-6" style="float:left;"> <label id="stime"></label></div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-6" style="float:left;"> <label><b>End Time :</b></label></div>
                                                    <!--<div class="col-md-2" style="float:left;"></div>-->
                                                    <div class="col-md-6" style="float:left;"> <label id="etime"></label></div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-6" style="float:left;"> <label><b>Service Name :</b></label></div>
                                                    <!--<div class="col-md-2" style="float:left;"></div>-->
                                                    <div class="col-md-6" style="float:left;"> <label id="sname"></label></div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-6" style="float:left;"> <label><b>Notes :</b></label></div>
                                                    <!--<div class="col-md-2" style="float:left;"></div>-->
                                                    <div class="col-md-6" style="float:left;"> <label id="notes"></label></div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-6" style="float:left;"> <label><b>Status :</b></label></div>
                                                    <div class="col-md-6" style="float:left;"> <label id="statustext"></label></div>
                                                    <!--<div class="col-md-12" style="float:left;">-->
                                                    <!--
                                                    <div class="col-md-4" style="float:left;"> <label><b>Status</b></label></div>
                                                    <div class="col-md-2" style="float:left;"> : </div>
                                                    <div class="col-md-6" style="float:left;">  <select class="form-control">
                                                            <option value="Pending">Pending</option>
                                                            <option value="Complete">Complete</option>
                                                            <option value="Confirm">Confirm</option>
                                                        </select></div>
                                                    -->
                                                    <!--<label><b>Status</b></label>-->

                                                    <!--</div>-->

                                                </div>
                                                <div class="form-group col-md-6 text-right">
                                                    <button id="confirmbooking" class="btn btn-primary" data-dismiss="modal">Confirm Booking</button>
                                                </div>
                                                <div class="form-group col-md-6 text-right">
                                                    <button id="deletebooking" class="btn btn-primary" data-dismiss="modal">Delete Booking</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Schedule Service</h4>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="form-group col-md-6">
                            <label>Services</label>
                            <select class="form-control" id="sel1">
                                <option value="Service 1" selected="selected">Service 1</option>
                                <option value="Service 2">Service 2</option>
                                <option value="Service 3">Service 3</option>
                                <option value="Service 4">Service 4</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <!--<label>Date</label>-->
                            <label class="control-label" for="date">Date</label>
                            <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text"/>

                        </div>
                        <div class="form-group col-md-6">
                            <label>Start Time</label>
                            <div class="input-group clockpicker" data-align="top" data-autoclose="true">
                                <input type="text" class="form-control" value="13:14">
                                <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-time"></span>
                                        </span>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label>End Time</label>
                            <div class="input-group clockpicker" data-align="top" data-autoclose="true">
                                <input type="text" class="form-control" value="18:14">
                                <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-time"></span>
                                        </span>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <input type="submit" class="btn btn-block btn-lg btn-primary" data-dismiss="modal" value="SUBMIT">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ URL::asset('vendor/india/scripts/js/bootstrap-multiselect.js') }}"></script>
    <script src='{{ URL::asset('vendor/india/scripts/js/bootstrap-datepicker.js') }}'></script>
    <script src='{{ URL::asset('vendor/india/scripts/js/bootstrap-clockpicker.js') }}'></script>
    <script type="text/javascript" src="{{ URL::asset('vendor/india/scripts/moment.min.js') }}"></script>
    <script src='{{ URL::asset('vendor/india/scripts/fullcalendar.min.js') }}'></script>
    <script src="https://chmln.github.io/flatpickr/bower_components/flatpickr/dist/flatpickr.js"></script>
    <script src="https://chmln.github.io/flatpickr/bower_components/flatpickr/dist/plugins/confirmDate/confirmDate.js"></script>
    <script src="https://chmln.github.io/flatpickr/bower_components/flatpickr/dist/plugins/weekSelect/weekSelect.js"></script>
    <script src="https://chmln.github.io/flatpickr/flatpickr.js"></script>
    <script src="{{ URL::asset('js/schedule.js') }}"></script>
@stop
