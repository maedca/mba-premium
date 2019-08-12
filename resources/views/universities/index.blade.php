@extends('layouts.app')
@section('title', 'Universities')
@section('content')
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">--}}


    <div class="container text-center">
        <div class="btn-group btn-group-toggle">
            <a class="btn btn-primary active" href="{{ route('university.index') }}">
                All
            </a>
            <a class="btn btn-primary" href="{{ route('university.active') }}">
                Active Users
            </a>
            <a class="btn btn-primary" href="{{ route('university.disable') }}">
                Archived Users
            </a>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col">
                <a class="btn btn-primary" href="{{ route('university.create')}}">
                    Add
                    <i class="fas fa-user-plus"></i>
                </a>
            </div>
            {{--<div class="col">--}}
                {{--<div class="input-group">--}}
                    {{--<input class="form-control" type="text" placeholder="Search for User" aria-label="Recipient's ">--}}
                    {{--<div class="input-group-append">--}}
                    {{--<span class="btn btn-primary">--}}
                        {{--<i class="fas fa-search"></i>--}}
                    {{--</span>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
    <br>
    <div class="container">
        <table class="table table-light table-bordered table-hover table-sm" id="example">
        {{--<table class="table table-striped table-bordered" id="example">--}}
            <thead>
            <tr class="thead-light text-center">
                <th>ID</th>
                <th>University</th>
                <th>Email Correo</th>
                <th>Updated At</th>
                <th>Register At</th>
                <th>Approval</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                @if ($user->role === 'university')
                    <tr class="align-middle">
                        <td><strong>{{ $user->id }}</strong></td>
                        <td>{{ $user->first_name }}</td>
                        <td>{{ $user->email}}</td>
                        <td>{{ $user->updated_at }}</td>
                        <td>{{ $user->created_at }}</td>
                        {{-- User Status --}}
                        <td class="text-center">
                            <form action="{{ route('university.update', $user->id) }}" method="POST">
                                @csrf
                                @if ($user->status != null)
                                    <button class="btn btn-sm btn-success text-white" id="status" name="status"
                                            type="submit"
                                            value="0">
                                        <i class="fas fa-user-check"></i>
                                    </button>
                                @else
                                    <button class="btn btn-sm btn-danger text-white" name="status" id="status"
                                            type="submit"
                                            value="1">
                                        <i class="fas fa-user-times"></i>
                                    </button>
                                @endif
                                {{ method_field('PUT') }}
                            </form>
                        </td>
                        <td class="text-center align-middle">
                            <div class="btn-group">
                                <form action="{{ route('university.destroy', $user->id) }}" method="post">
                                    <a class="btn btn-sm btn-primary" href="{{ route('university.students', $user->id) }}" title="">
                                        <i class="fas fa-user-friends"></i>
                                    </a>
                                    <a class="btn btn-sm btn-success" href="{{ route('university.edit', $user->id) }}">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                    <button type="submit" class="btn btn-danger btn-sm"><span>
                                <i class="fas fa-times"></i>
                            </span></button>
                                    {{ method_field('DELETE') }}
                                    @csrf
                                </form>
                            </div>
                        </td>
                    </tr>
                @endif
            @endforeach
            </tbody>
        </table>
        {{--{{ $users->links() }}--}}
    </div>

@endsection
@section('scripts')

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
    @endsection