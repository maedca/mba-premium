@extends('layouts.app')
@section('title', 'Users Index')
@section('content')
<div class="container text-center">
    <div class="btn-group btn-group-toggle">
        <a class="btn btn-primary active" href="{{ route('user.index') }}">
            Students
        </a>
        <a class="btn btn-primary" href="{{ route('user.inspector') }}">
            Inspectors
        </a>
    </div>
</div>
<br>
<div class="container">
    {{--<div class="row">--}}
        {{--<div class="col">--}}
            {{--<a class="btn btn-primary" href="{{ route('user.create')}}">--}}
                {{--Add--}}
                {{--<i class="fas fa-user-plus"></i>--}}
            {{--</a>--}}
        {{--</div>--}}
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
            <th>ID</th>
            <th>Identification</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Updated At</th>
            <th>Register At</th>
            <th>CV</th>
            <th>Approval</th>
            <th>Actions</th>
        </thead>
        @foreach ($users as $user)
        @if ($user->role === 'student')
        <tr class="align-middle">
            <td><strong>{{ $user->id }}</strong></td>
            <td>
                <a href="{{ route('user.show', $user->id) }}">{{ $user->dni }}</a>
            </td>
            <td>{{ $user->first_name }}</td>
            <td>{{ $user->last_name }}</td>
            <td>{{ $user->updated_at }}</td>
            <td>{{ $user->created_at }}</td>
            <td class="text-center">
                @if ($user->cv != null)
                <a class="btn btn-sm btn-success" target="_blank" href="{{ asset('files/' . $user->cv) }}">
                    <i class="fas fa-file"></i>
                </a>
                @else
                <span class="btn btn-sm btn-warning">
                    <i class="far fa-file"></i>
                </span>
                @endif
            </td>
            {{-- User Status --}}
            <td class="text-center">
                <form action="{{ route('user.update', $user->id) }}" method="POST">
                    @csrf
                    @if ($user->status != null)
                    <button class="btn btn-sm btn-success text-white" id="status" name="status" type="submit"
                        value="0">
                        <i class="fas fa-user-check"></i>
                    </button>
                    @else
                    <button class="btn btn-sm btn-danger text-white" name="status" id="status" type="submit"
                        value="1">
                        <i class="fas fa-user-times"></i>
                    </button>
                    @endif
                    {{ method_field('PUT') }}
                </form>
            </td>
            <td class="text-center align-middle">
                <div class="btn-group">
                    @if (Auth::user()->role == 'admin')
                        {{-- expr --}}
                    @endif
                    <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal" style="color:white">
                        <i class="fas fa-sticky-note"></i>
                    </button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">
                                        <strong>Note</strong>
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('user.update', $user->id) }}" method="post">
                                        @csrf
                                        <textarea class="form-control{{ $errors->has('notes') ? ' is-invalid' : '' }}" name="notes" style="max-width: 100%" rows="10">
                                            {{ old('notes', $user->notes) }}
                                        </textarea>
                                        <br>
                                        <button type="button" class="btn" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn">Save changes</button>
                                        {{ method_field('PUT') }}
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form action="{{ route('user.destroy', $user->id) }}" method="post">
                        <a class="btn btn-sm btn-success" href="{{ route('user.edit', $user->id) }}">
                            <i class="fas fa-pen"></i>
                        </a>
                        @if (Auth::user()->role == 'admin')
                            <button type="submit" class="btn btn-danger btn-sm"><span>
                                    <i class="fas fa-times"></i>
                                </span></button>
                        @endif
                        {{ method_field('DELETE') }}
                        @csrf
                    </form>
                </div>
            </td>
        </tr>
        @endif
        @endforeach
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