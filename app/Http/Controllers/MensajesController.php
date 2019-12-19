<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mensaje;
use App\MiServicio;

class MensajesController extends Controller
{
    function mostrarTodos() {
  
        $mensajes = Mensaje::all();
        $misServicios = MiServicio::all();

        return view('mi_cuenta', 
                    ['mensajes' => $mensajes,
                     'misServicios' => $misServicios]);
        
        
        
        
/*		$mensajes = Mensaje::all();

		return view('mi_cuenta', [
			'todosMensajes' => $mensajes
		]);*/
        

/*		$mensajes = Mensaje::all();
		return view('mi_cuenta', ['mensajes' => $mensajes->toArray()]);*/

	}
    
     public function eliminarMensaje($id){
             
        //echo "llegooooooooooooooo" . $id;
        $servicio=Mensaje::findOrFail($id);
        $servicio->delete();
        return back();
    
    }
    
    
    
    
    
    
    
    
    
    
	
	function mostrarTodosVistaMensajes() {
        
    $mensajes = Mensaje::all();
    //return view('mensajes.index', compact('mensajes'));
    return view('mensajes')->with('mensajes',$mensajes);
	}
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
	/*
	function mostrarMensajesUsuario($id) {
    $mensajes = Mensaje::all();
		//$mensajesUsuario;
    //return view('mensajes.index', compact('mensajes'));
		foreach($mensajes as $mensaje){
			if($mensaje->emisor==$id)
				$mensajesUsuario
		}
    return view('mensajes')->with('mensajes',$mensajesUsuario);
	}*/
	
	public function crearMensaje(Request $request){
		$this->validate($request, [         
        'textoBuscar'  =>  'required',  
        'servicios'  =>  'required',
        'mensaje'  =>  'required',
     ]);
		Mensaje::insert([
		'emisor'       => $request->input("textoBuscar"),
		'receptor'	=> "3",
        'contenido'  => $request->input("mensaje"),
        'tipo'        => "publico"
      ]);
		
		
      return back()->with('success', 'Enviado exitosamente!');
    }
	
	public function crearFormulario(Request $request){
      
		$this->validate($request,[
		   'nombre'=>'required',
		   'mensaje'=>'required',		   
	   ]);
	   
		Mensaje::insert([
			'emisor'=>$request->input("nombre"),
			'receptor'=>"1",
			'contenido'=>$request->input("mensaje"),
			'tipo'=>"publico"
		]);
		
		return back()->with('success',"Enviado");
		
		
    }
	
}
