@extends( 'layouts.final' )
<link rel="ICON" type="iMAGEN/PNG" href="{{ asset('img/pestaña.png')}}"/>
@if( Route::has( 'login' ) )
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a>
        <a href="{{ url('/multimedia') }}">Multimedia </a> @else
        <a href="{{ route('login') }}">Logarse</a> @if (Route::has('register'))
        <a href="{{ route('register') }}">Registrarse</a> @endif @endauth
    </div>
@endif
<!-------------------------------------contenido---------------------------------------------->
<div class="content">
    <div class="title m-b-md">
        <a id="capa" href="{{ url('home')}}"><img  src="{{ asset('img/logo.png')}}" style='max-width: 180px'/></a>
    </div>
	<div>
	<row class="col-3">
		
		<!--<form method="get" action="{{url('subir')}}" accept-charset="UTF-8" enctype="multipart/form-data">
  {{ csrf_field() }}
  <label for="archivo"><b>Archivo: </b></label><br>
  <input type="file" name="archivo" required>
  <input class="btn btn-success" type="submit" value="Enviar" >
</form>-->
					 
                          
	</row>	
		<row class="col-3 offset-1">
				<input type="button" value="ver mis archivos" name=btnVerArchivo>
	</row>	
		
		
		
	</div>
	
	<div>
	<row class="col-3">
				<h1>PARTE DE GALERIA CUADRADO</h1>
		<form method="post" action="{{ asset('/multimedia') }}" accept-charset="UTF-8" enctype="multipart/form-data">
			@csrf
		<div>
			<label for="">Imagen</label>	
			<input type="file" name="avatar">
  			<input class="btn btn-success" type="submit" value="Enviar" >
		
		</div>
		</form>
	</row>	
	</div>
    			
				
		
    
    
</div>