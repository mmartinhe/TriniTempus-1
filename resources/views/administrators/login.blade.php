<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TriniTempus</title>

    <!--icono pestaña-->
    <link rel="ICON" type="iMAGEN/PNG" href="{{ asset('img/pestaña.png')}}"/>

    <!---css--->
    <link rel="stylesheet" href="../css/stilos.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>

<body>
    @extends('layouts.app')
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a> @else
            <a href="{{ route('login') }}">Logarse</a> 
            <a href="{{ url('admins/login') }}">Logarse admin</a>@if (Route::has('register'))
            <a href="{{ route('register') }}">Registrarse</a>@endif @endauth
        </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                <a id="capa" href="{{ url('/')}}"><img  src="{{ asset('img/logo.png')}}" style='max-width: 180px'/></a>
            </div>
            @section('content')
            <div id="capa_logueo" class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('Login Admin') }}
                            </div>
                            <br>
                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Direccion E-Mail') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> @error('email')
                                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                            @enderror
                                        </div>
                                        <br>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"> @error('password')
                                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="form-check">
                                                <br>
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old( 'remember') ? 'checked' : '' }}>

                                                <label class="form-check-label " for="remember">
                            {{ __('Recordarme') }}
                        </label>
                                            




                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <br>
                                            <button id="btn_entrar" type="submit" class="btn btn-primary">
                        {{ __('Entrar') }}
                    </button>
                                            @if (Route::has('password.request'))
                                            <a class="btn btn-link text-decoration-none" href="{{ route('password.request') }}">
                            {{ __('Perdiste la contraseña?') }}
                        </a>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endsection

</body>
</html>