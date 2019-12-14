<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>TriniTempus</title>

    <!--icono pestaña-->
    <link rel="ICON" type="iMAGEN/PNG" href="{{ asset('img/pestaña.png')}}"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css')}}">

    <!-- calendario CSS -->
    <link rel="stylesheet" href="{{ asset('css/css_calendario.css')}}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
          /*
			background-image: {{asset('img/negocio.jpg')}};
			background-image: url({{asset('img/negocio.jpg')}})
			*/
            /*background-color: #A0E5EB;*/
           /* background: rgba(182,194,237,1);*/

            color: #636b6f;
            font-family: 'Exo', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
            
           /* background: -webkit-linear-gradient(90deg, #e74d6b 10%, #8cc8ac 90%);
            background:    -moz-linear-gradient(90deg, #e74d6b 10%, #8cc8ac 90%);
            background:     -ms-linear-gradient(90deg, #e74d6b 10%, #8cc8ac 90%);
            background:      -o-linear-gradient(90deg, #e74d6b 10%, #8cc8ac 90%);
            background:         linear-gradient(90deg, #e74d6b 10%, #8cc8ac 90%);*/
            /*
            background: -webkit-linear-gradient(90deg, #65997d 10%, #fccb6e 90%);
            background:    -moz-linear-gradient(90deg, #65997d 10%, #fccb6e 90%);
            background:     -ms-linear-gradient(90deg, #65997d 10%, #fccb6e 90%);
            background:      -o-linear-gradient(90deg, #65997d 10%, #fccb6e 90%);
            background:         linear-gradient(90deg, #65997d 10%, #fccb6e 90%);
			*/
			background: -moz-linear-gradient(left, rgba(255,255,255,1) 0%, rgba(191,184,191,1) 32%, rgba(191,184,191,1) 65%, rgba(237,237,237,1) 100%);
			background: -webkit-linear-gradient(left top, right top, color-stop(0%, rgba(255,255,255,1)), color-stop(32%, rgba(191,184,191,1)), color-stop(65%, rgba(191,184,191,1)), color-stop(100%, rgba(237,237,237,1)));
			background: -webkit-linear-gradient(left, rgba(255,255,255,1) 0%, rgba(191,184,191,1) 32%, rgba(191,184,191,1) 65%, rgba(237,237,237,1) 100%);
			background: -o-linear-gradient(left, rgba(255,255,255,1) 0%, rgba(191,184,191,1) 32%, rgba(191,184,191,1) 65%, rgba(237,237,237,1) 100%);
			background: -ms-linear-gradient(left, rgba(255,255,255,1) 0%, rgba(191,184,191,1) 32%, rgba(191,184,191,1) 65%, rgba(237,237,237,1) 100%);
            
			/*
            background: -webkit-linear-gradient(90deg, #3rerewqw 10%, #fccb6e 90%);
            background:    -moz-linear-gradient(90deg, #4c515b 10%, #fccb6e 90%);
            background:     -ms-linear-gradient(90deg, #4c515b 10%, #fccb6e 90%);
            background:      -o-linear-gradient(90deg, #4c515b 10%, #fccb6e 90%);
            background:         linear-gradient(90deg, #4c515b 10%, #fccb6e 90%);
			*/
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
        
        
		.links>a{
			color: white;
			text-decoration: none;
			font-size: 20px;
			border: 2px thin ;
			border-radius: 15px;
			padding: 17px 25px;
			margin: 10px;
			background-color:  #B59B85;
			opacity:0.8;
			 box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

		
		}
        
        .links> a:hover {
			
			background-color: #4c515b;
            margin-top: 5px;
            font-weight: bold;
            transition: all 0.5s linear;
            border-radius: 30px;
            transform: scale(0.9);   
            opacity:0.8;           
		}
        
        .m-b-md {
            margin-bottom: 30px;
        }
		.titulo{
			color: #342C2C
		}
		.tiempoMensaje{
			background-color: #C9AF97;
			border-radius: 20px;
				
		}
		 
        
        /*------------------ESTILOS MIOS-----------------------*/
        #capa_datos {
            border-radius: 20px;
            background-color:#A29080 ;
            margin-left: 55px;
            opacity:0.8;			
 			 box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);


			
        }
        
        #capa_mensajes {
            border-radius: 20px;
            background-color: #A29080;
            opacity:0.8;
			 box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

        }
        
        table {
            margin-left: 40px;
        }
        
        p {
            font-weight: bold;color: #342C2C
        }
        
        input {
            border-radius: 20px;
            padding-left: 10px;
        }
        
        #foto {
            padding-top: 20px;
        }
        
        #foto_perfil {
            border-radius: 20px;
        }
        
        #btn_modificarFoto {
            margin-top: 20px;
            border-radius: 20px;
        }
        
        #btnBaja {
            margin-top: 30px;
            border-radius: 20px;
            margin-bottom: 10px;
            opacity:0.8;
        }
        
        #btnModificarDatos {
            border-radius: 20px;
        }
        
        #capa_logado{
            background-color: red;
            border-radius: 20px;
            background-color: #D6F7FC;
            opacity:0.8;
            width: 120px;
            left: 150px;
            top:30px;
        }

    </style>
