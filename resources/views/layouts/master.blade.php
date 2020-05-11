<!DOCTYPE html>	
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="images/logo/logo.png" type="image/png">
	<title> {{ request()->is('/', 'home') ? 'Impact' : '' }} {{ request()->is('about') ? 'About' : '' }} {{ request()->is('service') ? 'Service' : '' }} {{ request()->is('portfolio') ? 'Portfolio' : '' }} {{ request()->is('blog') ? 'Blog' : '' }} {{ request()->is('templates') ? 'Templates' : '' }} {{ request()->is('pakage') ? 'Packages' : '' }} {{ request()->is('contact') ? 'Contact' : '' }}{{ request()->is('login') ? 'Login' : '' }} {{ request()->is('register') ? 'Register' : '' }} </title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<!-- main css -->
	
	 <script src="https://kit.fontawesome.com/a347ae08ec.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/cursor.css">
	<style type="text/css">
		p .descriptions {
	  		padding: 0 0 20px;
		}
	</style>
</head>
<body>
	<?php
	$slug_url=Request::getRequestUri();
	 ?>
	 <div id="preloader">
  <div id="status"></div>
</div>
	<header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="{{ url('../home') }}"><img src="images/logo/logo.png"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                     aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav justify-content-end res">
                            <li class=" nav-item  {{ request()->is('/', 'home') ? 'active' : '' }} "><a class="nav-link" href=" {{ url('../home') }} ">Home</a></li>
                            <li class="nav-item  {{ request()->is('about') ? 'active' : '' }}"><a class="nav-link" href=" {{ url('../about') }} ">About</a></li>
                            <li class="nav-item  {{ request()->is('service') ? 'active' : '' }}"><a class="nav-link" href=" {{ url('../service') }} ">Services</a></li>
                            <li class="nav-item  {{ request()->is('portfolio') ? 'active' : '' }} "><a class="nav-link" href=" {{ url('../portfolio') }} ">Portfolio</a></li>
                            <li class="nav-item  {{ request()->is('pakage') ? 'active' : '' }} "><a class="nav-link" href=" {{ url('../pakage') }} ">Packages</a></li>
                            <li class="nav-item  {{ request()->is('blog') ? 'active' : '' }}"><a class="nav-link" href=" {{ url('../blog') }} ">Blog</a></li>
                            <li class="nav-item  {{ request()->is('templates') ? 'active' : '' }}"><a class="nav-link" href=" {{ url('../templates') }} ">Shop</a></li>
                            <li class="nav-item {{ request()->is('contact') ? 'active' : '' }} "><a class="nav-link" href=" {{ url('../contact') }} ">Contact</a></li>

                            @guest

                            <li class="nav-item {{ request()->is('sites/*/edit') ? 'active' : '' }} "><a class="nav-link" href=" {{ route('login') }} "><button class="nav-click btn">Login</button></a></li>

                            @if (Route::has('register'))

                            <li class="nav-item "><a class="nav-link" href=" {{ route('register') }} "><button class="nav-clicki-r btn">Sign Up</button></a></li>

                            @endif

                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Welcome - {{ Auth::user()->name }} <i class="fas fa-caret-down"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    <a class="dropdown-item" href="{{ route('dashboard-analytics') }}">
                                        {{ __('Dashboard') }}
                                    </a>

                                </div>
                            </li>
                          {{--   <li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false"></a>
								  Welcome - {{ Auth::user()->name }} <span class="caret"></span>
								<ul class="dropdown-menu">
									<a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('logout') }}
                                    </a>
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
									
								</ul>
							</li> --}}
                        


                            @endguest

                        </ul>
                    </div>
                </div>
            </nav>

        </div>
    </header>
  
	@yield('content')
	

	<?php 
	
	if($slug_url!='/blog' && $slug_url!= '/templates'  ){
	 ?>
	
	
	<!--================ Start Newsletter Area =================-->
	<section class="newsletter_area">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-12">
					<div class="subscription_box text-center">
						<h2 class="text-uppercase text-white">get update from anywhere</h2>
						<p class="text-white">
							Even If you are any place of the world you will get notified and get new updates after you subscribe below !. 
						</p>
						<div class="subcribe-form" id="mc_embed_signup">
							<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscription relative">
								<input name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required="" type="email">
								<div style="position: absolute; left: -5000px;">
									<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
								</div>
								<button class="primary-btn hover d-inline">Get Started</button>
								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php } ?>
	<!--================ End Newsletter Area =================-->

	<!--================Footer Area =================-->


	
	<footer class="footer_area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="footer_top flex-column">
						<div class="footer_logo">
							<a href="#">
								<img src="images/logo/logo.png" alt="">
							</a>
							<h4>Follow Me</h4>
						</div>
						<div class="footer_social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row footer_bottom justify-content-center">
				<p class="col-lg-8 col-sm-12 footer-text">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | with <i class="fa fa-heart-o" style="color: #854fee;" aria-hidden="true"> Impactive Tech</i> 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>
		</div>
	</footer>
	<!--================End Footer Area =================-->
	<div class="your-cursor2"></div>
	<div class="follow2"></div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script>
		
			// makes sure the whole site is loaded
				$(window).load(function() {
			        // will first fade out the loading animation
			    $("#status").delay(500).fadeOut("slow");
			        // will fade out the whole DIV that covers the website.
			    $("#preloader").delay(500).fadeOut("slow");
			});
				$(function() {

  var minimized_elements = $('p.minimize');

  minimized_elements.each(function() {
    var t = $(this).text();
    if (t.length < 100) return;

    $(this).html(
      t.slice(0, 100) + '<span>... </span><a href="#" class="more">More</a>' +
      '<span style="display:none;">' + t.slice(100, t.length) + ' <a href="#" class="less">Less</a></span>'
    );

  });

  $('a.more', minimized_elements).click(function(event) {
    event.preventDefault();
    $(this).hide().prev().hide();
    $(this).next().show();
  });

  $('a.less', minimized_elements).click(function(event) {
    event.preventDefault();
    $(this).parent().hide().prev().show().prev().show();
  });

});


	</script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="vendors/isotope/isotope-min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/theme.js"></script>

<script src="js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
<script src="js/addthisshit2.js"></script>

	
</body>

</html>