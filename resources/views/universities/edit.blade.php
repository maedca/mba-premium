@extends('layouts.app')
@section('title', 'University Profile')
@section('content')
<div class="container">
    <form action="{{ route('university.update', $user->id) }}" method="POST" enctype="multipart/form-data">
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
                  Thank you for your interest in participating in Premium MBA Contact Fair. Please complete this registration form and we will issue the invoice as soon as we receive your registration.
                </p>
                {{--<p>--}}
                    {{--Registrations submitted by May 15 will have the Early Bird Rate. Payment must be done by May 31st, 2019 at the latest to be eligible to this rate.--}}
                {{--</p>--}}
                {{--<p>--}}
                    {{--We will issue the invoices as soon as we receive your registration form.--}}
                {{--</p>--}}
                <hr>
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
                        <label for="first_name" class="col-sm-4 col-form-label"><strong>UNIVERSITY NAME</strong></label>
                        <div class="col-sm-8">
                            <input class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" value="{{ old('first_name', $user->first_name) }}"
                            name="first_name" type="text">
                            @if ($errors->has('first_name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('first_name') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="last_name" class="col-sm-4 col-form-label"><strong>EMAIL</strong></label>
                        <div class="col-sm-8">
                            <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                   value="{{ old('email', $user->email) }}" name="email"
                                   type="text">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="last_name" class="col-sm-4 col-form-label"><strong>BUSINESS SCHOOL NAME</strong></label>
                        <div class="col-sm-8">
                            <input class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}"
                                   value="{{ old('last_name', $user->last_name) }}" name="last_name"
                                   type="text">
                            @if ($errors->has('last_name'))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('last_name') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="country" class="col-sm-4 col-form-label"><strong>CITY, STATE and COUNTRY</strong></label>
                        <div class="col-sm-4">
                            <input class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" value="{{ old('city', $user->city) }}"
                            name="city" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}"
                            type="text" placeholder="City">
                            @if ($errors->has('city'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('city') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="col-sm-4">
                            <select name="country" class="form-control">
                                <option value="CANADA">CANADA</option>
                                <option value="SPAIN">SPAIN</option>
                                <option value="THE NETHERLANDS">THE NETHERLANDS</option>
                                <option value="UK">UK</option>
                                <option value="USA">USA</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="website" class="col-sm-4 col-form-label"><strong>FULL TIME MBA PROGRAM WEBSITE</strong></label>
                        <div class="col-sm-8">
                            <input class="form-control{{ $errors->has('website') ? ' is-invalid' : '' }}"
                            value="{{ old('website', $user->website) }}" name="website"
                            class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text">
                            @if ($errors->has('website'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('website') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
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
                        value="{{ old('representative_first_name', $user->representative_first_name) }}" name="representative_first_name"
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
                        value="{{ old('representative_family_name', $user->representative_family_name) }}" name="representative_family_name"
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
                        value="{{ old('representative_email', $user->representative_email) }}" name="representative_email"
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
                        value="{{ old('representative_mobile_phone', $user->representative_mobile_phone) }}" name="representative_mobile_phone"
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
                        value="{{ old('representative_home_phone', $user->representative_home_phone) }}" name="representative_home_phone"
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
                        value="{{ old('representative_whatsapp_phone', $user->representative_whatsapp_phone) }}"
                        name="representative_whatsapp_phone" type="text">
                        @if ($errors->has('representative_whatsapp_phone'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('representative_whatsapp_phone') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label"><strong>Login Email address</strong></label>
                        <div class="col-sm-10">
                            <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                            value="{{ old('email', $user->email) }}" name="email"
                            class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text">
                            @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                <p>
                    We will be using whatsapp as a means of communication during the event.
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
                        <input class="form-control{{ $errors->has('contact_first_name') ? ' is-invalid' : '' }}" value="{{ old('contact_first_name', $user->contact_first_name) }}"
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
                        <input class="form-control{{ $errors->has('contact_family_name') ? ' is-invalid' : '' }}" value="{{ old('contact_family_name', $user->contact_family_name) }}"
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
                        <input class="form-control{{ $errors->has('contact_email') ? ' is-invalid' : '' }}" value="{{ old('contact_email', $user->contact_email) }}"
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
                        value="{{ old('contact_mobile_phone', $user->contact_mobile_phone) }}" name="contact_mobile_phone"
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
                        value="{{ old('contact_home_phone', $user->contact_home_phone) }}" name="contact_home_phone"
                        type="text">
                        @if ($errors->has('contact_home_phone'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('contact_home_phone') }}</strong>
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
                        <select name="sao_paulo_panel" id="sao_paulo_panel" class="form-control col-2">
                            @if ($user->sao_paulo_panel)
                            <option value="{{ old('sao_paulo_panel', $user->sao_paulo_panel) }}">
                                {{ old('sao_paulo_panel', $user->sao_paulo_panel) }}
                            </option>
                            @else
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            @endif
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="bogota_panel" class="col-sm-5 col-form-label">
                        BOGOTA, COLOMBIA; August 3rd, 2019
                    </label>
                    <div class="col-sm-7">
                        <select name="bogota_panel" class="form-control col-2" value="{{ old('bogota_panel', $user->bogota_panel) }}">
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
                        <select name="cultural_tour" class="form-control col-2" value="{{ old('cultural_tour', $user->cultural_tour) }}">
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <p>

                    </p>

                    <label for="email_for_student" class="col-sm-6 col-form-label">
                        <b> After the event, some candidates request the contact details of the attending representative to send a thank you note or to request further information; Which contact email could we give the students?</b>
                    </label>
                    <div class="col">
                        <input class="form-control{{ $errors->has('email_for_student') ? ' is-invalid' : '' }}"
                        value="{{ old('email_for_student', $user->email_for_student) }}" name="email_for_student"
                        type="text">
                        @if ($errors->has('email_for_student'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email_for_student') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header text-center align-middle">
                <h5 class="card-title text-info"><strong>INFORMATION ABOUT THE PROGRAM</strong></h5>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <p class="text-info">
                        We intend to use this information in the event´s webpage.
                    </p>
                </div>
                <div class="form-group">
                    <label for="description_mba_programs">
                        <strong>PLEASE PROVIDE A BRIEF DESCRIPTION OF THE FULL TIME MBA PROGRAM. (This should be about
                            500 words and would be advisable to include what makes the program unique).</strong>


                    </label>
                    <textarea class="form-control" name="description_mba_programs" rows="3">
                    {{ old('description_mba_programs', $user->description_mba_programs) }}
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="programs_type">
                    <strong>Program Type(s)</strong></label>
                    <input class="form-control{{ $errors->has('programs_type') ? ' is-invalid' : '' }}" value="{{ old('programs_type', $user->programs_type) }}"
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
                    {{ old('class_profile_mba', $user->class_profile_mba) }}
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="join_degrees_offered">
                        <strong>Joint Degrees Offered</strong>
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
                    <label for="concentrations">
                        <strong>Concentrations</strong>
                    </label>
                    <textarea class="form-control" name="concentrations" rows="3">
                    {{ old('concentrations', $user->concentrations) }}
                    </textarea>
                </div>
                <hr>
                <div class="form-group row">
                    <label for="program_duration" class="col-sm-3 col-form-label">
                        <strong>Program Duration</strong> (In months)
                    </label>
                    <div class="col-sm-9">
                        <input class="form-control{{ $errors->has('program_duration') ? ' is-invalid' : '' }}" value="{{ old('program_duration', $user->program_duration) }}"
                        name="program_duration" type="number" min="0" max="99">
                        @if ($errors->has('program_duration'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('program_duration') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="program_duration" class="col-sm-3 col-form-label">
                        <strong>Tuition Fees (TOTAL)</strong>
                    </label>
                    <div class="col-sm-7">
                        <input class="form-control{{ $errors->has('tuition_fees') ? ' is-invalid' : '' }}" value="{{ old('tuition_fees', $user->tuition_fees) }}"
                        name="tuition_fees" type="number">
                        @if ($errors->has('tuition_fees'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('tuition_fees') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <select id="tuition_type" class="form-control">
                                <option value="CAN$">CAN$</option>
                                <option value="EURO">EURO</option>
                                <option value="GBP">GBP</option>
                                <option value="US$" selected>US$</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="minimum_experience" class="col-sm-3 col-form-label">
                        <strong>Minimum Years of Work Experience</strong>
                    </label>
                    <div class="col-sm-7">
                        <input class="form-control{{ $errors->has('minimum_experience') ? ' is-invalid' : '' }}" value="{{ old('minimum_experience', $user->minimum_experience) }}"
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
                        <input class="form-control{{ $errors->has('students_employed') ? ' is-invalid' : '' }}" value="{{ old('students_employed', $user->students_employed) }}"
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

                    <div class="col-sm-3 ">

                        <input class="form-control{{ $errors->has('languare_required') ? ' is-invalid' : '' }}" value="{{ old('languare_required', $user->languare_required) }}"
                               name="languare_required" type="text">
                        @if ($errors->has('languare_required'))
                            <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('languare_required') }}</strong>
                    </span>
                        @endif
                    </div>
                </div>
                {{--<div class="form-group">--}}
                    {{--<label for="languare_required">--}}
                        {{--<strong>Language Requirement</strong>--}}
                    {{--</label>--}}
                    {{--<input class="form-control{{ $errors->has('languare_required') ? ' is-invalid' : '' }}" value="{{ old('languare_required', $user->languare_required) }}"--}}
                    {{--name="languare_required" type="text">--}}
                    {{--@if ($errors->has('languare_required'))--}}
                    {{--<span class="invalid-feedback" role="alert">--}}
                        {{--<strong>{{ $errors->first('languare_required') }}</strong>--}}
                    {{--</span>--}}
                    {{--@endif--}}
                {{--</div>--}}
                <hr>
                <div class="form-group">
                    <label for="financial_aid">
                        <strong>Financial aid for international students</strong>
                    </label>
                    <textarea class="form-control{{ $errors->has('financial_aid') ? ' is-invalid' : '' }}" name="financial_aid" rows="3">
                    {{ old('financial_aid', $user->financial_aid) }}
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
                                <option  selected value="--">--</option>
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
                {{ old('facebook_post', $user->facebook_post) }}
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
                        {{--<label for="business_logo"><strong>Business School Logo (220x160 pixels)</strong></label>--}}
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
                <h5 class="card-title text-info"><strong>COST OF PARTICIPATION</strong></h5>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <p class="text-info">ALL PRICES IN US DOLLARS</p>
                </div>
                <table class="table table-light table-bordered table-hover table-sm">
                    <thead class="thead-light text-center">
                        <th>CITY</th>
                        <th>EARLY BIRD REGISTRATION</th>
                        <th>STANDARD REGISTRATION</th>
                        <th>LATE REGISTRATION</th>
                    </thead>
                    <tr class="text-center">
                        <td>SAO PAULO, BRAZIL</td>
                        <td>$ 3.500,00</td>
                        <td>$ 4.000,00</td>
                        <td>$ 4.500,00</td>
                    </tr>
                    <tr class="text-center">
                        <td>LIMA, PERU</td>
                        <td>$ 3.000,00</td>
                        <td>$ 3.500,00</td>
                        <td>$ 4.000,00</td>
                    </tr>
                    <tr class="text-center">
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
                <table class="table table-bordered ">
                    <thead class="thead">
                        <tr>
                            <th></th>
                            <th class="text-center">Sao Paulo</th>
                            <th class="text-center">Lima</th>
                            <th class="text-center">Bogota</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="bg-light text-center"><strong>MBA Admissions Panel</strong></td>
                            <td class="text-center bg-success">x</td>
                            <td class="text-center bg-light"></td>
                            <td class="text-center bg-success">x</td>
                        </tr>
                        <tr>
                            <td class="bg-light text-center"><strong>Open Fair</strong></td>
                            <td class="text-center bg-success">x</td>
                            <td class="text-center bg-light"></td>
                            <td class="text-center bg-success">x</td>
                        </tr>
                        <tr>
                            <td class="bg-light text-center"><strong>Possibility to pre select candidates <br> for the one-to-one meetings</strong></td>
                            <td class="text-center bg-success">x</td>
                            <td class="text-center bg-success">x</td>
                            <td class="text-center bg-success">x</td>
                        </tr>
                        <tr>
                            <td class="bg-light text-center"><strong>10 to 16 one-to-one meetings <br>with highly qualified candidates</strong></td>
                            <td class="text-center bg-success">x</td>
                            <td class="text-center bg-success">x</td>
                            <td class="text-center bg-success">x</td>
                        </tr>
                        <tr>
                            <td class="bg-light text-center"><strong>Specific information about <br> your school in the event's webpage</strong></td>
                            <td class="text-center bg-success">x</td>
                            <td class="text-center bg-success">x</td>
                            <td class="text-center bg-success">x</td>
                        </tr>
                        <tr>
                            <td class="bg-light text-center"><strong>25 minute university presentation</strong></td>
                            <td class="text-center bg-success">x</td>
                            <td class="text-center bg-light"></td>
                            <td class="text-center bg-success">x</td>
                        </tr>
                        <tr>
                            <td class="bg-light text-center"><strong>Information Booth</strong></td>
                            <td class="text-center bg-success">x</td>
                            <td class="text-center bg-success">x</td>
                            <td class="text-center bg-success">x</td>
                        </tr>
                        <tr>
                            <td class="bg-light text-center"><strong>Company Visits</strong></td>
                            <td class="text-center bg-light"></td>
                            <td class="text-center bg-success">x</td>
                            <td class="text-center bg-light"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header text-center">
                <h4 class="card-title text-info"><strong>CANCELLATION POLICES</strong></h4>
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

{{--</div>--}}
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Disclosure Statement</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
            I authorize THE GRAD SCHOOL, its subsidiaries and / or foreign subsidiaries to store, manage, and use my personal data herein voluntarily provided in order to periodically contact me via text message, email, physical mail, telephone, and any other suitable means of communication, directly or through third parties related to THE GRAD SCHOOL and PREMIUM MBA CONTACT FAIR to provide me information on topics related to education.
        </p>
        <p>
            THE GRAD SCHOOL shall maintain the confidentiality of my data and information and will only disclose it by request of the monitoring and control bodies and authorities that have the legal authority to do so, and I will allow me at all times and free of charge to know, update, correct or request removal of my personal information in accordance to Article 8 of Law 1581 of 2012.
        </p>
        <p>
            Autorizo expresamente a THE GRAD SCHOOL, sus filiales y/o subsidiarias extranjeras para que almacene, administre y utilice mis datos personales, suministrados voluntariamente en el presente documento con el fin de que periódicamente me contacten mediante mensajes de texto, correo electrónico, correo físico, vía telefónica, y cualquier otro medio idóneo de comunicación, directamente o a través de terceros relacionados con THE GRAD SCHOOL y el PREMIUM MBA CONTACT FAIR para brindarme información acerca de temas relacionados con la educación.
        </p>
        <p>
            THE GRAD SCHOOL deberá mantener la confidencialidad de mis datos e información y sólo divulgará ésta por solicitud expresa de las entidades de vigilancia y control y autoridades que tengan la facultad legal de solicitarla, y me permitirá en todo momento y de manera gratuita conocer, actualizar, corregir o solicitar que se elimine mi información personal de conformidad con el artículo 8 de la Ley 1581 de 2012.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection