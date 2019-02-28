@extends('layouts.front')
@section('title', 'Events')
@section('class5', 'active')
@section('content')

   <!-- inner page banner -->
<div class="page-banner ovbl-dark" style="background-image:url({{ asset('/assets/images/banner/banner3.jpg')}});">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white">Events</h1>
         </div>
    </div>
</div>

<!-- contact area -->
<div class="content-block">
    <!-- Portfolio  -->
    <div class="section-area section-sp1 gallery-bx">
        <div class="container">
            
            <div class="clearfix">
                <ul id="masonry" class="ttr-gallery-listing magnific-image row">

                        @foreach($events->reverse() as $t)
                    <li class="action-card col-lg-6 col-md-6 col-sm-12 happening">
                        <div class="event-bx m-b30">
                            <div class="action-box">
                                <img src="{{ $t->featured }}" alt="">
                            </div>
                            <div class="info-bx d-flex">
                                <div>
                                    <div class="event-time">
                                            <div class="event-date">{{ $t->start_date->format('d') }}</div>
                                            <div class="event-month">{{ $t->start_date->format('F') }}</div>
                                    </div>
                                </div>
                                <div class="event-info">
                                    <h4 class="event-title"><a href="{{ route('event.single', ['slug' => $t->slug ]) }}">Education Autumn Tour 2019</a></h4>
                                    <ul class="media-post">
                                            <li><a href="{{ route('event.single', ['slug' => $t->slug ]) }}"><i class="fa fa-map-marker"></i> {{ $t->address }}</a></li>
                                    </ul>
                                    <p>{!! str_limit($t->description, 100) !!}</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
            
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- contact area END -->
@stop