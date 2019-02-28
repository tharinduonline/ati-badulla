@extends('layouts.front')
@section('title', 'News')
@section('class3', 'active')
@section('content')

 <!-- inner page banner -->
<div class="page-banner ovbl-dark" style="background-image:url({{ $post->featured }});">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white">{{ $post->title }}</h1>
        </div>
    </div>
</div>
<!-- Breadcrumb row -->
<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="/">Home</a></li>
            <li>News</li>
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
                            <img src="{{ $post->featured }}" alt="{{ $post->title }}">
                        </div>
                        <div class="info-bx">
                            <ul class="media-post">
                                <li><a href="#"><i class="fa fa-calendar"></i>{{ $post->created_at->toFormattedDateString() }}</a></li>
                            </ul>
                            <h5 class="post-title"><a href="#">{{ $post->title }}</a></h5>

                            {!! $post->content !!}

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