@extends('./layouts.master')
<head><title>Theme Preview</title></head>
@section('content')

<link rel="stylesheet" href="../css/bootstrap.css">
	<!-- main css -->
	 <script src="https://kit.fontawesome.com/a347ae08ec.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../css/style.css">
</head>
<link rel="stylesheet" type="text/css" href="../css/template_design.css">
<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-5">
						<div class="home_right_img">
							<img class="img-fluid" src="img/b1.png" alt="">
						</div>
					</div>
				</div>
			</div>
			</div>
			<div class="container" id="preview">
				<div class="row">
					<div class="col-md-4" id="preview_img" style="background-image: url('/uploads/{{ $view_theme_back->theme_image }}')">
					</div>
					<div class="col-md-7" id="theme_detail">
						<h2><b>Name:</b> - {{ $view_theme_back->theme_name }}</h2>
						<h3><b>Category:</b> - {{ $view_theme_back->theme_category }}</h3>
						<h3><b>Price:</b> - {{ $view_theme_back->theme_price }}</h3>
						<h4><b>Description:</b> - <p>{{ $view_theme_back->theme_discription }}</p></h4>
						<div class="sdh"  style="visibility: hidden;">{{ $auth = Auth::user()->id }}</div>
						<div class="row">
							<div class="col-md-4">
								@if($view_theme_back->theme_price == "free" or $view_theme_back->theme_price == "0")
								<form action="{{ route('downloadtheme', $view_theme_back->id) }}" method="POST">
        						@csrf
        							<button type="submit" class="btn btn-outline-info">Download</button>
        						</form>
								@else
								<form action="{{ route('theme_pay') }}" method="POST">
        						@csrf
								<a href="javascript:void(0)" class="btn btn-outline-info buy_now" data-amount="{{ $view_theme_back->theme_price }}" data-id="3">Buy</a> 
								</form>
								@endif
							</div>
							<div class="col-md-4">
								<form action="{{ route('themedemo', $view_theme_back->id) }}">
        						@csrf
        							<button type="submit" class="btn btn-outline-primary">View Demo</button>
        						</form>
    						</div>
						</div>
					</div>
				</div>
			</div>
			
	</section>
	<!--================ End Home Banner Area =================-->
<script src="../js/popper.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/stellar.js"></script>
	<script src="../js/jquery.magnific-popup.min.js"></script>
	<script src="../vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="../vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="../vendors/isotope/isotope-min.js"></script>
	<script src="../vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="../js/jquery.ajaxchimp.min.js"></script>
	<script src="../js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="../js/theme.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
<script src="../js/addthisshit2.js"></script>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
      <script>
         var SITEURL = '{{URL::to('')}}';
         $.ajaxSetup({
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
         }); 
         $('body').on('click', '.buy_now', function(e){
           var totalAmount = $(this).attr("data-amount");
           var product_id =  $(this).attr("data-id");
           var options = {
           "key": "rzp_test_EuyqjIZxlgIQEB",
           "amount": (totalAmount*100), // 2000 paise = INR 20
           "name": "Impactive-Tech",
           "description": "Payment",
           "image": "/images/logo/logo.png",
           "handler": function (response){
                 $.ajax({
                   url: SITEURL + 'paysuccess',
                   type: 'post',
                   dataType: 'json',
                   data: {
                    razorpay_payment_id: response.razorpay_payment_id , 
                     totalAmount : totalAmount ,product_id : product_id,
                   }, 
                   success: function (msg) {
          
                       window.location.href = SITEURL + 'razor-thank-you';
                   }
               });
             
           },
           "theme": {
               "color": "cyan"
           }
         };
         var rzp1 = new Razorpay(options);
         rzp1.open();
         e.preventDefault();
         });
         /*document.getElementsClass('buy_plan1').onclick = function(e){
           rzp1.open();
           e.preventDefault();
         }*/
      </script>
@endsection