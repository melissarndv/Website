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
                            <div class="contour">{{ __('Inscription') }}</div>
            
                            <div class="card-body">
                                <form method="POST" action="{{ route('register')}}">
                                    @csrf
            
                                    <div class="form-group row">
                                        {{-- <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label> --}}
            
                                        <div class="col-md-6">
                                            <p align="center"><input id="name" type="text" class="empas" placeholder="firstname" name="firstname" value="{{ old('firstname') }}" required size="30" autocomplete="firstname" autofocus></p>
            
                                            @error('firstname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        {{-- <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label> --}}
            
                                        <div class="col-md-6">
                                            <p align="center"><input type="text" class="empas" placeholder="lastname" name="lastname" value="{{ old('lastname') }}" required size="30" autocomplete="lastname" autofocus></p>
            
                                            @error('lastname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        {{-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> --}}
            
                                        <div class="col-md-6">
                                            <p align="center"><input id="email" type="email" class="empas" placeholder="Email" name="email" value="{{ old('email') }}" required size="30" autocomplete="email"></p>
            
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
            
                                    <div class="form-group row">
                                        {{-- <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label> --}}
            
                                        <div class="col-md-6">
                                                {{-- <p align="center"><input class="empas" type="password" placeholder="Confirmation" name="password_confirmation"
                                                    required size="30"></p> --}}
                                            <p align="center"><input id="password-confirm" type="password" class="empas" placeholder="Confirmation du mot de passe" name="password_confirmation" required size="30" autocomplete="new-password"></p>
                                        </div>
                                    </div>
            
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                                <p id="hv" align="center"><input class="b" type="submit" value="Inscription"></p>
                                                {{-- {{ __('Inscription') }} --}}
                                            </button>
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