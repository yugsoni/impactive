@extends('layouts.master')

@section('content')

<style>
* {
  box-sizing: border-box;
}

.price {
  list-style-type: none;
  border: 1px solid #eee;
  margin: 0;
  padding: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}

.price:hover {
  box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
}

.price .header {
  background-color: #4458dc;
  color: white;
  font-size: 25px;
}

.price li {
  border-bottom: 1px solid #eee;
  padding: 20px;
  text-align: center;
}

.price .grey {
  background-color: #eee;
  font-size: 20px;
}

@media only screen and (max-width: 600px) {
  .columns {
    width: 100%;
  }
}
.hide{
	visibility: hidden;
}
</style>
</head>
<body>

<div class="hide">
	<h2 style="text-align:center; margin-top: 0px;">Packages that I provide.</h2>
<p style="text-align:center"><b>If you want to hire me and want to see my packages that I provide, then you can see them below.</b></p>
<h2 style="text-align:center; margin-top: 0px;">Packages that I provide.</h2>
<p style="text-align:center"><b>If you want to hire me and want to see my packages that I provide, then you can see them below.</b></p>
</div>
<h2 style="text-align:center; margin-top: 0px;">Packages that I provide.</h2>
<p style="text-align:center"><b>If you want to hire me and want to see my packages that I provide, then you can see them below.</b></p>

<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="columns">
			  <ul class="price">
			  	<li class="header">Wordpress Website</li>
			    <li class="grey">₹7,000 to 50,000/As per the requirement</li>
			    <li>In this pack I will make a Website in wordpress and also design a logo of your choice. You just have to say what type of website you want. For more information contact me</li>
			    <li>#Wordpress #Responsive</li>
			    <li class="grey"><a href="{{ url('contact') }}" class="btn btn-primary">Contact for this..</a></li>
			  </ul>
			</div>
		</div>
		<div class="col-md-4">
			<div class="columns">
			  <ul class="price">
			    <li class="header">Html Pro Pack</li>
			    <li class="grey">₹5,000 to 50,000/As per the requirement</li>
			    <li>In this pack I will make a website through coding in html and css. You only have to select the design of your choice. For more information contact me</li>
			    <li>#HTML #CSS #Javascript #Bootstrap</li>
			    <li class="grey"><a href="{{ url('contact') }}" class="btn btn-primary">Contact for this..</a></li>
			  </ul>
			</div>
		</div>
		<div class="col-md-4">
			<div class="columns">
			  <ul class="price">
			    <li class="header">Laravel Pack</li>
			    <li class="grey">₹7,00,000 to 36,00,000/As per the requirement</li>
			    <li>In this pack I will make a dynamic website in laravel. You Just have to select the design of your choice. For more information contact me</li>
			    <li>#HTML #CSS #Javascript #Bootstrap #Laravel #Database</li>
			    <li class="grey"><a href="{{ url('contact') }}" class="btn btn-primary">Contact for this..</a></li>
			  </ul>
			</div>
		</div>
		<div class="col-md-4">
			<div class="columns">
			 	<ul class="price">
				  	<li class="header">E commerce Premium Pack</li>
				    <li class="grey">₹70,000 to 30,00,000/As per the requirement</li>
				    <li>In this pack I will make an E commerce website in PHP. You first have to select the design of your choice and add photos and information of the products. For more information contact me</li>
				    <li>#HTML #CSS #Javascript #Bootstrap #PHP #Database #Ecommerce</li>
				    <li class="grey"><a href="{{ url('contact') }}" class="btn btn-primary">Contact for this..</a></li>
			  	</ul>
			</div>
		</div>
		<div class="col-md-4">
			<div class="columns">
			  	<ul class="price">
				    <li class="header">Laravel E commerce Pack</li>
				    <li class="grey">₹2,00,000 to 30,00,000/As per the requirement</li>
				    <li>In this pack I will make an E commerce website in Laravel. You first have to select the design of your choice and add photos and information of the products. For more information contact me</li>
				    <li>#HTML #CSS #Javascript #Bootstrap #Laravel #Database #Ecommerce</li>
				    <li class="grey"><a href="{{ url('contact') }}" class="btn btn-primary">Contact for this..</a></li>
			  	</ul>
			</div>
		</div>
		<div class="col-md-4">
			<div class="columns">
			  	<ul class="price">
				    <li class="header">Website With Admin Panel</li>
				    <li class="grey">₹5,00,000 to 50,00,000/As per the requirement</li>
				    <li>In this pack I will make a website in PHP or Laravel of your choice with an admin panel for the handling, controlling the website and you can also check the analytics of the website. For more information contact me</li>
				    <li>#HTML #CSS #Javascript #Bootstrap #PHP OR #Laravel #Admin Panel</li>
				    <li class="grey"><a href="{{ url('contact') }}" class="btn btn-primary">Contact for this..</a></li>
			  	</ul>
			</div>
		</div>
		<div class="col-md-4">
			<div class="columns">
			  	<ul class="price">
			  		<li class="header">Admin panel pack</li>
			    	<li class="grey">₹10,000 to 50,000/As per the requirement</li>
			    	<li>In this pack I will make an admin panel design in html, css, javascript, jquery which you can use in your Website as backend controller. For more information contact me.</li>
			    	<li>#HTML #CSS #Javascript #Bootstrap #Admin Panel</li>
			    	<li class="grey"><a href="{{ url('contact') }}" class="btn btn-primary">Contact for this..</a></li>
			  	</ul>
			</div>
		</div>
		<div class="col-md-4">
			<div class="columns">
			  	<ul class="price">
				    <li class="header">Login & Registration Forms</li>
				    <li class="grey">₹300 to 1,000 - per hour/As per the requirement</li>
				    <li>In this pack I will make a registration form and a login form which you can use in your website to collect user data. For more information contact me.</li>
				    <li>#HTML #CSS #Javascript #Bootstrap #Login #Registration #User</li>
				    <li class="grey"><a href="{{ url('contact') }}" class="btn btn-primary">Contact for this..</a></li>
			  	</ul>
			</div>
		</div>
		<div class="col-md-4">
			<div class="columns">
			  	<ul class="price">
			    	<li class="header">Website S.E.O</li>
			    	<li class="grey">₹500 to 2,000 - per hour/As per the requirement</li>
			    	<li>In this pack I will do S.E.O. of your site. S.E.O will increase your webiste ranking in google and will increase your visitors on website. For more information contact me.</li>
			    	<li>#S.E.O #Google #Ranking #Visitors #Website #Analytics</li>
			    	<li class="grey"><a href="{{ url('contact') }}" class="btn btn-primary">Contact for this..</a></li>
			  	</ul>
			</div>
		</div>
	</div>
</div>


@endsection