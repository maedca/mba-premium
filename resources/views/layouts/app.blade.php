<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'MBA')</title>

    <!-- Scripts -->
    {{--<script src="{{ asset('js/app.js') }}" defer></script>--}}



    <!-- Fonts -->

    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">--}}
    {{--<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">--}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand text-info" href="{{ url('/') }}" style="width: 230px">
                    <img src="{{ asset('images/mba_logo.png') }}" class="mba-logo rounded mx-auto d-block" alt="...">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @if (Auth::check())
                        @if (Auth::user()->role === 'admin' || Auth::user()->role === 'inspector')
                            <ul class="navbar-nav mr-auto">
                                @if (Auth::user()->role === 'admin')
                                    <li class="navbar-item">
                                        <a class="nav-link" href="{{ route('university.index') }}">Universities</a>
                                    </li>
                                @endif
                                <li class="navbar-item">
                                    <a class="nav-link" href="{{ route('user.index') }}">Students</a>
                                </li>
                            </ul>
                        @elseif(Auth::user()->role === 'student')
                            <ul class="navbar-nav mr-auto">
                                <li class="navbar-item">
                                    <a class="nav-link" href="{{ route('user.edit', Auth::user()->id) }}">User Profile</a>
                                </li>
                                <li class="navbar-item">
                                    <a class="nav-link" 
                                    @if(!empty(Auth::user()->cv))
                                        href="{{ asset('files/'.Auth::user()->cv) }}"
                                        target="_blank" 
                                    @else
                                        href="#"
                                        onclick="return alert('You have not uploaded your cv');" 
                                    @endif
                                    >CV</a>
                                </li>
                            </ul>
                        @elseif(Auth::user()->role === 'university')
                            <ul class="navbar-nav mr-auto">
                                <li class="navbar-item">
                                    <a class="nav-link" href="{{ route('university.edit', Auth::user()->id) }}">Edit Profile</a>
                                </li>
                                <li class="navbar-item">
                                    <a class="nav-link" href="{{ route('university.studentList') }}">Students</a>
                                </li>
                                <li class="navbar-item">
                                    <a class="nav-link" href="{{ route('university.appointments', Auth::user()->id) }}">Appointments</a>
                                </li>
                            </ul>
                        @endif
                    @endif

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <strong>
                                            {{ Auth::user()->email }} <span class="caret"></span>
                                    </strong>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @if (Auth::user()->role === 'student')
                                        <a class="dropdown-item" href="{{ route('user.profile', Auth::user()->id) }}">
                                            Profile
                                        </a>
                                    @endif
                                    @if (Auth::user()->role === 'university')
                                        <a class="dropdown-item" href="{{ route('university.edit', Auth::user()->id) }}">
                                            Profile
                                        </a>
                                    @endif
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            <div class="container">
                @include('flash::message')
            </div>
            
            @yield('content')

        </main>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@yield('scripts')
</body>
</html>
