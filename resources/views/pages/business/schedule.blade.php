@extends('layouts.business.default')

@section('content')
    <!-- /Navigation-->
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">My Dashboard</li>
            </ol>
            <!-- Icon Cards
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card dashboard text-white bg-primary o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-envelope-open"></i>
                            </div>
                            <div class="mr-5"><h5>26 New Messages!</h5></div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="messages.html">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card dashboard text-white bg-warning o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-star"></i>
                            </div>
                            <div class="mr-5"><h5>11 New Reviews!</h5></div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="reviews.html">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card dashboard text-white bg-success o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-calendar-check-o"></i>
                            </div>
                            <div class="mr-5"><h5>10 New Bookings!</h5></div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="bookings.html">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card dashboard text-white bg-danger o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-heart"></i>
                            </div>
                            <div class="mr-5"><h5>10 New Bookmarks!</h5></div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="bookmarks.html">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                        </a>
                    </div>
                </div>
            </div>
            /cards -->
            <h2></h2>
            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-calendar"></i>Schedule</h2>
                </div>
                <div class="layout-fixed-header">
                    <div class="main-panel">
                        <div class="main-content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="col-md-12">
                                            <p><input class="flatpickr" type="hidden" data-inline=true/></p>
                                        </div>
                                    </div>
                                    <div class="col-md-8 btncalender">
                                        <div id='calendar'></div>
                                        <div class="modal fade" id="fullcalpopup" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Event Description</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="container-fluid">
                                                            <div class="form-group row">
                                                                <div class="col-md-4" style="float:left;"><label><b>Title
                                                                            :</b></label></div>
                                                                <div class="col-md-2" style="float:left;"></div>
                                                                <div class="col-md-6" style="float:left;"><label id="title"></label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-6" style="float:left;"><label><b>Start Time :</b></label>
                                                                </div>
                                                                <div class="col-md-6" style="float:left;"><label id="stime"></label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-6" style="float:left;"><label><b>End Time
                                                                            :</b></label></div>
                                                                <div class="col-md-6" style="float:left;"><label id="etime"></label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-6" style="float:left;"><label><b>Service Name
                                                                            :</b></label></div>
                                                                <div class="col-md-6" style="float:left;"><label id="sname"></label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-6" style="float:left;"><label><b>Notes
                                                                            :</b></label></div>
                                                                <div class="col-md-6" style="float:left;"><label id="notes"></label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-6" style="float:left;"><label><b>Status
                                                                            :</b></label></div>
                                                                <div class="col-md-6" style="float:left;"><label
                                                                            id="statustext"></label></div>
                                                            </div>
                                                            <div class="form-group col-md-6 text-right">
                                                                <button id="confirmbooking" class="btn btn-primary"
                                                                        data-dismiss="modal">Confirm Booking
                                                                </button>
                                                            </div>
                                                            <div class="form-group col-md-6 text-right">
                                                                <button id="deletebooking" class="btn btn-primary"
                                                                        data-dismiss="modal">Delete Booking
                                                                </button>
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
            </div>
        </div>
        <!-- /.container-fluid-->
    </div>
    <!-- /.container-wrapper-->

    <!-- Page level plugin JavaScript-->
    <link href='{{ URL::asset('vendor/india/styles/css/bootstrap-datepicker.css') }}' rel='stylesheet' media='print' />
    <link href='{{ URL::asset('vendor/india/scripts/fullcalendar.min.css') }}' rel='stylesheet' />
    <link href='{{ URL::asset('vendor/india/scripts/fullcalendar.print.min.css') }}' rel='stylesheet' media='print' />
    <link href="{{ URL::asset('vendor/india/styles/css/flatpickr.min.css') }}" rel="stylesheet">

    <script src="{{ URL::asset('vendor/india/scripts/moment.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.3.2/flatpickr.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.3.2/plugins/confirmDate/confirmDate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.3.2/plugins/weekSelect/weekSelect.js"></script>
    <script src="{{ URL::asset('vendor/india/scripts/js/bootstrap-multiselect.js') }}"></script>
    <script src='{{ URL::asset('vendor/india/scripts/js/bootstrap-datepicker.js') }}'></script>
    <script src='{{ URL::asset('vendor/india/scripts/js/bootstrap-clockpicker.js') }}'></script>
    <script src="{{ URL::asset('vendor/findoctor_v.1.5/admin_section/vendor/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ URL::asset('vendor/findoctor_v.1.5/admin_section/vendor/datatables/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ URL::asset('vendor/findoctor_v.1.5/admin_section/vendor/jquery.selectbox-0.2.js') }}"></script>
    <script src="{{ URL::asset('vendor/findoctor_v.1.5/admin_section/vendor/retina-replace.min.js') }}"></script>
    <script src="{{ URL::asset('vendor/findoctor_v.1.5/admin_section/vendor/jquery.magnific-popup.min.js') }}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ URL::asset('vendor/findoctor_v.1.5/admin_section/js/admin.js') }}"></script>
    <script src="{{ URL::asset('js/schedule.js') }}"></script>
    <script src='{{ URL::asset('vendor/india/scripts/fullcalendar.min.js') }}'></script>
@stop
