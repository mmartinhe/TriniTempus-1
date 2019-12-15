@extends( 'layouts.final' )
@if( Route::has( 'login' ) )
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a> @else
        <a href="{{ route('login') }}">Logarse</a> @if (Route::has('register'))
        <a href="{{ route('register') }}">Registrarse</a> @endif @endauth
    </div>
@endif
<!------------------------------------contenido---------------------------------------------->
<div class="content">
    
    <div class="title m-b-md">
        <a id="capa" class="fondo" href="{{ url('home')}}"><img id="encabezado" src="{{ asset('img/logo.png')}}"style='max-width: 180px'/></a>
    </div>

    <div class="links">
        <a class="" href="{{url('/mi_cuenta')}}">Mi cuenta</a>
    
        <a href="{{url('/ofertas')}}">Agenda</a>
        <a href="{{url('/crear_servicio')}}">Crear Servicio</a>
        <a href="{{url('/buscador')}}">Buscador</a>
        <a href="{{url('/mensajes')}}">Mensajes</a>
        <a href="{{url('/multimedia')}}">Multimedia</a>
        <a href="https://github.com/LauraGuerrero/TriniTempus">GitHub</a>

        <!-- prueba de hacer un scroll -->
        <img class="img" src="{{asset('img/negocio2.jpg')}}">
    </div>
</div>
<hr>
<div class="content flex-center">
    <footer id="capa_footer">

        <a title="Contacto" href="{{ url('contacto')}}"><img id="capa_contacto" src="{{ asset('img/contact.png')}}"/></a>

        <a title="Soporte" href="{{ url('soporte')}}"><img id="capa_soporte" src="{{ asset('img/support.png')}}"/></a>
    </footer>
</div>