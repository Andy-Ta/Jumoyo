@extends('layouts.business.default')

@section('content')
    <div class="main-content" style="margin-left: 15%;">
        <div class="container-fluid">
            <div class="col-md-12" style="text-align: center;">
                <button type="button" class="btn btn-info btnstyle" data-toggle="modal" data-target="#myModal">Add</button>
            </div>
            <div class="row">
                @if(count($data) == 0)
                    <div style="text-align: center;">You do not have any pictures yet.</div>
                @endif
                @foreach($data as $value)
                    <div class="col-md-4 portfolio-main">
                        <div class="portfolio-box">
                            <div class="portfolio-image">
                                @if ($value->name)
                                    <img src="{{ URL::asset($value->name) }}">
                                @elseif ($value->url)
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $value->url }}"
                                            frameborder="0" allow="encrypted-media" allowfullscreen></iframe>
                                @endif
                            </div>
                            <h4> {{ $value->services_id }} </h4>
                            <form action="/business/portfolio/delete" method="POST">
                                <input type="hidden" name="id" value="{{ $value->image_id}}" />
                                <button type="submit" class="portfolio-delete">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <script src="{{ URL::asset('js/portfolio.js') }}"></script>

    @include('modals.addportfolio')
@stop


