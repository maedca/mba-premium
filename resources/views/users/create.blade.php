@extends('layouts.app')

@section('title', 'Register')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header text-center"><strong>Register User</strong></div>
        <div class="card-body">
            <form action="{{ route('user.store') }}" method="POST">
                <input type="hidden" name="status" id="status" value="0">
                @csrf                
                <div class="text-center">
                    <div class="form-group">
                        <label for="role"><strong>Role</strong></label>
                        <select id="role" name="role" class="form-control">
                            <option value="student" selected>Student</option>
                            <option value="inspector">Inspector</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                </div>
                <hr>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="first_name"><strong>First Name</strong></label>
                        <input class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" type="text" name="first_name" value="{{ old('first_name') }}" autofocus>
                        @if ($errors->has('first_name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('first_name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label for="last_name"><strong>Last Name</strong></label>
                        <input class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" type="text" name="last_name" value="{{ old('last_name') }}">
                        @if ($errors->has('last_name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('last_name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <select class="form-control{{ $errors->has('dni_type') ? ' is-invalid' : '' }}" name="dni_type" id="dni_type">
                                <option value="DNI">DNI</option>
                                <option value="Passport">Passport</option>
                        </select>
                    </div>
                    <input type="text" class="form-control{{ $errors->has('dni') ? ' is-invalid' : '' }}" type="text" name="dni" placeholder="DNI" value="{{ old('dni') }}">
                    @if ($errors->has('dni'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('dni') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="mobile_phone"><strong>Mobile Phone</strong></label>
                        <input class="form-control{{ $errors->has('mobile_phone') ? ' is-invalid' : '' }}" type="text" name="mobile_phone" placeholder="Mobile Phone" value="{{ old('mobile_phone') }}">
                        @if ($errors->has('mobile_phone'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('mobile_phone') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group col-6">
                        <label for="email"><strong>Email</strong></label>
                        <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="password"><strong>Password</strong></label>
                        <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" placeholder="Password" value="{{ old('password') }}">
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group col-6">
                        <label for="password_confirm"><strong>Password Confirm</strong></label>
                        <input class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" type="password" name="password_confirmation" placeholder="Confirm Password" value="{{ old('password_confirm') }}">
                        @if ($errors->has('password_confirmation'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">
                    Sing Up
                </button>
            </form>
        </div>
    </div>
</div>

@endsection
