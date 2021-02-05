@extends('layouts.app')

@section('content')
    <div class="d-flex" id="wrapper">
        <div style="width: 20em; height: 85vh;" class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading pl-3">
                <h2>Springplank Admin</h2>
            </div>
            <div class="list-group list-group-flush">
                <a href="/users" class="list-group-item list-group-item-action bg-light">Gebruiker Dashboard</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Nieuwsbrief</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Inbox</a>
            </div>
        </div>

        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="pull-right">
                                <a class="btn btn-lg sendBtn mb-4"  href="{{ route('users.create') }}" title="Create a user"><i class="pr-3 fas fa-plus-circle"></i>Gebruiker aanmaken</a>
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
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        @foreach ($user as $users)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $users->name }}</td>
                                <td>{{ $users->email }}</td>
                                <td>{{ $users->password }}</td>
                                <td>
                                    <form action="{{ route('users.destroy', $users->id) }}" method="POST">
{{--                                        <a href="{{ route('users.show', $users->id) }}" title="show">--}}
{{--                                            <i class="fas fa-eye text-success  fa-lg"></i>--}}
{{--                                        </a>--}}
                                        <a href="{{ route('users.edit', $users->id) }}">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ route('users.destroy', $users->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>

                    {!! $user->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
