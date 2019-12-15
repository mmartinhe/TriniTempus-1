@extends( 'layouts.final' )
<link rel="ICON" type="iMAGEN/PNG" href="{{ asset('img/pestaña.png')}}"/>
@if( Route::has( 'login' ) )
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a>
        <a href="{{ url('/mensajes') }}">Mensajes </a> @else
        <a href="{{ route('login') }}">Logarse</a> @if (Route::has('register'))
        <a href="{{ route('register') }}">Registrarse</a> @endif @endauth
    </div>
@endif
<div class="content">
    <div class="title m-b-md">
        <a id="capa" href="{{ url('home')}}"><img  src="{{ asset('img/logo.png')}}" style='max-width: 180px'/></a>
    </div>
    <h1>Tus mensajes</h1>
    <div class="col-sm-12">
        <h1>Crear Mensaje</h1>
        <form action="{{url('/mensajes')}}" method="post" id="crearMensaje">
            <input type="hidden" name="_token" id="csrf-token" value="{{Session::token()}}">
            <div class="row-sm-12" id="datos_contacto">
                <p id="usuario">Usuario a buscar:&nbsp&nbsp
                    <input type="text" name="textoBuscar" </input>
                    <input type="button" name="botonPulsar" value="Buscar" </input>
                </p>
            </div>
            <div class="row-sm-12">
                <p>Servivios del usuario:&nbsp&nbsp</p>
                <textarea name="servicios" id="textAreaServicios"></textarea>
            </div>

            <div class="row-sm-12">
                <p id="consulta">Consulta:&nbsp&nbsp</p>
                <textarea name="mensaje"> </textarea>
                <br>
                <input type="radio" name="tipo" checked>publico</input>
                <br>
                <input type="radio" name="tipo">privado</input>
                <br>
                <input type="button" name="botonEnviar" value="Enviar"></input>
            </div>
        </form>
    </div>

</div>