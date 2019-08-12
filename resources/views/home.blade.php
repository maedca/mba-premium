@extends('layouts.app')
@section('content')

{{--  
@if (Auth::user()->role === 'university')
<div class="container">
    <form action="{{ route('university.update', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <div class="text-center">
                <h4 class="text-danger"><b>PREMIUM MBA CONTACT FAIR: A NEW FORM OF RECRUITMENT</b></h4>
                <br>
            </div>
        </div>
        <div class="card">
            <div class="card-header text-center">
                <h5 class="card-title text-info"><strong>REGISTRATION FORM</strong></h5>
            </div>
            <div class="card-body">
                <p>
                    Thank you for your interest in participating in the Premium MBA Contact Fair. Please complete this registration form and we will issue the invoice as soon as we receive your registration.
                </p>
                <p>
                    Registrations submitted by May 15 will have the Early Bird Rate. Payment must be done by May 31st,
                    2019 at the latest to be eligible to this rate.
                </p>
                <p>
                    We will issue the invoices as soon as we receive your registration form.
                </p>
                <div class="form-group row align-middle">
                    <div class="col-1">
                        <label for="event" class="form-label"><strong>EVENT</strong></label>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="event_sao" id="event_sao">
                            <label class="form-check-label" for="event_sao"><b>SAO PAULO, BRAZIL; July 27st, 2019</b></label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="event_lima" id="event_lima">
                            <label class="form-check-label" for="event_lima"><b>LIMA, PERU; July 31st, 2019</b></label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="event_bogota" id="event_bogota">
                            <label class="form-check-label" for="event_bogota"><b>BOGOTA, COLOMBIA; August 3rd, 2019</b></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header text-center">
                <h5 class="card-title text-info"><strong>UNIVERSITY INFORMATION</strong></h5>
            </div>
            <div class="card-body">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="first_name" class="col-sm-2 col-form-label"><strong>UNIVERSITY NAME</strong></label>
                        <div class="col-sm-10">
                            <input class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" value="{{ old('first_name', Auth::user()->first_name) }}"
                                name="first_name" type="text">
                            @if ($errors->has('first_name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('first_name') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="last_name" class="col-sm-2 col-form-label"><strong>BUSINESS SCHOOL NAME</strong></label>
                        <div class="col-sm-10">
                            <input class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}"
                                value="{{ old('last_name', Auth::user()->last_name) }}" name="last_name"
                                type="text">
                            @if ($errors->has('last_name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('last_name') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="country" class="col-sm-2 col-form-label"><strong>CITY, STATE and COUNTRY</strong></label>
                        <div class="col-sm-4">
                            <input class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" value="{{ old('city', Auth::user()->city) }}"
                            name="city" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}"
                            type="text" placeholder="City">
                            @if ($errors->has('city'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('city') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="col-sm-3">
                            <select name="country" class="form-control">
                                <option value="CANADA">CANADA</option>
                                <option value="SPAIN">SPAIN</option>
                                <option value="THE NETHERLANDS">THE NETHERLANDS</option>
                                <option value="USA">USA</option>

                                <option value="UK">UK</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="website" class="col-sm-4 col-form-label"><strong>FULL TIME MABA PROGRAM WEBSITE</strong></label>
                        <div class="col-sm-8">
                            <input class="form-control{{ $errors->has('website') ? ' is-invalid' : '' }}"
                                value="{{ old('website', Auth::user()->website) }}" name="website"
                                class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text">
                            @if ($errors->has('website'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('website') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    @if (Auth::user()->role === "admin")
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label"><strong>Email address</strong></label>
                        <div class="col-sm-10">
                            <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                value="{{ old('email', Auth::user()->email) }}" name="email"
                                class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text">
                            @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label"><strong>Password</strong></label>
                        <div class="col-sm-10">
                            <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                value="{{ old('password', Auth::user()->password) }}" name="password"
                                class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" type="password">
                            @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header text-center align-middle">
                <h5 class="card-title text-info"><strong>REPRESENTATIVE ATTENDING</strong></h5>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <label for="representative_first_name" class="col-sm-2 col-form-label"><strong>First Name</strong></label>
                    <div class="col-sm-10">
                        <input class="form-control{{ $errors->has('representative_first_name') ? ' is-invalid' : '' }}"
                            value="{{ old('representative_first_name', Auth::user()->representative_first_name) }}" name="representative_first_name"
                            type="text">
                        @if ($errors->has('representative_first_name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('representative_first_name') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="representative_family_name" class="col-sm-2 col-form-label"><strong>Last Name</strong></label>
                    <div class="col-sm-10">
                        <input class="form-control{{ $errors->has('representative_family_name') ? ' is-invalid' : '' }}"
                            value="{{ old('representative_family_name', Auth::user()->representative_family_name) }}" name="representative_family_name"
                            type="text">
                        @if ($errors->has('representative_family_name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('representative_family_name') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="representative_email" class="col-sm-2 col-form-label"><strong>Email Address</strong></label>
                    <div class="col-sm-10">
                        <input class="form-control{{ $errors->has('representative_email') ? ' is-invalid' : '' }}"
                            value="{{ old('representative_email', Auth::user()->representative_email) }}" name="representative_email"
                            type="text">
                        @if ($errors->has('representative_email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('representative_email') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="representative_mobile_phone" class="col-sm-2 col-form-label"><strong>Mobile Phone</strong></label>
                    <div class="col-sm-10">
                        <input class="form-control{{ $errors->has('representative_mobile_phone') ? ' is-invalid' : '' }}"
                            value="{{ old('representative_mobile_phone', Auth::user()->representative_mobile_phone) }}" name="representative_mobile_phone"
                            type="text">
                        @if ($errors->has('representative_mobile_phone'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('representative_mobile_phone') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="representative_home_phone" class="col-sm-2 col-form-label"><strong>Home Phone</strong></label>
                    <div class="col-sm-10">
                        <input class="form-control{{ $errors->has('representative_home_phone') ? ' is-invalid' : '' }}"
                            value="{{ old('representative_home_phone', Auth::user()->representative_home_phone) }}" name="representative_home_phone"
                            type="text">
                        @if ($errors->has('representative_home_phone'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('representative_home_phone') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="representative_whatsapp_phone" class="col-sm-2 col-form-label"><strong>Whatsapp Number</strong></label>
                    <div class="col-sm-10">
                        <input class="form-control{{ $errors->has('representative_whatsapp_phone') ? ' is-invalid' : '' }}"
                            value="{{ old('representative_whatsapp_phone', Auth::user()->representative_whatsapp_phone) }}"
                            name="representative_whatsapp_phone" type="text">
                        @if ($errors->has('representative_whatsapp_phone'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('representative_whatsapp_phone') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <p>
                    We will be using whatsapp as a means of communication during the event. There will be free wifi at all venues.
                </p>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header text-center align-middle">
                <h5 class="card-title text-info"><strong>CONTACT PERSON</strong> (If different from the attending
                    representative)</h5>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <label for="contact_first_name" class="col-sm-2 col-form-label"><strong>First Name</strong></label>
                    <div class="col-sm-10">
                        <input class="form-control{{ $errors->has('contact_first_name') ? ' is-invalid' : '' }}" value="{{ old('contact_first_name', Auth::user()->contact_first_name) }}"
                            name="contact_first_name" type="text">
                        @if ($errors->has('contact_first_name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('contact_first_name') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="contact_family_name" class="col-sm-2 col-form-label"><strong>Last Name</strong></label>
                    <div class="col-sm-10">
                        <input class="form-control{{ $errors->has('contact_family_name') ? ' is-invalid' : '' }}" value="{{ old('contact_family_name', Auth::user()->contact_family_name) }}"
                            name="contact_family_name" type="text">
                        @if ($errors->has('contact_family_name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('contact_family_name') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="contact_email" class="col-sm-2 col-form-label"><strong>Email Address</strong></label>
                    <div class="col-sm-10">
                        <input class="form-control{{ $errors->has('contact_email') ? ' is-invalid' : '' }}" value="{{ old('contact_email', Auth::user()->contact_email) }}"
                            name="contact_email" type="text">
                        @if ($errors->has('contact_email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('contact_email') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="contact_mobile_phone" class="col-sm-2 col-form-label"><strong>Mobile Phone</strong></label>
                    <div class="col-sm-10">
                        <input class="form-control{{ $errors->has('contact_mobile_phone') ? ' is-invalid' : '' }}"
                            value="{{ old('contact_mobile_phone', Auth::user()->contact_mobile_phone) }}" name="contact_mobile_phone"
                            type="text">
                        @if ($errors->has('contact_mobile_phone'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('contact_mobile_phone') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="contact_home_phone" class="col-sm-2 col-form-label"><strong>Home Phone</strong></label>
                    <div class="col-sm-10">
                        <input class="form-control{{ $errors->has('contact_home_phone') ? ' is-invalid' : '' }}"
                            value="{{ old('contact_home_phone', Auth::user()->contact_home_phone) }}" name="contact_home_phone"
                            type="text">
                        @if ($errors->has('contact_home_phone'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('contact_home_phone') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="contact_whatsapp_phone" class="col-sm-2 col-form-label"><strong>Whatsapp Number</strong></label>
                    <div class="col-sm-10">
                        <input class="form-control{{ $errors->has('contact_whatsapp_phone') ? ' is-invalid' : '' }}"
                            value="{{ old('contact_whatsapp_phone', Auth::user()->contact_whatsapp_phone) }}"
                            name="contact_whatsapp_phone" type="text">
                        @if ($errors->has('contact_whatsapp_phone'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('contact_whatsapp_phone') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header text-center">
                <h5 class="card-title text-info"><strong>ADDITIONAL INFORMATION FOR THE EVENT</strong></h5>
            </div>
            <div class="card-body">
                <p>
                    <strong>Would you like to participate in the admission Panels?</strong>
                </p>
                <div class="form-group row">
                    <label for="sao_paulo_panel" class="col-sm-5 col-form-label">
                        SAO PAULO, BRAZIL; July 27th, 2019
                    </label>
                    <div class="col-sm-7">
                        <select name="sao_paulo_panel" class="form-control col-2" value="{{ old('sao_paulo_panel', Auth::user()->sao_paulo_panel) }}">
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="bogota_panel" class="col-sm-5 col-form-label">
                        BOGOTA, COLOMBIA; August 3rd, 2019
                    </label>
                    <div class="col-sm-7">
                        <select name="bogota_panel" class="form-control col-2" value="{{ old('bogota_panel', Auth::user()->bogota_panel) }}">
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                </div>
                <p>
                    <strong>Would you like to participate in company visits?</strong>
                </p>
                <div class="form-group row">
                    <label for="lima_panel" class="col-sm-5 col-form-label">
                        LIMA, PERU; July 31st, 2019
                    </label>
                    <div class="col-sm-7">
                        <select name="lima_panel" id="lima_panel" class="form-control col-2">
                            @if ($user->lima_panel)
                                <option value="{{ old('lima_panel', $user->lima_panel) }}">
                                    {{ old('lima_panel', $user->lima_panel) }}
                                </option>
                            @else
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            @endif
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lima_panel" class="col-sm-5 col-form-label">
                        LIMA, PERU; Agust 1st, 2019
                    </label>
                    <div class="col-sm-7">
                        <select name="lima_panel" id="lima_panel" class="form-control col-2">
                            @if ($user->lima_panel)
                                <option value="{{ old('lima_panel', $user->lima_panel) }}">
                                    {{ old('lima_panel', $user->lima_panel) }}
                                </option>
                            @else
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            @endif
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="cultural_tour" class="col-sm-5 col-form-label">
                        <strong>Would you like to participate on the August 4th cultural tour?</strong>
                    </label>
                    <div class="col-sm-7">
                        <select name="cultural_tour" class="form-control col-2" value="{{ old('cultural_tour', Auth::user()->cultural_tour) }}">
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                </div>
                <p>
                    After the event, some candidates request the contact details of the attending representative to send a thank you note or to request further information.
                </p>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header text-center align-middle">
                <h5 class="card-title text-info"><strong>INFORMATION ABOUT THE PROGRAM</strong></h5>
            </div>
            <div class="card-body">
                <h5 class="text-center text-info">We intend to use  this information in the event's  webpage.</h5>
                    <div class="form-group">
                        <label for="description_mba_programs">
                            <strong>PLEASE PROVIDE A BRIEF DESCRIPTION OF THE FULL TIME MBA PROGRAM. (This should be about
                                500 words and would be advisable to include what makes the program unique).</strong>
                            <strong>
                                For your convenience, if you participated last year in the Bogota Premium MBA Contact Fair, we have included the information you provided. Please feel free to modify it.
                            </strong>
                        </label>
                        <textarea class="form-control" name="description_mba_programs" rows="3">
                            {{ old('description_mba_programs', Auth::user()->description_mba_programs) }}
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="programs_type">
                            <strong>Program Type(s)</strong></label>
                        <input class="form-control{{ $errors->has('programs_type') ? ' is-invalid' : '' }}" value="{{ old('programs_type', Auth::user()->programs_type) }}"
                            name="programs_type" type="text">
                        @if ($errors->has('programs_type'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('programs_type') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="class_profile_mba">
                            <strong>Class profile for the full time MBA</strong>
                        </label>
                        <textarea class="form-control" name="class_profile_mba" rows="3">
                            {{ old('class_profile_mba', Auth::user()->class_profile_mba) }}
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="join_degrees_offered">
                            <strong>Join Degrees Offered</strong>
                        </label>
                        <textarea class="form-control" name="join_degrees_offered" rows="3">
                            {{ old('join_degrees_offered', Auth::user()->join_degrees_offered) }}
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="specialized_masters">
                            <strong>Specialized Masters</strong>
                        </label>
                        <textarea class="form-control" name="specialized_masters" rows="3">
                            {{ old('specialized_masters', Auth::user()->specialized_masters) }}
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="specialization_concentrations">
                            <strong>Specialisations/Concentrations</strong>
                        </label>
                        <textarea class="form-control" name="specialization_concentrations" rows="3">
                            {{ old('specialization_concentrations', Auth::user()->specialization_concentrations) }}
                        </textarea>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <label for="program_duration" class="col-sm-5 col-form-label">
                            <strong>Program Duration</strong> (In months)
                        </label>
                        <div class="col-sm-4">
                            <input class="form-control{{ $errors->has('program_duration') ? ' is-invalid' : '' }}" value="{{ old('program_duration', Auth::user()->program_duration) }}"
                                name="program_duration" type="number" min="0" max="99">
                            @if ($errors->has('program_duration'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('program_duration') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="program_duration" class="col-sm-5 col-form-label">
                            <strong>Tuition Fees (TOTAL)</strong>
                        </label>
                        <div class="col-sm-4">
                            <input class="form-control{{ $errors->has('tuition_fees') ? ' is-invalid' : '' }}" value="{{ old('tuition_fees', Auth::user()->tuition_fees) }}"
                                name="tuition_fees" type="number">
                            @if ($errors->has('tuition_fees'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('tuition_fees') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <select class="form-control" id="tuition_type" name="tuition_type">
                                    <option value="USD" selected>USD</option>
                                    <option value="CAN$">CAN$</option>
                                    <option value="EURO">EURO</option>
                                    <option value="GBP">GBP</option>
                                    <option value="US$">US$</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="minimum_experience" class="col-sm-5 col-form-label">
                            <strong>Minimum Years of Work Experience</strong>
                        </label>
                        <div class="col-sm-4">
                            <input class="form-control{{ $errors->has('minimum_experience') ? ' is-invalid' : '' }}" value="{{ old('minimum_experience', Auth::user()->minimum_experience) }}"
                                name="minimum_experience" type="number" min="1" max="99">
                            @if ($errors->has('minimum_experience'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('minimum_experience') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="students_employed" class="col-sm-5 col-form-label">
                            <strong>Percent of students employed</strong> (Within 3 months of graduation)
                        </label>
                        <div class="col-sm-1">
                            <input class="form-control{{ $errors->has('students_employed') ? ' is-invalid' : '' }}" value="{{ old('students_employed', Auth::user()->students_employed) }}"
                                name="students_employed" type="number" min="1" max="99">
                            @if ($errors->has('students_employed'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('students_employed') }}</strong>
                            </span>
                            @endif
                        </div>
                        <label for="languare_required" class="col-sm-3 col-form-label">
                            <strong>Language Requirement</strong>
                        </label>
                        <div class="col-sm-3">
                            <input class="form-control{{ $errors->has('languare_required') ? ' is-invalid' : '' }}" value="{{ old('languare_required', Auth::user()->languare_required) }}"
                                   name="languare_required" type="text">
                            @if ($errors->has('languare_required'))
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('languare_required') }}</strong>
                        </span>
                            @endif
                        </div>


                    </div>

                    <hr>
                    <div class="form-group">
                        <label for="financial_aid">
                            <strong>Financial aid for international students</strong>
                        </label>
                        <textarea class="form-control{{ $errors->has('financial_aid') ? ' is-invalid' : '' }}" name="financial_aid" rows="3">
                            {{ old('financial_aid', Auth::user()->financial_aid) }}
                        </textarea>
                        @if ($errors->has('financial_aid'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('financial_aid') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group row">
                        <label for="students_loans_cosigner" class="col-sm-5 col-form-label">
                            <strong>Can international students access loans without a cosigner?</strong>
                        </label>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <select id="students_loans_cosigner" name="students_loans_cosigner" class="form-control">
                                    <option value="--" selected>--</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Yes</option>

                                </select>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <label for="facebook_posts">
                        <strong>
                            To secure a successful event we have planned a social media campaign. For that purpose, please provide us with 5 Facebooks posts about your university and MBA programs, remember to add the #PMBAC hashtag to your posts.
                        </strong>
                    </label>
                    <textarea class="form-control{{ $errors->has('facebook_posts') ? ' is-invalid' : '' }}" rows="4" name="facebook_posts">
                        {{ old('facebook_post', Auth::user()->facebook_post) }}
                    </textarea>
                    @if ($errors->has('facebook_posts'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('facebook_posts') }}</strong>
                    </span>
                    @endif
                    <br>
                <p>
                    Please provide the official logo for the Business School. The width should have a width of at least 400 pixels
                </p>
                    <div class="form-group">
                        <label for="business_logo">Seleccionar Archivo</label>
                        <input name="business_logo" type="file">
                        @if ($errors->has('business_logo'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('business_logo') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header text-center">
                    <h5 class="card-title text-info"><strong>PREMIUM MBA CONTACT COST OF PARATICIPATION</strong></h5>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <p class="text-info">ALL PRICES IN US DOLLARS</p>
                    </div>
              <table class="table table-light table-bordered table-hover table-sm text-center">
                  <thead class="thead-light text-center">
                            <th>CITY</th>
                            <th>EARLY BIRD</th>
                            <th>STANDAR</th>
                            <th>LATE REGISTRATION</th>
                        </thead>
                        <tr class="text-center">
                            <td>SAO PAULO, BRAZIL</td>
                            <td>$ 3.500,00</td>
                            <td>$ 4.000,00</td>
                            <td>$ 4.500,00</td>
                        </tr>
                        <tr>
                            <td>LIMA, PERU</td>
                            <td>$ 3.000,00</td>
                            <td>$ 3.500,00</td>
                            <td>$ 4.000,00</td>
                        </tr>
                        <tr>
                            <td>BOGOTA, COLOMBIA</td>
                            <td>$ 3.500,00</td>
                            <td>$ 4.000,00</td>
                            <td>$ 4.500,00</td>
                        </tr>
                    </table>
                    <p><strong>Early Bird Registration:</strong> Confirmation before April 22nd, 2019 and payment no later than May
                        30th, 2019</p>
                    <p><strong>Standard Registration:</strong> Confirmation between April 22nd, 2019 and May 30th, 2019 and payment no
                        later than June 30th, 2019</p>
                    <p><strong>Late registration (subject to availability):</strong> Confirmation after June 1st, 2019 Payments
                        needs to be done within 3 weeks of confirmation by organizers of space available.</p>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header text-center align-middle">
                    <h5 class="card-title text-info"><strong>YOUR REGISTRATION INCLUDES:</strong></h5>
                </div>
                <div class="card-body">
                    <p><strong class="text-info">Cancellation of Registration</strong></p>
                    <p>Cancellations received on or before June 30th, 2019 will incur in a USD $500 administrative fee.</p>
                    <p>All Cancellations received after June 30th, 2019 will not be eligible for a refund</p>
                    <p>All cancellations must be made in writing to unis@premiummbacontact.com</p>
                    <p><strong class="text-info">Insurance</strong></p>
                    <p>Registration fees do not include insurance of any kind.</p>
                    <p><strong class="text-info">Cancellation Policy of the Premium MBA Contact Fair</strong></p>
                    <p class="text-justify">
                        In the unlikely event of Cancellation Policy or postponement of the <b>Premium MBA Contact Fair</b> due to circumstances beyond reasonable control, including but not limited to, acts of terrorism, war, acts of God and natural disaster, the organization can not be held responsible for any cost, damage or expense which may be incurred by registrants as a consequence of the event being postponed or cancelled.
                    </p>
                    <p>
                        PREMIUM MBA CONTACT FAIR is a registered
                        trade mark of <strong>PROYECTAMOS SU FUTURO LTDA</strong>
                    </p>
                    <hr>
                    <div class="card-body text-center align-middle">
                        <p>
                            <b>By submiting  this form you confirm that you read and accepted the </b>
                            <a href="" data-toggle="modal" data-target="#exampleModal">
                                <b>Disclosure Statements</b>
                            </a>
                            <b> of the Premium MBA Contact Fair.</b>
                        </p>
                        <button type="submit" class="btn btn-success">
                            Update Registration
                        </button>
                    </div>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header text-center">
                    <h4 class="card-title text-info"><strong>CANCELLATION POLICY</strong></h4>
                </div>
                <div class="card-body">
                    <p><strong class="text-info">Cancellation of Registration</strong></p>
                    <p>Cancellations received on or before June 30th, 2019 will incur in a USD $500 administrative fee.</p>
                    <p>All Cancellations received after June 30th, 2019 will not be eligible for a refund</p>
                    <p>All cancellations must be made in writing to unis@premiummbacontact.com</p>
                    <p><strong class="text-info">Insurance</strong></p>
                    <p>Registration fees do not include insurance of any kind.</p>
                    <p><strong class="text-info">Cancellation Policy of the Premium MBA Contact Fair</strong></p>
                    <p class="text-justify">
                        In the unlikely event of Cancellation Policy or postponement of the <b>Premium MBA Contact Fair</b> due to circumstances beyond reasonable control, including but not limited to, acts of terrorism, war, acts of God and natural disaster, the organization can not be held responsible for any cost, damage or expense which may be incurred by registrants as a consequence of the event being postponed or cancelled.
                    </p>
                    <p>
                        PREMIUM MBA CONTACT FAIR is a registered
                        trade mark of <strong>PROYECTAMOS SU FUTURO LTDA</strong>
                    </p>
                    <hr>
                    <div class="card-body text-center align-middle">
                        <p>
                            <b>By submiting  this form you confirm that you read and accepted the </b>
                            <a href="" data-toggle="modal" data-target="#exampleModal">
                                <b>Disclosure Statements</b>
                            </a>
                            <b> of the Premium MBA Contact Fair.</b>
                        </p>
                        <button type="submit" class="btn btn-success">
                            Update Registration
                        </button>
                    </div>
                </div>
            </div>
    </form>
        </div>


@endif
--}}
@endsection