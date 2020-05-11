
@extends('layouts/contentLayoutMaster')

@section('title', 'Create Category')

@section('page-style')
        <!-- Page css files -->
        <link rel="stylesheet" href="{{ asset(mix('css/pages/authentication.css')) }}">
@endsection

@section('content')
  
    <section class="row">
  <div class="col-xl-8 col-11">
      <div class="card bg-authentication rounded-0 mb-0">
          <div class="row m-0">
              <div class="col-lg-6 d-lg-block d-none text-center align-self-center px-1 py-0">
                  <img src="{{ asset('images/pages/login.png') }}" alt="branding logo">
              </div>
              <div class="col-lg-6 col-12 p-0">
                  <div class="card rounded-0 mb-0 px-2">
                      <div class="card-header pb-1">
                          <div class="card-title">
                              <h4 class="mb-0">Create a category</h4>
                          </div>
                      </div>

                      <p class="px-2">Welcome {{ Auth::user()->name }}, create a category for the theme</p>
                      <div class="card-content">
                          <div class="card-body pt-1">
                            <form method="post">
                              @csrf
                              <fieldset class="form-label-group form-group position-relative has-icon-left">

                                  <input id="category" type="category" class="form-control" name="category" placeholder="Enter the Category" required autofocus>

                                  <div class="form-control-position">
                                      <i class="feather icon-edit"></i>
                                  </div>
                                  <label for="category">Enter the Category</label>
                              </fieldset>
                              <fieldset class="form-group">
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                              </fieldset>   
                              <a href="{{ url('theme-create') }}" class="btn btn-outline-primary float-left btn-inline">Move to Upload Theme</a>
                              <button value="Add_category" type="submit" class="btn btn-primary float-right btn-inline">Create</button>
                            </form>
                          </div>
                      </div>
                      <div class="login-footer">
                        <div class="divider">
                        </div>
                        <a href="{{ url('see-category') }}" value="Add_category" type="submit" class="btn btn-primary float-left btn-inline">See all categories</a>
                      </div>
                      <div class="login-footer">
                        <div class="divider">
                        </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

</section>
@endsection

@section('page-script')
        <!-- Page js files -->
      
@endsection

