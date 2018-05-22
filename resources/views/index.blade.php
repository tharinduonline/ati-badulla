<!doctype html>
<html class="no-js" lang="">
@section('title', 'Home')
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
        <!-- Slider 1 Area Start Here -->
        <div class="slider1-area overlay-default">
            <div class="bend niceties preview-1">
                <div id="ensign-nivoslider-3" class="slides">
                    <img src="img/slider/2-1.jpg" alt="slider" title="#slider-direction-1" />
                    <img src="img/slider/2-2.jpg" alt="slider" title="#slider-direction-2" />
                    <img src="img/slider/1-2.jpg" alt="slider" title="#slider-direction-3" />
                </div>
                <div id="slider-direction-1" class="t-cn slider-direction">
                    <div class="slider-content s-tb slide-1">
                        <div class="title-container s-tb-c">
                            <div class="title1">Welcome To SLIATE - Badulla</div>
                            <p>(SLIATE) is one of the leading government institutions in Higher education sector in Sri Lanka</p>
                            <div class="slider-btn-area">
                                <a href="#" class="default-big-btn">Apply Course</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="slider-direction-2" class="t-cn slider-direction">
                    <div class="slider-content s-tb slide-2">
                        <div class="title-container s-tb-c">
                            <div class="title1">Best Education For HTML Template</div>
                            <p>Emply dummy text of the printing and typesetting industry orem Ipsum has been the industry's standard
                                <br>dummy text ever sinceprinting and typesetting industry. </p>
                            <div class="slider-btn-area">
                                <a href="#" class="default-big-btn">Start a Course</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="slider-direction-3" class="t-cn slider-direction">
                    <div class="slider-content s-tb slide-3">
                        <div class="title-container s-tb-c">
                            <div class="title1">Best Education Into PHP</div>
                            <p>Emply dummy text of the printing and typesetting industry orem Ipsum has been the industry's standard
                                <br>dummy text ever sinceprinting and typesetting industry. </p>
                            <div class="slider-btn-area">
                                <a href="#" class="default-big-btn">Start a Course</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider 1 Area End Here -->
        <!-- About 2 Area Start Here -->
        <div class="about2-area">
            <div class="container">
                <h1 class="about-title">Welcome To SLIATE - Badulla</h1>
                <p class="about-sub-title">(SLIATE) is one of the leading government institutions in higher education sector in Sri Lanka which has been established by the parliament act no 29 of 1995, and coming under the purview of the Ministry of Higher Education and Highways.

