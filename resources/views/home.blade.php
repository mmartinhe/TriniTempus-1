<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TriniTempus</title>

	    <!--link js-->
<script src="app.js"></script>
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
            font-size: 25px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
			background-color:#C0BEBE;
			border-radius: 24px;
        }
        
        .m-b-md {
            margin-bottom: 30px;
        }
        
        .container {
            position: absolute;
            margin-left: 590px;
            margin-top: -400px;
        }
		
	/*----------------------------------------------------------------------------------------------------*/
		#capa_contacto{
			width: 80px;
			height: 80px;			   
		}
		#capa_soporte{
			width: 50px;
			height: 50px;			   
		}
		#capa_footer{
			margin-top: 20px;
			width: 500px;
			height:80px;	
			background-color: antiquewhite;
			border-radius: 23px;
		}
        
		
    </style>

</head>

<body class="fondo">
    @extends('layouts.app')
    <!---------------------------------------usuario logado y salir--------------------------------------------->
    @section('content') @endsection @if (Route::has('login'))
    <div class="top-right links" onClick="eventosMenu()">
        @auth
        <a href="{{ url('/home') }}">Home</a>@else
        <a href="{{ route('login') }}">Logarse</a> @if (Route::has('register'))
        <a href="{{ route('register') }}">Registrarse</a> @endif @endauth
    </div>
    @endif
    <!-------------------------------------------contenido---------------------------------------------->
    <div class="content">
        <div class="title m-b-md">
            <a id="capa" class="fondo" href='<?=url('/home ')?>'><img id="encabezado" src="{{ asset('img/logo.png')}}"style='max-width: 300px'/></a>
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
		<footer id="capa_footer">
		<div class="col-3 mt-3 mb-3">
					 <a href='<?=url('/contacto')?>'><img id="capa_contacto" src="{{ asset('img/contact.png')}}"/>Contacto</a>			   
					 <a href='<?=url('/soporte')?>'><img id="capa_soporte" src="{{ asset('img/support.png')}}"/>Soporte</a>
			
				</div>
		</footer>
</body>
</html>