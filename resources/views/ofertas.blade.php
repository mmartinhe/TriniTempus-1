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

    <!--calendario-->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Exo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #A0E5EB;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            /*font-family: 'Exo', sans-serif;*/
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
        /*estilos calendario*/
        .header-col {
            background: #E3E9E5;
            color: #536170;
            text-align: center;
            font-size: 20px;
            font-weight: bold;
        }
        
        .header-calendar {
            background: #EE192D;
            color: white;
        }
        
        .box-day {
            border: 1px solid #E3E9E5;
            height: 150px;
        }
        
        .box-dayoff {
            border: 1px solid #E3E9E5;
            height: 150px;
            background-color: #ccd1ce;
        }

    </style>
</head>


<body>
    @if (Route::has('login'))
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a>
        <a href="{{ url('/ofertas') }}">Servicios</a>@else
        <a href="{{ route('login') }}">Logarse</a> @if (Route::has('register'))
        <a href="{{ route('register') }}">Registrarse</a> @endif @endauth
    </div>
    @endif
    <div class="content">
        <div class="title m-b-md">
            <a id="capa" href="{{ url('home')}}"><img  src="{{ asset('img/logo.png')}}" style='max-width: 180px'/></a>
        </div>
        <h1>VISTA CALENDARIO</h1>

        <div class="container">
            <div style="height:50px"></div>

            <h3>Calendario</h3>

            <hr>

            <div class="row header-calendar">

                <div class="col" style="display: flex; justify-content: space-between; padding: 10px;">
                    <a href="{{ asset('/Calendar/event/') }}/<?= $data['last']; ?>" style="margin:10px;">
                        <i class="fas fa-chevron-circle-left" style="font-size:30px;color:white;"></i>
                    </a>
                

                    <h2 style="font-weight:bold;margin:10px;">
                        <?= $mespanish; ?>
                        <small>
                            <?= $data['year']; ?>
                        </small>
                    </h2>

                    <a href="{{ asset('/Calendar/event/') }}/<?= $data['next']; ?>" style="margin:10px;">
                        <i class="fas fa-chevron-circle-right" style="font-size:30px;color:white;"></i>
                    </a>
                
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

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>