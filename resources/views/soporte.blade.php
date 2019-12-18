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
		<!--  <h1>VISTA CONTACTO</h1>   -->
		<div class="container">
			<div class="row">
				<div class=" col-sm-12 col-md-6 col-lg-4 ">
					<h1>Informacion de la Web</h1>
					<p>
						¡Bienvenid@ a TriniTempus!
						<br>
						Una web de compra-venta de servicios con una moneda de cambio distinta a la actualidad...
						¡¡¡El tiempo!!!
						Entra y podrás ofrecer tus propios servicios o solicitar los de otros con gran facilidad.


					</p>
				</div>

				<div class="col-sm-12 col-md-6 col-lg-4  offset-3">
					<h1>Formulario de Contacto</h1>
					<form action="{{url('/mensajes')}}" method="post" id="formulario">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="name">Nombre</label>
						<input name="name" type="text">
					</div>
					<div class="form-group">
						<label for="name">Mensaje</label>
												<input name="msg" type="text">
					</div>
					<div class="form-group">
						<button type="submit" id='btn-contact' class="btn">Enviar</button>
					</div>
				</form>
					</form>
				</div>
			</div>
		</div>
	</div>





