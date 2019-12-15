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
				 <a href="{{url('subir_img_multimedia')}}"><input type="button" value="subir archivo" name=btnSubirArchivo></a>
					 
		
	</row>	
		<row class="col-3 offset-1">
				<input type="button" value="ver mis archivos" name=btnVerArchivo>
	</row>	
		
		
		
	</div>
	
	<div>
	<row class="col-3">
				<h1>PARTE DE GALERIA CUADRADO</h1>
	</row>	
	</div>
    			
				
		
    
    
</div>