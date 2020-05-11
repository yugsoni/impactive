@extends('layouts.master')
@section('content')
<link rel="stylesheet" type="text/css" href="css/template_design.css">
<section class="home_banner_area">

		@if(isset($details))
<div class="container">
		<p>The Search result for your query <b> {{ $query }}</b> are : </p>
		<h1>Sample Theme Details:</h1>
		
		<table class="table table-striped">
        <thead>
            <tr>
                <th>Theme Name</th>
                <th>Theme Category</th>
                <th>Theme Price</th>
                <th>Theme Description</th>
                <th>Theme Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $theme)
            <tr>
                <td>{{$theme->theme_name}}</td>
                <td>{{$theme->theme_category}}</td>
                <td>{{$theme->theme_price}}</td>
                <td>{{$theme->theme_discription}}</td>
                <td><img style="height: 100px;" src="uploads/{{$theme->theme_image}}"></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
		@endif

		{{-- <div class="banner_inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-7">
						<div class="banner_content">
							<h2 class="text-uppercase">Want to Buy A template?</h2>                             
							<h4>Search for a category</h4>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="home_right_img">
							<img class="img-fluid" src="img/b1.png" alt="">
						</div>
					</div>
				</div>	
			</div>
			<div class="row container-fluid">
					@foreach ($main_view as $view_theme_drops)
					<div class="col-md-6 nice">
						<div class="main-box">
							<div class="row">
								<div class="col-md-5">  
									<div class="box_main" style="background-image: url(uploads/{{ $view_theme_drops->theme_image }});">
									</div>
								</div>
								<div class="col-md-7">                              
									<b>Name: - </b>{{ $view_theme_drops->theme_name }}<br>
									<b>Category: - </b>{{ $view_theme_drops->theme_category }}<br>
									<b>Price: - </b>{{ $view_theme_drops->theme_price }}<br>
									<b>Description	: - </b>{{ $view_theme_drops->theme_discription }}<br>
									<button type="button" class="btn btn-outline-info">View</button>
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div> --}}
	</section>
	<!--================ End Home Banner Area =================-->

@endsection