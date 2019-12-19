@extends( 'layouts.final' )
<link rel="ICON" type="iMAGEN/PNG" href="{{ asset('img/pestaña.png')}}"/>
@if( Route::has( 'login' ) )
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a>
        <a href="{{ url('/buscador') }}">Buscador </a> @else
        <a href="{{ route('login') }}">Logarse</a> @if (Route::has('register'))
        <a href="{{ route('register') }}">Registrarse</a> @endif @endauth
    </div>
@endif
<!-------------------------------------contenido---------------------------------------------->
<div class="content">
    <div class="title m-b-md content">
        <a id="capa" href="{{ url('home')}}"><img  src="{{ asset('img/logo.png')}}" style='max-width: 180px'/></a>
    </div>
    
    <div class="content-can">
		<!--  <img class="container" style="max-height: 230px" src="img/banner.png"> -->
		
		<h1 class="container">¡Especializados en servicios!</h1>
	</div>
	<br>
	
	<p id="usuario">Introduce la categoria            </p>

                    <input type="text" style="width: 800px" name="textoBuscar" </input>
                    <input type="button" name="botonPulsar" value="Buscar" </input>
	<br>
<br>

	<p id="usuario">Introduce la ciudad              </p>

                    <input type="text" style="width: 800px" name="textoBuscar" </input>
                    <input type="button" name="botonPulsar" value="Buscar" </input>
	<br>
	<br>


	<p id="usuario">Introduce el tipo de servicio</p>	                       

                    <input type="text"style="width: 800px" name="textoBuscar" </input>
                    <input type="button" name="botonPulsar" value="Buscar" </input>
	<br>
	<br>


</div>
<br>
