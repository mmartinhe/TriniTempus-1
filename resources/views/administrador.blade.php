@extends( 'layouts.final' )
    <link rel="ICON" type="iMAGEN/PNG" href="{{ asset('img/pestaña.png')}}"/>
 @if( Route::has( 'login' ) )
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a>
        <a href="{{ url('/mi_cuenta') }}">Mi cuenta </a>
        @else
        <a href="{{ url('/') }}">Salir del area administracion</a> @if (Route::has('register'))
         @endif @endauth
    </div>
@endif
    
    <!----------------------------------contenido---------------------------------------------->
    <div class="content">
        <div class="title m-b-md">
            <a id="capa" href="{{ url('/')}}"><img  src="{{ asset('img/logo.png')}}" style='max-width: 180px'/></a>
        </div>
        
        <div class="container-fluid tex-center py-auto bg-primary ">
            <h2 class="titulo tex-center">Administrar sitio</h2>
            
            
        <div class="row">
            <div class="col-6 bg-success " id="capa_añadir">
                <h2 class="titulo tex-center">Añadir al sitio</h2>
                 
                <form action="{{ url('/Admin/anadirCiudad') }}" method="post" id="formulario_crear_ciudad">
                    <input type="hidden" name="_token" id="csrf-token" value="{{Session::token()}}">
                    <p>Añadir ciudad:&nbsp&nbsp
                        <input type="text" name="ciudad" placeholder="Introduce la ciudad..."></input>
                        <input type="submit" class="btn btn-info" value="Guardar" id="btnGuardar">
                    </p>
                 </form>
            
                <form action="{{ asset('/Admin/anadirCategoria') }}" method="post" id="formulario_crear_categoria">
                    @csrf
                    <p>Añadir categoria:&nbsp&nbsp
                        <input type="text" name="categoria" placeholder="Introduce la categoria..."></input>
                        <input type="submit" class="btn btn-info" value="Guardar" id="btnGuardar">
                    </p>
                 </form>
                
                <form action="{{ asset('/Admin/anadirSubCategoria') }}" method="post" id="formulario_crear_sub_categoria">
                    @csrf
                    <p>Añadir sub-categoria:&nbsp&nbsp
                        <input type="text" name="sub_categoria" placeholder="Introduce la sub-categoria..."></input>
                        <input type="submit" class="btn btn-info" value="Guardar" id="btnGuardar">
                    </p>
                 </form>
        <!--AQUI AÑADIR USUARIOS SE AÑADEN ELLOS  SERVICIOS LOS AÑADEN ELLOS Y EVENTOS LOS AÑADEN ELLOS-->
            </div>


            <div class="col-6 bg-success" id="capa_eliminar">
                <h2 class="titulo tex-center">Eliminar del sitio</h2>
                
                <form action="{{ asset('/Admin/eliminarCiudad') }}" method="post" id="formulario_eliminar_ciudad">
                    @csrf
                    <p>Eliminar ciudad:&nbsp&nbsp
                        <input type="text" name="ciudad" placeholder="Introduce la ciudad..."></input>
                        <input type="submit" class="btn btn-info" value="Eliminar" id="btnEliminar">
                    </p>
                 </form>
            
                <form action="{{ asset('/Servicio/create/') }}" method="post" id="formulario_crear_categoria">
                    @csrf
                    <p>Eliminar categoria:&nbsp&nbsp
                        <input type="text" name="categoria" placeholder="Introduce la categoria..."></input>
                        <input type="submit" class="btn btn-info" value="Eliminar" id="btnEliminar">
                    </p>
                 </form>
                
                <form action="{{ asset('/Servicio/create/') }}" method="post" id="formulario_crear_servicio">
                    @csrf
                    <p>Eliminar sub-categoria:&nbsp&nbsp
                        <input type="text" name="sub_categoria" placeholder="Introduce la sub-categoria..."></input>
                        <input type="submit" class="btn btn-info" value="Eliminar" id="btnEliminar">
                    </p>
                 </form>

                           <!--AQUI AÑADIR ELIMINAR USUARIOS ELIMINAR SERVICIOS Y EVENTOS-->
<!--AQUI AÑADIR AÑADIR CAMPO PARA BUSCAR USUARIO POR ID Y 
                                APARECEN LOS DATOS EN TABLA PASAR A MODIFICAR DATOS Y ELIMINAR USUARIO-->
            </div>
        </div>            
    </div><!--content-->
</div>