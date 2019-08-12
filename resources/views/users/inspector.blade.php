@extends('layouts.app')
@section('content')
    <div class="container text-center">
        <div class="btn-group btn-group-toggle">
            <a class="btn btn-primary" href="{{ route('user.index') }}">
                Students
            </a>
            <a class="btn btn-primary active" href="{{ route('user.inspector') }}">
                Inspectors
            </a>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col">
                <a class="btn btn-primary" href="{{ route('user.create')}}">
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
            <thead class="thead-light text-center">
            <tr>
                <th>ID</th>
                <th>Identification</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Updated At</th>
                <th>Register At</th>
                @if (Auth::user()->role == 'admin')
                    <th>Actions</th>
                @endif
            </tr>
            </thead>
            @foreach ($users as $user)
                @if ($user->role === 'inspector')

                    <tr class="align-middle">
                        <td><strong>{{ $user->id }}</strong></td>
                        <td><strong>{{ $user->role }}</strong></td>
                        <td>{{ $user->first_name }}</td>
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->updated_at }}</td>
                        <td>{{ $user->created_at }}</td>
                        @if (Auth::user()->role == 'admin')
                            <td class="text-center align-middle">
                                <form action="{{ route('user.destroy', $user->id) }}" method="post">
                                    <button type="submit" class="btn btn-danger btn-sm"><span>
                                <i class="fas fa-times"></i>
                            </span></button>
                                    {{ method_field('DELETE') }}
                                    @csrf
                                </form>
                            </td>
                        @endif
                    </tr>
                @endif
            @endforeach
        </table>
        {{--{{ $users->links() }}--}}
    </div>
@endsection
@section('scripts')

    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
@endsection