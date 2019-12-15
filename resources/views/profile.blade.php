@extends( 'layouts.final' )
<link rel="ICON" type="iMAGEN/PNG" href="{{ asset('img/pestaña.png')}}"/>
@if( Route::has( 'login' ) )
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a>
        <a href="{{ url('/profile') }}">Cambiar foto de perfil</a>
        <a href="{{ url('/mi_cuenta') }}">Mi cuenta</a>
        @else
        <a href="{{ route('login') }}">Logarse</a> @if (Route::has('register'))
        <a href="{{ route('register') }}">Registrarse</a> @endif @endauth
    </div>
@endif
    <!---------------------------------------contenido---------------------------------------------->
    <div class="content">
        <div class="title m-b-md">
            <a id="capa" href="{{ url('home')}}"><img  src="{{ asset('img/logo.png')}}" style='max-width: 250px'/></a>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <section id="capa_btn" class="flex-cente">
                        <h1 id="titulo">Cambiar imagen de perfil</h1>
                        <form id="formulario" method='post' action='{{url("updateprofile")}}' enctype='multipart/form-data'>
                            {{csrf_field()}}

                            <div class='form-group'>
                                <label id="aviso" for='image'>Selecciona una imagen: </label>
                                <br/><br/>
                                <input id="btnSeleccionar" type="file" name="image"/>
                                <div class='text-danger'>{{$errors->first('image')}}</div>
                            </div>
                            <br/><br/>
                            <a><button id="btnActualizar" type='submit' class='btn btn-primary'>Actualizar imagen de perfil</button></a>
                        </form>
                        <br/><br/>
                        <a href='{{url("mi_cuenta")}}'><button id="btnVolver" type='submit' class='btn btn-primary'>Volver sin Actualizar imagen de perfil</button></a>
                    </section>

                </div>
            </div>
        </div>
    </div>
