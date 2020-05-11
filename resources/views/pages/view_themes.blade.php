
@extends('layouts/contentLayoutMaster')

@section('title', 'View Theme')

@section('page-style')
        <!-- Page css files -->
        <link rel="stylesheet" href="{{ asset(mix('css/pages/authentication.css')) }}"> 
@endsection
@section('content')
<style type="text/css">
  .descriptions{
    padding: 0 0 20px;
  }
</style>
<section class="row">
  <div class="col-xl-12 col-11">
    		<table class="table table-info table-hover">
    <thead>
      <tr class="table-primary">
        <th>ID</th>
        <th>Theme Name</th>
        <th>Theme Category</th>
        <th>Theme Price</th>
        <th>Theme Description</th>
        <th>Theme Image</th>
        @if(Auth::user()->type == "Admin")
        <th>Edit</th>
        <th>Delete</th>
        @endif
      </tr>
    </thead>
    <tbody>
      @foreach ($view_theme_drop as $view_theme_drops)
		<tr>
		  <td>{{ $id_loop++ }}</td>
	    <td>{{ $view_theme_drops->theme_name }}</td>
	    <td>{{ $view_theme_drops->theme_category }}</td>
	    <td>{{ $view_theme_drops->theme_price }}</td>
	    <td><p class="descriptions minimize">{{ $view_theme_drops->theme_discription }}</p></td>
	    <td><img src="uploads/{{ $view_theme_drops->theme_image }}" style="height: 100px;"></td>
      @if(Auth::user()->type == "Admin")
      <td>
        <form action="{{ route('themeditpage', $view_theme_drops->id) }}">
          @csrf
          <button href="#" class="btn btn-primary">Edit</button>
        </form>
      </td>
      <td>
        <form action="{{ route('deletetheme', $view_theme_drops->id) }}" method="POST">
          @csrf
          <button href="#" class="btn btn-warning">Delete</button>
        </form>
      </td>
      @endif
		</tr>
	  @endforeach
    </tbody>
  </table>
  {{ $view_theme_drop->links() }}
  </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
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
@endsection


