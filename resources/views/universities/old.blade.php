@extends('layouts.app')
@section('title', 'University Profile')
@section('content')
<div class="container">
    <div class="Justify-content-Center">
        <a class="btn btn-primary" href="{{ route('university.edit', $user->id) }}">New Edition Form</a>
    </div>
    <br>
    <form action="{{ route('university.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-header text-center">
                <h5 class="card-title">Step 1 - University Info</h5>
            </div>
            <div class="card-body">
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="university_name"><strong>University</strong></label>
                            <input class="form-control{{ $errors->has('university_name') ? ' is-invalid' : '' }}" value="{{ old('university_name', $user->university_name) }}"
                                name="university_name" type="text" placeholder="American University">
                            @if ($errors->has('university_name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('university_name') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group col-md-6">
                            <label for="university_business_name"><strong>Business School Name</strong></label>
                            <input class="form-control{{ $errors->has('university_business_name') ? ' is-invalid' : '' }}"
                                value="{{ old('university_business_name', $user->university_business_name) }}" name="university_business_name"
                                type="text" placeholder="Kogod School of Business">
                            @if ($errors->has('university_business_name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('university_business_name') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label for="university_country"><strong>Country</strong></label>
                            <select value="{{ old('university_country', $user->university_country) }}" name="university_country"
                                class="form-control{{ $errors->has('university_name') ? ' is-invalid' : '' }}">
                                <option value="USA">USA</option>
                                <option value="Colombia">Colombia</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="university_city"><strong>City</strong></label>
                            <input class="form-control{{ $errors->has('university_city') ? ' is-invalid' : '' }}" value="{{ old('university_city', $user->university_city) }}"
                                name="university_city" class="form-control{{ $errors->has('university_name') ? ' is-invalid' : '' }}"
                                type="text" placeholder="Washington, D.C.">
                            @if ($errors->has('university_city'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('university_city') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group col-md-3">
                            <label for="university_event"><strong>Event</strong></label>
                            <select class="form-control" name="university_event" value="{{ old('university_event', $user->university_event) }}">
                                <option value="1">Option 1</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="university_website"><strong>Program Website</strong></label>
                        <input class="form-control{{ $errors->has('university_website') ? ' is-invalid' : '' }}" value="{{ old('university_website', $user->university_website) }}"
                            name="university_website" class="form-control{{ $errors->has('university_name') ? ' is-invalid' : '' }}"
                            type="text" placeholder="www.business.com">
                        @if ($errors->has('university_website'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('university_website') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header text-center align-middle">
                <h5 class="card-title">Step 2 - Representative Attending</h5>
            </div>
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="first_name"><strong>First Name</strong></label>
                        <input class="form-control{{ $errors->has('university_first_name') ? ' is-invalid' : '' }}"
                            value="{{ old('university_first_name', $user->university_first_name) }}" name="university_first_name"
                            type="text">
                        @if ($errors->has('university_first_name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('university_first_name') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label for="family_name"><strong>Family Name</strong></label>
                        <input class="form-control{{ $errors->has('university_family_name') ? ' is-invalid' : '' }}"
                            value="{{ old('university_family_name', $user->university_family_name) }}" name="university_family_name"
                            type="text">
                        @if ($errors->has('university_family_name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('university_family_name') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="mobile_phone"><strong>Mobile Phone</strong></label>
                        <input class="form-control{{ $errors->has('university_mobile_phone') ? ' is-invalid' : '' }}"
                            value="{{ old('university_mobile_phone', $user->university_mobile_phone) }}" name="university_mobile_phone"
                            type="text" placeholder="+1 408 1472583">
                        @if ($errors->has('university_mobile_phone'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('university_mobile_phone') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group col-md-4">
                        <label for="office_phone"><strong>Office Phone</strong></label>
                        <input class="form-control{{ $errors->has('university_office_phone') ? ' is-invalid' : '' }}"
                            value="{{ old('university_office_phone', $user->university_office_phone) }}" name="university_office_phone"
                            type="text">
                        @if ($errors->has('university_office_phone'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('university_office_phone') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group col-md-4">
                        <label for="university_whatsapp_phone"><strong>Whatsapp</strong></label>
                        <input class="form-control{{ $errors->has('university_whatsapp_phone') ? ' is-invalid' : '' }}"
                            value="{{ old('university_whatsapp_phone', $user->university_whatsapp_phone) }}" name="university_whatsapp_phone"
                            type="text">
                        @if ($errors->has('university_whatsapp_phone'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('university_whatsapp_phone') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <p>We want to facilitate communication between us. During the event, the hotel will provide free Wifi,
                    we suggest Whatsapp as a communication tool for the fair.</p>
            </div>
            <div class="card-body">
                <div class="form-row">
                    <div class="form-check form-check-inline">
                        <input value="{{ old('participate_status', $user->participate_status) }}" name="participate_status"
                            class="form-check-input" type="checkbox">
                        <label for="participate_status" class="form-check-label"><strong>Participate Status</strong></label>
                    </div>
                    <div class="form-group">
                        <label for="participate_date"><strong>Participation Date</strong></label>
                        <input class="form-control" value="{{ old('participate_date', $user->participate_date) }}" name="participate_date"
                            type="date">
                    </div>
                </div>
                <div class="form-group">
                    <label for="description_programs"><strong>Description Programs</strong></label>
                    <textarea class="form-control" name="description_programs" rows="2">
                            {{ old('description_programs', $user->description_programs)}}
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="programs_type"><strong>Programs Type</strong></label>
                    <textarea class="form-control{{ $errors->has('programs_type') ? ' is-invalid' : '' }}" name="programs_type" rows="2">
                            {{ old('programs_type', $user->programs_type) }}
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="class_profile"><strong>Class Profile</strong></label>
                    <input class="form-control{{ $errors->has('class_profile') ? ' is-invalid' : '' }}" value="{{ old('class_profile', $user->class_profile) }}"
                        name="class_profile" type="text">
                    @if ($errors->has('class_profile'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('class_profile') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="degrees_offered"><strong>Degrees Offered</strong></label>
                    <input class="form-control{{ $errors->has('degrees_offered') ? ' is-invalid' : '' }}" value="{{ old('degrees_offered', $user->degrees_offered) }}"
                        name="degrees_offered" type="text">
                    @if ($errors->has('degrees_offered'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('degrees_offered') }}</strong>
                    </span>
                    @endif
                </div>
                <p><strong>Please Note:</strong></p>
                <p>There is a university presentation and it is that the presentation is delivered by an admissions
                    representative or a career service official.</p>
                <p>You can update this information at a later stage.</p>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header text-center align-middle">
                <h5 class="card-title">Step 3 - Contact Person (If diferent from the attending representative)</h5>
            </div>
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="contact_first_name"><strong>First Name</strong></label>
                        <input class="form-control{{ $errors->has('contact_first_name') ? ' is-invalid' : '' }}" value="{{ old('contact_first_name', $user->contact_first_name) }}"
                            name="contact_first_name" type="text">
                        @if ($errors->has('contact_first_name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('contact_first_name') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group col-6">
                        <label for="contact_family_name"><strong>Family Name</strong></label>
                        <input class="form-control{{ $errors->has('contact_family_name') ? ' is-invalid' : '' }}" value="{{ old('contact_family_name', $user->contact_family_name) }}"
                            name="contact_family_name" type="text">
                        @if ($errors->has('contact_family_name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('contact_family_name') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-3">
                        <label for="contact_position"><strong>Positon</strong></label>
                        <input class="form-control{{ $errors->has('contact_position') ? ' is-invalid' : '' }}" value="{{ old('contact_position', $user->contact_position) }}"
                            name="contact_position" type="text">
                        @if ($errors->has('contact_position'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('contact_position') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group col-3">
                        <label for="contact_email"><strong>Email Address</strong></label>
                        <input class="form-control{{ $errors->has('contact_email') ? ' is-invalid' : '' }}" value="{{ old('contact_email', $user->contact_email) }}"
                            name="contact_email" type="text">
                        @if ($errors->has('contact_email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('contact_email') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-3">
                        <label for="contact_office_phone"><strong>Office Phone</strong></label>
                        <input class="form-control{{ $errors->has('contact_office_phone') ? ' is-invalid' : '' }}"
                            value="{{ old('contact_office_phone', $user->contact_office_phone) }}" name="contact_office_phone"
                            type="text">
                        @if ($errors->has('contact_office_phone'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('contact_office_phone') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group col-3">
                        <label for="contact_mobile_phone"><strong>Mobile Phone</strong></label>
                        <input class="form-control{{ $errors->has('contact_mobile_phone') ? ' is-invalid' : '' }}" value="{{ old('contact_mobile_phone', $user->contact_mobile_phone) }}" name="contact_mobile_phone" type="text">
                        @if ($errors->has('contact_mobile_phone'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('contact_mobile_phone') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group col-3">
                        <label for="contact_whatsapp_phone"><strong>Whatsapp</strong></label>
                        <input class="form-control{{ $errors->has('contact_whatsapp_phone') ? ' is-invalid' : '' }}"
                            value="{{ old('contact_whatsapp_phone', $user->contact_whatsapp_phone) }}" name="contact_whatsapp_phone"
                            type="text">
                        @if ($errors->has('contact_whatsapp_phone'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('contact_whatsapp_phone') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <p>We want to facilitate communication between us. During the event, the hotel will provide free Wifi,
                    we suggest Whatsapp as a communication tool for the fair.</p>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header text-center align-middle">
                <h5 class="card-title">Step 4 - Addition Info</h5>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="participate_panel"><strong>Would you like to participate in the Panel?</strong></label>
                    <select name="participate_panel" class="form-control col-1" value="{{ old('participate_panel', $user->participate_panel) }}">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <p>There will be a specific information about each program in the event's webpage as well as in The
                    Grand School webpage. We Request that you provide the following information.</p>
                <div class="form-check form-check-inline">
                    <input value="{{ old('times_event', $user->times_event) }}" name="times_event" class="form-check-input"
                        type="checkbox">
                    @if ($errors->has('times_event'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('times_event') }}</strong>
                    </span>
                    @endif
                    <label for="times_event" class="form-check-label">
                        <strong>Would you like to participate on the August 26st cultural tour?</strong>
                    </label>
                </div>
                <hr>
                <div class="form-group">
                    <label for="description_mba_programs">
                        <strong>PLEASE PROVIDE A BRIEF DESCRIPTION OF THE FULL TIME MBA PROGRAM (This should be about
                            500 words and would be advisable to include what makes the program unique)</strong>
                    </label>
                    <textarea class="form-control" name="description_mba_programs" rows="3">
                        {{ old('description_mba_programs', $user->description_mba_programs) }}
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="aditional_programs_type">
                        <strong>Program Type(s)</strong></label>
                    <input class="form-control{{ $errors->has('aditional_programs_type') ? ' is-invalid' : '' }}" value="{{ old('aditional_programs_type', $user->aditional_programs_type) }}"
                        name="aditional_programs_type" type="text" placeholder="Separated by comma">
                    @if ($errors->has('aditional_programs_type'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('aditional_programs_type') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="class_profile_mba">
                        <strong>Class profile for the full time MBA</strong>
                    </label>
                    <textarea class="form-control" name="class_profile_mba" rows="3">
                        {{ old('class_profile_mba', $user->class_profile_mba) }}
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="join_degrees_offered">
                        <strong>Join Degrees Offered</strong>
                    </label>
                    <textarea class="form-control" name="join_degrees_offered" rows="3">
                        {{ old('join_degrees_offered', $user->join_degrees_offered) }}
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="specialized_masters">
                        <strong>Specialized Masters</strong>
                    </label>
                    <textarea class="form-control" name="specialized_masters" rows="3">
                        {{ old('specialized_masters', $user->specialized_masters) }}
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="specialization_function">
                        <strong>Specialitations By Function</strong>
                    </label>
                    <textarea class="form-control" name="specialization_function" rows="3">
                        {{ old('specialization_function', $user->specialization_function) }}
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="specialization_industry">
                        <strong>Specialization By Industry</strong></label>
                    <textarea class="form-control" name="specialization_industry" rows="3">
                        {{ old('specialization_industry', $user->specialization_industry) }}
                    </textarea>
                </div>
                <hr>
                <div class="form-group col-3">
                    <label for="program_duration">
                        <strong>Program Duration (In months)</strong>
                    </label>
                    <input class="form-control{{ $errors->has('program_duration') ? ' is-invalid' : '' }}" value="{{ old('program_duration', $user->program_duration) }}"
                        name="program_duration" type="text" placeholder="Program Duration">
                    @if ($errors->has('program_duration'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('program_duration') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group col-3">
                    <label for="tuition_fees">
                        <strong>Tuition Fees (Total in USD)</strong>
                    </label>
                    <input class="form-control{{ $errors->has('tuition_fees') ? ' is-invalid' : '' }}" value="{{ old('tuition_fees', $user->tuition_fees) }}" name="tuition_fees" type="number" placeholder="Tuition Fees">
                    @if ($errors->has('tuition_fees'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('tuition_fees') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group col-3">
                    <label for="minimun_experience">
                        <strong>Minimun Years of Work Experience</strong>
                    </label>
                    <input class="form-control{{ $errors->has('minimun_experience') ? ' is-invalid' : '' }}" value="{{ old('minimun_experience', $user->minimun_experience) }}"
                        name="minimun_experience" type="number" min="1" max="99" placeholder="e.g. 2">
                    @if ($errors->has('minimun_experience'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('minimun_experience') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group col-3">
                    <label for="students_employed">
                        <strong>Percent of students enployed (Within 3 months of graduation)</strong>
                    </label>
                    <input class="form-control{{ $errors->has('students_employed') ? ' is-invalid' : '' }}" value="{{ old('students_employed', $user->students_employed) }}"
                        name="students_employed" type="number" min="1" max="99" placeholder="e.g. 70%">
                    @if ($errors->has('students_employed'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('students_employed') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group col-3">
                    <label for="languare_required">
                        <strong>Lenguage Requirement</strong>
                    </label>
                    <input class="form-control{{ $errors->has('languare_required') ? ' is-invalid' : '' }}" value="{{ old('languare_required', $user->languare_required) }}"
                        name="languare_required" type="text" placeholder="Separated by comma">
                    @if ($errors->has('languare_required'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('languare_required') }}</strong>
                    </span>
                    @endif
                </div>
                <hr>
                <div class="form-group">
                    <label for="ability_loans">
                        <strong>Ability of loans without a us consigner for internationatl student</strong>
                    </label>
                    <textarea class="form-control" name="ability_loans" rows="3">
                        {{ old('ability_loans', $user->ability_loans) }}
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="financial_aid">
                        <strong>Financial aid for international students</strong>
                    </label>
                    <textarea class="form-control" name="financial_aid" rows="3">
                        {{ old('financial_aid', $user->financial_aid) }}
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="facebook_post">
                        <strong>To secure a successful event we have planned a social media campaign. For that purpose,
                            please provide us with 5 Facebooks posts about your university and MBA programs, remember
                            to add the #PMBAC hash tag to your posts.</strong>
                    </label>
                    <textarea class="form-control" rows="6" name="facebook_post">
                        {{ old('facebook_post', $user->facebook_post) }}
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="authorization_info">
                        <strong>To get additonal promotion of your university we will like your authorization to
                            include the information about your program(s) in The Grand School's Webpages: </strong>
                        <strong class="text-info">www.thegrandschool.com</strong><strong> and </strong><strong class="text-info">www.premiummbacontact.com</strong>
                        <strong>. Can we include this information in our webpages?</strong>
                    </label>
                    <select name="authorization_info" class="form-control col-1" value="{{ old('authorization_info', $user->authorization_info) }}">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="business_logo"><strong>Business School Logo (220x160 pixels)</strong></label>
                    <input name="business_logo" class="" type="file">
                    @if ($errors->has('university_name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('university_name') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header text-center align-middle">
                <h5 class="card-title">Step 5 - Event Info</h5>
            </div>
            <div class="card-body">
                <h3 class="text-info">Your registration includes</h3>
                <ul>
                    <li>Possibility to participate in hte MBA panels.</li>
                    <li>Possibility of pre-selected candidates that fit the University's profile for the one-on-one
                        sessions.</li>
                    <li>Eight to ten pre-scheduled one-to-one meetings with highly qualificated candidates.</li>
                    <li>Logo inclusion on the event website with a link to specific information about the program.</li>
                    <li>Database of participatns.</li>
                    <li>30-minute University MBA program presentation.</li>
                    <li>Information booth during the day at the event.</li>
                </ul>
                <h3 class="text-info">Participation Costs</h3>
                <p><strong>EARLY BIRD REGISTRATION: USD $3,500</strong></p>
                <p>For the registrations submited on or before April 30th, 2018 and payments done on or before May
                    31st, 2018.</p>
                <p><strong>STANDAR REGISTRATION: USD $4,000</strong></p>
                <p>For the registrations submited May 1st and June 29th and payments done between June 1st and July
                    31st, 2018.</p>
                <p><strong>LATE REGISTRATION: USD $4,500</strong></p>
                <p>For the registrations submited after July 1st.</p>
                <p>Late registration is subject to availability.</p>

                <h3 class="text-info">Payment details</h3>
                <div class="form-group col-3">
                    <label for="bank"><strong>Bank</strong></label>
                    <input class="form-control{{ $errors->has('bank') ? ' is-invalid' : '' }}" value="{{ old('bank', $user->bank) }}"
                        name="bank" type="text">
                    @if ($errors->has('bank'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('bank') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group col-3">
                    <label for="payment_date"><strong>Payment Date</strong></label>
                    <input class="form-control{{ $errors->has('payment_date') ? ' is-invalid' : '' }}" value="{{ old('payment_date', $user->payment_date) }}"
                        name="payment_date" class="form-control{{ $errors->has('university_name') ? ' is-invalid' : '' }}"
                        type="date">
                    @if ($errors->has('payment_date'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('payment_date') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group col-3">
                    <label for="paid_value"><strong>Paid Value</strong></label>
                    <input class="form-control{{ $errors->has('paid_value') ? ' is-invalid' : '' }}" value="{{ old('paid_value', $user->paid_value) }}"
                        name="paid_value" class="form-control{{ $errors->has('university_name') ? ' is-invalid' : '' }}"
                        type="number">
                    @if ($errors->has('paid_value'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('paid_value') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group col-6">
                    <label for="university_notes"><strong>Notes</strong></label>
                    <textarea class="form-control{{ $errors->has('university_notes') ? ' is-invalid' : '' }}" name="university_notes" rows="5">
                        {{ old('university_notes', $user->university_notes) }}
                    </textarea>
                    @if ($errors->has('university_notes'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('university_notes') }}</strong>
                    </span>
                    @endif
                </div>

                <br>

                <h3 class="text-blue">Cancellation Policy</h3>

                <p><strong class="text-info">Cancellation of Registration</strong></p>
                <p>CCancellation received on or before June 30th, 2018 will incur in a USD $500 administrative fee.</p>
                <p>All cancellation received after June 30th, 2018 will not be elegible for a refund.</p>
                <p>All cancellation must be made in writing to infogs@thegrandschool.com</p>
                <p><strong class="text-info">Insurance</strong></p>
                <p>Registration fees do not include insurance of any kind.</p>
                <p><strong class="text-info">Cancellation of the Premium MBA Contact Fair</strong></p>
                <p>In the unlikely event of cancellation or postponement of the <strong>Premium MBA contact Fair</strong>
                    due to circumstances beyond <strong>THE GRAND SCHOOL</strong> reasonable control including but not
                    limited to, acts of terrorism, war, acts of God and natural disaster, neither <strong>THE GRAND
                        SCHOOL</strong> can ve held responsible for any cost, damage or expense which may be incurred
                    by registrants as a consequence of the event being postponed or cancelled.</p>
                <p><strong>PREMIUM MBA CONTACT FAIR</strong> and <strong>THE GRAND SCHOOL</strong> are a registered
                    trade marks of <strong>PROYECTAMOS SU FUTURI LTDA</strong></p>
                <div class="card-body text-center align-middle">
                    <hr>
                    <p><strong>By submiting this form you confirm that you read and accept the </strong><a href=""><strong>Disclosure
                                Statements</strong></a><strong> of the Premium MBA Contact Fair.</strong></p>
                    <button type="submit" class="btn btn-success">
                        Update Registration
                    </button>
                </div>
            </div>
        </div>
        {{ method_field('PUT') }}
    </form>
</div>
@endsection
