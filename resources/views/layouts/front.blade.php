<!DOCTYPE html>
<html lang="en">
<head>
	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="badulla,ati,ati badulla,badulla ati,sliate - badulla,ati naiwala,ati dehiwala,ati kurunegala,ati tangalle campus,ati gampaha,sliate,badulla (city/town/village),naiwala ati,gampaha ati,ati-badulla,sinhala,srilanka,sarvodaya,adaderana,hnd,aftermovie,naiwala,hnda,ati-kurunegala,naiwala tec,tilani,balaya,ada,after a/l exam,naiwala hndti,mangalam,hanthana,aippsoagd,sliate dehiwala,higher nation diploma,higher national diplomas hnd,silva,hndit,sliate,sliate anthem,sliate song,sliate exam,sliate hnde,hndit,sliate badulla,sliate sri lanka,sliate tamil song,sliate exam sinhala,sliate exam regiter,sliate tamil anthem,ati,sliate anthem sinhala,sri lanka,sri lanka (country),kandysliate,hnde,sliate-kurunegala,share,vikata,sinhala,after a/l,ati anthem,subscribe,hnda,hnd anthem,institute,hndba,student union,hndthm,sinhala drama,student unity" />
	<meta name="robots" content="" />	
	<!-- DESCRIPTION -->
    <meta name="description" content="Advanced Technological Institute - Badulla" />
    	
	<!-- OG -->
	<meta property="og:title" content="ATI Badulla" />
	<meta property="og:description" content="Advanced Technological Institute - Badulla" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.png" />
	
	<!-- PAGE TITLE HERE ============================================= -->
	<title>ATI Badulla | @yield('title') </title>
	
	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	
	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/assets.css') }}">
	
	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/typography.css') }}">
	
	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/shortcodes/shortcodes.css') }}">
	
	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/style.css') }}">
	<link class="skin" rel="stylesheet" type="text/css" href="{{ asset('/assets/css/color/color-1.css') }}">
	
	<!-- REVOLUTION SLIDER CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{ asset('/assets/vendors/revolution/css/layers.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/assets/vendors/revolution/css/settings.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/assets/vendors/revolution/css/navigation.css') }}">
	<!-- REVOLUTION SLIDER END -->	
</head>


<body id="bg">
<div class="page-wraper">
<div id="loading-icon-bx"></div>
@include('pages.includes.header')

    <!-- Content -->
    <div class="page-content bg-white">
     
    @yield('content')
    </div>
    <!-- Content END-->
	<!-- Footer ==== -->
    <footer>
        <div class="footer-top">
			<div class="pt-exebar">
				<div class="container">
					<div class="d-flex align-items-stretch">
						<div class="pt-logo mr-auto">
						<a href="/"><img src="{{ asset('/img/logo-footer.png') }}" alt=""/></a>
						</div>
						<div class="pt-social-link">
							<ul class="list-inline m-a0">
								<li><a href="#" class="btn-link"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="btn-link"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#" class="btn-link"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
						<div class="pt-btn-join">
							<a href="#" class="btn ">Join Now</a>
						</div>
					</div>
				</div>
			</div>
            <div class="container">
                <div class="row">
					<div class="col-lg-4 col-md-12 col-sm-12 footer-col-4">
                        <div class="widget">
                            <h5 class="footer-title">Sri Lanka Institute of Advanced Technological Education</h5>
							
                        </div>
                    </div>

					<div class="col-12 col-lg-8 col-md-8 col-sm-12">
						<div class="row">
							<div class="col-5 col-lg-5 col-md-5 col-sm-5">
								<div class="widget footer_widget">
									<h5 class="footer-title">Quick Links</h5>
									<ul>
                                        <li>
                                            <ul>
                                                <li><a href="http://www.mohe.gov.lk/" target="_blank">Ministry of Higher Education</a></li>
                                                <li><a href="http://www.sliate.ac.lk/" target="_blank">www.gov.lk</a></li>
                                                <li><a href="http://lms.sliate.ac.lk/login/index.php" target="_blank">SLIATE LMS</a></li>
                                                <li><a href="#" target="_blank">Insitute LMS</a></li>
                                            </ul>
                                        </li>
                                
                                    </ul>
								</div>
							</div>
							<div class="col-6 col-lg-6 col-md-6 col-sm-6">
								<div class="widget footer_widget">
									<h5 class="footer-title">Get In Touch</h5>
									<ul>
                                        <li><i class="fa fa-phone"></i> &nbsp  +94 55 2 223818 </li>
                                        <li><i class="fa fa-envelope-o"></i> &nbsp director@atibadulla.edu.lk</li>
                                        <li><i class="fa fa-envelope-o"></i> &nbsp Uva Advanced Technological Institute,Green Lane Drive, Badulla</li>
                                    </ul>
								</div>
							</div>							
						</div>
                    </div>
                    
                    

                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">© ATI Badulla 2019 All Rights Reserved | Developed By <a href="http://programmer.lk/" target="_blank">Programmer.lk Sri lanka</a> | <i class="fa fa-question-circle"></i>&nbsp Last Updated : 27th February 2019</a> </div>
                </div>
            </div>
        </div>
    
    </footer>
    <!-- Footer END ==== -->
    <button class="back-to-top fa fa-chevron-up" ></button>
