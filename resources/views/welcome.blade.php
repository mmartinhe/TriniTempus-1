<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TriniTempus</title>
        
        <!--icono pestaña-->
         <link rel="ICON"  type="iMAGEN/PNG" href="{{ asset('img/pestaña.png')}}"/>
        

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #A0E5EB;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
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

            .links > a {
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
            
            #logo{
                margin-top: 0px;
            }
            
            #ultimosServicios{
                position: relative;
                font-size: 50px;
                width: 650px;
                height: 290px;
                background-color: #D6F7FC ;
                border-radius: 20px;
                margin-left: -450px;
                
            }

            #masSolicitados{
                position: absolute;
                font-size: 50px;
                width: 650px;
                height: 290px;
                background-color: #D6F7FC ;
                border-radius: 20px;
                margin-left: 300px;
                margin-top: -290px;
            }
        </style>
    </head>
    <body>
        
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/') }}">Welcome</a>
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Logarse</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div id="logo" class="title m-b-md">
                   <a id="capa" href='<?=url('/')?>' ><img id="encabezado" src="{{ asset('img/logo.png')}}"/></a>
                    
                <div id="ultimosServicios" class="links">
                    <a>Ultimos servicios</a>
                </div>
              <div id="masSolicitados" class="links">
                    <a>Servicios mas solicitados</a>
                </div>
            </div>         
            </div>
        </div>
    </body>
</html>
