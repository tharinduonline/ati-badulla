@extends('layouts.front')
@section('title', 'Event')
@section('class5', 'active')
@section('content')

 <!-- inner page banner -->
<div class="page-banner ovbl-dark" style="background-image:url({{ $event->featured }});">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white">{{ $event->title }}</h1>
        </div>
    </div>
</div>
<!-- Breadcrumb row -->
<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="/">Home</a></li>
            <li>Event</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb row END -->
<div class="content-block">
    <div class="section-area section-sp1">
        <div class="container">
            <div class="row">
                <!-- Left part start -->
                <div class="col-lg-8 col-xl-8">
                    <!-- blog start -->
                    <div class="recent-news blog-lg">
                        <div class="action-box blog-lg">
                            <img src="{{ $event->featured }}" alt="{{ $event->title }}">
                        </div>
                        <div class="info-bx">
                            <ul class="media-post">                          
                                            <li><i class="fa fa-calendar" aria-hidden="true"></i>{{ $event->start_date->format('y/m/d') }}</li>
                                            <li><i class="fa fa-map-marker" aria-hidden="true"></i>{{ $event->address }}</li>                                    
                            </ul>
                            <h5 class="post-title"><a href="#">{{ $event->title }}</a></h5>

                            {!! $event->description !!}

                            <div class="ttr-divider bg-gray"><i class="icon-dot c-square"></i></div>
                            
                            
                            
                            <div class="ttr-divider bg-gray"><i class="icon-dot c-square"></i></div>
                                <h6>SHARE </h6>
                                <ul class="list-inline contact-social-bx">
                                    <li><a href="#" class="btn outline radius-xl"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="btn outline radius-xl"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="btn outline radius-xl"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#" class="btn outline radius-xl"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            <div class="ttr-divider bg-gray"><i class="icon-dot c-square"></i></div>
                        </div>
                    </div>
      
                    <!-- blog END -->
                </div>
                <!-- Left part END -->
                <!-- Side bar start -->
                @include('pages.includes.rightside')
                <!-- Side bar END -->
            </div>
        </div>
    </div>
</div>
@stop