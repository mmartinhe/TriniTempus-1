<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modificar datos</title>
</head>

<style>
    h1 {
        text-align: center;
    }
    
    #formulario {
        margin-left: 620px;
    }
    
    #modifiDatos {
        margin-left: 70px;
    }
    
    #btnVolver {
        margin-left: 720px;
    }

</style>

<body>
    <h1>MOFIDICAR DATOS</h1>

    <form action="{{url('/modificarMisDatos')}}" method="post" id="formulario">
        <input type="hidden" name="_token" id="csrf-token" value="{{Session::token()}}">
        <div>
            <p>
                Id :
                <input type="text" name="id" placeholder="introduce el  id...">
            </p>
        </div>

        <div>
            <p>
                Nuevo nombre:
                <input type="text" name="nombre" placeholder="introduce el nombre...">
            </p>
        </div>

        <div>
            <p>
                Nuevo correo:
                <input type="text" name="email" placeholder="introduce el nuevo correeo...">
            </p>
        </div>

        <div>
            <p>
                Nuevo ciudad:
                <input type="text" name="ciudad" placeholder="introduce la nueva ciudad...">
            </p>
        </div>
        <br>
        <div>
            <input type="submit" value="Modificar datos" id="modifiDatos">

        </div>
        <br>
    </form>
    <br>
    <form action="<?=url('profile')?>" method="post" id="btnVolver">
        <input type="submit" name="botonVolver" value="volver">
    </form>