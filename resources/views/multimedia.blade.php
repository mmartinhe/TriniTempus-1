<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Vista multimedia</title>
</head>

<body>
    @extends('layouts.app') @section('content')
    <div class="container" id="usuarioLogado">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"></div>

                    
                </div>
            </div>
        </div>
    </div>
    @endsection @if (Route::has('login'))
    <div class="top-right links">
        @auth
            <a href="{{ url('/home') }}">Home</a> 
            <div class="card-body">
                 @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                 @endif
            </div>
        @else
            <a href="{{ route('login') }}">Logarse</a> 
        @if (Route::has('register'))
            <a href="{{ route('register') }}">Registrarse</a> 
        @endif @endauth
    </div>
    @endif 
    <br><br><br>
    
    VISTA MULTIMEDIA 
</body>
</html>