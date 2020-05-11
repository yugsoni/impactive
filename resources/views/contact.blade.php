@extends('layouts.master')

@section('content')

<style type="text/css">
	/* contact page */
form.contact-wthree-do label {
    letter-spacing: .5px;
    font-size: 15px;
}

.contact-wthree-do textarea {
    height: 180px;
    resize: none;
}

.contact-wthree-do .form-control {
    background: #f8f9fa;
    padding: 12px 10px;
    border: 1px solid #dedede;
    border-left: 3px solid #705ecf;
    letter-spacing: 1px;
    font-size: 15px;
    border-radius: 0px;
    -webkit-border-radius: 0px;
    -o-border-radius: 0px;
    -moz-border-radius: 0px;
    -ms-border-radius: 0px;
    color: #000;
}

button.btn-cont-w3 {
    background: #705ecf;
    color: #ffffff;
    padding: 11px 25px;
    letter-spacing: 1px;
    border-radius: 0px;
    -webkit-border-radius: 0px;
    -o-border-radius: 0px;
    -moz-border-radius: 0px;
    -ms-border-radius: 0px;
    font-size: 16px;
    max-width: 140px;
}

.w3l-map iframe {
    width: 100%;
    min-height: 400px;
    border: none;
    display: block;
}

/* //contact page */

/* responsive */
@media(max-width: 1366px) {
    h3.w3ls_pvt-title {
        font-size: 3.5rem;
    }
}

@media(max-width: 1280px) {

    h3.tittle,
    h2.tittle {
        font-size: 38px;
    }
}

@media(max-width: 1080px) {
    .about-in .card {
        padding: 2.5em 1em;
    }

    .about-grid-main h4,
    .about-in h5.card-title {
        font-size: 21px;
    }

    .about-grid-main {
        padding: 3em 2em;
    }

    h3.w3ls_pvt-title {
        font-size: 3rem;
    }

    p.text-sty-banner {
        font-size: 15px;
    }

    #logo a {
        font-size: 30px;
    }

    nav a {
        font-size: 14px;
        margin: 0 8px;
    }

    .price-info {
        padding: 0 .5em;
    }

    .prices-top {
        left: 32%;
    }
}

@media(max-width: 1024px) {
    .parts-w3ls span {
        font-size: 2.5em;
    }

    .parts-w3ls h4 {
        font-size: 14px;
    }

    .accordion-item-hd {
        font-size: 14px;
    }

    .contact-wthree-do .form-control {
        font-size: 14px;
    }
}

@media(max-width: 991px) {

    h3.tittle,
    h2.tittle {
        font-size: 36px;
    }

    p.sub-tittle {
        font-size: 15px;
    }

    .about-in .card,
    .about-grid-main {
        max-width: 500px;
        margin: 0 auto;
    }

    .about-grid-main {
        padding: 3em;
    }

    h3.w3ls_pvt-title {
        font-size: 2.5rem;
    }

    p.text-sty-banner {
        font-size: 14px;
    }

    .w3ls_banner_txt {
        padding-top: 3vw;
    }

    #logo a {
        font-size: 26px;
    }

    .services-icon {
        padding: 0 .5em;
    }

    .services-grid {
        padding: 0;
    }

    .services-icon span {
        font-size: 30px;
        margin-top: 1.5em;
    }

    .price-info {
        padding: 0 1em;
    }

    .prices-top {
        left: 38%;
    }

    .price-info.price-mkres {
        margin-top: 6em;
    }
}

@media(max-width: 768px) {

    h3.tittle,
    h2.tittle {
        font-size: 34px;
    }
}

@media(max-width: 736px) {
    h3.title-w3 {
        font-size: 30px;
    }

    p.title-sub-2 {
        font-size: 17px;
    }

    .about-right-faq h6 {
        font-size: 14px;
    }

    .about-right-faq h3 {
        font-size: 32px;
    }

    ul.w3l-right-book li {
        font-size: 15px;
    }

    .button-style {
        padding: 13px 24px;
        font-size: 13px;
    }

    .services-icon,
    .services-grid {
        padding: 0 1em;
    }

    .services-icon span {
        font-size: 34px;
        margin-top: .8em;
    }

    h4.text-team-w3 {
        font-size: 18px;
    }

    .prices-top {
        left: 32%;
    }

    .prices-bottom h4 {
        font-size: 24px;
    }

    .prices-bottom ul li {
        font-size: 15px;
    }
}

@media(max-width: 640px) {

    h3.tittle,
    h2.tittle {
        font-size: 30px;
    }

    p.sub-tittle {
        font-size: 14px;
    }

    form.subscribe-wthree input[type="email"] {
        font-size: 14px;
    }

    form.subscribe-wthree button {
        font-size: 15px;
    }
}

@media(max-width: 568px) {

    .ab-content-inner,
    .price-info {
        max-width: 400px;
        margin: 0 auto;
    }

    .price-info:nth-child(2) {
        margin-top: 6em;
    }

    .prices-top {
        left: 39%;
    }

    .w3l-map iframe {
        min-height: 300px;
    }
}

