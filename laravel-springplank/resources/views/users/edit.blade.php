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
                            <div class="pull-right mb-4">
                                <a href="{{ route('users.index') }}" title="Go back"><i class="fas fa-chevron-left"></i></a>
                            </div>
                            <div class="pull-left mb-4">
                                <h2>Wijzig gebruiker</h2>
                            </div>
                        </div>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('users.update', $user->id) }}" method="POST" >
                        @csrf

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <h3>Gebruiksnaam:</h3>
                                    <input class="input-field-input mb-4" type="text" value="{{$user->name }}" name="{{ $user->name }}" class="form-control" placeholder="Voer gebruikersnaam in...">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <h3>Email:</h3>
                                    <input class="input-field-input mb-4" type="text" value="{{$user->email }}" name="{{ $user->email }}" class="form-control" placeholder="Voer email in...">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <h3>Wachtwoord:</h3>
                                    <input class="input-field-input mb-4" type="password" value="{{$user->password }}" name="{{ $user->password }}" class="form-control" placeholder="Voer wachtwoord in...">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-lg sendBtn mb-4">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
