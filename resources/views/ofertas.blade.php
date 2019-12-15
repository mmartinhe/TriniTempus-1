@extends( 'layouts.final' )
<link rel="ICON" type="iMAGEN/PNG" href="{{ asset('img/pestaña.png')}}"/>
@if( Route::has( 'login' ) )
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a>
        <a href="{{ url('/ofertas') }}">Agenda </a> @else
        <a href="{{ route('login') }}">Logarse</a> @if (Route::has('register'))
        <a href="{{ route('register') }}">Registrarse</a> @endif @endauth
    </div>
@endif
<!--links calendario-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Exo&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-------------------------------------contenido---------------------------------------------->
    <div class="content">
        <div class="title m-b-md">
            <a id="capa" href="{{ url('home')}}"><img  src="{{ asset('img/logo.png')}}" style='max-width: 180px'/></a>
        </div>
  
        <div class="container">
            
            <div class="row header-calendar">

                <div class="col" style="display: flex; justify-content: space-between; padding: 10px;">

                    <h2 style="font-weight:bold;margin:10px;">
                        <?= $mespanish; ?>
                        <small>
                            <?= $data['year']; ?>
                        </small>
                    </h2>
                
                </div>
            </div>
            <div class="row">
                <div class="col header-col">Lunes</div>
                <div class="col header-col">Martes</div>
                <div class="col header-col">Miercoles</div>
                <div class="col header-col">Jueves</div>
                <div class="col header-col">Viernes</div>
                <div class="col header-col">Sabado</div>
                <div class="col header-col">Domingo</div>
            </div>
            <!-- inicio de semana -->
            @foreach ($data['calendar'] as $weekdata)
            <div class="row">
                <!-- ciclo de dia por semana -->
                @foreach ($weekdata['datos'] as $dayweek) @if ($dayweek['mes']==$mes)
                <div class="col box-day">
                    {{ $dayweek['dia'] }}
                </div>
                @else
                <div class="col box-dayoff">
                </div>
                @endif @endforeach
            </div>
            @endforeach
        </div>
        <!-- /container -->