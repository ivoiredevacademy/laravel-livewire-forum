@extends('layouts.auth')

@section('content')
    <div class="container h-100">
        <div class="row justify-content-center h-100">
            <div class="col-sm-12 col-md-8 d-flex flex-column justify-content-center">

                <h1 style="color: #1E1E64">Se connecter</h1>

                <form method="POST" action="{{ route('login') }}" class="w-100">
                    @csrf
                    <div class="form-group">
                        <label for="email" class="col-form-label ">Email</label>
                        <div class="">
                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-form-label ">Mot de passe</label>
                        <div class="">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="name" autofocus>

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-block shadow">
                                Connexion
                            </button>
                        </div>
                        <div class="col-md-12 mt-2">
                            Si vous n'avez pas de compte, vous pouvez vous <a href="/register">inscrire</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