@media(max-width: 480px) {
    h3.title-w3 {
        font-size: 26px;
    }

    p.title-sub-2 {
        font-size: 16px;
    }

    .about-grid-main {
        padding: 3em 2em;
    }

    h3.w3ls_pvt-title {
        font-size: 2.3rem;
    }

    img.shape-w3-one {
        right: 6%;
    }

    .accordion-item-hd {
        font-size: 13px;
    }
}

@media(max-width: 440px) {
    p.sub-tittle {
        font-size: 13px;
    }

    h3.tittle,
    h2.tittle {
        font-size: 28px;
    }

    p {
        font-size: 13px;
    }

    nav a {
        font-size: 13px;
    }

    .search-w3layouts input[type="search"] {
        font-size: 12px;
    }

    .search-w3layouts button {
        font-size: 13px;
    }
}

@media(max-width: 414px) {
    .parts-w3ls span {
        font-size: 2em;
    }

    .parts-w3ls h4 {
        font-size: 12px;
        letter-spacing: 1px;
    }

    .about-right-faq h3 {
        font-size: 30px;
    }

    .about-grid-main {
        padding: 2em 1.5em;
    }
}

@media(max-width: 384px) {
    .prices-top {
        left: 37%;
    }

    .w3l-map iframe {
        min-height: 280px;
    }
}

@media(max-width: 375px) {
    form.subscribe-wthree button {
        font-size: 14px;
        padding: 13px 15px;
    }

    form.subscribe-wthree input[type="email"] {
        font-size: 13px;
        padding: 13px 11px;
    }

    .about-right-faq h3 {
        font-size: 28px;
    }

    .about-right-faq h6 {
        font-size: 13px;
    }

    h3.w3ls_pvt-title {
        font-size: 2.1rem;
    }

    p.text-sty-banner {
        font-size: 13px;
    }

    .search-w3layouts input[type="search"] {
        padding: 10px 15px;
    }

    .dwn-w3ls {
        width: 40px;
        height: 40px;
    }

    .dwn-w3ls span {
        font-size: 15px;
        line-height: 26px;
    }

    h6.accordion-textm {
        font-size: 16px;
    }

    .contact-wthree-do .form-control {
        font-size: 13px;
    }

    button.btn-cont-w3 {
        font-size: 15px;
    }
}
@media(max-width: 320px) {
    h3.title-w3 {
        font-size: 24px;
    }

    p.title-sub-2 {
        font-size: 14px;
    }

    .count-w3ls h4 {
        font-size: 28px;
    }

    .about-right-faq h3 {
        font-size: 26px;
    }

    ul.w3l-right-book li {
        font-size: 14px;
    }

    .button-style {
        padding: 13px 20px;
        font-size: 12px;
    }

    .prices-top {
        left: 35%;
    }
}

/* //responsive */
</style>
	<!-- contact -->
	<div class="contact py-5" id="contact">
		<div class="container pb-xl-5 pb-lg-3">
			<div class="row">
				<div class="col-lg-6">
					<img src="img/b1.png" alt="image" class="img-fluid" />
				</div>
				<div class="col-lg-6 mt-lg-0 mt-5">
					<!-- contact form grid -->
					<div class="contact-top1">
						@if(count($errors) > 0)

							<div class="alert alert-danger">
								<button type="button" class="close" data-dismiss="alert">x</button>
								<ul>
									
									@foreach($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>

						@endif
						@if($message = Session::get('success'))
							<div class="alert alert-success alert-block">
								<button type="button" class="close" data-dismiss="alert">x</button>
								<strong>{{ $message }}</strong>
							</div>
						@endif
                        <h4>Login is required</h4>
						<form action="{{ url('contact/send') }}" method="post" class="contact-wthree-do">
							{{ csrf_field() }}
							<div class="form-group">
								<div class="row">
									<div class="col-md-6">
										<label>
											First name
										</label>
										<input class="form-control" type="text" placeholder="Anderson" name="f_name" required="">
									</div>
									<div class="col-md-6 mt-md-0 mt-4">
										<label>
											Last name
										</label>
										<input class="form-control" type="text" placeholder="John" name="l_name" required="">
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-6">
										<label>
											Subject
										</label>
										<input class="form-control" type="text" placeholder="Subject" name="subject" required="">
									</div>
									<div class="col-md-6 mt-md-0 mt-4">
										<label>
											Email
										</label>
										<input class="form-control" type="email" placeholder="example@mail.com" name="email" required="">
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-12">
										<label>
											Your message
										</label>
										<textarea placeholder="Add your Description here" name="message" class="form-control"></textarea>
									</div>
								</div>
							</div>
							<div class="row mt-3">
								<div class="col-md-12">
									<button type="submit" class="btn btn-cont-w3 btn-block mt-4">Send</button>
								</div>
							</div>
						</form>
					</div>
					<!-- //contact form grid ends here -->
				</div>

			</div>
            <!-- map -->
    <div class="w3l-map p-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d848295.9861393345!2d150.37152490226384!3d-33.846975938661174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney+NSW%2C+Australia!5e0!3m2!1sen!2sin!4v1515557909959"></iframe>
    </div>
    <!-- //map -->
		</div>
	</div>
	<!-- //contact-->

	
@endsection