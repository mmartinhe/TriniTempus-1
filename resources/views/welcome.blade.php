@extends( 'layouts.final' )
<link rel="ICON" type="iMAGEN/PNG" href="{{ asset('img/pestaña.png')}}"/>
@if( Route::has( 'login' ) )
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a>
        <a href="{{ url('/') }}">Welcome </a> @else
        <a href="{{ url('admins/login') }}">Logarse admin</a>
        <a href="{{ route('login') }}">Logarse</a> 
        @if (Route::has('register'))
        <a href="{{ route('register') }}">Registrarse</a> @endif @endauth
    </div>
@endif

<!------------------------------contenido---------------------------------------------->
<div class="content ">
    <div class="title m-b-md">
        <a id="capa" href="{{ url('/')}}"><img  src="{{ asset('img/logo.png')}}" style='max-width: 180px'/></a>
    </div>	
	<div class="content">
		<img class="banner" src="img/Especializados en servicios.png">

	</div>
	        
    <br>
        <div class="container-fluid tex-center py-auto ">
        <div class="row">
            
            <div class="col-5" id="capa_ultimos_servicios">
                <h2 class="titulo">Ultimos servicios</h2>
                
                <div class="panel panel-default">
                        <div class="panel-heading">

                        </div>
                        @if ($misServicios->isEmpty())
                        <div>No hay Servicios</div>
                        @else
                        <table id="tabla_ultimos_servicios" class="table table-striped ">
                            <!--table table-hover table-dark-->
                            <thead>
                                <tr>
                                    <th>Id_servicio</th>
                                    <th>Id_usuario</th>
                                    <th>Ciudad</th>
                                    <th>Categoria</th>
                                    <th>Sub_categoria</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($misServicios as $servicio)
                                <tr>
                                    <td>{!! $servicio->id !!}</td>
                                    <td>{!! $servicio->id_usuario !!}</td>
                                    <td>{!! $servicio->ciudad !!}</td>
                                    <td>{!! $servicio->categoria !!}</td>
                                    <td>{!! $servicio->sub_categoria !!}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @endif
                    </div>                
            </div>
            
            <div class="col-1 ">
                <p></p>
            </div>

            <div class="col-5" id="capa_servicios_mas_solicitados">
                <h2 class="titulo">Servicios mas solicitados</h2>
                
                <div class="panel panel-default">
                        <div class="panel-heading">

                        </div>
                        @if ($misServicios->isEmpty())
                        <div>No hay Servicios</div>
                        @else
                        <table id="tabla_mas_solicitados" class="table table-striped ">
                            <!--table table-hover table-dark-->
                            <thead>
                                <tr>
                                    <th>Id_servicio</th>
                                    <th>Id_usuario</th>
                                    <th>Ciudad</th>
                                    <th>Categoria</th>
                                    <th>Sub_categoria</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($misServicios as $servicio)
                                <tr>
                                    <td>{!! $servicio->id !!}</td>
                                    <td>{!! $servicio->id_usuario !!}</td>
                                    <td>{!! $servicio->ciudad !!}</td>
                                    <td>{!! $servicio->categoria !!}</td>
                                    <td>{!! $servicio->sub_categoria !!}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @endif
                    </div> 
                
            </div>
        </div>
        </BR>


    </div> <!--container-->


<hr>

<div class="content flex-center">
    <footer id="capa_footer">

        <a title="Contacto" href="{{ url('contacto')}}"><img id="capa_contacto" src="{{ asset('img/contact.png')}}"/></a>

        <a title="Soporte" href="{{ url('soporte')}}"><img id="capa_soporte" src="{{ asset('img/support.png')}}"/></a>

    </footer>
</div>