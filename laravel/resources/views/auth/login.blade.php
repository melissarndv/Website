@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/auth.css') }}" rel="stylesheet">
@endsection

@section('content')
<div id="login">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="contour">{{ __('Connexion') }}</div>


                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            {{-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> --}}

                            <div class="col-md-6">
                                <p align="center"><input  ="email" type="email" class="empas" placeholder="Email" name="email" value="{{ old('email') }}" required size="30" autocomplete="email"></p>


                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {{-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> --}}

                            <div class="col-md-6">
                                <p align="center"><input id="password" type="password" class="empas" placeholder="Mot de passe" name="password" required size="30" autocomplete="new-password"></p>


                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> --}}

                        <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                        @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Mot de passe oublié ?') }}
                                        </a>
                                    @endif
                                        <p id="hv" align="center"><input class="b" type="submit" value="Connexion"></p>
                                    {{-- <button type="submit" class="btn btn-primary"> --}}
                                        {{-- {{ __('Login') }} --}}
                                    {{-- </button> --}}   
                                    {{-- @if (Route::has('password.request')) --}}
                                        <a class="" href="{{ route('register') }}">
                                            {{ __('Créer un compte ?') }}
                                        </a>
                                    {{-- @endif --}}
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
