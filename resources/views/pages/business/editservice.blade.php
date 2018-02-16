@extends('layouts.business.default')
@section('content')
    <div class="app layout-fixed-header">
        <div class="container">
            <h3 class="businesscontent">Edit Your Service</h3>
        </div>
        <div class="container">
            <div id="displayErrors"></div>
            <form id="serviceEditForm">
                <div class="row backrow">
                    <div class="row form-group">
                        <div class="row cates1">
                            <div class="row">

                                <div class="col-md-12">
                                    <label>Service Number:</label>
                                    <select name = "serviceId" title="Service Number"><option>{{ $data->id }}</option></select>
                                    <div class="col-md-12 form-group">
                                        <label>Service Category</label>
                                        <select name="category" class="form-group" style="width: 100%;" title="Service Category">
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
                                    <div class="col-md-12 form-group">
                                        <label>Service Name</label>
                                        <input name="name" type="text" class="form-control"  title="Service Name" value = "{{ $data->name }}" />
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Price</label>
                                        <input name="price" type="number" class="form-control" title="Price" value = "{{ $data->price }}" />
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Price Hourly</label>
                                        <input name="priceHourly" type="number" class="form-control" title="Price Hourly" value = "{{ $data->price_hourly }}" />
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label>Description</label>
                                        <textarea name="desc" class="form-control" style="height: 119px;" title="Description">{{ $data->description }}</textarea>
                                    </div>
                                </div>
                                <!--<div class="col-md-12 businesshour"><h5>Business Hours <a href="#" data-toggle="modal" data-target="#servicesTime"><i class="fa fa-plus" aria-hidden="true"></i></a></h5></div>
                                <div class="col-md-12 businessc">
                                    <div class="col-md-6 text-left businessweek"><h4>None</h4></div>
                                    <div class="col-md-6 text-right businessweekleft"><h4>Please reconfirm your business hours.</h4></div>
                                </div>
                                <input id="hoursInput" type="hidden" name="businessHour" />-->
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <a id="servicesEdit" href="/business/myservices/edit/do" class="btn btn-primary btnstyle">UPDATE SERVICE</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="{{ URL::asset('js/editservice.js') }}"></script>
    @include('modals.servicestime')
@stop