</head>

<body>
    @if (Route::has('login'))
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a>
        <a href="{{ url('/mi_cuenta') }}">Mi cuenta</a>
    
        <div id="app">
            <nav id="capa_logado" class="navbar navbar-expand-md navbar-light  shadow-sm">
                <div class="container">


                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                            

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>
                                

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>

            <main class="py-4">
                @yield('content')
            </main>
        </div>

        @else
        <a href="{{ route('login') }}">Logarse</a> @if (Route::has('register'))
        <a href="{{ route('register') }}">Registrarse</a> @endif @endauth
    </div>
    @endif
    <div class="content">
        <div class="title m-b-md">
            <a id="capa" href="{{ url('home')}}"><img  src="{{ asset('img/logo.png')}}" style='max-width: 250px'/></a>
        </div>

        <div class="container-fluid tex-center py-auto ">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-5 " id="capa_datos">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-6 ">
                            <div id="mis_datos" class="links">
                                <form action="{{url('/vistaModificarMisDatos')}}" method="post" id="formulario">
                                    <input type="hidden" name="_token" id="csrf-token" value="{{Session::token()}}">
                                    <div id="datos_usuario" class="mt-2">
										<h2 class="titulo">Datos Usuario</h2>
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
                                    </div>
                                </form>
                            </div>
                            <br>
                            <div id="tiempo">
                                <h4 class="tiempoMensaje">TIEMPO: 100 MINUTOS</h4>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6  ">
                            <div id="foto">
                                <img id="foto_perfil" src='{{url(Auth::user()->avatar)}}' class='img-responsive' style='max-width: 120px'/>
                            </div>
                            <a href="{{ url('profile')}}"><button id="btn_modificarFoto">Modificar Foto</button></a>

                            <form action="{{url('/darseDeBaja')}}" method="post">
                                <div>
                                    <input type="submit" value="Darse de baja" id="btnBaja">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-1 ">
                    <p>BLANCO 1</p>
                </div>

                <div class="col-5" id="capa_mensajes">
                    <h2 class="titulo">Mensajes</h2>
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-heading">

                            </div>
                            @if ($mensajes->isEmpty())
                            <div>No hay Mensajes</div>
                            @else
                            <table class="table table-striped ">
                                <!--table table-hover table-dark-->
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Emisor</th>
                                        <th>Receptor</th>
                                        <th>Contenido</th>
                                        <th>Tipo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($mensajes as $mensaje)
                                    <tr>
                                        <td>{!! $mensaje->id_mensaje !!}</td>
                                        <td>{!! $mensaje->emisor !!}</td>
                                        <td>{!! $mensaje->receptor !!}</td>
                                        <td>{!! $mensaje->contenido !!}</td>
                                        <td>{!! $mensaje->tipo !!}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            </BR>
            <div class="row">
                <div class="col-1 bg-success">
                    <p>BLANCO 1</p>
                </div>
                <div class="col-4 bg-primary">
                    <p>MIS ARCHIVOS</p>
                </div>

                <div class="col-2 bg-success">
                    <p>BLANCO 2</p>
                </div>

                <div class="col-4 bg-primary">
                    <p>MIS SERVICIOS</p>
                </div>

                <div class="col-1 bg-success">
                    <p>BLANCO 1</p>
                </div>
            </div>





        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/js_calendario.js')}}"></script>
</body>
</html>