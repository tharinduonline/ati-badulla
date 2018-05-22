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
    <!-- <div id="preloader"></div> -->
    <!-- Preloader End Here -->
    <!-- Main Body Area Start Here -->
    <div id="wrapper">
        <!-- Header Area Start Here -->
      @include('pages.includes.header')
        <!-- Header Area End Here -->
<div class="inner-page-banner-area" style="background-image: url('{{ $post->featured }}');">
            <div class="container">
                <div class="pagination-area">
                    <h1>{{ $post->title }}</h1>
                    <ul>
                        <li><a href="#">News</a> -</li>
                        <li>{{ $post->title }}</li>
                    </ul>
                </div>
            </div>
        </div>


<div class="event-details-page-area">
            <div class="container">
                <div class="row">
                   <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                        <div class="row news-details-page-inner">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="news-img-holder">
                                    <img src="{{ $post->featured }}" class="img-responsive" alt="{{ $post->title }}">
                                    <ul class="news-date1">
                                        <li>27 Dec</li>
                                        <li>2016</li>
                                    </ul>
                                </div>
                                <h2 class="title-default-left-bold-lowhight"><a href="#">{{ $post->title }}</a></h2>
                          
                                 {!! $post->content !!}
                                <ul class="news-social">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                </ul>
                                
                                <div class="leave-comments">
                                    <h3 class="sidebar-title">Leave A Comment</h3>
                                    <div class="row">
                                        <div class="contact-form">
                                             @include('includes.disqus')
                                        </div>
                                    </div>
                                </div>
                            </div>
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
