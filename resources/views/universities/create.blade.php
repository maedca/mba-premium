@extends('layouts.app')

@section('title', 'University Register')

@section('content')

<div class="container">
    <form method="POST" action="{{ route('university.store') }}" enctype="multipart/form-data">
        @csrf
        <input value="0" id="status" name="status" type="hidden">
        <input value="university" id="role" name="role"type="hidden">
        <div class="card">
            <div class="card-header text-center">
                <h5 class="card-title">Create University</h5>
            </div>
            <div class="card-body">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="first_name"><strong>University Name</strong></label>
                                <input value="{{ old('first_name') }}" id="first_name" name="first_name" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" type="text">
                                @if ($errors->has('first_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="email"><strong>Direct Email Address (Also used for Login)</strong></label>
                                <input value="{{ old('email') }}" id="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" placeholder="example@example.com">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-6">
                            <label for="password"><strong>Password</strong></label>
                            <input value="{{ old('password') }}" id="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" placeholder="******">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-6">
                            <label for="password_confirmation"><strong>Confirm Password</strong></label>
                            <input value="{{ old('password_confirmation') }}" id="password_confirmation" name="password_confirmation" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" type="password" placeholder="******">
                            @if ($errors->has('password_confirmation'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">
                            Submit
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection