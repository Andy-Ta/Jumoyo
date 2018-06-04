@extends('layouts.business.default')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Posts</li>
            </ol>
            <div class="box_general">
                <div>
                    <a href="" data-toggle="modal" data-target="#myModal">
                        <div class="widget bg-white" style="background-color: white;"><h3>Add Something....</h3></div>
                    </a>
                </div>
                <div class="list_general">
                    @if(count($data) == 0)
                        <div>You have no posts yet.</div>
                    @endif
                    <ul>
                        @foreach ($data as $value)
                            <li>
                                <span class="post-time" data-moment-format="YYYY-MM-DD H:mm"
                                      data-post-time="{{ $value->date_time }}"></span>
                                <br>
                                @if(session()->get('image') !== null)
                                    <figure><img src="{{ URL::asset($service->image_url) }}" alt=""></figure>
                                @else
                                    <figure><img src="{{URL::asset('/img/review-icon.png')}}" alt=""></figure>
                                @endif
                                <a href="" class="editBtn read" data-toggle="modal" data-target="#myEditModal"
                                   data-serviceId="{{ $value->services_id }}" data-title="{{ $value->title }}"
                                   data-text="{{ $value->text }}" data-id="{{ $value->posts_id }}">Edit</a>
                                <a class="unread" href="/business/post/delete/{{ $value->posts_id }}">Delete</a><br>
                                <h4>{{ $value->title }}</h4>
                                <p>{{ $value->text }}<br><br>
                                    @if ($value->url != null)
                                        <iframe width="560" height="315"
                                                src="https://www.youtube.com/embed/{{ $value->url }}"
                                                frameborder="0" allow="encrypted-media" allowfullscreen></iframe>
                                    @endif</p>
                                @if ($value->image != null)
                                    <div><img src="../../{{ $value->image }}"></div>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ URL::asset('js/post.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ URL::asset('vendor/india/scripts/moment.min.js') }}"></script>

    <!-- POST MODAL -->
    @include('modals.post')
    @include('modals.editpost')
@stop