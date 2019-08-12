@extends('layouts.app')

@section('title', 'University Index')

@section('content')
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
                <i class="fas fa-plus"></i>
            </a>
        </div>
        <div class="col">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for University" aria-label="Recipient's ">
                <div class="input-group-append">
                    <a class="btn btn-primary">
                        <span>
                            <i class="fas fa-search"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<br>

<div class="container">
    <table class="table table-light table-bordered table-hover table-sm">
        <thead class="thead-light">
            <tr class="text-center">
                <th>ID</th>
                <th>University Name</th>
                <th>Email</th>
                <th>Register</th>
                <th>Updated</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            @if ($user->role === 'university')
                
            <tr class="align-middle">
                <td><strong>{{ $user->id }}</strong></td>
                <td>{{ $user->first_name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at }}</td>
                <td>{{ $user->updated_at }}</td>
                {{-- User Status --}}
                <td class="text-center">
                    <form action="{{ route('university.update', $user->id) }}" method="POST">
                        @csrf
                        @if ($user->status != null)
                            <button class="btn btn-sm btn-success text-white" id="status" name="status" type="submit" value="0">
                                <i class="fas fa-check"></i>
                            </button>
                        @else
                            <button class="btn btn-sm btn-danger text-white" name="status" id="status" type="submit" value="1">
                                <i class="fas fa-ban"></i>
                            </button>
                        @endif
                        {{ method_field('PUT') }}
                    </form>
                </td>
                <td class="text-center align-middle">
                    <form action="{{ route('university.destroy', $user->id) }}" method="post">
                        @csrf
                        <a class="btn btn-sm btn-success" href="{{ route('university.edit', $user->id) }}">
                            <i class="fas fa-pen"></i>
                        </a>
                        <button type="submit" class="btn btn-danger btn-sm"><span>
                            <i class="fas fa-times"></i>
                        </span></button>
                        {{ method_field('DELETE') }}
                    </form>
                </td>
            </tr>
            @endif
            @endforeach
        </tbody>
    </table>
    {{--{{ $users->links() }}--}}
</div>
@stop