There are 19 Advanced Technological Institutes operated by SLIATE island wide having conducted a broad range of multi-disciplinary programs targeting at A/L qualified students in Sri Lanka.</p>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="2s" data-wow-delay=".1s">
                        <div class="service-box2">
                            <div class="service-box-icon">
                                <a href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i></a>
                            </div>
                            <h3><a href="#">Our Vision</a></h3>
                            <p>"To Become the Centre of Excellence in Technological Education"</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="2s" data-wow-delay=".4s">
                        <div class="service-box2">
                            <div class="service-box-icon">
                                <a href="#"><i class="fa fa-user" aria-hidden="true"></i></a>
                            </div>
                            <h3><a href="#">Our Mission</a></h3>
                            <p>"Creating Excellent Higher National and National Diplomates with Modern Technology for Sustainable Development"</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- About 2 Area End Here -->
        <!-- Featured Area Start Here -->
        <div class="featured-area bg-common-style" style="background-image: url('img/featured/back.jpg');">
            <div class="container">
                <h2 class="title-default-textPrimary-left">Our Courses</h2>
            </div>
            <div class="container">
                <div class="row featured-wrapper" id="gallery-wrapper">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="featured-box">
                            <div class="featured-img-holder hvr-bounce-to-right">
                                <img src="img/featured/1.jpg" class="img-responsive" alt="featured">
                                <a href="img/featured/1.jpg" class="zoom"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                            </div>
                            <div class="featured-content-holder">
                                <h3><a href="#">Information Technology</a></h3>
                                <p>Higher National Diploma in Information Technology</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="featured-box">
                            <div class="featured-img-holder hvr-bounce-to-right">
                                <img src="img/featured/2.jpg" class="img-responsive" alt="featured">
                                <a href="img/featured/2.jpg" class="zoom"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                            </div>
                            <div class="featured-content-holder">
                                <h3><a href="#">Accountancy</a></h3>
                                <p>Higher National Diploma in Accountancy</p>
                            </div>
                        </div>
                        <div class="featured-box">
                            <div class="featured-img-holder hvr-bounce-to-right">
                                <img src="img/featured/3.jpg" class="img-responsive" alt="featured">
                                <a href="img/featured/3.jpg" class="zoom"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                            </div>
                            <div class="featured-content-holder">
                                <h3><a href="#">English</a></h3>
                                <p>Higher National Diploma in English</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="featured-box">
                            <div class="featured-img-holder hvr-bounce-to-right">
                                <img src="img/featured/4.jpg" class="img-responsive" alt="featured">
                                <a href="img/featured/4.jpg" class="zoom"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                            </div>
                            <div class="featured-content-holder">
                                <h3><a href="#">Management</a></h3>
                                <p>Higher National Diploma in Management</p>
                            </div>
                        </div>
                        <div class="featured-box">
                            <div class="featured-img-holder hvr-bounce-to-right">
                                <img src="img/featured/5.jpg" class="img-responsive" alt="featured">
                                <a href="img/featured/5.jpg" class="zoom"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                            </div>
                            <div class="featured-content-holder">
                                <h3><a href="#">Tourism and Hospitality Management</a></h3>
                                <p>Higher National Diploma in Tourism and Hospitality Management</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Featured Area End Here -->
       
       
        <!-- News and Event Area Start Here -->
        <div class="news-event-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 news-inner-area">
                        <h2 class="title-default-left">Latest News</h2>
                        <ul class="news-wrapper">
                            <li>
                                <div class="news-img-holder">
                                    <a href="#"><img src="{{ $first_post->featured }}" alt="{{ $first_post->title }}" class="img-responsive" alt="news" width="150"></a>
                                </div>
                                <div class="news-content-holder">
                                    <h3><a href="{{ route('post.single', ['slug' => $first_post->slug ]) }}">{{ $first_post->title }}</a></h3>
                                    <div class="post-date"> {{ $first_post->created_at->toFormattedDateString() }}</div>

                                </div>
                            </li>
                          
                        </ul>
                        <div class="news-btn-holder">
                            <a href="#" class="view-all-accent-btn">View All</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 event-inner-area">
                        <h2 class="title-default-left">Upcoming Events</h2>
                        <ul class="event-wrapper">
                            <li class="wow bounceInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                <div class="event-calender-wrapper">
                                    <div class="event-calender-holder">
                                        <h3>26</h3>
                                        <p>Jan</p>
                                        <span>{{ $first_event->start_date }}</span>
                                    </div>
                                </div>
                                <div class="event-content-holder">
                                    <h3><a href="{{ route('event.single', ['slug' => $first_event->slug ]) }}">{{ $first_event->title }}</a></h3>
                                  
                                    <ul>
                                        <li>{{ $first_event->address }}</li>
                                    </ul>
                                </div>
                            </li>
                         
                        </ul>
                        <div class="event-btn-holder">
                            <a href="#" class="view-all-primary-btn">View All</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- News and Event Area End Here -->
        <!-- Video Area Start Here -->

        <div class="video-area overlay-video bg-common-style" style="background-image: url('img/banner/1.jpg');">
            <div class="container">
                <div class="video-content">
                    <h2 class="video-title">Watch Campus Life Video Tour</h2>
                    <p class="video-sub-title">Vmply dummy text of the printing and typesetting industryorem
                        <br>Ipsum industry's standard dum an unknowramble.</p>
                    <a class="play-btn popup-youtube wow bounceInUp" data-wow-duration="2s" data-wow-delay=".1s" href="http://www.youtube.com/watch?v=1iIZeIy7TqM"><i class="fa fa-play" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <!-- Video Area End Here -->
       
        <!-- Students Join 2 Area Start Here -->
        <div class="students-join2-area">
            <div class="container">
                <div class="students-join2-wrapper">
                    <div class="students-join2-left">
                        <div id="ri-grid" class="author-banner-bg ri-grid header text-center">
                            <ul class="ri-grid-list">
                                <li>
                                    <a href="#"><img src="img/students/student1.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student2.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student3.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student4.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student5.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student6.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student7.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student8.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student1.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student2.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student3.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student4.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student5.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student6.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student7.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student8.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student1.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student2.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student3.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student4.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student5.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student6.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student7.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student8.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student1.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student2.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student3.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student4.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student5.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student6.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student7.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/students/student8.jpg" alt=""></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="students-join2-right">
                        <div>
                            <h2>Join<span> 29,12,093</span> Students.</h2>
                            <a href="#" class="join-now-primary-btn">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Students Join 2 Area End Here -->
        <!-- Footer Area Start Here -->
   @include('pages.includes.footer')
</body>


</html>
