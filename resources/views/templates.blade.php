@extends('layouts.master')

@section('content')
<link rel="stylesheet" type="text/css" href="css/template_design.css">
<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-7">
						<div class="banner_content">
							<h2 class="text-uppercase">Want to Buy A template?</h2>

							<h4>Search for a category, or name</h4>
							<form action="/search" method="POST" role="search">
							    {{ csrf_field() }}
							    <div class="input-group">
							        <input type="text" class="form-control" name="q"
							            placeholder="Search Theme"> <span class="input-group-btn">
							            <button type="submit" class="btn btn-default">
							                <span class="glyphicon glyphicon-search"></span>
							            </button>
							        </span>
							    </div>
							</form>
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
								<div class="col-md-6">    
									{{-- {{ $name_view = $view_theme_drops->theme_name }} --}}                          
									<form action="{{ route('themeviewpage', $view_theme_drops->id) }}">
										<b>Name: - </b>{{ $view_theme_drops->theme_name }}<br>
									<b>Category: - </b>{{ $view_theme_drops->theme_category }}<br>
									<b>Price: - </b>{{ $view_theme_drops->theme_price }}<br>
									<b>Description	: - </b><p class="descriptions minimize">
								{{ $view_theme_drops->theme_discription }}</p><br>
									<button type="submit" class="btn btn-outline-info">View</button>
									</form>
									{{-- <a href="{{ route('view_temp', $name_view)}}" type="button" class="btn btn-outline-info">View</a> --}}
								</div>
							</div>
						</div>
					</div>
					@endforeach

				</div>
				{{ $main_view->links() }}
			</div>
	</section>
	<!--================ End Home Banner Area =================-->

@endsection