	<!-- Header Top ==== -->
    <header class="header rs-nav">
		<div class="top-bar">
			<div class="container">
				<div class="row d-flex justify-content-between">
					<div class="topbar-left">
						<ul>
								<li><i class="fa fa-phone"></i> &nbsp  +94 55 2 223818 </li>
							<li><a href="javascript:;"><i class="fa fa-envelope-o"></i>director@atibadulla.edu.lk</a></li>
						</ul>
					</div>
					<div class="topbar-right">
						<ul>
							<li><a href="/login">Lecture Login</a></li>
							<li><a href="http://lms.sliate.ac.lk/login/index.php">LMS Login</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="sticky-header navbar-expand-lg">
            <div class="menu-bar clearfix">
                <div class="container clearfix">
					<!-- Header Logo ==== -->
					<div class="menu-logo">
						<a href="/"><img src="{{ asset('/assets/images/logo.png') }}" alt=""></a>
					</div>
					<!-- Mobile Nav Button ==== -->
                    <button class="navbar-toggler collapsed menuicon justify-content-end" type="button" data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
					<!-- Author Nav ==== -->
                    <div class="secondary-menu">
                        <div class="secondary-inner">
                            <ul>
								<li><a href="javascript:;" class="btn-link"><i class="fa fa-facebook"></i></a></li>
				
								<!-- Search Button ==== -->
								<li class="search-btn"><button id="quik-search-btn" type="button" class="btn-link"><i class="fa fa-search"></i></button></li>
							</ul>
						</div>
                    </div>
					<!-- Search Box ==== -->
                    <div class="nav-search-bar">
                        <form action="#">
                            <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                            <span><i class="ti-search"></i></span>
                        </form>
						<span id="search-remove"><i class="ti-close"></i></span>
                    </div>
					<!-- Navigation Menu ==== -->
                    <div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown">
						<div class="menu-logo">
						<a href="/"><img src="{{ asset('/assets/images/logo.png') }}" alt=""></a>
						</div>
                        <ul class="nav navbar-nav">	
                            <li class="@yield('class1')"><a href="/">Home</a>
                            <li class="@yield('class2')"><a href="/about">About</a>
				
							</li>
							<li><a href="javascript:;">Courses <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">	
									<li><a href="/information-technology">Information Technology</a></li>
									<li><a href="/accountancy">Accountancy</a></li>
									<li><a href="/management">Management</a></li>
                                    <li><a href="/tourism-and-hospitality-management">Tourism and Hospitality Management</a></li>
                                    <li><a href="/english">English</a></li>
								</ul>
							</li>
						<!--	<li class="add-mega-menu"><a href="javascript:;">Life @ SLIATE <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu add-menu">
									<li class="add-menu-left">
										<h5 class="menu-adv-title">Life @ SLIATE</h5>
										<ul>
											<li><a href="/canteens">Canteens </a></li>
											<li><a href="/sports-and-games">Sports And Games</a></li>
											<li><a href="/other-facilities">Other Facilities</a></li>
										</ul>
									</li>
									<li class="add-menu-right">
									<img src="{{ asset('assets/images/adv/adv.jpg') }}" alt=""/>
									</li>
								</ul>
							</li> -->
							<li class="@yield('class3')"><a href="/news">News</a>
						<!--	<li class="@yield('class4')"><a href="/downloads">Downloads</a> -->
                            <li class="@yield('class5')"><a href="/events">Events</a>
                            <li class="@yield('class6')"><a href="/gallery">Gallery</a>
                                <li class="@yield('class7')"><a href="/contact-us">contact Us</a>
						</ul>
						<div class="nav-social-link">
							<a href="javascript:;"><i class="fa fa-facebook"></i></a>
							<a href="javascript:;"><i class="fa fa-google-plus"></i></a>
							<a href="javascript:;"><i class="fa fa-linkedin"></i></a>
						</div>
                    </div>
					<!-- Navigation Menu END ==== -->
                </div>
            </div>
        </div>
    </header>
    <!-- Header Top END ==== -->