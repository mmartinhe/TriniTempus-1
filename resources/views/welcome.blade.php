<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TriniTempus</title>

    <!--icono pestaña-->
    <link rel="ICON" type="iMAGEN/PNG" href="{{ asset('img/pestaña.png')}}"/>
	
	<!---css--->
	<link rel="stylesheet" href="css/stilos.css">
	
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css')}}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
      
        #capa_ultimos_servicios {
            border-radius: 20px;
            background-color: #D6F7FC;
            margin-left: 855px;
			margin-top: 400px;
            height: 230px;
			background-color: #CFCCC5;
			
        }
        
        #capa_servicios_mas_solicitados {
			position: absolute;
			margin-top: 400px;
			 margin-left: 255px;
            border-radius: 20px;
			 height: 230px;
            background-color: #CFCCC5;
        }
        
        p {
            font-weight: bold;
        }
        
        #capa_contacto {
            width: 100px;
            height: 100px;
			margin-left: 230px;
            border-radius: 20px;
            background-color: #A29080;
			padding: 10px 20px 100px 1050px;
        }

    </style>
</head>

<body>
    @if (Route::has('login'))
    <div class="top-right links">
        @auth
        <a href="{{ url('/') }}">Welcome</a>
        <a href="{{ url('/home') }}">Home</a> @else
        <a href="{{ route('login') }}">Logarse</a> @if (Route::has('register'))
        <a href="{{ route('register') }}">Registrarse</a> @endif @endauth
    </div>
    @endif

    <div class="content">
        <div id="logo" class="title m-b-md">
            <a id="capa" href="{{ url('/')}}"><img id="encabezado" src="{{ asset('img/logo.png')}}" style="max-height: 200px"/></a>
        </div>
		
        <div class="container">			
            <div class="row">
                <div class="col-5 " id="capa_ultimos_servicios">
                    <p>ULTIMOS SERVICIOS</p>
                </div>

                <div class="col-5 offset-1 " id="capa_servicios_mas_solicitados">
                    <p>SERVICIOS MAS SOLICITADOS</p>
                </div>
            </div>

			
            <div class="col-3 mt-3 mb-3">
             
              <a> <img id=capa_contacto src="{{ asset('img/contact.png')}}"/></a>
				
            </div>

        </div>
    </div>
</body>
</html>