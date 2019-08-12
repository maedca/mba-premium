@extends('layouts.app')
@section('content')
    <nav class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('university.edit', $user->id) }}">Edit Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('university.studentList') }}">Students</a>
        </li>
    </nav>
@endsection