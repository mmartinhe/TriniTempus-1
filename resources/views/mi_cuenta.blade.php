@extends( 'layouts.final' )
<link rel="ICON" type="iMAGEN/PNG" href="{{ asset('img/pestaña.png')}}"/>
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

<style>

#enlace{
    font-size: 90px;
    color: white;
    text-decoration: none;
}

</style>

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
                        <div id="mis_datos">
                            <form action="{{url('/vistaModificarMisDatos')}}" method="post" id="formulario">
                                <input type="hidden" name="_token" id="csrf-token" value="{{Session::token()}}">
                                <div id="datos_usuario" class="mt-2">
                                    <h2 class="titulo text-white">Datos usuario</h2>
                                    
                                    <p id="id">Id:&nbsp&nbsp{{ auth()->user()->id}}</p>
                                    <p id="usuario">Usuario:&nbsp&nbsp
                                        <input name="usuario" placeholder="{{ auth()->user()->name}}"></input>
                                    </p>
                                    <p id="correo">E-mail:&nbsp&nbsp
                                        <input name="email" placeholder="{{ auth()->user()->email}}"></input>
                                    </p>
                                    <p id="ciudad">Ciudad:&nbsp&nbsp
                                        <input name="ciudad" placeholder="{{ auth()->user()->ciudad}}"></input>
                                    </p>
            
                                    <div>
                                        <input class="btn btn-info" type="submit" value="Modificar datos" id="btnModificarDatos">
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
                        <a href="{{ url('profile')}}"><button id="btn_modificarFoto" class="btn btn-info">Modificar Foto</button></a>

                        <form action="{{ url('darseDeBaja')}}/{{ auth()->user()->id }}"  method="post"  id="formulario_eliminar_mensaje">
                            @csrf
                            {{method_field('DELETE')}}
                          <input type="submit" class="btn btn-info" value="Darse de baja" id="btnBaja" >
                         </form>  
                    </div>
                </div>
            </div>
            <div class="col-1 ">
                <p></p>
            </div>

            <div class="col-5" id="capa_mis_servicios">
                <h2 class="titulo text-white">
                    <a id="enlace" href="{{url('/crear_servicio')}}">
                        crear servicios &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a> 
                Mis servicios 
                    <a id="enlace" href="{{url('/ofertas')}}">
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ir a mi agenda</a>
                </h2>
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-heading">

                        </div>
                        @if ($misServicios->isEmpty())
                        <div>No hay Servicios</div>
                        @else
                        <table id="tabla_mis_servicios" class="table table-striped table-hover ">
                            <!--table table-hover table-dark-->
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>usuario</th>
                                    <th>Ciudad</th>
                                    <th>Categoria</th>
                                    <th>Subcategoria</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($misServicios as $servicio)
                                <tr>
                                    <td>{!! $servicio->id !!}</td>
                                    <td>{!! $servicio->id_usuario !!}</td>
                                    <td>{!! $servicio->ciudad !!}</td>
                                    <td>{!! $servicio->categoria !!}</td>
                                    <td>{!! $servicio->sub_categoria !!}</td>
                                    <td> 
                                        <!--<form action="{{ url('Servicio/eliminar/'. $servicio->id)}}"  method="post" id="formulario_crear_servicio">-->
                                        
                                        <form action="{{ url('eliminar')}}/{{ $servicio->id }}"  method="post" id="formulario_eliminar_servicio">
                                            @csrf
                                            {{method_field('DELETE')}}
                                          <input type="submit" class="btn btn-info" value="eliminar" id="btnGuardar" >
                                         </form>   
                                    </td>
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

<!-------------segunda fila para vista de mensajes enviados y recibidos --------------------------------------->

        <div class="row">
            <div class="col-5" id="capa_mensajes_recibidos">
                <h2 class="titulo text-white">Mensajes recibidos</h2>
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-heading">

                        </div>
                        @if ($mensajes->isEmpty())
                        <div>No hay Mensajes</div>
                        @else
                        <table class="table table-striped table-hover ">
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
                                    <td>{!! $mensaje->id !!}</td>
                                    <td>{!! $mensaje->emisor !!}</td>
                                    <td>{!! $mensaje->receptor !!}</td>
                                    <td>{!! $mensaje->contenido !!}</td>
                                    <td>{!! $mensaje->tipo !!}</td>
                                    <td> 
                                        <form action="{{ url('eliminarMensaje')}}/{{ $mensaje->id }}"  method="post" id="formulario_eliminar_mensaje">
                                            @csrf
                                            {{method_field('DELETE')}}
                                          <input type="submit" class="btn btn-info" value="eliminar" id="btnGuardar" >
                                         </form>   
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-1 ">
                <p></p>
            </div>

            <div class="col-5" id="capa_mensajes_enviados">
                <h2 class="titulo text-white">Mensajes enviados</h2>
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-heading">

                        </div>
                        @if ($mensajes->isEmpty())
                        <div>No hay Mensajes</div>
                        @else
                        <table class="table table-striped table-hover ">
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
                                    <td>{!! $mensaje->id !!}</td>
                                    <td>{!! $mensaje->emisor !!}</td>
                                    <td>{!! $mensaje->receptor !!}</td>
                                    <td>{!! $mensaje->contenido !!}</td>
                                    <td>{!! $mensaje->tipo !!}</td>
                                    <td> 
                                        
                                        
                                        <form action="{{ url('eliminarMensaje')}}/{{ $mensaje->id }}"  method="post" id="formulario_eliminar_mensaje">
                                            @csrf
                                            {{method_field('DELETE')}}
                                          <input type="submit" class="btn btn-info" value="eliminar" id="btnGuardar" >
                                         </form>   
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @endif
                    </div>
                </div>
            </div>          
        </div> <!--row mensajes-->
    </div> <!--container-->
</div> <!--content-->