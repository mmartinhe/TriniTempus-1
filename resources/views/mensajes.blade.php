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
        
        #encabezado {
            margin-top: -80px;
            width: 350px;
            height: 250px;
        }
        
        
        #capa_registro {
            position: absolute;
            background-color: #D6F7FC;
            width: 350px;
            height: 420px;
            border-radius: 20px;
            margin-left: 60px;
            margin-top: -120px;
            padding-left: 20px;
            padding-top: 20px;
            font-size: 20px;
            font-weight: bold;
        }
        
        .container {
            position: absolute;
            margin-left: 1550px;
            margin-top: -280px;
        }

    </style>
</head>

<body>
    @extends('layouts.app') @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"></div>

                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection @if (Route::has('login'))
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a> @else
        <a href="{{ route('login') }}">Logarse</a> @if (Route::has('register'))
        <a href="{{ route('register') }}">Registrarse</a> @endif @endauth
    </div>
    @endif
    <br><br><br>
    <!-------------------------------------------contenido---------------------------------------------->
    <div class="content">
        <div id="logo" class="title m-b-md">
            <a id="capa" href='<?=url('/home ')?>'><img id="encabezado" src="{{ asset('img/logo.png')}}"/></a>
        </div>
            <div id="mis_datos" class="links">
                
            </div>
            <div id="mis_archivos" class="links">
                
            </div>
            <div id="mis_mensajes" class="links">
                
            </div>
            <div id="mis_servicios" class="links">
                
            </div>
        

        VISTA MENSAJES
</body>
</html>