@extends('layouts.app')
@section('content')
    {{--  
    <nav class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" href="{{ route('user.edit', Auth::user()->id) }}">User Profile</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link " href="{{ asset('files/'.Auth::user()->cv) }}">CV</a>
        </li>
    </nav>
    --}}
    <div class="container">
        {{-- <p>{{ Auth::user()->uni_choice }}</p> --}}
        @if (!empty(Auth::user()->files->first()))
            <label><strong>Image Profile</strong></label><br>
            <a href="{{ asset(Auth::user()->files->first()->file) }}" target="_blank" style="text-decoration: none;">
                <img src="{{ asset(Auth::user()->files->first()->file) }}" style="width: 200px;">
            </a>
        @endif
        <br><br>
        <ul>
            @foreach(explode(',', \Illuminate\Support\Facades\Auth::user()->uni_choice) as $info)
                <li>{{$info}}</li>
            @endforeach
        </ul>
    </div>
@endsection