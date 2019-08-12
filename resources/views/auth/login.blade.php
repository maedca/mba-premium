@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email"><strong>Email</strong></label>
                            <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email"
                                name="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="password"><strong>Password</strong></label>
                            <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password"
                                name="password" value="{{ old('password') }}">
                            @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            @endif
                        </div>
                        <div class="row justify-content-center">
                            <div>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                        <div class="text-center">
                            Dont have account yet?<a href="{{ route('register') }}"> Register</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection