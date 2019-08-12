@extends('layouts.app')
@section('title', 'Edit Profile')
@section('content')
<div class="container">
    <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-header text-center">
                <h4>Step 1 - Personal Details</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="first_name"><strong>First Name</strong></label>
                            <input id="first_name" name="first_name" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }} col-6" type="text" value="{{ old('name', $user->first_name) }}">
                            @if ($errors->has('first_name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('first_name') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="last_name"><strong>Last Name</strong></label>
                            <input id="last_name" name="last_name" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }} col-6" type="text" value="{{ old('name', $user->last_name) }}">
                            @if ($errors->has('last_name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('last_name') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="email"><strong>Email</strong></label>
                            <input id="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} col-6" type="text" value="{{ old('email', $user->email) }}">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="dni_type"><strong>DNI Type</strong></label>
                            <div class="row">
                                <div class="col-4">
                                    <select id="inputGroupSelect04" name="dni_type" class="form-control{{ $errors->has('dni_type') ? ' is-invalid' : '' }}" value="{{ old('name', $user->dni_type) }}">
                                        <option value="DNI">DNI</option>
                                        <option value="Passport">Passport</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <input id="dni" name="dni" class="form-control{{ $errors->has('dni') ? ' is-invalid' : '' }} col-6" type="text" value="{{ old('name', $user->dni) }}">
                                    @if ($errors->has('dni'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->dni('dni') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="gender"><strong>Gender</strong></label>
                            <select id="gender" name="gender" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }} col-3" value="{{ old('name', $user->gender) }}">
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nationality"><strong>Nationality</strong></label>
                            <input id="nationality" name="nationality" class="form-control{{ $errors->has('nationality') ? ' is-invalid' : '' }} col-6" type="text" value="{{ old('name', $user->nationality) }}">
                            @if ($errors->has('nationality'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('nationality') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="country"><strong>Country / City</strong></label>
                            <div class="row">
                                <div class="col">
                                    <select name="country" id="country" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" value="{{ old('name', $user->country) }}">
                                        <option value="{{ old('name', $user->country) }}" selected>{{ old('name', $user->country) }}</option>
                                        <option value="United States">United States</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antarctica">Antarctica</option>
                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
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
                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Bouvet Island">Bouvet Island</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Cape Verde">Cape Verde</option>
                                        <option value="Cayman Islands">Cayman Islands</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Christmas Island">Christmas Island</option>
                                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Congo">Congo</option>
                                        <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                        <option value="Cook Islands">Cook Islands</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Cote D'ivoire">Cote D'ivoire</option>
                                        <option value="Croatia">Croatia</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="French Guiana">French Guiana</option>
                                        <option value="French Polynesia">French Polynesia</option>
                                        <option value="French Southern Territories">French Southern Territories</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Gibraltar">Gibraltar</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Greenland">Greenland</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guadeloupe">Guadeloupe</option>
                                        <option value="Guam">Guam</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guinea-bissau">Guinea-bissau</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hong Kong">Hong Kong</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                        <option value="Korea, Republic of">Korea, Republic of</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Macao">Macao</option>
                                        <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Martinique">Martinique</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                        <option value="Moldova, Republic of">Moldova, Republic of</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Niue">Niue</option>
                                        <option value="Norfolk Island">Norfolk Island</option>
                                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau">Palau</option>
                                        <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Pitcairn">Pitcairn</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Reunion">Reunion</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russian Federation">Russian Federation</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="Saint Helena">Saint Helena</option>
                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                        <option value="Saint Lucia">Saint Lucia</option>
                                        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                        <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Slovakia">Slovakia</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                        <option value="Swaziland">Swaziland</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                        <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Timor-leste">Timor-leste</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tokelau">Tokelau</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Viet Nam">Viet Nam</option>
                                        <option value="Virgin Islands, British">Virgin Islands, British</option>
                                        <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                        <option value="Wallis and Futuna">Wallis and Futuna</option>
                                        <option value="Western Sahara">Western Sahara</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <input id="city" name="city" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" type="text" value="{{ old('name', $user->city) }}"
                                        placeholder="e.g. city York">
                                    @if ($errors->has('city'))
                                    <span class="invalid-feedback"city role="alert">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="mobile_phone"><strong>Mobile Phone</strong></label>
                            <input id="mobile_phone" name="mobile_phone" class="form-control{{ $errors->has('mobile_phone') ? ' is-invalid' : '' }} col-6" type="text" value="{{ old('name', $user->mobile_phone) }}" placeholder="e.g. +1">
                            @if ($errors->has('mobile_phone'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('mobile_phone') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="home_phone"><strong>Home Phone</strong></label>
                            <input id="home_phone" name="home_phone" class="form-control{{ $errors->has('home_phone') ? ' is-invalid' : '' }} col-6" type="text" value="{{ old('name', $user->home_phone) }}" placeholder="e.g. +1">
                            @if ($errors->has('home_phone'))
                            <span class="invalid-feedback" role="home_phone">
                                <strong>{{ $errors->first('home_phone') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="office_phone"><strong>Office Phone</strong></label>
                            <input id="office_phone" name="office_phone" class="form-control{{ $errors->has('office_phone') ? ' is-invalid' : '' }} col-6" type="text" value="{{ old('name', $user->office_phone) }}" placeholder="e.g. +1">
                            @if ($errors->has('office_phone'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('office_phone') }}</strong>
                            </span>
                            @endif
                            <div class="form-group">
                                <label for="alt_email"><strong>Alternative Email Address</strong></label>
                                <input id="alt_email" name="alt_email" class="form-control{{ $errors->has('alt_email') ? ' is-invalid' : '' }} col-6" type="email" value="{{ old('name', $user->alt_email) }}" placeholder="e.g. email@user.com">
                                @if ($errors->has('alt_email'))
                                <span class="invalid-feedback" role="alt_email">
                                    <strong>{{ $errors->first('alt_email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header text-center">
                    <h5>Step 2 - Professional Information</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="years_labo"><strong>Years of Work Experience</strong></label>
                                <input id="years_labo" name="years_labo" class="form-control{{ $errors->has('years_labo') ? ' is-invalid' : '' }} col-6" type="number" min="1" max="99" value="{{ old('years_labo', $user->years_labo) }}" placeholder="e.g. 3">
                                @if ($errors->has('years_labo'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('years_labo') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="employer"><strong>Current Employer</strong></label>
                                <input id="employer" name="employer" class="form-control{{ $errors->has('employer') ? ' is-invalid' : '' }} col-6" type="text" value="{{ old('name', $user->employer) }}">
                                @if ($errors->has('employer'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('employer') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="function"><strong>Function</strong></label>
                                <input id="function" name="function" class="form-control{{ $errors->has('function') ? ' is-invalid' : '' }} col-6" type="text" value="{{ old('name', $user->function) }}" placeholder="e.g.">
                                @if ($errors->has('function'))
                                <span class="invalid-feedback" role="function">
                                    <strong>{{ $errors->first('function') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="industry"><strong>Field of Industry</strong></label>
                                <select id="industry" name="industry" class="form-control{{ $errors->has('industry') ? ' is-invalid' : '' }} col-6" value="{{ old('name', $user->industry) }}">
                                    <option selected>Select</option>
                                    <option value="Tecnologic">Tecnologic</option>
                                    <option value="Desing">Desing</option>
                                    <option value="Social">Social</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="alt_industry"><strong>If other, which one</strong></label>
                                <input id="alt_industry" name="alt_industry" class="form-control{{ $errors->has('alt_industry') ? ' is-invalid' : '' }} col-6" type="text" value="{{ old('name', $user->alt_industry) }}">
                                @if ($errors->has('alt_industry'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('alt_industry') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="job_title"><strong>Job Title</strong></label>
                                <input id="job_title" name="job_title" class="form-control{{ $errors->has('job_title') ? ' is-invalid' : '' }} col-6" type="text" value="{{ old('name', $user->job_title) }}">
                                @if ($errors->has('job_title'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('job_title') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header text-center">
                    <h4>Step 3 - Educational Information</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h4 class="text-info">Undergraduate Degree</h4>
                            <hr>
                            <div class="form-group">
                                <label for="university"><strong>University</strong></label>
                                <input id="university" name="university" class="form-control{{ $errors->has('university') ? ' is-invalid' : '' }}" type="text" value="{{ old('name', $user->university) }}">
                                @if ($errors->has('university'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('university') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="career"><strong>Undergraduate Degree</strong></label>
                                <input id="career" name="career" class="form-control{{ $errors->has('career') ? ' is-invalid' : '' }}" type="text" value="{{ old('name', $user->career) }}">
                                @if ($errors->has('career'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('career') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="gpa"><strong>GPA</strong></label>
                                <div class="row">
                                    <div class="col">
                                        <input id="from_gpa" name="from_gpa" class="form-control{{ $errors->has('from_gpa') ? ' is-invalid' : '' }}" type="number" value="{{ old('name', $user->from_gpa) }}" min="1" max="99">
                                        @if ($errors->has('from_gpa'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('from_gpa') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="col text-center">
                                        <p>Out of</p>
                                    </div>
                                    <div class="col">
                                        <input id="to_gpa" name="to_gpa" class="form-control{{ $errors->has('to_gpa') ? ' is-invalid' : '' }}" type="number" value="{{ old('name', $user->to_gpa) }}"
                                            min="1" max="99">
                                        @if ($errors->has('to_gpa'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('to_gpa') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="date_grade"><strong>Graduating Year</strong></label>
                                <input name="date_grade" class="form-control{{ $errors->has('date_grade') ? ' is-invalid' : '' }} col-6" type="date" value="{{ old('name', $user->date_grade) }}">
                                @if ($errors->has('date_grade'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('date_grade') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="grade_honor"><strong>Graduated with Honor?</strong></label>
                                <select id="grade_honor" name="grade_honor" class="form-control{{ $errors->has('grade_honor') ? ' is-invalid' : '' }} col-3" value="{{ old('name', $user->grade_honor) }}">
                                    <option value="No">No</option>
                                    <option value="Yes">Yes</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <h4 class="text-info">Postgraduate Information</h4>
                            <hr>
                            <div class="form-group">
                                <label for="post_university"><strong>University</strong></label>
                                <input id="post_university" name="post_university" class="form-control{{ $errors->has('post_university') ? ' is-invalid' : '' }}" type="text" value="{{ old('name', $user->post_university) }}">
                                @if ($errors->has('post_university'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('post_university') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="postgrade_degree"><strong>Graduate Degree</strong></label>
                                <select id="postgrade_degree" name="postgrade_degree" class="form-control{{ $errors->has('postgrade_degree') ? ' is-invalid' : '' }} col-6" value="{{ old('name', $user->postgrade_degree) }}">
                                    <option value="None">None</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="postgrade_date"><strong>Graduating Year</strong></label>
                                <input id="postgrade_date" name="postgrade_date" class="form-control{{ $errors->has('postgrade_date') ? ' is-invalid' : '' }} col-6" type="date" value="{{ old('name', $user->postgrade_date) }}">
                                @if ($errors->has('postgrade_date'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->firs }}t('postgrade_date') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="postgrade_specialization"><strong>Area of Specialization</strong></label>
                                <input id="postgrade_specialization" name="postgrade_specialization" class="form-control{{ $errors->has('postgrade_specialization') ? ' is-invalid' : '' }}" type="text" value="{{ old('name', $user->postgrade_specialization) }}">
                                @if ($errors->has('postgrade_specialization'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('postgrade_specialization') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="post_from_gpa"><strong>GPA</strong></label>
                                <div class="row">
                                    <div class="col">
                                        <input id="post_from_gpa" name="post_from_gpa" class="form-control{{ $errors->has('post_from_gpa') ? ' is-invalid' : '' }}" type="number" value="{{ old('post_from_gpa', $user->post_from_gpa) }}">
                                        @if ($errors->has('post_from_gpa'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('post_from_gpa') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="col text-center">
                                        <p>Out of</p>
                                    </div>
                                    <div class="col">
                                        <input id="post_to_gpa" name="post_to_gpa" class="form-control{{ $errors->has('post_to_gpa') ? ' is-invalid' : '' }}" type="number"
                                            value="{{ old('name', $user->post_to_gpa) }}">
                                        @if ($errors->has('post_to_gpa'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('post_to_gpa') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="post_honor"><strong>Graduated with Honor?</strong></label>
                                <select id="post_honor" name="post_honor" class="form-control{{ $errors->has('post_honor') ? ' is-invalid' : '' }} col-3" value="{{ old('name', $user->post_honor) }}">
                                    <option value="No">No</option>
                                    <option value="Yes">Yes</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header text-center">
                    <h4>Step 4 - MBA Preparation</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="mba_date"><strong>When do you want to start your MBA?</strong></label>
                        <input id="mba_date" name="mba_date" class="form-control{{ $errors->has('mba_date') ? ' is-invalid' : '' }} col-3" value="{{ old('name', $user->mba_date) }}" type="date">
                        @if ($errors->has('mba_date'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('mba_date') }}</strong>
                        </span>
                        @endif
                    </div>
                    <hr>
                    <p><strong>Have you taken any of the following exams?</strong></p>
                    <hr>
                    <div class="form-group">
                        <label for="gmat_confirmation"><strong>GMAT</strong></label>
                        <select id="gmat_confirmation" name="gmat_confirmation" class="form-control{{ $errors->has('gmat_confirmation') ? ' is-invalid' : '' }} col-1" value="{{ old('name', $user->gmat_confirmation) }}">
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                        </select>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="gmat_month">
                            <strong>
                                If YES, when did you take the test? if NO, when you planning to take the test?
                            </strong>
                        </label>
                        <input id="gmat_month" name="gmat_month" class="form-control{{ $errors->has('gmat_month') ? ' is-invalid' : '' }} col-3" value="{{ old('name', $user->gmat_month) }}" type="month">
                        @if ($errors->has('gmat_month'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('gmat_month') }}</strong>
                        </span>
                        @endif
                    </div>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td></td>

                                <td><strong>Raw Score</strong></td>

                                <td><strong>Percentile</strong></td>

                            </tr>
                            <tr>
                                <td>Overall score</td>

                                <td>
                                    <input id="gmat_global_score" name="gmat_global_score" class="form-control{{ $errors->has('gmat_global_score') ? ' is-invalid' : '' }}" value="{{ old('name', $user->gmat_global_score) }}"
                                        type="number" min="1" max="99">
                                    @if ($errors->has('gmat_global_score'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gmat_global_score') }}</strong>
                                    </span>
                                    @endif
                                </td>

                                <td>
                                    <div class="raw">
                                        <input id="gmat_global_percent" name="gmat_global_percent" class="form-control{{ $errors->has('gmat_global_percent') ? ' is-invalid' : '' }}" value="{{ old('name', $user->gmat_global_percent) }}" type="number" min="1" max="99">
                                        @if ($errors->has('gmat_global_percent'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('gmat_global_percent') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </td>

                                <td>{{ __('%') }}</td>
                            </tr>
                            <tr>
                                <td>Essays</td>

                                <td>
                                    <input id="gmat_essay_score" name="gmat_essay_score" class="form-control{{ $errors->has('gmat_essay_score') ? ' is-invalid' : '' }}" value="{{ old('name', $user->gmat_essay_score) }}" type="number" min="1" max="99">
                                    @if ($errors->has('gmat_essay_score'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gmat_essay_score') }}</strong>
                                    </span>
                                    @endif
                                </td>

                                <td>
                                    <input id="gmat_essay_percent" name="gmat_essay_percent" class="form-control{{ $errors->has('gmat_essay_percent') ? ' is-invalid' : '' }}" value="{{ old('name', $user->gmat_essay_percent) }}" type="number" min="1" max="99">
                                    @if ($errors->has('gmat_essay_percent'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gmat_essay_percent') }}</strong>
                                    </span>
                                    @endif
                                </td>

                                <td>{{ __('%') }}</td>
                            </tr>

                            <tr>
                                <td>
                                    Verbal
                                </td>

                                <td>
                                    <input id="gmat_verbal_score" name="gmat_verbal_score" class="form-control{{ $errors->has('gmat_verbal_score') ? ' is-invalid' : '' }}" value="{{ old('name', $user->gmat_verbal_score) }}" type="number" min="1" max="99">
                                    @if ($errors->has('gmat_verbal_score'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gmat_verbal_score') }}</strong>
                                    </span>
                                    @endif
                                </td>

                                <td>
                                    <input id="gmat_verbal_percent" name="gmat_verbal_percent" class="form-control{{ $errors->has('gmat_verbal_percent') ? ' is-invalid' : '' }}" value="{{ old('gmat_verbal_percent', $user->gmat_verbal_percent) }}" type="number" min="1" max="99">
                                    @if ($errors->has('gmat_verbal_percent'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gmat_verbal_percent') }}</strong>
                                    </span>
                                    @endif
                                </td>

                                <td>{{ __('%') }}</td>
                            </tr>

                            <tr>
                                <td>
                                    Math
                                </td>
                                <td>
                                    <input id="gmat_math_score" name="gmat_math_score" class="form-control{{ $errors->has('gmat_math_score')?'is-invalid':'' }}" value="{{ old('name', $user->gmat_math_score) }}" type="number" min="1" max="9">
                                    @if ($errors->has('gmat_math_score'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gmat_math_score') }}</strong>
                                    </span>
                                    @endif
                                </td>
                                <td>
                                    <input id="gmat_math_percent" name="gmat_math_percent" class="form-control{{ $errors->has('gmat_math_percent') ? ' is-invalid' : '' }}" value="{{ old('gmat_math_percent', $user->gmat_math_percent) }}" type="number" min="1" max="99">
                                    @if ($errors->has('gmat_math_percent'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gmat_math_percent') }}</strong>
                                    </span>
                                    @endif
                                </td>
                                <td>{{ __('%') }}</td>
                            </tr>
                            <tr>
                                <td>Integrated Reasoning</td>
                                <td>
                                    <input id="gmat_reasoning_score" name="gmat_reasoning_score" class="form-control{{ $errors->has('gmat_reasoning_score') ? ' is-invalid' : '' }}" value="{{ old('name', $user->gmat_reasoning_score) }}" type="number" min="1" max="99">
                                    @if ($errors->has('gmat_reasoning_score'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gmat_reasoning_score') }}</strong>
                                    </span>
                                    @endif
                                </td>
                                <td>
                                    <input id="gmat_reasoning_percent" name="gmat_reasoning_percent" class="form-control{{ $errors->has('gmat_reasoning_percent') ? ' is-invalid' : '' }}" value="{{ old('name', $user->gmat_reasoning_percent) }}" type="number" min="1" max="99">
                                    @if ($errors->has('gmat_reasoning_percent'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gmat_reasoning_percent') }}</strong>
                                    </span>
                                    @endif
                                </td>
                                <td>{{ __('%') }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr>
                <div class="card-body">
                    <div class="form-group">
                        <label for="gre_confirmation"><strong>GRE</strong></label>
                        <select id="gre_confirmation" name="gre_confirmation" class="form-control{{ $errors->has('gre_confirmation') ? ' is-invalid' : '' }} col-1" value="{{ old('name', $user->gre_confirmation) }}">
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="gre_month">
                            <strong>
                                If Yes, when did you take the test? If NO, when are you planning to take it?
                            </strong>
                        </label>
                        <input id="gre_month" name="gre_month" class="form-control{{ $errors->has('gre_month') ? ' is-invalid' : '' }} col-3" value="{{ old('name', $user->gre_month) }}"
                            type="month">
                        @if ($errors->has('gre_month'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('gre_month') }}</strong>
                        </span>
                        @endif
                    </div>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td></td>
                                <td><strong>Raw Score</strong></td>
                                <td><strong>Percentile</strong></td>
                            </tr>
                            <tr>
                                <td>Essays</td>
                                <td>
                                    <input id="gre_global_score" name="gre_global_score" class="form-control{{ $errors->has('gre_global_score') ? ' is-invalid' : '' }}" value="{{ old('name', $user->gre_global_score) }}" type="number">
                                    @if ($errors->has('gre_global_score'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gre_global_score') }}</strong>
                                    </span>
                                    @endif
                                </td>
                                <td>
                                    <input id="gre_global_percent" name="gre_global_percent" class="form-control{{ $errors->has('gre_global_percent') ? ' is-invalid' : '' }}" value="{{ old('name', $user->gre_global_percent) }}" type="number">
                                    @if ($errors->has('gre_global_percent'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gre_global_percent') }}</strong>
                                    </span>
                                    @endif
                                    <td>{{ __('%') }}</td>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Verbal
                                </td>
                                <td>
                                    <input id="gre_essay_score" name="gre_essay_score" class="form-control{{ $errors->has('gre_essay_score') ? ' is-invalid' : '' }}" value="{{ old('name', $user->gre_essay_score) }}" type="number">
                                    @if ($errors->has('gre_essay_score'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gre_essay_score') }}</strong>
                                    </span>
                                    @endif
                                </td>
                                <td>
                                    <input id="gre_essay_percent" name="gre_essay_percent" class="form-control{{ $errors->has('gre_essay_percent') ? ' is-invalid' : '' }}" value="{{ old('name', $user->gre_essay_percent) }}" type="number">
                                    @if ($errors->has('gre_essay_percent'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gre_essay_percent') }}</strong>
                                    </span>
                                    @endif
                                    <td>{{ __('%') }}</td>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Math
                                </td>
                                <td>
                                    <input id="gre_verbal_score" name="gre_verbal_score" class="form-control{{ $errors->has('gre_verbal_score') ? ' is-invalid' : '' }}" value="{{ old('name', $user->gre_verbal_score) }}" type="number">
                                    @if ($errors->has('gre_verbal_score'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gre_verbal_score') }}</strong>
                                    </span>
                                    @endif
                                </td>
                                <td>
                                    <input id="gre_verbal_percent" name="gre_verbal_percent" class="form-control{{ $errors->has('gre_verbal_percent') ? ' is-invalid' : '' }}" value="{{ old('name', $user->gre_verbal_percent) }}" type="number">
                                    @if ($errors->has('gre_verbal_percent'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gre_verbal_percent') }}</strong>
                                    </span>
                                    @endif
                                </td>
                                <td>{{ __('%') }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                    <p><strong>Language Proficiency</strong></p>
                    <div class="form-group">
                        <label for="toefl_score"><strong>TOEFL Score</strong></label>
                        <input id="toefl_score" name="toefl_score" class="form-control{{ $errors->has('toefl_score') ? ' is-invalid' : '' }} col-3" value="{{ old('name', $user->toefl_score) }}" type="number">
                        @if ($errors->has('toefl_score'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('toefl_score') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="ielts_score"><strong>IELTS Score</strong></label>
                        <input id="ielts_score" name="ielts_score" class="form-control{{ $errors->has('ielts_score') ? ' is-invalid' : '' }} col-3" value="{{ old('name', $user->ielts_score) }}" type="number">
                        @if ($errors->has('ielts_score'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('ielts_score') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header text-center">
                    <h4>Setp 5 - About The MBA</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="mba_type"><strong>MBA Type</strong></label>
                                <select id="mba_type" name="mba_type" class="form-control{{ $errors->has('mba_type') ? ' is-invalid' : '' }} col-3">
                                    <option value="Full Time">Full Time</option>
                                    <option value="Part Time">Part Time</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="mba_duration"><strong>Length</strong></label>
                                <input id="mba_duration" name="mba_duration" class="form-control{{ $errors->has('mba_duration') ? ' is-invalid' : '' }} col-3" value="{{ old('name', $user->mba_duration) }}" min="1" max="10" type="number" placeholder="In Month">
                                @if ($errors->has('mba_duration'))
                                <span class="invalid-feedback" role="alert">mba_duration
                                    <strong>{{ $errors->first('mba_duration') }}</strong>
                                </span>
                                @endif
                            </div>
                            <hr>
                            <p><strong>MBA Specialization</strong></p>
                            <div class="form-check form-check-inline">
                                <input id="entrepreneurship" name="entrepreneurship" class="form-check-input" value="{{ old('name', $user->entrepreneurship) }}" type="checkbox">
                                <label for="entrepreneurship" class="form-check-label"><strong>Entrepreneurship</strong></label>
                            </div>
                            <br>
                            <div class="form-check form-check-inline">
                                <input id="finance" name="finance" class="form-check-input" value="{{ old('name', $user->finance) }}" type="checkbox">
                                <label for="finance" class="form-check-label"><strong>Finance</strong></label>
                            </div>
                            <br>
                            <div class="form-check form-check-inline">
                                <input id="marketing" name="marketing" class="form-check-input" value="{{ old('name', $user->marketing) }}" type="checkbox">
                                <label for="marketing" class="form-check-label"><strong>Marketing</strong></label>
                            </div>
                            <br>
                            <div class="form-check form-check-inline">
                                <input id="general_management" name="general_management" class="form-check-input" value="{{ old('name', $user->general_management) }}" type="checkbox">
                                <label for="general_management" class="form-check-label"><strong>General Management</strong></label>
                            </div>
                            <br>
                            <div class="form-check form-check-inline">
                                <input id="logistics" name="logistics" class="form-check-input" value="{{ old('name', $user->logistics) }}" type="checkbox">
                                <label for="logistics" class="form-check-label"><strong>Logistics</strong></label>
                            </div>
                            <br>
                            <div class="form-check form-check-inline">
                                <input id="accounting" name="accounting" class="form-check-input" value="{{ old('name', $user->accounting) }}" type="checkbox">
                                <label for="accounting" class="form-check-label"><strong>Accounting</strong></label>
                            </div>
                            <br>
                            <div class="form-check form-check-inline">
                                <input id="other" name="other" class="form-check-input" value="{{ old('name', $user->other) }}" type="checkbox">
                                <label for="other" class="form-check-label"><strong>Other</strong></label>
                            </div>
                            <input id="other_which" name="other_which" class="form-control{{ $errors->has('other_which') ? ' is-invalid' : '' }}" type="text" placeholder="If other which? (Separated By Comma)">
                            @if ($errors->has('other_which'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('other_which') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="other_studies"><strong>Other Graduate Studies?</strong></label>
                                <input id="other_studies" name="other_studies" class="form-control{{ $errors->has('other_studies') ? ' is-invalid' : '' }}" value="{{ old('name', $user->other_studies) }}" type="text">
                                @if ($errors->has('other_studies'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('other_studies') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="area"><strong>Area?</strong></label>
                                <input id="area" name="area" class="form-control{{ $errors->has('area') ? ' is-invalid' : '' }}" value="{{ old('name', $user->area) }}" type="text">
                            </div>
                            <hr>
                            <p><strong>How are you planning to finance your studies?</strong></p>
                            <div class="form-check form-check-inline">
                                <input id="bank_loan" name="bank_loan" class="form-check-input" value="{{ old('name', $user->bank_loan) }}" type="checkbox">
                                <label for="bank_loan" class="form-check-label"><strong>Bank Loan</strong></label>
                            </div>
                            <br>
                            <div class="form-check form-check-inline">
                                <input id="colfuturo" name="colfuturo" class="form-check-input" value="{{ old('colfuturo', $user->colfuturo) }}" type="checkbox">
                                <label for="colfuturo" class="form-check-label"><strong>Colfuturo</strong></label>
                            </div>
                            <br>
                            <div class="form-check form-check-inline">
                                <input id="prodigy_finance" name="prodigy_finance" class="form-check-input" value="{{ old('prodigy_finance', $user->prodigy_finance) }}" type="checkbox">
                                <label for="prodigy_finance" class="form-check-label"><strong>Prodigy Finance</strong></label>
                            </div>
                            <br>
                            <div class="form-check form-check-inline">
                                <input id="icetex" name="icetex" class="form-check-input" value="{{ old('icetex', $user->icetex) }}" type="checkbox">
                                <label for="icetex" class="form-check-label"><strong>Icetex</strong></label>
                            </div>
                            <br>
                            <div class="form-check form-check-inline">
                                <input id="personal_funding" name="personal_funding" class="form-check-input" value="{{ old('personal_funding', $user->personal_funding) }}" type="checkbox">
                                <label for="personal_funding" class="form-check-label"><strong>Personal Funding</strong></label>
                            </div>
                            <br>
                            <div class="form-check form-check-inline">
                                <input id="scholarship" name="scholarship" class="form-check-input" value="{{ old('name', $user->scholarship) }}" type="checkbox">
                                <label for="scholarship" class="form-check-label"><strong>Scholarship</strong></label>
                            </div>
                            <br>
                            <div class="form-check form-check-inline">
                                <input id="university_loan" name="university_loan" class="form-check-input" value="{{ old('university_loan', $user->university_loan) }}" type="checkbox">
                                @if ($errors->has('university_loan'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('university_loan') }}</strong>
                                </span>
                                @endif
                                <label for="university_loan" class="form-check-label"><strong>University Loan</strong></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-body">
                    <p>
                        The following Universities will be participating in <strong>Premium MBA Contact Fair</strong>.
                        Please choose the ones which
                        you would like to have a one-on-one meetings. It is likely that some universities that you have
                        not chosen invite you for a one-on-one
                        presonal interview. By registering to this part of the event, you accept to participate in at
                        most 2 interviews that you have not requested.
                    </p>
                    <p><strong>
                            Please remember that to be considered for the individual appointments you must upload your
                            CV in English.
                        </strong></p>
                    <hr>
                        @foreach($universities as $university)
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-check form-check-inline">
                                        @if (in_array($university->first_name, explode(',', $user->uni_choice)))
                                            <input name="uni_choice[]" value="{{ $university->first_name }}" class="form-check-input" type="checkbox" checked="checked">
                                        @else
                                            <input name="uni_choice[]" value="{{ $university->first_name }}" class="form-check-input" type="checkbox">
                                        @endif
                                        <label for="uni_choice" class="form-check-label"><strong style="text-transform: uppercase;">{{ $university->first_name }} - {{ $university->last_name }}</strong></label>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    <br>
                </div>
            </div>
            <br>
            <input id="cv" name="cv" class="form-group" type="file">
            @if ($errors->has('cv'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('cv') }}</strong>
            </span>
            @endif
            <br>
            <label for="image"><strong>Profile Image</strong></label>
            @if (!empty($user->files->first()))
                <a href="{{ asset($user->files->first()->file) }}" target="_blank" style="text-decoration: none;">
                    <img src="{{ asset($user->files->first()->file) }}" alt="Profile Image" class="rounded-sm" style="width: 250px;">
                </a>
            @endif
            <input id="image" name="image" class="form-group" type="file">
            @if ($errors->has('image'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('image') }}</strong>
            </span>
            @endif
            <br>
            @if (Auth::user()->role != 'inspector')
                <div class="text-center">
                    <button type="submit" class="btn btn-success">
                        Save / Upload
                    </button>
                </div>
            @endif
            {{ method_field('PUT') }}
    </form>
</div>
@stop
