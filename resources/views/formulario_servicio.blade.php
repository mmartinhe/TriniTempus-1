<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>TriniTempus</title>

    <!--icono pestaña-->
    <link rel="ICON" type="iMAGEN/PNG" href="{{ asset('img/pestaña.png')}}"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css')}}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- calendario-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Exo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #A0E5EB;
            color: #636b6f;
            /*font-family: 'Nunito', sans-serif;*/
            font-family: 'Exo', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        
        .full-height {
            height: 100vh;
        }
        
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        
        .position-ref {
            position: relative;
        }
        
        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }
        
        .content {
            text-align: center;
        }
        
        .title {
            font-size: 84px;
        }
        
        .links> a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        
        .m-b-md {
            margin-bottom: 30px;
        }
        

        
        /*---------------------------------------------------------------*/
        /*mios*/
        .container {
            background-color: #D6F7FC;
            border-radius: 20px;
            width: 500px;
            height: 543px;
            
        }
        
        
        .form-control{
            height:25px;
        }
        
        #formulario{
            margin-left: 90px;
        }
    
        

    </style>
</head>

<body>
    @if (Route::has('login'))
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a>
        <a href="{{ url('/ofertas') }}">Servicios</a>
        <a href="{{ url('/formulario_servicio') }}">Crear servicio</a>@else
              
        <a href="{{ route('login') }}">Logarse</a> @if (Route::has('register'))
        <a href="{{ route('register') }}">Registrarse</a> @endif @endauth
    </div>
    @endif
    <div class="content">
        <div class="title m-b-md">
            <a id="capa" href="{{ url('home')}}"><img  src="{{ asset('img/logo.png')}}" style='max-width: 250px'/></a>
        </div>


        <div class="container">
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

                <!-- AQUI TENDRAS QUE PONER LOS SELECT PARA CIUDAD, CATEGORIA, SUBCATEGORIA PARA PODER SELECCIONAR LAS QUE ESTAN EN LA BD-->
                <div class="col-10">
                    <form action="{{ asset('/Evento/create/') }}" method="post" id="formulario">
                        @csrf
                        <div class="fomr-group">
                            <label>Titulo</label>
                            <input type="text" class="form-control" name="titulo">
                        </div>
                        <div class="fomr-group">
                            <label>Id usuario</label>
                            <input type="text" class="form-control" name="id_usuario">
                        </div>
                        <div class="fomr-group">
                            <label>Ciudad</label>
                            <input type="text" class="form-control" name="ciudad">
                        </div>
                        <div class="fomr-group">
                            <label>Categoria</label>
                            <input type="text" class="form-control" name="categoria">
                        </div>
                        <div class="fomr-group">
                            <label>Subcategoria</label>
                            <input type="text" class="form-control" name="sub_categoria">
                        </div>
                        <div class="fomr-group">
                            <label>Fecha</label>
                            <input type="date" class="form-control" name="fecha">
                        </div>
                        <div class="fomr-group">
                            <label>hora</label>
                            <input type="time" class="form-control" name="hora">
                        </div>
<br>
                        <input type="submit" class="btn btn-info"  value="Guardar" id="btnGuardar">
                    </form>
                </div>

                <!-- inicio de semana -->


        </div>
        <!-- /container -->

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>