@extends( 'layouts.final' )
    <link rel="ICON" type="iMAGEN/PNG" href="{{ asset('img/pestaña.png')}}"/> @if (Route::has('login'))
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a>
        <a href="{{ url('/crear_servicio') }}">Crear servicio</a>@else
        <a href="{{ route('login') }}">Logarse</a> @if (Route::has('register'))
        <a href="{{ route('register') }}">Registrarse</a> @endif @endauth
    </div>
@endif

<style>
#capa_mis_servicios_crear{

 width: 700px;
    
}
    



</style>
<!-------------------------------------contenido---------------------------------------------->
<div class="content">
    <div class="title m-b-md">
        <a id="capa" href="{{ url('home')}}"><img  src="{{ asset('img/logo.png')}}" style='max-width: 180px'/></a>
    </div>

    <p class="lead">
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

    <div class="container-fluid ">

        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6" id="capa_crear_servicio">
                <h2 class="titulo text-white">Crear servicio</h2>
                <br>
                <form action="{{ asset('/Servicio/create/') }}" method="post" id="formulario_crear_servicio">
                    @csrf

                    <p>Id usuario:&nbsp&nbsp
                        <input type="text" name="id_usuario" placeholder="Introduce el id del usuario..."></input>
                    </p>

                    <p>Ciudad:&nbsp&nbsp
                       <!-- <input type="text" name="ciudad" placeholder="Introduce la ciudad..."></input>-->
                             
                        <select  name="ciudad"  class="form-control-sm" >
                            <option value="Selecciona ciudad"></option>
                            @foreach($ciudades as $ciudad)
                                                          
                                <option>{!! $ciudad->nombre !!}</option>
                            
                            @endforeach
                            
                        </select>
                    </p>
                    

                    <p>Categoria:&nbsp&nbsp
                        <!--<input type="text" name="categoria" placeholder="Introduce la categoria..."></input>-->
                        
                        <select  name="categoria" class="form-control-sm">
                            <option value="Selecciona categoria"></option>
                            @foreach($categorias as $categoria)
                                                          
                                <option >{!! $categoria->nombre !!}</option>
                            
                            @endforeach
                            
                        </select>
                    </p>

                    <p>Subcategoria:&nbsp&nbsp
                        <!--<input type="text" name="sub_categoria" placeholder="Introduce la sub categoria..."></input>-->
                        
                        <select name="sub_categoria" class="form-control-sm">
                            <option value="Selecciona sub_categoria"></option>
                            @foreach($subCategorias as $subCategoria)
                                                          
                                <option >{!! $subCategoria->nombre !!}</option>
                            
                            @endforeach
                            
                        </select>
                    </p>
                    <br>
                    <input type="submit" class="btn btn-info" value="Guardar" id="btnGuardar">
                </form>
            </div>
            <div class="col-md-3">
            </div>
        </div>
        <hr>
        <!--segunda fila donde se van a mostrar los servicios--> 
        <div class="row ">
            
            <div class="col-md-8" id="capa_mis_servicios_crear" >
                <br><br>
                <h2 class="titulo text-white">Mis servicios</h2>
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-heading">

                        </div>
                        @if ($misServicios->isEmpty())
                        <div>No hay Servicios</div>
                        @else
                        <table id="tabla_mis_servicios_crear" class="table table-striped table-hover ">
                            <!--table table-hover table-dark-->
                            <thead>
                                <tr>
                                    <th>Id_servicio</th>
                                    <th>Id_usuario</th>
                                    <th>Ciudad</th>
                                    <th>Categoria</th>
                                    <th>Sub_categoria</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($misServicios as $servicio)
                               
                                    
                                <tr>
                                    
                                    <td>{!! $servicio->id !!}</td>
                                    <td>{!! $servicio->id_usuario !!}</td>
                                    <td>{!! $servicio->ciudad !!}</td>
                                    <td>{!! $servicio->categoria !!}</td>
                                    <td>{!! $servicio->sub_categoria !!}</td>
                                    <td> 
                                        <!--<form action="{{ url('Servicio/eliminar/'. $servicio->id)}}"  method="post" id="formulario_crear_servicio">-->
                                        
                                        <form action="{{ url('eliminar')}}/{{ $servicio->id }}"  method="post" id="formulario_eliminar_servicio">
                                            @csrf
                                            {{method_field('DELETE')}}
                                          <input type="submit" class="btn btn-info" value="eliminar" id="btnGuardar" >
                                         </form>   
                                    </td>
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
    <!-- /container -->
</div>