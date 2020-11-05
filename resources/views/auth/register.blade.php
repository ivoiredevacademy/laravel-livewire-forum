@extends('layouts.auth')

@section('content')
<div class="container h-100">
    <div class="row justify-content-center h-100">
        <div class="col-sm-12 col-md-8 d-flex flex-column justify-content-center">

            <h1 style="color: #1E1E64">Créer mon compte</h1>

            <form method="POST" action="{{ route('register') }}" class="w-100">
                @csrf

                <div class="form-group">
                    <label for="name" class="col-form-label">Nom</label>
                    <div class="">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

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

                <div class="form-group">
                    <label for="password_confirmation" class="col-form-label ">Mot de passe (confirmation)</label>
                    <div class="">
                        <input id="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" value="{{ old('password_confirmation') }}" required autocomplete="password_confirmation" autofocus>

                        @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary btn-block shadow">
                            S'inscrire
                        </button>
                    </div>
                    <div class="col-md-12 mt-2">
                        Si vous avez déjà un compte, vous pouvez vous <a href="/login">connecter</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
