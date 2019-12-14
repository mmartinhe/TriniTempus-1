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

	<!---css--->
	<link rel="stylesheet" href="css/stilos.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    
</head>

<body>
    @if (Route::has('login'))
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a>
        <a href="{{ url('/mensajes') }}">Mensajes</a>@else
        <a href="{{ route('login') }}">Logarse</a> @if (Route::has('register'))
        <a href="{{ route('register') }}">Registrarse</a> @endif @endauth
    </div>
    @endif
    <div class="content">
        <div class="title m-b-md">
            <a id="capa" href='<?=url('/home ')?>'><img  src="{{ asset('img/logo.png')}}" style='max-width: 250px'/></a>
        </div>
        <h1>Tus mensajes</h1>
	<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 col-md-6 col-lg-6">
					<div class="panel panel-default ">
                            <div class="panel-heading">

                            </div>
                            @if ($mensajes->isEmpty())
                            <div>No hay Mensajes</div>
                            @else
                            <table class="table table-striped overflow-auto">
                                <!--table table-hover table-dark-->
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Emisor</th>
                                        <th>Receptor</th>
                                        <th>Contenido</th>
                                        <th>Tipo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($mensajes as $mensaje)
										<tr>
											<td>{!! $mensaje->id_mensaje !!}</td>
											<td>{!! $mensaje->emisor !!}</td>
											<td>{!! $mensaje->receptor !!}</td>
											<td>{!! $mensaje->contenido !!}</td>
											<td>{!! $mensaje->tipo !!}</td>
										</tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @endif
                        </div>
                   	</div>
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