@extends('layouts.final')
<link rel="ICON" type="iMAGEN/PNG" href="{{ asset('img/pestaña.png')}}"/>
	@if (Route::has('login'))
	<div class="top-right links">
		@auth
		<a href="{{ url('/home') }}">Home</a>
		<a href="{{ url('/crear_servicio') }}">Crear servicio</a>@else
		<a href="{{ route('login') }}">Logarse</a> @if (Route::has('register'))
		<a href="{{ route('register') }}">Registrarse</a> @endif @endauth
	</div>
@endif
<!--contenido--->
	<div class="content">
		<div class="title m-b-md">
			<a id="capa" href="{{ url('home')}}"><img  src="{{ asset('img/logo.png')}}" style='max-width: 180px'/></a>
		</div>
		<!--  <h1>VISTA CONTACTO</h1>   -->
		<div class="container">
			<div class="row">
				<div class=" col-sm-12 col-md-6 col-lg-4 ">
					<h1>Crear un Servicio</h1>
					
					<form >
						<input type="hidden" name="_token" id="csrf-token" value="{{Session::token()}}">
						<div id="datos_contacto" class="mt-2">
							<p id="">:&nbsp&nbsp<input name=""></input>
							</p>
							<p id="">:&nbsp&nbsp<input name=""></input>
							</p>
							<p id="">:&nbsp&nbsp<input name=""></input>
								<input type="submit" value="Enviar" id="btnDatosCrearServicio">
						</div>
					</form>
				</div>

			</div>
		</div>
	</div>

