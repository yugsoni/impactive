
@extends('layouts/contentLayoutMaster')

@section('title', 'All Users')

@section('page-style')
        <!-- Page css files -->
        <link rel="stylesheet" href="{{ asset(mix('css/pages/authentication.css')) }}">
@endsection
@section('content')

    <section class="row">
    	<div class="col-md-12">
          
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
        <th>Name</th>
        <th>Email</th>
        <th>Username</th>
        <th>Avatar</th>
        <th>Status</th>
        <th>User Created At</th>
        <th>View</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($all_users as $users)
    		<tr>
          
      		<td>{{ $id_loop++ }}</td>
          <td>{{ $users->name }}</td>
          <td>{{ $users->email }}</td>
          <td>{{ $users->username }}</td>
          <td><img src="avatars/{{ $users->avatar }}" style="height: 60px; border-radius: 30px;"></td>
          <td>@if(Cache::has('user-is-online-' . $users->id))
                                                <span class="text-success"><b>Online</b></span>
                                            @else
                                                <span class="text-secondary"><b>Offline</b></span>
                                            @endif</td>
      		<td>{{ $users->created_at }}</td>
          <td><a href="{{ route('viewuser', $users->id) }}" class="btn btn-primary">View</a></td>
          <td>
            <form action="{{ route('deleteuser', $users->id) }}" method="POST">
              @csrf
              <button href="#" class="btn btn-warning">Delete</button>
            </form>
          </td>
          {{-- @if (Auth::user()->email == 'yug.spider@gmail.com')
            @else
            <td>
            <form action="{{ route('deleteuser', $users->id) }}" method="POST">
              @csrf
              <button href="#" class="btn btn-warning">Delete</button>
            </form></td>
            @endif --}}
    		</tr>
	    @endforeach
    </tbody>
  </table>
 {{--  {{ $view_category->links() }} --}}
    	</div>
      {{-- <div class="col-md-5">
        <br>
        <h3>View All your Categories inserted.</h3>
        <h5>Want to add Theme. Click the button below</h5>
        <a href="{{ url('theme-create') }}" class="btn btn-outline-primary float-left btn-inline">Move to add Themes</a>
        <br>
        <br>
        <br>
        <h5>Want to add more categories. Click the button below</h5>
        <a href="{{ url('category') }}" class="btn btn-primary float-left btn-inline">Add more Category</a>
      </div> --}}

</section>
@endsection

@section('page-script')
        <!-- Page js files -->
      
@endsection

