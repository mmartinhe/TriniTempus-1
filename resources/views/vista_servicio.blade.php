@extends( 'layouts.final' )
<link rel="ICON" type="iMAGEN/PNG" href="{{ asset('img/pestaña.png')}}"/>
@if( Route::has( 'login' ) )
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a>         
        <a href="{{ url('/ofertas') }}">Agenda </a>
        <a href="{{ url('/Evento/details/') }}/{{ $servicio->id }}">Servicio </a>@else
        <a href="{{ route('login') }}">Logarse</a> @if (Route::has('register'))
        <a href="{{ route('register') }}">Registrarse</a> @endif @endauth
    </div>
@endif
<!-------------------------------------contenido---------------------------------------------->
    <div class="content">
        <div class="title m-b-md">
            <a id="capa" href="{{ url('home')}}"><img  src="{{ asset('img/logo.png')}}" style='max-width: 250px'/></a>
        </div>
        <hr>
        <div class="container ">
            
            <div class="row ">
                <div class="col-md-3">
                </div>
                <div class="col-md-6" id="capa_vista_evento">
                    
                    <h2 class="titulo">Datos del servicio</h2>
                    
                    <p >Id servicio:&nbsp&nbsp{{ $servicio->id }}</p>
                    
                    <p >Titulo:&nbsp&nbsp
                        <input name="titulo" placeholder="{{ $servicio->titulo }}"></input>
                    </p>
                    
                    <p >Id usuario:&nbsp&nbsp
                        <input name="id_usuario" placeholder="{{ $servicio->id_usuario }}"></input>
                    </p>
                                    
                    <p>Ciudad:&nbsp&nbsp
                        <input name="ciudad" placeholder="{{ $servicio->ciudad }}"></input>
                    </p>
                    
                    <p >Categoria:&nbsp&nbsp
                        <input name="categoria" placeholder="{{ $servicio->categoria }}"></input>
                    </p>

                    <p >Subcategoria:&nbsp&nbsp
                        <input name="sub_categoria" placeholder="{{ $servicio->sub_categoria }}"></input>
                    </p>

                    <p >Fecha:&nbsp&nbsp
                        <input name="fecha" placeholder="{{ $servicio->fecha }}"></input>
                    </p>

                    <p>Hora:&nbsp&nbsp
                        <input name="hora" placeholder="{{ $servicio->hora }}"></input>
                    </p>              
                </div>
                <div class="col-md-3">
                </div>
            </div>
        </div>
        <!-- /container -->