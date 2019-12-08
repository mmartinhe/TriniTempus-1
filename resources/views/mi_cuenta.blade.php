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
            margin-left: 1380px;
            margin-top: -740px;
        }
        
        /*--------------------------------------------------------------------------*/
        #mis_datos {
            position: relative;
            font-size: 20px;
            width: 650px;
            height: 250px;
            background-color: #D6F7FC;
            border-radius: 20px;
            margin-left: 50px;
            margin-top: -50px;
        }
        
        #mis_mensajes {
            position: relative;
            font-size: 20px;
            width: 650px;
            height: 250px;
            background-color: #D6F7FC;
            border-radius: 20px;
            margin-left: 50px;
            margin-top: 30px;
        }
        
        #mis_archivos {
            position: relative;
            font-size: 20px;
            width: 650px;
            height: 250px;
            background-color: #D6F7FC;
            border-radius: 20px;
            margin-left: 780px;
            margin-top: -530px;
        }
        
        #mis_servicios {
            position: relative;
            font-size: 20px;
            width: 650px;
            height: 250px;
            background-color: #D6F7FC;
            border-radius: 20px;
            margin-left: 780px;
            margin-top: 30px;
        }
        
        #datos_usuario {
            margin-left: -350px;
            margin-top: -30px;
        }
        
        input {
            border-radius: 20px;
            padding-left: 10px;
        }
        
        #tiempo {
            margin-left: -30px;
        }
        
        #btnModificarDatos {
            position: fixed;
            margin-left: 130px;
            top: 450px;
            background-color: #A0E5EB;
        }
        
        #btnBaja {
            position: fixed;
            margin-left: 210px;
            margin-top: 25px;
            background-color: #A0E5EB;
        }
        
        #foto{
            margin-left: 840px;
            margin-top: -220px;
            
        }
        #foto_perfil{
            border-radius: 20px;
        }
        
        #btn_modificar{
            position: fixed;
            border-radius: 20px;
            margin-left: 90px;
            margin-top: 25px;
            background-color: #A0E5EB;
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
        <a href="{{ url('/home') }}">Home</a>
        <a href="{{ url('/mi_cuenta') }}">Mi cuenta</a>@else
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
            MIS DATOS
            <form action="{{url('/vistaModificarMisDatos')}}" method="post" id="formulario">
                <input type="hidden" name="_token" id="csrf-token" value="{{Session::token()}}">
                <div id="datos_usuario">
                    <p id="id">Id:&nbsp&nbsp{{ auth()->user()->id}}</p>
                    <p id="usuario">Usuario:&nbsp&nbsp<input name="usuario" placeholder="{{ auth()->user()->name}}"></input>
                    </p>
                    <p id="correo">E-mail:&nbsp&nbsp<input name="email" placeholder="{{ auth()->user()->email}}"></input>
                    </p>
                    <p id="ciudad">Ciudad:&nbsp&nbsp<input name="ciudad" placeholder="{{ auth()->user()->ciudad}}"></input>
                    </p>
                    <div>
                        <input type="submit" value="Modificar datos" id="btnModificarDatos">
                    </div>
                    <div id="tiempo">
                        TIEMPO: 100 MINUTOS
                    </div>
                    <div id="foto"><img id="foto_perfil" src='{{url(Auth::user()->avatar)}}' class='img-responsive' style='max-width: 120px' /></div>
                </div>
            </form>
            <form>
                <div>
                    <input type="submit" value="Darse de baja" id="btnBaja">
                </div>              
            </form>
                  <a href='<?=url('profile')?>'><button id="btn_modificar">Modificar Foto</button></a> 
        </div>
        
        <div id="mis_mensajes" class="links">
            MIS MENSAJES
        </div>

        <div id="mis_archivos" class="links">
            MIS ARCHIVOS
        </div>

        <div id="mis_servicios" class="links">
            MIS SERVICIOS
        </div>

    </div>

</body>
</html>