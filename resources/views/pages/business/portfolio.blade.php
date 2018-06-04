@extends('layouts.business.default')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Portfolio</li>
            </ol>
            <div class="col-md-12" style="text-align: center;">
                <button type="button" class="btn_1 medium" data-toggle="modal" data-target="#myModal">Add</button>
            </div>
            <div class="box_general">
                <div class="header_box">
                    <h2>Portfolio List</h2>
                </div>
                @if(count($data) == 0)
                    <div style="text-align: center;">You do not have any pictures yet.</div>
                @else
                    <div class="list_general">
                        <ul>
                            @foreach($data as $value)
                                <li>
                                    <figure>
                                        <form action="/business/portfolio/delete" style="height:100%" method="POST">
                                            <input type="hidden" name="id" value="{{ $value->image_id}}" />
                                            <button type="submit" class="btn_1 gray delete" style="height:100%">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                            </button>
                                        </form>
                                    </figure>
                                    <h4> Service : {{ $value->services_id }} </h4>
                                    <div class="row">
                                        <div class="col-md-8">
                                            @if ($value->name)
                                                <img class="img-fluid" src="{{ URL::asset($value->name) }}">
                                            @elseif ($value->url)
                                                <div class="embed-responsive embed-responsive-16by9">
                                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $value->url }}" frameborder="0" allow="encrypted-media" allowfullscreen></iframe>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <script src="{{ URL::asset('js/portfolio.js') }}"></script>

    @include('modals.addportfolio')
@stop


