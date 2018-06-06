@extends('layouts.business.default')
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/business/">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="/business/myservices/">My Services</a>
                </li>
                <li class="breadcrumb-item active">Add A Service</li>
            </ol>
            
            <div class="box_general padding-bottom">
                <div class="header_box version_2">
                    <h2>Add A Service</h2>
                </div>
                <div id="displayErrors"></div>
                <form id="servicesForm">
                    <div class="form-group">
                        <label>Service Category</label>
                        <select name="category" class="form-control" style="width: 100%;" title="Service Category">
                            <option value="Finance and Legal Services">Finance and Legal Services</option>
                            <option value="Beauty">Beauty</option>
                            <option value="Medical and Science">Medical and Science</option>
                            <option value="Security">Security</option>
                            <option value="Technologies">Technologies</option>
                            <option value="Events">Events</option>
                            <option value="Arts">Arts</option>
                            <option value="Home">Home</option>
                            <option value="Transports">Transports</option>
                            <option value="Communication">Communication</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Service Name</label>
                        <input name="name" type="text" class="form-control"  title="Service Name"/>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label>Price</label>
                            <input name="price" type="number" class="form-control" title="Price"/>
                        </div>
                        <div class="col-md-6">
                            <label>Price Hourly</label>
                            <input name="priceHourly" type="number" class="form-control" title="Price Hourly"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="desc" class="form-control" style="height: 119px;" title="Description"></textarea>
                    </div>
                    <div class="businesshour">
                        <h5>Business Hours <a href="#" data-toggle="modal" data-target="#servicesTime"><i class="fa fa-plus" aria-hidden="true"></i></a></h5>
                    </div>
                    <div id="businesshourslist">
                        <div class="row">
                            <div class="col-md-6 text-left businessweek">
                                <p>None</p>
                            </div>
                            <div class="col-md-6 text-right businessweekleft">
                                <p>Please add your business hours.</p>
                            </div>
                        </div>
                    </div>
                    <input id="hoursInput" type="hidden" name="businessHour" />
                </form>
            </div>
            
            <a id="servicesSubmit" href="/business/myservices" class="btn_1 medium">Save</a>
        </div>
    </div>

    <script src="{{ URL::asset('js/servicesBusiness.js') }}"></script>

    @include('modals.servicestime')
@stop
