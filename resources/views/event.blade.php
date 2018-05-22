<!doctype html>
<html class="no-js" lang="">

@section('title', 'Event')

   @include('pages.includes.head')
<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Add your site or application content here -->
    <!-- Preloader Start Here -->
    <!--<div id="preloader"></div> -->
    <!-- Preloader End Here -->
    <!-- Main Body Area Start Here -->
    <div id="wrapper">
        <!-- Header Area Start Here -->
      @include('pages.includes.header')
        <!-- Header Area End Here -->
<div class="inner-page-banner-area" style="background-image: url('{{ $event->featured }}');">
            <div class="container">
                <div class="pagination-area">
                    <h1>{{ $event->title }}</h1>
                    <ul>
                        <li><a href="#">Home</a> -</li>
                        <li>Event</li>
                    </ul>
                </div>
            </div>
        </div>


<div class="event-details-page-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                        <div class="event-details-inner">
                            <div class="event-details-img">
                                <div class="countdown-content">
                                    <div id="countdown"><div class="countdown-section"><h3>00</h3> <p>Day</p> </div><div class="countdown-section"><h3>00</h3> <p>Hour</p> </div><div class="countdown-section"><h3>00</h3> <p>Minute</p> </div><div class="countdown-section"><h3>00</h3> <p>Second</p> </div></div>
                                </div>
                                <a href="#"><img src="{{ $event->featured }}" alt="event" class="img-responsive"></a>
                            </div>
                            <h2 class="title-default-left-bold-lowhight"><a href="#">{{ $event->title }}</a></h2>
                            <ul class="event-info-inline title-bar-sm-high">
                                <li><i class="fa fa-calendar" aria-hidden="true"></i>{{ $event->start_date }}</li>
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i>{{ $event->address }}</li>
                            </ul>
                             {!! $event->description !!}

                        </div>
                    </div>
                   @include('pages.includes.rightside')
                </div>
            </div>
        </div>



    </div>

        <!-- Students Join 2 Area End Here -->
        <!-- Footer Area Start Here -->
   @include('pages.includes.footer')
</body>


</html>
