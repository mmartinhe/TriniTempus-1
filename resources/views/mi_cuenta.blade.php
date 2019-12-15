@extends( 'layouts.final' )
@if( Route::has( 'login' ) )
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a>
        <a href="{{ url('/mi_cuenta') }}">Mi cuenta </a>
        @else
        <a href="{{ route('login') }}">Logarse</a> @if (Route::has('register'))
        <a href="{{ route('register') }}">Registrarse</a> @endif @endauth
    </div>
@endif
<!-------------------------------------contenido---------------------------------------------->
<div class="content">
    <div class="title m-b-md">
        <a id="capa" href="{{ url('home')}}"><img  src="{{ asset('img/logo.png')}}" style='max-width: 180px'/></a>
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
                            <img id="foto_perfil" src='{{url(Auth::user()->avatar)}}' class='img-responsive' style='max-width: 200px'/>
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