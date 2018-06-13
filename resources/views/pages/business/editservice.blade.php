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
                <li class="breadcrumb-item active">Edit A Service</li>
            </ol>
            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2>Edit A Service</h2>
                </div>
                <div id="displayErrors"></div>
                <form id="serviceEditForm">
                    <div class="form-group">
                        <label>Service Category</label>
                        <select name="category" class="form-control" style="width: 100%;" title="Service Category">
                            <option value="{{ $data->category }}">{{ $data->category }}</option>
                            <option value="Finance & Legal Services">Finance & Legal Services</option>
                            <option value="Beauty">Beauty</option>
                            <option value="Medical & Science">Medical & Science</option>
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
                        <input name="name" type="text" class="form-control"  title="Service Name" value = "{{ $data->name }}" />
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label>Price</label>
                            <input name="price" type="number" class="form-control" title="Price" value = "{{ $data->price }}" />
                        </div>
                        <div class="col-md-6">
                            <label>Price Hourly</label>
                            <input name="priceHourly" type="number" class="form-control" title="Price Hourly" value = "{{ $data->price_hourly }}"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="desc" class="form-control" style="height: 119px;" title="Description">{{ $data->description }}</textarea>
                    </div>
                    <!--<div class="col-md-12 businesshour"><h5>Business Hours <a href="#" data-toggle="modal" data-target="#servicesTime"><i class="fa fa-plus" aria-hidden="true"></i></a></h5></div>
                    <div class="col-md-12 businessc">
                        <div class="col-md-6 text-left businessweek"><h4>None</h4></div>
                        <div class="col-md-6 text-right businessweekleft"><h4>Please reconfirm your business hours.</h4></div>
                    </div>
                    <input id="hoursInput" type="hidden" name="businessHour" />-->
                    <input name="serviceId" type="hidden" value="{{ $data->id }}" />
                </form>
            </div>

            <a id="servicesEdit" href="/business/myservices/edit/do" class="btn_1 medium">Save</a>
        </div>
    </div>

    <script src="{{ URL::asset('js/editservice.js') }}"></script>
    @include('modals.servicestime')
@stop
