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
		.fontColor{
			color:#1B1A99;
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
        
        .container {
            position: absolute;
            margin-left: 1380px;
            margin-top: -480px;
        }
	/*----------------------------------------------------------------------------------------------------*/
		#capa_contacto{
			width: 100px;
			height: 100px;			   
		}
		
    </style>

</head>

<body>
    @extends('layouts.app')
    <!---------------------------------------usuario logado y salir--------------------------------------------->
    @section('content') @endsection @if (Route::has('login'))
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a>@else
        <a href="{{ route('login') }}">Logarse</a> @if (Route::has('register'))
        <a href="{{ route('register') }}">Registrarse</a> @endif @endauth
    </div>
    @endif
    <!-------------------------------------------contenido---------------------------------------------->
    <div class="content">
        <div class="title m-b-md">
            <a id="capa" href='<?=url('/home ')?>'><img id="encabezado" src="{{ asset('img/logo.png')}}"style='max-width: 350px'/></a>
        </div>

        <div class="links">
            <a href="{{url('/mi_cuenta')}}">Mi cuenta</a>
        
            <a href="{{url('/ofertas')}}">Ofertas</a>
            <a href="{{url('/buscador')}}">Buscador</a>
            <a href="{{url('/mensajes')}}">Mensajes</a>
            <a href="{{url('/multimedia')}}">Multimedia</a>
            <a href="https://github.com/LauraGuerrero/TriniTempus">GitHub</a>
			
        </div>				
    </div>
		<div class="content flex-center">
		<footer>
		<div class="col-6 mt-6 mb-3">
					 <a href='<?=url('/contacto')?>'><img id="capa_contacto" src="{{ asset('img/contact.png')}}"/></a>
				<!--	<a class=fontColor href="{{url('/contacto')}}"><p >Contacto</p></a>	-->
				</div>
		</footer>
</body>
</html>