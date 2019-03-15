<?php $web_name = "Glorious Empire Tech | Home"  ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>{{$web_name}}</title>
	<link rel="stylesheet" href="{{asset('website/assets/lib/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('website/assets/lib/slick/slick.css')}}">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700%7CWork+Sans:400,500,600,700%7CPlayfair+Display:400,700">
	<link rel="stylesheet" href="{{asset('website/assets/lib/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('website/assets/css/main.css')}}">
</head>
<body>

	<header>
		<nav class="side-menu-container" id="mobile-menu">
			<ul class="mx-auto top-level clearfix">
                <li>
                    <a class="link-hover" href="{{route('index')}}">HOMEPAGE</a>
                </li>
                <li>
                    <a class="link-hover" href="{{route('aboutus.website')}}">ABOUT US</a>
                </li>
                <li>
                    <a class="link-hover" href="{{route('service.website')}}">SERVICES</a>
                </li>
                <li>
                    <a class="link-hover" href="{{route('team.website')}}">TEAM</a>
                </li>
                <li>
                    <a class="link-hover" href="{{route('portfolio.website')}}">PORTFOLIO</a>
                </li>
                <li>
                    <a class="link-hover" href="{{route('careers.website')}}">CAREERS</a>
                </li>
                <li>
                    <a class="link-hover" href="{{route('partner.website')}}">PARTNERS</a>
                </li>
                
                <li>
                    <a class="link-hover" href="{{route('contact.website')}}">CONTACT</a>
                </li>
			</ul>
		</nav>
		<div class="pos-r">
			<div id="topbar" class="clearfix">

				<div class="top-util pull-right">
					
					<div class="search">
						<a href="#" class="search"><i class="fa fa-search zmdi-lg"></i></a>
						<div class="search-something">
							<input type="search" placeholder="search for something">
							<a href="#"><i class="fa fa-search zmdi-lg"></i></a>
						</div>
					</div>
					<div class="side-menu">
						<a href="#" class="side-menu-button"><span></span><span></span><span></span></a>
					</div>

				</div>

				<div class="logo pull-left">
					<a href="index1.html">
						<h1><img src="{{asset('website/assets/images/logo/logo.jpg')}}" alt="logo" style="width: 100px; height=:100px"></h1>
					</a>
				</div>
				<nav id="desktop-menu">
					<ul class="mx-auto top-level clearfix">
                        <li>
                            <a class="link-hover" href="{{route('index')}}">HOMEPAGE</a>
                        </li>
                        <li>
                            <a class="link-hover" href="{{route('aboutus.website')}}">ABOUT US</a>
                        </li>
                        <li>
                            <a class="link-hover" href="{{route('service.website')}}">SERVICES</a>
                        </li>
                        <li>
                            <a class="link-hover" href="{{route('team.website')}}">TEAM</a>
                        </li>
                        <li>
                            <a class="link-hover" href="{{route('portfolio.website')}}">PORTFOLIO</a>
                        </li>
                        {{-- <li>
                            <a class="link-hover" href="{{route('careers.website')}}">CAREERS</a>
                        </li> --}}
                        {{-- <li>
                            <a class="link-hover" href="{{route('partner.website')}}">PARTNERS</a>
                        </li> --}}
                        
                        <li>
                            <a class="link-hover" href="{{route('contact.website')}}">CONTACT</a>
                        </li>
					</ul>

				</nav>
			</div>
        </div>
        @if($title == "Welcome")
            @include('design.slider');
        @else
            <div class="header-content fullheight">
                <div class="page-header text-center">
                    <h2>{{$title}}</h2>
                    <p> {{$title . $web_name}}. </p>
                </div>
            </div>
        @endif
    </header>
    <div class="">
        @yield('content')  
    </div>

    <footer>

        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-6">
                        <a href="#" class="footer-logo">
                            <img src="{{asset('website/assets/images/logo/logo.jpg')}}" alt="logo" 
                            style="width: 100px; height=:100px">
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <h6></h6>
                        <ul>
                            
                            <li>
                                <a class="link-hover" href="{{route('aboutus.website')}}">ABOUT US</a>
                            </li>
                            <li>
                                <a class="link-hover" href="{{route('contact.website')}}">CONTACT</a>
                            </li>

                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <h6></h6>
                        <ul>
                            <li>
                                <a class="link-hover" href="{{route('portfolio.website')}}">PORTFOLIO</a>
                            </li>
                            <li>
                                <a class="link-hover" href="{{route('careers.website')}}">CAREERS</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <h6></h6>
                        <ul>
                            <li>
                                <a class="link-hover" href="{{route('aboutus.website')}}">ABOUT US</a>
                            </li>
                            <li>
                                <a class="link-hover" href="{{route('team.website')}}">TEAM</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h6>GET IN TOUCH</h6>
                        <ul class="contact footer-contact">
                            <li><a href="#"><i class="fa fa-map-marker"></i>157 5th Avenue, 5471 NYC</a>
                            <li><a href="#"><i class="fa fa-phone"></i>(+234) 813 813 9333, (+234) 907 228 1204</a>
                            <li><a href="#"><span>@</span>support@gloriousemopiretech.com</a>
                        </ul>
                    </div>
                </div>
            </div>
            
        </div>
            
        <div class="footer-bottom">
            <div class="container">
                <p class="copyright-text">Copyright <?php echo date('Y'); ?> &copy; 
                    Glorious Empire Tech | All Rights Reserved</p>
            </div>
        </div>	

    </footer>

    <script src="{{asset('website/assets/lib/jquery/jquery.js')}}"></script>
    <script src="{{asset('website/assets/lib/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{asset('website/assets/lib/slick/slick.min.js')}}"></script>
    <script src="{{asset('website/assets/lib/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('website/assets/lib/visible/visible.js')}}"></script>
    <script src="{{asset('website/assets/lib/imagesLoaded/imagesLoaded.min.js')}}"></script>
    <script src="{{asset('website/assets/js/main.js')}}"></script>
    </body>
</html>
        