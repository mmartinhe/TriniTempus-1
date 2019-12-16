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
		
		<p class="lead">

        <a class="btn btn-info mt-2 " href="{{ asset('home') }}">Atras</a>
        <hr> @if (count($errors) > 0)
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
        @endif
    </p>
        <form action="{{ asset('/mensajes') }}" method="post" id="crearMensaje">
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
                <input type="submit" class="btn btn-info" name="botonEnviar" value="Enviar"></input>
            </div>
        </form>
    </div>

</div>