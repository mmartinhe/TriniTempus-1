<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TriniTempus</title>

    <!--icono pestaña-->
    <link rel="ICON" type="iMAGEN/PNG" href="{{ asset('img/pestaña.png')}}"/>


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #A0E5EB;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        
        .full-height {
            height: 100vh;
        }
        
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        
        .position-ref {
            position: relative;
        }
        
        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }
        
        .content {
            text-align: center;
        }
        
        .title {
            font-size: 84px;
        }
        
        .links> a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        
        .m-b-md {
            margin-bottom: 30px;
        }
        
        #logo {
            margin-top: -300px;
        }
        
        #capa_logueo {
            position: absolute;
            background-color: #D6F7FC;
            width: 300px;
            height: 300px;
            border-radius: 20px;
            margin-left: 100px;
            margin-top: -100px;
            padding-top: 20px;
            font-size: 20px;
            font-weight: bold;
            color: dimgray;
        }

    </style>
</head>

<body>
    @extends('layouts.app')
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a> @else
            <a href="{{ route('login') }}">Logarse</a> @if (Route::has('register'))
            <a href="{{ route('register') }}">Registrarse</a> @endif @endauth
        </div>
        @endif

        <div class="content">
            <div id="logo" class="title m-b-md">
                <a id="capa" href='<?=url('/')?>'><img id="encabezado" src="{{ asset('img/logo.png')}}"/></a> @section('content')
                <div id="capa_logueo" class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">{{ __('Login') }}
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
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old( 'remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label" for="remember">
                            {{ __('Recordarme') }}
                        </label>
                                                



                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-8 offset-md-4">
                                                <br>
                                                <button type="submit" class="btn btn-primary">
                        {{ __('Entrar') }}
                    </button>
                                                @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
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