</div>

<!-- External JavaScripts -->
<script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('/assets/vendors/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('/assets/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/assets/vendors/bootstrap-select/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('/assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script>
<script src="{{ asset('/assets/vendors/magnific-popup/magnific-popup.js') }}"></script>
<script src="{{ asset('/assets/vendors/counter/waypoints-min.js') }}"></script>
<script src="{{ asset('/assets/vendors/counter/counterup.min.js') }}"></script>
<script src="{{ asset('/assets/vendors/imagesloaded/imagesloaded.js') }}"></script>
<script src="{{ asset('/assets/vendors/masonry/masonry.js') }}"></script>
<script src="{{ asset('/assets/vendors/masonry/filter.js') }}"></script>
<script src="{{ asset('/assets/vendors/owl-carousel/owl.carousel.js') }}"></script>
<script src="{{ asset('/assets/js/functions.js') }}"></script>
<script src="{{ asset('/assets/js/contact.js') }}"></script>

<!-- Revolution JavaScripts Files -->
<script src="{{ asset('/assets/vendors/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('/assets/vendors/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="{{ asset('/assets/vendors/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('/assets/vendors/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('/assets/vendors/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('/assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('/assets/vendors/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('/assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('/assets/vendors/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('/assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('/assets/vendors/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
<script>
jQuery(document).ready(function() {
	var ttrevapi;
	var tpj =jQuery;
	if(tpj("#rev_slider_486_1").revolution == undefined){
		revslider_showDoubleJqueryError("#rev_slider_486_1");
	}else{
		ttrevapi = tpj("#rev_slider_486_1").show().revolution({
			sliderType:"standard",
			jsFileLocation:"/assets/vendors/revolution/js/",
			sliderLayout:"fullwidth",
			dottedOverlay:"none",
			delay:9000,
			navigation: {
				keyboardNavigation:"on",
				keyboard_direction: "horizontal",
				mouseScrollNavigation:"off",
				mouseScrollReverse:"default",
				onHoverStop:"on",
				touch:{
					touchenabled:"on",
					swipe_threshold: 75,
					swipe_min_touches: 1,
					swipe_direction: "horizontal",
					drag_block_vertical: false
				}
				,
				arrows: {
					style: "uranus",
					enable: true,
					hide_onmobile: false,
					hide_onleave: false,
					tmp: '',
					left: {
						h_align: "left",
						v_align: "center",
						h_offset: 10,
						v_offset: 0
					},
					right: {
						h_align: "right",
						v_align: "center",
						h_offset: 10,
						v_offset: 0
					}
				},
				
			},
			viewPort: {
				enable:true,
				outof:"pause",
				visible_area:"80%",
				presize:false
			},
			responsiveLevels:[1240,1024,778,480],
			visibilityLevels:[1240,1024,778,480],
			gridwidth:[1240,1024,778,480],
			gridheight:[768,600,600,600],
			lazyType:"none",
			parallax: {
				type:"scroll",
				origo:"enterpoint",
				speed:400,
				levels:[5,10,15,20,25,30,35,40,45,50,46,47,48,49,50,55],
				type:"scroll",
			},
			shadow:0,
			spinner:"off",
			stopLoop:"off",
			stopAfterLoops:-1,
			stopAtSlide:-1,
			shuffle:"off",
			autoHeight:"off",
			hideThumbsOnMobile:"off",
			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			debugMode:false,
			fallbacks: {
				simplifyAll:"off",
				nextSlideOnWindowFocus:"off",
				disableFocusListener:false,
			}
		});
	}
});	
</script>
</body>

</html>
