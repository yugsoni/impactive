
@extends('layouts/contentLayoutMaster')

@section('title', 'View Categories')

@section('page-style')
        <!-- Page css files -->
        <link rel="stylesheet" href="{{ asset(mix('css/pages/authentication.css')) }}">
@endsection
@section('content')
    <section class="row">
    	<div class="col-md-6">
         @if ($message = Session::get('Success'))
            <div class="alert alert-success alert-block">
               <button type="button" class="close" data-dismiss="alert">×</button>
                   <strong>{{ $message }}</strong>
            </div>
          @endif
          @if (count($errors) > 0)
              <div class="alert alert-danger">
                  <strong>Whoops!</strong> There were some problems with your input.
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
    		<table class="table table-info table-hover">
    <thead>
      <tr class="table-primary">
        <th>ID</th>
        <th>Categories</th>
        @if(Auth::user()->type == "Admin")
        <th>Edit</th>
        <th>Delete</th>
        @endif
      </tr>
    </thead>
    <tbody>
      @foreach ($view_category as $view_categorys)
		<tr>
		<td>{{ $id_loop++ }}</td>
    <td>{{ $view_categorys->category }}</td>
    
      @if(Auth::user()->type == "Admin")
      <td>
      <form action="{{ route('editpage', $view_categorys->id) }}">
        @csrf
        <button href="#" class="btn btn-primary">Edit</button>
      </form>
    </td>
    <td>
      <form action="{{ route('deletecategory', $view_categorys->id) }}" method="POST">
        @csrf
        <button href="#" class="btn btn-warning">Delete</button>
      </form>
      </td>
      @endif
    
    
		</tr>
	  @endforeach
    </tbody>
  </table>
  {{ $view_category->links() }}
    	</div>
      <div class="col-md-5">
        <br>
        <h3>View All your Categories inserted.</h3>
        <h5>Want to add Theme. Click the button below</h5>
        <a href="{{ url('theme-create') }}" class="btn btn-outline-primary float-left btn-inline">Move to add Themes</a>
        <br>
        <br>
        <br>
        <h5>Want to add more categories. Click the button below</h5>
        <a href="{{ url('category') }}" class="btn btn-primary float-left btn-inline">Add more Category</a>
      </div>

</section>
@endsection

@section('page-script')
        <!-- Page js files -->
      
@endsection

