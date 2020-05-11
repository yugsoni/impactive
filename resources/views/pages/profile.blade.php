
@extends('layouts/contentLayoutMaster')

@section('title', 'Profile')

@section('page-style')
        <!-- Page css files -->
        <link rel="stylesheet" href="{{ asset(mix('css/pages/authentication.css')) }}"> 
@endsection
@section('content')
    <section class="row">
  <div class="col-xl-10 col-11">
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
 <script type="text/javascript">
       function limitText(limitField, limitCount, limitNum) {
          if (limitField.value.length > limitNum) {
            limitField.value = limitField.value.substring(0, limitNum);
          } else {
            limitCount.value = limitNum - limitField.value.length;
          }
        }
    </script>
</section>
@endsection


