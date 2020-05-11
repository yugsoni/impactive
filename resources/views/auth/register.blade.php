@extends('layouts/fullLayoutMaster')

@section('title', 'Register Page')

@section('page-style')
        {{-- Page Css files --}}
        <link rel="stylesheet" href="{{ asset(mix('css/pages/authentication.css')) }}">
@endsection
@section('content')
<section class="row flexbox-container">
  <div class="col-xl-10 col-10 d-flex justify-content-center">
      <div class="card bg-authentication rounded-0 mb-0">
          <div class="row m-0">
              <div class="col-lg-6 d-lg-block d-none text-center align-self-center pl-0 pr-3 py-0">
                  <img src="{{ asset('images/pages/graphic-3.png') }}" alt="branding logo">
              </div>
              <div class="col-lg-6 col-12 p-0">
                  <div class="card rounded-0 mb-0 p-2">
                      <div class="card-header pt-50 pb-1">
                          <div class="card-title">
                              <h4 class="mb-0">Create Account</h4>
                          </div>
                      </div>
                      <p class="px-2">Fill the below form to create a new account.</p>
                      <div class="card-content">
                          <div class="card-body pt-0">
                            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                              @csrf
                                  <div class="form-label-group">
                                      <!-- <input type="text" id="inputName" class="form-control" placeholder="Name" > -->
                                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Name" value="{{ old('name') }}"  autocomplete="name" autofocus>
                                      <label for="name">Name</label>
                                      @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                      @enderror
                                  </div>
                                  <div class="form-label-group">
                                      <!-- <input type="text" id="inputName" class="form-control" placeholder="Name" > -->
                                      <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Username" value="{{ old('username') }}"  autocomplete="username" autofocus>
                                      <label for="username">Username</label>
                                      @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                      @enderror
                                  </div>
                                  <div class="form-label-group">
                                      <!-- <input type="email" id="inputEmail" class="form-control" placeholder="Email" required> -->
                                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" autocomplete="email">
                                      <label for="email">Email</label>
                                      @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                      @enderror
                                  </div>
                                  {{-- <div class="form-label-group">
                                  
                                  <div class="custom-file">
                                      <input type="file" name="avatar" class="custom-file-input" id="inputGroupFile01">
                                      <label class="custom-file-label" for="inputGroupFile01">Choose Theme Image File</label>
                                      @error('avatar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                      @enderror
                                  </div>
                                  </div> --}}
                                  <div class="form-label-group">
                                    Please Upload Your Profile Picture
                                      <label for="avatar">Please Upload Your Avatar</label>
                                      <input id="avatar" type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar">
                                      @error('avatar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                      @enderror
                                  </div>
                                  <div class="form-label-group">
                                      <label for="country">Please Select Your Country</label>
                                      <select class="form-control" name="country" required>
                                         <option value="">Select A Country</option>
                                         <option value="Afganistan">Afghanistan</option>
                                         <option value="Albania">Albania</option>
                                         <option value="Algeria">Algeria</option>
                                         <option value="America">America</option>
                                         <option value="Andorra">Andorra</option>
                                         <option value="Angola">Angola</option>
                                         <option value="Anguilla">Anguilla</option>
                                         <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                         <option value="Argentina">Argentina</option>
                                         <option value="Armenia">Armenia</option>
                                         <option value="Aruba">Aruba</option>
                                         <option value="Australia">Australia</option>
                                         <option value="Austria">Austria</option>
                                         <option value="Azerbaijan">Azerbaijan</option>
                                         <option value="Bahamas">Bahamas</option>
                                         <option value="Bahrain">Bahrain</option>
                                         <option value="Bangladesh">Bangladesh</option>
                                         <option value="Barbados">Barbados</option>
                                         <option value="Belarus">Belarus</option>
                                         <option value="Belgium">Belgium</option>
                                         <option value="Belize">Belize</option>
                                         <option value="Benin">Benin</option>
                                         <option value="Bermuda">Bermuda</option>
                                         <option value="Bhutan">Bhutan</option>
                                         <option value="Bolivia">Bolivia</option>
                                         <option value="Bonaire">Bonaire</option>
                                         <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                         <option value="Botswana">Botswana</option>
                                         <option value="Brazil">Brazil</option>
                                         <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                         <option value="Brunei">Brunei</option>
                                         <option value="Bulgaria">Bulgaria</option>
                                         <option value="Burkina Faso">Burkina Faso</option>
                                         <option value="Burundi">Burundi</option>
                                         <option value="Cambodia">Cambodia</option>
                                         <option value="Cameroon">Cameroon</option>
                                         <option value="Canada">Canada</option>
                                         <option value="Canary Islands">Canary Islands</option>
                                         <option value="Cape Verde">Cape Verde</option>
                                         <option value="Cayman Islands">Cayman Islands</option>
                                         <option value="Central African Republic">Central African Republic</option>
                                         <option value="Chad">Chad</option>
                                         <option value="Channel Islands">Channel Islands</option>
                                         <option value="Chile">Chile</option>
                                         <option value="China">China</option>
                                         <option value="Christmas Island">Christmas Island</option>
                                         <option value="Cocos Island">Cocos Island</option>
                                         <option value="Colombia">Colombia</option>
                                         <option value="Comoros">Comoros</option>
                                         <option value="Congo">Congo</option>
                                         <option value="Cook Islands">Cook Islands</option>
                                         <option value="Costa Rica">Costa Rica</option>
                                         <option value="Cote DIvoire">Cote DIvoire</option>
                                         <option value="Croatia">Croatia</option>
                                         <option value="Cuba">Cuba</option>
                                         <option value="Curaco">Curacao</option>
                                         <option value="Cyprus">Cyprus</option>
                                         <option value="Czech Republic">Czech Republic</option>
                                         <option value="Denmark">Denmark</option>
                                         <option value="Djibouti">Djibouti</option>
                                         <option value="Dominica">Dominica</option>
                                         <option value="Dominican Republic">Dominican Republic</option>
                                         <option value="East Timor">East Timor</option>
                                         <option value="Ecuador">Ecuador</option>
                                         <option value="Egypt">Egypt</option>
                                         <option value="El Salvador">El Salvador</option>
                                         <option value="Equatorial Guinea">Equatorial Guinea</option>
                                         <option value="Eritrea">Eritrea</option>
                                         <option value="Estonia">Estonia</option>
                                         <option value="Ethiopia">Ethiopia</option>
                                         <option value="Falkland Islands">Falkland Islands</option>
                                         <option value="Faroe Islands">Faroe Islands</option>
                                         <option value="Fiji">Fiji</option>
                                         <option value="Finland">Finland</option>
                                         <option value="France">France</option>
                                         <option value="French Guiana">French Guiana</option>
                                         <option value="French Polynesia">French Polynesia</option>
                                         <option value="French Southern Ter">French Southern Ter</option>
                                         <option value="Gabon">Gabon</option>
                                         <option value="Gambia">Gambia</option>
                                         <option value="Georgia">Georgia</option>
                                         <option value="Germany">Germany</option>
                                         <option value="Ghana">Ghana</option>
                                         <option value="Gibraltar">Gibraltar</option>
                                         <option value="Great Britain">Great Britain</option>
                                         <option value="Greece">Greece</option>
                                         <option value="Greenland">Greenland</option>
                                         <option value="Grenada">Grenada</option>
                                         <option value="Guadeloupe">Guadeloupe</option>
                                         <option value="Guam">Guam</option>
                                         <option value="Guatemala">Guatemala</option>
                                         <option value="Guinea">Guinea</option>
                                         <option value="Guyana">Guyana</option>
                                         <option value="Haiti">Haiti</option>
                                         <option value="Hawaii">Hawaii</option>
                                         <option value="Honduras">Honduras</option>
                                         <option value="Hong Kong">Hong Kong</option>
                                         <option value="Hungary">Hungary</option>
                                         <option value="Iceland">Iceland</option>
                                         <option value="Indonesia">Indonesia</option>
                                         <option value="India">India</option>
                                         <option value="Iran">Iran</option>
                                         <option value="Iraq">Iraq</option>
                                         <option value="Ireland">Ireland</option>
                                         <option value="Isle of Man">Isle of Man</option>
                                         <option value="Israel">Israel</option>
                                         <option value="Italy">Italy</option>
                                         <option value="Jamaica">Jamaica</option>
                                         <option value="Japan">Japan</option>
                                         <option value="Jordan">Jordan</option>
                                         <option value="Kazakhstan">Kazakhstan</option>
                                         <option value="Kenya">Kenya</option>
                                         <option value="Kiribati">Kiribati</option>
                                         <option value="Korea North">Korea North</option>
                                         <option value="Korea Sout">Korea South</option>
                                         <option value="Kuwait">Kuwait</option>
                                         <option value="Kyrgyzstan">Kyrgyzstan</option>
                                         <option value="Laos">Laos</option>
                                         <option value="Latvia">Latvia</option>
                                         <option value="Lebanon">Lebanon</option>
                                         <option value="Lesotho">Lesotho</option>
                                         <option value="Liberia">Liberia</option>
                                         <option value="Libya">Libya</option>
                                         <option value="Liechtenstein">Liechtenstein</option>
                                         <option value="Lithuania">Lithuania</option>
                                         <option value="Luxembourg">Luxembourg</option>
                                         <option value="Macau">Macau</option>
                                         <option value="Macedonia">Macedonia</option>
                                         <option value="Madagascar">Madagascar</option>
                                         <option value="Malaysia">Malaysia</option>
                                         <option value="Malawi">Malawi</option>
                                         <option value="Maldives">Maldives</option>
                                         <option value="Mali">Mali</option>
                                         <option value="Malta">Malta</option>
                                         <option value="Marshall Islands">Marshall Islands</option>
                                         <option value="Martinique">Martinique</option>
                                         <option value="Mauritania">Mauritania</option>
                                         <option value="Mauritius">Mauritius</option>
                                         <option value="Mayotte">Mayotte</option>
                                         <option value="Mexico">Mexico</option>
                                         <option value="Midway Islands">Midway Islands</option>
                                         <option value="Moldova">Moldova</option>
                                         <option value="Monaco">Monaco</option>
                                         <option value="Mongolia">Mongolia</option>
                                         <option value="Montserrat">Montserrat</option>
                                         <option value="Morocco">Morocco</option>
                                         <option value="Mozambique">Mozambique</option>
                                         <option value="Myanmar">Myanmar</option>
                                         <option value="Nambia">Nambia</option>
                                         <option value="Nauru">Nauru</option>
                                         <option value="Nepal">Nepal</option>
                                         <option value="Netherland">Netherland</option>
                                         <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                         <option value="Nevis">Nevis</option>
                                         <option value="New Caledonia">New Caledonia</option>
                                         <option value="New Zealand">New Zealand</option>
                                         <option value="Nicaragua">Nicaragua</option>
                                         <option value="Niger">Niger</option>
                                         <option value="Nigeria">Nigeria</option>
                                         <option value="Niue">Niue</option>
                                         <option value="Norfolk Island">Norfolk Island</option>
                                         <option value="Norway">Norway</option>
                                         <option value="Oman">Oman</option>
                                         <option value="Pakistan">Pakistan</option>
                                         <option value="Palau Island">Palau Island</option>
                                         <option value="Palestine">Palestine</option>
                                         <option value="Panama">Panama</option>
                                         <option value="Papua New Guinea">Papua New Guinea</option>
                                         <option value="Paraguay">Paraguay</option>
                                         <option value="Peru">Peru</option>
                                         <option value="Phillipines">Philippines</option>
                                         <option value="Pitcairn Island">Pitcairn Island</option>
                                         <option value="Poland">Poland</option>
                                         <option value="Portugal">Portugal</option>
                                         <option value="Puerto Rico">Puerto Rico</option>
                                         <option value="Qatar">Qatar</option>
                                         <option value="Republic of Montenegro">Republic of Montenegro</option>
                                         <option value="Republic of Serbia">Republic of Serbia</option>
                                         <option value="Reunion">Reunion</option>
                                         <option value="Romania">Romania</option>
                                         <option value="Russia">Russia</option>
                                         <option value="Rwanda">Rwanda</option>
                                         <option value="St Barthelemy">St Barthelemy</option>
                                         <option value="St Eustatius">St Eustatius</option>
                                         <option value="St Helena">St Helena</option>
                                         <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                         <option value="St Lucia">St Lucia</option>
                                         <option value="St Maarten">St Maarten</option>
                                         <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                         <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                         <option value="Saipan">Saipan</option>
                                         <option value="Samoa">Samoa</option>
                                         <option value="Samoa American">Samoa American</option>
                                         <option value="San Marino">San Marino</option>
                                         <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                         <option value="Saudi Arabia">Saudi Arabia</option>
                                         <option value="Senegal">Senegal</option>
                                         <option value="Seychelles">Seychelles</option>
                                         <option value="Sierra Leone">Sierra Leone</option>
                                         <option value="Singapore">Singapore</option>
                                         <option value="Slovakia">Slovakia</option>
                                         <option value="Slovenia">Slovenia</option>
                                         <option value="Solomon Islands">Solomon Islands</option>
                                         <option value="Somalia">Somalia</option>
                                         <option value="South Africa">South Africa</option>
                                         <option value="Spain">Spain</option>
                                         <option value="Sri Lanka">Sri Lanka</option>
                                         <option value="Sudan">Sudan</option>
                                         <option value="Suriname">Suriname</option>
                                         <option value="Swaziland">Swaziland</option>
                                         <option value="Sweden">Sweden</option>
                                         <option value="Switzerland">Switzerland</option>
                                         <option value="Syria">Syria</option>
                                         <option value="Tahiti">Tahiti</option>
                                         <option value="Taiwan">Taiwan</option>
                                         <option value="Tajikistan">Tajikistan</option>
                                         <option value="Tanzania">Tanzania</option>
                                         <option value="Thailand">Thailand</option>
                                         <option value="Togo">Togo</option>
                                         <option value="Tokelau">Tokelau</option>
                                         <option value="Tonga">Tonga</option>
                                         <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                         <option value="Tunisia">Tunisia</option>
                                         <option value="Turkey">Turkey</option>
                                         <option value="Turkmenistan">Turkmenistan</option>
                                         <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                         <option value="Tuvalu">Tuvalu</option>
                                         <option value="Uganda">Uganda</option>
                                         <option value="United Kingdom">United Kingdom</option>
                                         <option value="Ukraine">Ukraine</option>
                                         <option value="United Arab Erimates">United Arab Emirates</option>
                                         <option value="United States of America">United States of America</option>
                                         <option value="Uraguay">Uruguay</option>
                                         <option value="Uzbekistan">Uzbekistan</option>
                                         <option value="Vanuatu">Vanuatu</option>
                                         <option value="Vatican City State">Vatican City State</option>
                                         <option value="Venezuela">Venezuela</option>
                                         <option value="Vietnam">Vietnam</option>
                                         <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                         <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                         <option value="Wake Island">Wake Island</option>
                                         <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                         <option value="Yemen">Yemen</option>
                                         <option value="Zaire">Zaire</option>
                                         <option value="Zambia">Zambia</option>
                                         <option value="Zimbabwe">Zimbabwe</option>
                                      </select>
                                      @error('country')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                      @enderror
                                  </div>
                                  <div class="form-label-group">
                                      <label for="gender">Please Select Your Gender</label>
                                      <select class="form-control" name="gender" required>
                                         <option value="">Select A Gender</option>
                                         <option value="Male">Male</option>
                                         <option value="Female">Female</option>
                                         <option value="Rather Not Say">Rather Not Say</option>
                                      </select>
                                      @error('gender')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                      @enderror
                                  </div>
                                  <div class="form-label-group">
                                      <!-- <input type="password" id="inputPassword" class="form-control" placeholder="Password" required> -->
                                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password"  autocomplete="new-password">
                                      <label for="password">Password</label>
                                      @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                      @enderror
                                  </div>
                                  <div class="form-label-group">
                                      <!-- <input type="password" id="inputConfPassword" class="form-control" placeholder="Confirm Password" > -->
                                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password"  autocomplete="new-password">
                                      <label for="password-confirm">Confirm Password</label>
                                  </div>
                                  <div class="form-group row">
                                      <div class="col-12">
                                          <fieldset class="checkbox">
                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                              <input type="checkbox" checked>
                                              <span class="vs-checkbox">
                                                <span class="vs-checkbox--check">
                                                  <i class="vs-icon feather icon-check"></i>
                                                </span>
                                              </span>
                                              <span class=""> I accept the terms & conditions.</span>
                                            </div>
                                          </fieldset>
                                      </div>
                                  </div>
                                  <a href="login" class="btn btn-outline-primary float-left btn-inline mb-50">Login</a>
                                  <button type="submit" class="btn btn-primary float-right btn-inline mb-50">Register</a>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
@endsection
