@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('users.create') }}" title="Create a user">Create a new user<i class="fas fa-plus-circle"></i></a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Mail</th>
            <th>Password</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($user as $users)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $users->name }}</td>
                <td>{{ $users->email }}</td>
                <td>{{ $users->password }}</td>
                <td>
                    <form action="{{ route('users.destroy', $users->id) }}" method="POST">

                        <a href="{{ route('users.show', $users->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('users.edit', $users->id) }}">
                            <i class="fas fa-edit  fa-lg">Edit</i>

                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger">Delete</i>

                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $user->links() !!}

@endsection
