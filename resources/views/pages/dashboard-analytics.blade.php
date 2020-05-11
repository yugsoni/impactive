
@extends('layouts/contentLayoutMaster')

@section('title', 'Dashboard Analytics')

@section('vendor-style')
        <!-- vendor css files -->
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/charts/apexcharts.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/tether-theme-arrows.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/tether.min.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/shepherd-theme-default.css')) }}">
@endsection
@section('page-style')
        <!-- Page css files -->
        <link rel="stylesheet" href="{{ asset(mix('css/pages/dashboard-analytics.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('css/pages/card-analytics.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('css/plugins/tour/tour.css')) }}">
  @endsection

  @section('content')
  <style type="text/css">
    .hover_box{
      background-image: url(uploads/{{ $all_theme_fetch->theme_image }});
      height: 105px;
      background-size: cover;
      transition: 1.0s ease-in-out;
    }
    .hover_box:hover{
      background-position: bottom;
    }
  </style>
    {{-- Dashboard Analytics Start --}}
    @if(Auth::user()->type == "User")

    <section id="dashboard-analytics">
      <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="card bg-analytics text-white">
            <div class="card-content">
              <div class="card-body text-center">
                <img src="{{ asset('images/elements/decore-left.png') }}" class="img-left" alt="card-img-left">
                <img src="{{ asset('images/elements/decore-right.png')}}" class="img-right" alt="card-img-right">
                <div class="avatar avatar-xl bg-primary shadow mt-0">
                    <div class="avatar-content">
                        <img src="../avatars/{{ Auth::user()->avatar }}">
                    </div>
                </div>
                <div class="text-center">
                  <h1 class="mb-2 text-white">Congratulations {{ Auth::user()->name }},</h1>
                  <p class="m-auto w-75">You have <strong>successfully</strong> logged in, now you can put and sell your theme or Template.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
          <div class="col-lg-3 col-md-6 col-12">
            <div class="card">
              <div class="card-header d-flex flex-column align-items-start pb-0">
                  <div class="avatar bg-rgba-primary p-50 m-0">
                      <div class="avatar-content">
                          <i class="feather icon-users text-primary font-medium-5"></i>
                      </div>
                  </div>
                  <br>
                  <br>
                  <h2 class="text-bold-700 mt-1 mb-25">{{ date('d M 20y', strtotime(Auth::user()->created_at)) }}</h2>
                  <p class="mb-0">Day Of registration</p>
              </div>
              <div class="card-content">
                  <br>
                  <br>
                  <br>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <div class="card">
                <div class="card-header d-flex flex-column align-items-start pb-0">
                    <div class="avatar bg-rgba-warning p-50 m-0">
                        <div class="avatar-content">
                            <i class="feather icon-package text-warning font-medium-5"></i>
                        </div>
                    </div>
                    <br>
                    <br>
                    <h2 class="text-bold-700 mt-1 mb-25">{{ $user_downloads }}</h2>
                    <p class="mb-0">No. Of theme Downloaded</p>
                </div>
                <div class="card-content">
                    <br>
                    <br>
                    <br>
                </div>
            </div>
          </div>
      </div>
      <div class="row">
          <div class="col-md-6 col-12">
            <div class="card">
              <div class="card-content">
                  <div class="card-body">
                      <div class="row pb-50">
                          <div class="col-lg-6 col-12 d-flex justify-content-between flex-column order-lg-1 order-2 mt-lg-0 mt-2">
                              <div>
                                  <h2 class="text-bold-550 mb-25">No. Of Themes Uploaded - {{ $ad_id_find }}</h2>
                                  <p class="text-bold-500 mb-75"></p>
                                  <h2 class="text-bold-550 mb-25">No. Of Themes in Queue - {{ $queue_id_find }}</h2>

                              </div>
                              
                          </div>
                          <div class="col-lg-6 col-12 d-flex justify-content-between flex-column order-lg-1 order-2 mt-lg-0 mt-2">
                            
                            <h5 class="font-medium-2">
                                      You Have Uploaded <b>
                                        @if($ad_id_find > 1)
                                        {{ $ad_id_find }} Themes 
                                        @else 
                                        {{ $ad_id_find }} Theme 
                                      @endif
                                    </b> 
                              </h5>
                              <h5 class="font-medium-2">
                                      You <b>
                                        @if($ad_id_find > 1)
                                        {{ $queue_id_find }} Themes in queue
                                        @else 
                                        {{ $queue_id_find }} Theme queue 
                                      @endif
                                    </b> 
                              </h5>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="card">
              <div class="card-content">
                  <div class="card-body">
                      <div class="row pb-50">
                          <div class="col-lg-6 col-12 d-flex justify-content-between flex-column order-lg-1 order-2 mt-lg-0 mt-2">
                              <div>
                                  <h2 class="text-bold-550 mb-25">No. Of Category Added - {{ $ad_category_id }}</h2>
                                  <p class="text-bold-500 mb-75"></p>
                                  <h5 class="font-medium-2">
                                      You Have Added <b>
                                        @if($ad_category_id > 1)
                                        {{ $ad_category_id }} Categories 
                                        @else 
                                        {{ $ad_category_id }} Category 
                                      @endif
                                    </b>
                                  </h5>
                              </div>
                              
                          </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-12">
            <div class="card bg-authentication rounded-0 mb-0">
          <div class="row m-0">
              <div class="col-lg-6 d-lg-block d-none text-center align-self-center px-1 py-0">
                  <img src="{{ asset('images/pages/500.png') }}" alt="branding logo" class="img-fluid">
              </div>

              <div class="col-lg-6 col-12 p-0">
                  <div class="card rounded-0 mb-0 px-2">
                      <div class="card-header pb-1">
                          <div class="card-title">
                              <h4 class="mb-0">Profile</h4>
                          </div>
                      </div>
                      <p class="px-2">Welcome {{ Auth::user()->name }}, See your profile</p>
                      <div class="card-content">
                        
                          <div class="card-body pt-1">
                           <fieldset class="form-label-group form-group position-relative has-icon-left">
                                  <input id="label-placeholder" type="Name" class="form-control" name="Name" placeholder="Name" value="{{ Auth::user()->name }}" disabled>
                                  <div class="form-control-position">
                                      <i class="feather icon-user"></i>
                                  </div>
                                  <label for="label-placeholder">Name</label>

                              </fieldset>
                              <fieldset class="form-label-group form-group position-relative has-icon-left">
                                  <input id="label-placeholder" type="email" class="form-control" name="email" placeholder="email" value="{{ Auth::user()->email }}" disabled>
                                  <div class="form-control-position">
                                      <i class="feather icon-mail"></i>
                                  </div>
                                  <label for="label-placeholder">Email</label>

                              </fieldset>
                              <fieldset class="form-label-group form-group position-relative has-icon-left">
                                  <input id="label-placeholder" type="username" class="form-control" name="username" placeholder="username" value="{{ Auth::user()->username }}" disabled>
                                  <div class="form-control-position">
                                      <i class="feather icon-airplay"></i>
                                  </div>
                                  <label for="label-placeholder">Username</label>

                              </fieldset>
                              <fieldset class="form-label-group form-group position-relative has-icon-left">
                                  <input id="label-placeholder" type="country" class="form-control" name="country" placeholder="Country" value="{{ Auth::user()->country }}" disabled>
                                  <div class="form-control-position">
                                      <i class="feather icon-flag"></i>
                                  </div>
                                  <label for="label-placeholder">Country</label>

                              </fieldset>
                              <fieldset class="form-label-group form-group position-relative has-icon-left">
                                  <input id="label-placeholder" type="username" class="form-control" name="username" placeholder="username" value="{{ Auth::user()->gender }}" disabled>
                                  <div class="form-control-position">
                                      <i class="feather icon-triangle"></i>
                                  </div>
                                  <label for="label-placeholder">Gender</label>

                              </fieldset>
                            <h2>Profile Picture: - <img src="avatars/{{ Auth::user()->avatar }}" style="height: 100px;border-radius: 50%;"></h2>
                            <br>
                                <a href="{{ route('edit.page') }}" class="btn btn-outline-primary float-left btn-inline">Want to Edit your Profile? Click Here</a>
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
          </div>
      </div>
    </section>

    @else

    <section id="dashboard-analytics">
      <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="card bg-analytics text-white">
            <div class="card-content">
              <div class="card-body text-center">
                <img src="{{ asset('images/elements/decore-left.png') }}" class="img-left" alt="card-img-left">
                <img src="{{ asset('images/elements/decore-right.png')}}" class="img-right" alt="card-img-right">
                <div class="avatar avatar-xl bg-primary shadow mt-0">
                    <div class="avatar-content">
                        <img src="../avatars/{{ Auth::user()->avatar }}">
                    </div>
                </div>
                <div class="text-center">
                  <h1 class="mb-2 text-white">Congratulations {{ Auth::user()->name }},</h1>
                  <p class="m-auto w-75">Hey, <strong>{{ Auth::user()->name }}</strong> you have <strong>successfully</strong> logged in, now you can check the Analytics.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
          <div class="col-lg-3 col-md-6 col-12">
            <div class="card">
              <div class="card-header d-flex flex-column align-items-start pb-1">
                  <h2 class="text-bold-700 mt-1 mb-25">{{ $all_theme }}</h2>
                  <p class=" text-bold-700 mb-0">Total Themes</p>
              </div>
            </div>
            <div class="card">
                <div class="card-header d-flex flex-column align-items-start pb-1">
                    <h2 class="text-bold-700 mt-1 mb-25">{{ $all_downloads }}</h2>
                    <p class=" text-bold-700 mb-0">Total Downloads</p>
                </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <div class="card">
                <div class="card-header d-flex flex-column align-items-start pb-1">
                    <h2 class="text-bold-700 mt-1 mb-25">{{ $all_categories }}</h2>
                    <p class=" text-bold-700 mb-0">Total Categories</p>
                </div>
            </div>
            <div class="card">
                <div class="card-header d-flex flex-column align-items-start pb-1">
                    <h2 class="text-bold-700 mt-1 mb-25">{{ $all_users_id }}</h2>
                    <p class=" text-bold-700 mb-0">Total Users</p>
                </div>
            </div>
          </div>
      </div>
      <div class="row">
          <div class="col-md-4 col-12">
            <div class="card bg-authentication rounded-0 mb-0">
          <div class="row m-0">

              <div class="col-lg-12 col-12 p-0">
                  <div class="card rounded-0 mb-0 px-2">
                      <div class="card-header pb-1">
                          <div class="card-title">
                              <h4 class="mb-0">Profile</h4>
                          </div>
                      </div>
                      <p class="px-2">Welcome {{ Auth::user()->name }}, See your profile</p>
                      <div class="card-content">
                        
                          <div class="card-body pt-1">
                           <fieldset class="form-label-group form-group position-relative has-icon-left">
                                  <input id="label-placeholder" type="Name" class="form-control" name="Name" placeholder="Name" value="{{ Auth::user()->name }}" disabled>
                                  <div class="form-control-position">
                                      <i class="feather icon-user"></i>
                                  </div>
                                  <label for="label-placeholder">Name</label>

                              </fieldset>
                              <fieldset class="form-label-group form-group position-relative has-icon-left">
                                  <input id="label-placeholder" type="email" class="form-control" name="email" placeholder="email" value="{{ Auth::user()->email }}" disabled>
                                  <div class="form-control-position">
                                      <i class="feather icon-mail"></i>
                                  </div>
                                  <label for="label-placeholder">Email</label>

                              </fieldset>
                              <fieldset class="form-label-group form-group position-relative has-icon-left">
                                  <input id="label-placeholder" type="username" class="form-control" name="username" placeholder="username" value="{{ Auth::user()->username }}" disabled>
                                  <div class="form-control-position">
                                      <i class="feather icon-airplay"></i>
                                  </div>
                                  <label for="label-placeholder">Username</label>

                              </fieldset>
                              <fieldset class="form-label-group form-group position-relative has-icon-left">
                                  <input id="label-placeholder" type="country" class="form-control" name="country" placeholder="Country" value="{{ Auth::user()->country }}" disabled>
                                  <div class="form-control-position">
                                      <i class="feather icon-flag"></i>
                                  </div>
                                  <label for="label-placeholder">Country</label>

                              </fieldset>
                              <fieldset class="form-label-group form-group position-relative has-icon-left">
                                  <input id="label-placeholder" type="username" class="form-control" name="username" placeholder="username" value="{{ Auth::user()->gender }}" disabled>
                                  <div class="form-control-position">
                                      <i class="feather icon-triangle"></i>
                                  </div>
                                  <label for="label-placeholder">Gender</label>

                              </fieldset>
                            <h2>Profile Picture: - <img src="avatars/{{ Auth::user()->avatar }}" style="height: 100px;border-radius: 50%;"></h2>
                            <br>
                                <a href="{{ route('edit.page') }}" class="btn btn-outline-primary float-left btn-inline">Want to Edit your Profile? Click Here</a>
                          </div>
                      <div class="login-footer">
                        <div class="divider">
                          <br>
                          <br>
                          <br>
                          <br>
                          <br>
                        </div>
                        
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <br>
          </div>

          <div class="col-md-8 col-12">
            <div class="card bg-authentication rounded-0 mb-0">
          <div class="row m-0">

              <div class="col-lg-12 col-12 p-0">
                  <div class="card rounded-0 mb-0 px-2">
                      <div class="card-header pb-1">
                          <div class="card-title">
                              <h5 class="mb-0">Latest User</h5>
                          </div>
                      </div>
                      <div class="card-content">
                          <div class="card-body pt-0">
                            <div class="table-responsive">
                              <table class="table table-info table-hover">
                                <thead>
                                <tr class="table-primary">
                                  <th>Name</th>
                                  <th>Email</th>
                                  <th>Username</th>
                                  <th>Avatar</th>
                                  <th>User Created At</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                  <td>{{ $all_users->name }}</td>
                                  <td>{{ $all_users->email }}</td>
                                  <td>{{ $all_users->username }}</td>
                                  <td><img src="../avatars/{{ $all_users->avatar }}" height="60" style="border-radius: 30px;"></td>
                                  <td>{{ $all_users->created_at }}</td>
                                </tr>
                             
                                </tbody>
                              </table>
                            </div>
                          </div>
                      </div>
                    </div>
              </div>
          </div>
      </div>
      <br>
      <div class="card bg-authentication rounded-0 mb-0">
          <div class="row m-0">

              
              <div class="col-lg-12 col-12 p-0">
                  <div class="card rounded-0 mb-0 px-2">
                      <div class="card-header pb-0">
                          <div class="card-title">
                              <h5 class="mb-0">Latest Theme</h5>
                          </div>
                      </div>
                      <div class="card-content">
                          <div class="card-body pt-1">
                            <div class="table-responsive">
                              <table class="table table-info table-hover">
                                <thead>
                                <tr class="table-primary">
                                  <th>Theme Name</th>
                                  <th>Theme Price</th>
                                  <th>Theme Category</th>
                                  <th>Theme Image</th>
                                  <th>Publisher</th>
                                  <th>Created At</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                  <td>{{ $all_theme_fetch->theme_name }}</td>
                                  <td>{{ $all_theme_fetch->theme_price }}</td>
                                  <td>{{ $all_theme_fetch->theme_category }}</td>
                                  <td class="hover_box"></td>
                                  @foreach($find_id_theme_user as $user_find_theme)
                                  <td>{{ $user_find_theme->name }}</td>
                                  <td>{{ $user_find_theme->created_at }}</td>
                                  @endforeach
                                </tr>
                             
                                </tbody>
                              </table>
                            </div>
                          </div>
                      </div>
                    </div>
              </div>
              </div>
      </div>
      <br>
      <div class="row">
        <div class="col-lg-4 col-md-6 col-12">
            <div class="card">
                <div class="card-header d-flex flex-column align-items-start pb-0">
                    <div class="avatar bg-rgba-warning p-50 m-0">
                        <div class="avatar-content">
                            <i class="feather icon-package text-warning font-medium-5"></i>
                        </div>
                    </div>
                    <br>
                    <h2 class="text-bold-700 mt-1 mb-25">{{ $theme_queues_count }}</h2>
                    <p class="mb-0">No. Of Queued Themes</p>
                </div>
                <div class="card-content">
                    <br>
                </div>
            </div>
          </div>
              <div class="col-lg-6 col-md-6 col-12">
            <div class="card">
                <div class="card-header d-flex flex-column align-items-start pb-0">
                    <h2 class="text-bold-700 mt-1 mb-25"><button class="btn btn-outline-primary">View All</button></h2>
                    <br>
                    <h2 class="mb-2">View Queued Themes</h2>
                </div>
                <div class="card-content">
                    <br>
                </div>
            </div>
          </div>
      </div>
          

      </div>
    </section>

    @endif
  <!-- Dashboard Analytics end -->
  @endsection

@section('vendor-script')
        <!-- vendor files -->
        <script src="{{ asset(mix('vendors/js/charts/apexcharts.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/extensions/tether.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/extensions/shepherd.min.js')) }}"></script>
@endsection
@section('page-script')
        <!-- Page js files -->
        <script src="{{ asset(mix('js/scripts/pages/dashboard-analytics.js')) }}"></script>
@endsection
