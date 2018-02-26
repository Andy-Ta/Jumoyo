@extends('layouts.business.default')

@section('content')
<style>
    body {
        background-color: #EBEDF2;
    }
</style>
<div class="layout-fixed-header" style="background-color: #EBEDF2;">
    <div class="main-panel">
        <div class="main-content">
            <div class="container-fluid-post">
                <div class="col-md-12 text-right">
                    <a href="" data-toggle="modal" data-target="#myModal"><div class="widget bg-white" style="background-color: white;"><h3>Add Something....</h3></div></a>
                </div>
                <div class="col-md-12">
                    @if(count($data) == 0)
                        <div style="text-align: center;">You have no posts yet.</div>
                    @endif
                    @foreach ($data as $value)
                    <div class="widget bg-white post" style="background-color: white;">
                        <span class="widget-title" id="postTitle">{{ $value->title }}</span>
                        <p id="serviceName">{{ $value->name }}</p>
                        <p>{{ $value->text }} <br><br>

                            @if ($value->url != null)
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $value->url }}"
                                    frameborder="0" allow="encrypted-media" allowfullscreen></iframe>
                            @endif
                        </p>

                        @if ($value->image != null)
                        <div><img src="../../{{ $value->image }}"></div>
                        @endif

                        <div class="post-icons">
                            <!--<a href="javascript:void(0)"><i class="fa fa-thumbs-o-up"></i></a>
                            <a href="javascript:void(0)"><i class="fa fa-share"></i></a>-->
                            <a data-toggle="dropdown" id="post-menu"><i class="fa fa-bars"></i></a>
                            <ul id="drop-post" class="dropdown-menu">
                                <li><a class="editBtn" data-toggle="modal" data-target="#myEditModal"
                                       data-serviceId="{{ $value->services_id }}" data-title="{{ $value->title }}"
                                       data-text="{{ $value->text }}" data-id="{{ $value->posts_id }}">Edit</a></li>
                                <li><a href="/business/post/delete/{{ $value->posts_id }}">Delete</a></li>
                            </ul>
                        </div>
                        <!--
                        TO-DO FOR FUTURE TASK

                        <div class="post-user">
                            <div class="post-user-icon">
                                <img src="images/face4.cea90747.jpg">
                            </div>
                            <span> User /  Reviewer Name</span>
                        </div>
                            -->
                    </div>
                    @endforeach
                </div>
                <!--
                <div class="col-md-3">
                    <div class="widget bg-white notification">
                        <div class="overflow-hidden ">
                            <span class="widget-title notifications-title">Notifications</span>
                            <div class="unread-not">
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.
                            </div>
                            <div class="read-not">
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.
                            </div>
                        </div>
                    </div>
                </div>
                -->
            </div>
        </div>
    </div>
</div>

<script src="{{ URL::asset('js/post.js') }}" type="text/javascript"></script>

<!-- POST MODAL -->
@include('modals.post')
@include('modals.editpost')

@stop