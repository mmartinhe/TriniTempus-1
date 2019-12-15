<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TriniTempus</title>

    <!--icono pestaña-->
    <link rel="ICON" type="iMAGEN/PNG" href="{{ asset('img/pestaña.png')}}"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css')}}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    
     <!---css--->
	<link rel="stylesheet" href="{{ asset('css/stilos.css')}}">

   
</head>

<body>
    @if (Route::has('login'))
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a>
        <a href="{{ url('/profile') }}">Cambiar foto de perfil</a>
        <a href="{{ url('/mi_cuenta') }}">Mi cuenta</a>@else
        <a href="{{ route('login') }}">Logarse</a> @if (Route::has('register'))
        <a href="{{ route('register') }}">Registrarse</a> @endif @endauth
    </div>
    @endif
    <br><br><br>
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
                                <input type="file" name="image"/>
                                <div class='text-danger'>{{$errors->first('image')}}</div>
                            </div>
                            <br/><br/>
                            <button id="btnActualizar" type='submit' class='btn btn-primary'>Actualizar imagen de perfil</button>
                        </form>
                        <br/><br/>
                        <a href='<?=url('/mi_cuenta ')?>'><button id="btnVolver" type='submit' class='btn btn-primary'>Volver sin Actualizar imagen de perfil</button></a>
                    </section>

                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>