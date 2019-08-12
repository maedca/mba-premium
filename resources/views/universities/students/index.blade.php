@extends('layouts.app')
@section('title', 'Student List')
@section('content')
<div class="container">
    <h1>Students - @if(auth()->user()->role != 'admin') {{auth()->user()->first_name}} @else {{ $university->first_name }} @endif</h1>
    {{--<section class="section">--}}
        {{--<div class="row">--}}
            {{--<div class="col">--}}
            {{--</div>--}}
            {{--<div class="col-7">--}}
                {{--<div class="row">--}}
                    {{--<div class="input-group">--}}
                        {{--<select id="my-input" class="form-control" >--}}
                            {{--<option value="All">All</option>--}}
                            {{--<option value="Yes"><a href="">Yes</a></option>--}}
                            {{--<option value="No"><a href="">No</a></option>--}}
                        {{--</select>--}}
                        {{--<input class="form-control" type="text" placeholder="Search for User" aria-label="Recipient's ">--}}
                        {{--<div class="input-group-append">--}}
                            {{--<span class="btn btn-primary">--}}
                                {{--<i class="fas fa-search"></i>--}}
                            {{--</span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    <br>
    <div class="section">
        <table class="table table-light table-bordered table-hover table-sm" id="example">
            <thead class="thead-light text-center">
                <tr>
                    <th>ID</th>
                    <th>DNI</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Updated at</th>
                    <th>CV</th>
                    <th>Request</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                {{--@if ($user->role === 'student' && $user->status === 1)--}}
                <tr>
                    <td class="text-center"><a class="text-dark" href=""><strong>{{ $user->id }}</strong></a></td>
                    <td><a href="">{{ $user->dni }}</a></td>
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td class="text-center">{{ $user->updated_at }}</td>
                    <td class="text-center">
                        @if ($user->cv != null)
                        <a class="btn btn-sm btn-success" href="{{ asset('files/' . $user->cv) }}" target="_blank">
                            <i class="fas fa-file"></i>
                        </a>
                        @else
                        <span class="btn btn-sm btn-warning">
                            <i class="far fa-file"></i>
                        </span>
                        @endif
                    </td>
                    <td class="text-center">
                        @if (auth()->user()->role != 'admin')
                            <a href="{{ route('appointments.create', ['student' => $user->id]) }}" class="btn btn-warring btn-sm">
                        @else
                            <a href="{{ route('appointments.create', ['student' => $user->id, 'university' => $university->id]) }}" class="btn btn-warring btn-sm">
                        @endif
                            <span>En progreso</span>
                        </a>
                    </td>
                </tr>
                {{--@endif--}}
                @endforeach
            </tbody>
        </table>
        {{--{{ $users->links() }}--}}
    </div>
</div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
@endsection