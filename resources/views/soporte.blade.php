@extends('layouts.final')
<link rel="ICON" type="iMAGEN/PNG" href="{{ asset('img/pestaña.png')}}"/>
	@if (Route::has('login'))
	<div class="top-right links">
		@auth
		<a href="{{ url('/home') }}">Home</a>
		<a href="{{ url('/contacto') }}">Contacto</a>@else
		<a href="{{ route('login') }}">Logarse</a> @if (Route::has('register'))
		<a href="{{ route('register') }}">Registrarse</a> @endif @endauth
	</div>
@endif
<!--contenido--->
	<div class="content">
		<div class="title m-b-md">
			<a id="capa" href="{{ url('/')}}"><img  src="{{ asset('img/logo.png')}}" style='max-width: 250px'/></a>
		</div>
		<!--  <h1>VISTA CONTACTO</h1>   -->
		<div class="container">
			<div class="row">
				<div class=" col-sm-12 col-md-6 col-lg-4 ">
					<h1>Informacion de la Web</h1>
					<p>
						It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).


					</p>
				</div>

				<div class="col-sm-12 col-md-6 col-lg-4  offset-3">
					<h1>Formulario de Contacto</h1>
					<form action="{{url('/vistaFormularioContacto')}}" method="post" id="formulario">
						<input type="hidden" name="_token" id="csrf-token" value="{{Session::token()}}">
						<div id="datos_contacto" class="mt-2">
							<p id="Email">Email:&nbsp&nbsp<input name="Email"></input>
							</p>
							<p id="asunto">Asunto:&nbsp&nbsp<input name="asunto"></input>
							</p>
							<p id="mensaje">Mensaje:&nbsp&nbsp<textarea name="mensaje"> </textarea></p>
								<input type="submit" value="Enviar" id="btnEnviarFormularioContacto">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>





