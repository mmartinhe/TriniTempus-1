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

<!--contenido-->
	<div class="content">
		<div class="title m-b-md">
			<a id="capa" href="{{ url('home')}}"><img  src="{{ asset('img/logo.png')}}" style='max-width: 250px'/></a>
		</div>
		<!--  <h1>VISTA CONTACTO</h1>   -->
		<div class="container">
			<div class="row">
				<div class=" col-sm-12 col-md-6 col-lg-4 ">
					<h1>Donde encontrarnos</h1>
					<p>
						PRUEBA DE MAPA

					</p>
				</div>

				<div class="col-sm-12 col-md-6 col-lg-4  offset-3">
					<h1>Redes sociales</h1>
					<row>
					<a href="" class="icon_social"><img  src="img/gorjeo.png" style="max-height: 50px" ></a>
					<a href="" class="icon_social"><img  src="img/facebook.png" style="max-height: 50px"></a>
					<a href="" class="icon_social"><img  src="img/google-plus.png" style="max-height: 50px"></a>
					<a href="" class="icon_social"><img  src="img/youtube.png" style="max-height: 50px"></a>
					<a href="" class="icon_social"><img  src="img/pinterest.png" style="max-height: 50px"></a>	
					</row>
					
					<!--
					<a href="" class="icon_social"><img  src="img/gorjeo.png"></a>
					<a href="" class="icon_social"><img  src="img/facebook.png"></a>
					<a href="" class="icon_social"><img  src="img/google-plus.png"></a>
					<a href="" class="icon_social"><img  src="img/youtube.png"></a>
					<a href="" class="icon_social"><img  src="img/pinterest.png"></a>	
					-->
												  
				</div>
			</div>
		</div>
	</div>













