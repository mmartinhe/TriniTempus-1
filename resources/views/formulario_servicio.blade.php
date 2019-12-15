@extends( 'layouts.final' )
<link rel="ICON" type="iMAGEN/PNG" href="{{ asset('img/pestaña.png')}}"/>
@if( Route::has( 'login' ) )
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a>
        <a href="{{ url('/ofertas') }}">Agenda </a>
        <a href="{{ url('/Evento/form') }}">Crear evento </a>@else
        <a href="{{ route('login') }}">Logarse</a> @if (Route::has('register'))
        <a href="{{ route('register') }}">Registrarse</a> @endif @endauth
    </div>
@endif
<!-------------------------------------contenido---------------------------------------------->
<div class="content">
    <div class="title m-b-md">
        <a id="capa" href="{{ url('home')}}"><img  src="{{ asset('img/logo.png')}}" style='max-width: 180px'/></a>
    </div>

    <p class="lead">

        <a class="btn btn-info mt-2 " href="{{ asset('ofertas') }}">Atras</a>
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

    <div class="container ">

        <div class="row ">
            <div class="col-md-3">
            </div>
            <div class="col-md-6" id="capa_crear_evento">
<br><br>
                <form action="{{ asset('/Evento/create/') }}" method="post" id="formulario_crear_evento">
                    @csrf
                    
                    <p >Titulo:&nbsp&nbsp
                        <input type="text" name="titulo" placeholder="Introduce el titulo..." ></input>
                    </p>
                    
                    <p >Id usuario:&nbsp&nbsp
                        <input type="text" name="id_usuario" placeholder="Introduce el id del usuario..."></input>
                    </p>
                                    
                    <p>Ciudad:&nbsp&nbsp
                        <input type="text" name="ciudad" placeholder="Introduce la ciudad..."></input>
                    </p>
                    
                    <p >Categoria:&nbsp&nbsp
                        <input type="text" name="categoria" placeholder="Introduce la categoria..."></input>
                    </p>

                    <p >Subcategoria:&nbsp&nbsp
                        <input type="text" name="sub_categoria" placeholder="Introduce la sub categoria..."></input>
                    </p>

                    <p >Fecha:&nbsp&nbsp
                        <input type="date" name="fecha" placeholder="Introduce la fecha..."></input>
                    </p>

                    <p>Hora:&nbsp&nbsp
                        <input type="time" name="hora" placeholder="Introduce la hora..."></input>
                    </p>              
                    <br>
                    <input type="submit" class="btn btn-info" value="Guardar" id="btnGuardar">
                </form>
            </div>
            <div class="col-md-3">
            </div>
        </div>
    </div>
    <!-- /container -->
</div>