@extends('layouts.master')

@section('content')
<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">

				<div class="row">
					<div class="col-lg-7">
						<div class="banner_content">
							<h3 class="text-uppercase">Hell0</h3>
							<h1 class="text-uppercase">I am Yug Soni</h1>
							<h5 class="">Founder of Impactive-Tech Inc & Fullstack Developer</h5>
							<div class="d-flex align-items-center">
								<a class="primary_btn tr-gb" href="{{ url('contact') }}"><span>Hire Me</span></a>
								<a class="primary_btn tr-bg" href="my resume.pdf"><span>Get CV</span></a>
							</div>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="home_right_img">
							<img src="img/banner/home-right.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Home Banner Area =================-->

	<!--================ Start About Us Area =================-->
	<section class="about_area section_gap">
		<div class="container">
			<div class="row justify-content-start align-items-center">
				<div class="col-lg-5">
					<div class="about_img">
						<img class="" src="img/about-us.png" alt="">
					</div>
				</div>

				<div class="offset-lg-1 col-lg-6">
					<div class="main_title text-left">
						<h2>let’s <br>
							Introduce about <br>
							myself</h2>
						<p>
							Hello everyone I am Yug Soni. I am a Fullstack Developer. 
						</p>
						<p>
							After the experience of 2 years in web design and development field I started to sell websites by my own and then when I see that the demand of my work was very high. So, after that I started to sell my themes and templates online. So, when I saw that my work started selling very fast so I made this Website So that I can sell my own theme & templates at one place and you can download my CV and hire me.
						</p>
						<a class="primary_btn" href="my resume.pdf" ><span>Download CV</span></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End About Us Area =================-->

	<!--================ Srart Brand Area =================-->
	<section class="brand_area section_gap_bottom">
		<div class="container">
			<center><h1><b>Things I'm Expert IN !</b></h1></center>
			<br>
			<br>
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-brand-item d-table">
								<div class="d-table-cell text-center">
									<img src="img/brands/1.png" alt="php">
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-brand-item d-table">
								<div class="d-table-cell text-center">
									<img src="img/brands/2.png" alt="html">
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-brand-item d-table">
								<div class="d-table-cell text-center">
									<img src="img/brands/3.png" alt="css">
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-brand-item d-table">
								<div class="d-table-cell text-center">
									<img src="img/brands/4.png" alt="bootstrap 4">
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-brand-item d-table">
								<div class="d-table-cell text-center">
									<img src="img/brands/5.png" alt="wordpress">
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-brand-item d-table">
								<div class="d-table-cell text-center">
									<img src="img/brands/6.png" alt="javascript">
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-brand-item d-table">
								<div class="d-table-cell text-center">
									<img src="img/brands/7.png" alt="github">
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-brand-item d-table">
								<div class="d-table-cell text-center">
									<img src="img/brands/git.png" alt="gitbash">
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-brand-item d-table">
								<div class="d-table-cell text-center">
									<img src="img/brands/9.png" alt="laravel">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="offset-lg-2 col-lg-4 col-md-6">
					<div class="client-info">
						<div class="d-flex mb-50">
							<span class="lage">02</span>
							<span class="smll">Years <br>Working Experience</span>
						</div>
						<div class="call-now d-flex">
							<div>
								<span class="fa fa-phone"></span>
							</div>
							<div class="ml-16">
								<p>Call Me Now ! </p>
								<h3>(+91)-76-2100-5549</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Brand Area =================-->

	<!--================ Start Features Area =================-->
	<section class="features_area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center">
					<div class="main_title">
						<h2>service offers </h2>
						<p>
							I am Offering too much service to make the client happy like: - creative design, responsive design & many more....</a> 
						</p>
					</div>
				</div>
			</div>
			<div class="row feature_inner">
				<div class="col-lg-3 col-md-6">
					<div class="feature_item">
						<img src="img/services/s1.png" alt="">
						<h4>Wp developing</h4>
						<p>I have full knowledge of Wordpress development and I can make professional site in Wordpress.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="feature_item">
						<img src="img/services/s2.png" alt="">
						<h4>Web Development</h4>
						<p>I'm Very experienced in Web Development and I can make complex websites with back-end.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="feature_item">
						<img src="img/services/s3.png" alt="">
						<h4>Web design</h4>
						<p>I Have a very perfect Web design talent and I can make complex designs within some days.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="feature_item">
						<img src="img/services/s4.png" alt="">
						<h4>S.E.O. optimize</h4>
						<p>After Making clients website I can do it's seo so that their website come in google ranking.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<a class="primary_btn" href="services.php" ><span>See More Services !!</span></a>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Features Area =================-->

	<!--================Start Portfolio Area =================-->
	<section class="portfolio_area" id="portfolio">
		<div class="container">
			<div class="filters portfolio-filter">
				<ul>
					<li class="active" data-filter="*">all</li>
					<li data-filter=".popular">popular</li>
					<li data-filter=".latest"> latest</li>
					<li data-filter=".following">following</li>
					<li data-filter=".upcoming">upcoming</li>
				</ul>
			</div>
	
			<div class="filters-content">
				<div class="row portfolio-grid justify-content-center">
					<div class="col-lg-4 col-md-6 all latest">
						<div class="portfolio_box">
							<img class="img-fluid" src="img/site/demo0.jpg">
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all popular following">
						<div class="portfolio_box">
							<img class="img-fluid" src="img/site/demo3.jpg">
						</div>
					</div>
					<div class="col-lg-4 col-md-6 all latest upcoming">
						<div class="portfolio_box">
							<img class="img-fluid" src="img/site/demo10.jpg">
						</div>
					</div>
				</div>
			</div>
			<a class="primary_btn" href="{{ url('portfolio') }}" ><span>See More Projects !!</span></a>
		</div>
	</section>
	<!--================End Portfolio Area =================-->

	<!--================ Start Testimonial Area =================-->
	<div class="testimonial_area section_gap_bottom">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center">
					<div class="main_title">
						<h2>Client say about me</h2>
						<p>I am a professional designer and developer and I always try to make my work as best and good as As I can ! <br> I Try to make my clients happy.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="testi_slider owl-carousel">
        			<div class="testi_item">
        				<div class="row">
        					<div class="col-lg-4">
        						<img src="img/images.jpg" alt="" class="img-fluid">
        					</div>
        					<div class="col-lg-8">
        						<div class="testi_text">
        							<h4>Anand Soni</h4>
									<p>Yug is Very talented and expert in web design and development. He can make some complex logics in some minutes.</p>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="testi_item">
        				<div class="row">
        					<div class="col-lg-4">
        						<img src="img/testimonials/t2.jpg" alt="">
        					</div>
        					<div class="col-lg-8">
        						<div class="testi_text">
        							<h4>Davil Saden</h4>
									<p>I usually give to build my website to him, when he returns it back I have only one word about the project, ' WOW ' ! </p>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="testi_item">
        				<div class="row">
        					<div class="col-lg-4">
        						<img src="img/testimonials/t1.jpg" alt="">
        					</div>
        					<div class="col-lg-8">
        						<div class="testi_text">
        							<h4>Elite Martin</h4>
									<p>I am also a developer but if I have some doubt in some work I always take his help. He is so helpful and hardworker.</p>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="testi_item">
        				<div class="row">
        					<div class="col-lg-4">
        						<img src="img/bm.jpg" class="img-fluid">
        					</div>
        					<div class="col-lg-8">
        						<div class="testi_text">
        							<h4>Bharat Mandaliya</h4>
									<p>I have given My first ever site to make to him and he had made that so creative and mind-blowing that I give all my works to him.</p>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="testi_item">
        				<div class="row">
        					<div class="col-lg-4">
        						<img src="img/ava.png" class="img-fluid">
        					</div>
        					<div class="col-lg-8">
        						<div class="testi_text">
        							<h4>Akash Patel</h4>
									<p>I am a Professional blogger and I had given him only to make my blogging site. I was very satisfied and happy with his work..</p>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="testi_item">
        				<div class="row">
        					<div class="col-lg-4">
        						<img src="img/ac.png" class="img-fluid">
        					</div>
        					<div class="col-lg-8">
        						<div class="testi_text">
        							<h4>Andy Crestodina</h4>
									<p>I am a chief and I had given him to make a portfolio site for me and after seeking his work I thing he first thinks about client's happiness</p>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
			</div>
		</div>
	</div>
@endsection