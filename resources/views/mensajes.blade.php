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
    <h1>¡Chatea con otros usuarios!</h1>
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
		
        <form class="row offset-1" action="{{ asset('/mensajes') }}" method="post" id="crearMensaje">
            <input type="hidden" name="_token" id="csrf-token" value="{{Session::token()}}">
            <div class="row-sm-12" id="datos_contacto">
                <h5 id="usuario">Usuario a buscar 	
                    <input type="text" style="width: 400px"name="textoBuscar" </input>
                    <input type="button" name="botonPulsar" value="Buscar" </input>
					</h5>
				<br>
            </div>
            <div class="col-6 offset">
                <h5>Servicios del usuario
                <input style="width: 400px"name="servicios"></input>
			</h5>
            </div>

            <div class="col-6 content">
                <h4 id="consulta"></h4>

                <input name="mensaje" id="textAreaServicios"> </input>
                <br>
				<br>				
                <input type="radio" name="tipo" checked>publico</input>
                <input type="radio" name="tipo">privado</input>
                <br>
				<br>
                <input type="submit" class="btn btn-info" name="botonEnviar" value="Enviar"></input>
            </div>
        </form>
    </div>

</div>