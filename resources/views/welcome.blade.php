@extends( 'layouts.final' )
<link rel="ICON" type="iMAGEN/PNG" href="{{ asset('img/pestaña.png')}}"/>
@if( Route::has( 'login' ) )
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a>
        <a href="{{ url('/') }}">Welcome </a> @else
        <a href="{{ route('login') }}">Logarse</a> @if (Route::has('register'))
        <a href="{{ route('register') }}">Registrarse</a> @endif @endauth
    </div>
@endif

<!------------------------------contenido---------------------------------------------->
<div class="content ">
    <div class="title m-b-md">
        <a id="capa" href="{{ url('/')}}"><img  src="{{ asset('img/logo.png')}}" style='max-width: 180px'/></a>
        <h1 class="display-2 font-italic">Página especializada en servicios </h1>
        <h1 class="display-4 font-italic">crea los tuyos, solicita los de otros </h1>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-5 " id="capa_ultimos_servicios">
                <h2 class="titulo">Ultimos servicios</h2>
            </div>
            <div class="col-2 ">

            </div>
            <div class="col-5" id="capa_servicios_mas_solicitados">
                <h2 class="titulo">servicios mas solicitados</h2>
            </div>
        </div>
    </div>
</div>

<hr>

<div class="content flex-center">
    <footer id="capa_footer">

        <a title="Contacto" href="{{ url('contacto')}}"><img id="capa_contacto" src="{{ asset('img/contact.png')}}"/></a>

        <a title="Soporte" href="{{ url('soporte')}}"><img id="capa_soporte" src="{{ asset('img/support.png')}}"/></a>

    </footer>
</div>