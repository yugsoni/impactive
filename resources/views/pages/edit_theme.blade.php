
@extends('layouts/contentLayoutMaster')

@section('title', 'Theme Edit')

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
                  <img src="{{ asset('images/pages/register.jpg') }}" alt="branding logo">
              </div>

              <div class="col-lg-6 col-12 p-0">
                  <div class="card rounded-0 mb-0 px-2">
                      <div class="card-header pb-1">
                          <div class="card-title">
                              <h4 class="mb-0">Edit Theme</h4>
                          </div>
                      </div>
                      <p class="px-2">Welcome {{ Auth::user()->name }}, Edit Your theme details</p>
                      <div class="card-content">
                        
                          <div class="card-body pt-1">
                            @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                            </div>
{{--                             <img src="uploads/{{ Session::get('image-upload') }}"> --}}
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
                            <form  action="{{ route('edit.theme', $view_theme_back->id) }}" method="POST" enctype="multipart/form-data">
                              @csrf
                                <fieldset class="form-label-group form-group position-relative has-icon-left">
                                  <input id="label-placeholder" type="theme_name" class="form-control" value="{{ $view_theme_back->theme_name }}" name="edited_theme_name" placeholder="Enter the Theme Name" autofocus>
                                  <div class="form-control-position">
                                      <i class="feather icon-edit"></i>
                                  </div>
                                  <label for="label-placeholder">Enter the Theme Name</label>

                              </fieldset>
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <select class="select2-size-md form-control" name="edited_category_select" id="large-select">
                                        <option>Select A Category</option>
                                        <option selected value="{{ $view_theme_back->theme_name }}">{{ $view_theme_back->theme_category }}</option>
                                        @foreach ($view_category_drop as $view_category_drops)
                                            <option value="{{ $view_category_drops->category }}">{{ $view_category_drops->category }}</option>
                                        @endforeach
                                      </select>
                                    </div>
                                  </div>
                                <div class="col-md-6">
                                  <fieldset class="form-label-group form-group position-relative has-icon-left">
                                  <input id="theme_price" type="theme_price" class="form-control" name="edited_theme_price" value="{{ $view_theme_back->theme_price }}" placeholder="Enter the Theme Price"  autofocus>
                                  <div class="form-control-position">
                                      <i class="feather icon-dollar-sign"></i>
                                  </div>
                                  <label for="theme_price">Enter the Theme Price</label>
                                  <small>Write FREE if the template is free</small>
                                  </fieldset>
                                </div>
                              </div>
                              <fieldset class="form-label-group">
                                  <textarea class="form-control" name="edited_theme_description" id="label-textarea" maxlength="2000" onkeydown="limitText(this.form.edited_theme_description,this.form.countdown,2000);" onkeyup='limitText(this.form.theme_description,this.form.countdown,2000);' rows="3" placeholder="Enter the Theme Description">{{ $view_theme_back->theme_discription }}</textarea>
                                  <label for="label-textarea">Enter the Theme Description</label>
                                  <input readonly type="text" name="countdown" size="10" value="2000" style="height: 30px;"> Characters left
                              </fieldset>   
                              <fieldset class="form-group">
                                  <label for="basicInputFile">Choose Theme Image File</label>
                                  <div class="custom-file">
                                      <input type="file" name="edited_image_upload" class="custom-file-input" id="inputGroupFile01">
                                      <label class="custom-file-label" for="inputGroupFile01">Choose Theme Image File</label>
                                  </div>
                              </fieldset>   
                              <fieldset class="form-group">
                                  <label for="basicInputFile">Choose Theme File</label>
                                  <div class="custom-file">
                                      <input type="file" name="edited_file_upload" class="custom-file-input" id="inputGroupFile01">
                                      <label class="custom-file-label" for="inputGroupFile01">Choose Theme File</label>
                                  </div>
                              </fieldset>      
                                <a href="{{ url('theme-view') }}" class="btn btn-outline-primary float-left btn-inline">Move to see all Themes</a>
                              <button  type="submit" class="btn btn-primary float-right btn-inline">Create</button>
                            </form>
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


