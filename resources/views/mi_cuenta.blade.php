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

    <!-- Styles -->
    <style>
        html,
        body {
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
        
        /*-----------------------------------------*/
         
        #capa_datos{
            border-radius: 20px;
                      
        }
        #foto{
            left:50px;
        }

    </style>
</head>

<body>
    @if (Route::has('login'))
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a>
        <a href="{{ url('/buscador') }}">Mi cuenta</a>@else
        <a href="{{ route('login') }}">Logarse</a> @if (Route::has('register'))
        <a href="{{ route('register') }}">Registrarse</a> @endif @endauth
    </div>
    @endif
<div class="content">
    <div class="title m-b-md">
        <a id="capa" href='<?=url('/home ')?>'><img  src="{{ asset('img/logo.png')}}" style='max-width: 250px'/></a>
    </div>

    <div class="container tex-center py-5 ">
       <div class="row">
          <div class="col-6 bg-primary" id="capa_Misdatos">
            <div class="col-3 bg-success" id="capa_datos">
               <div id="mis_datos" class="links">
                <b>MIS DATOS</b>
                <form action="{{url('/vistaModificarMisDatos')}}" method="post" id="formulario">
                    <input type="hidden" name="_token" id="csrf-token" value="{{Session::token()}}">
                    <div id="datos_usuario">
                        <p id="id">Id:&nbsp&nbsp{{ auth()->user()->id}}</p>
                        <p id="usuario">Usuario:&nbsp&nbsp<input name="usuario" placeholder="{{ auth()->user()->name}}"></input>
                        </p>
                        <p id="correo">E-mail:&nbsp&nbsp<input name="email" placeholder="{{ auth()->user()->email}}"></input>
                        </p>
                        <p id="ciudad">Ciudad:&nbsp&nbsp<input name="ciudad" placeholder="{{ auth()->user()->ciudad}}"></input>
                        </p>
                        <div>
                            <input type="submit" value="Modificar datos" id="btnModificarDatos">
                        </div>
                        <div id="tiempo">
                            TIEMPO: 100 MINUTOS
                        </div>
                    </div>
                    </form>
                </div>
    
                    <div id="foto"><img id="foto_perfil" src='{{url(Auth::user()->avatar)}}' class='img-responsive' style='max-width: 120px' /></div>
                
            
            <form>
                <div>
                    <input type="submit" value="Darse de baja" id="btnBaja">
                </div>              
            </form>
                  <a href='<?=url('profile')?>'><button id="btn_modificar">Modificar Foto</button></a> 
        </div>
           </div>  
           
           
           
           <div class="col-6 bg-success">
           <p>MIS MENSAJES</p>
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