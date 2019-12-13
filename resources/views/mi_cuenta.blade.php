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
            background-color: #A0E5EB;
            color: #636b6f;
            font-family: 'Exo', sans-serif;
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
        
        /*------------------ESTILOS MIOS-----------------------*/
        #capa_datos {
            border-radius: 20px;
            background-color: #D6F7FC;
            margin-left: 55px;
        }
        
        #capa_mensajes {
            border-radius: 20px;
            background-color: #D6F7FC;
        }
        
        table {
            margin-left: 40px;
        }
        
        p {
            font-weight: bold;
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
        }
        
        #btnModificarDatos {
            border-radius: 20px;
        }

    </style>
</head>

<body>
    @if (Route::has('login'))
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a>
        <a href="{{ url('/mi_cuenta') }}">Mi cuenta</a>@else
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
                                <h4>TIEMPO: 100 MINUTOS</h4>
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
                    <h2>Mensajes</h2>
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