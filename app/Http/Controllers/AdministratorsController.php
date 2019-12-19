<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\foundation\Auth\AuthenticatesUsers;


use App\Administrator;
use App\User;
use App\Ciudad;
use App\Categoria;
use App\SubCategoria;


class AdministratorsController extends Controller
{
     use AuthenticatesUsers;
    
     
/*--------------------------------funciones gestiones administrador---------------------------------------------*/    
                /*ELIMINAR*/
   public function anadirCiudad(Request $request){
       /*echo "llegoooooooooooooooo" . $request->input("ciudad") ;*/     
       
       $this->validate($request, [          
        'ciudad'  =>  'required',
        ]);

      Ciudad::create([
        'nombre'  => $request->input("ciudad"),
      ]);

      return view('administrador')->with('success', 'Enviado exitosamente!');
       
       
   } 
       
    public function anadirCategoria(Request $request){
        $this->validate($request, [          
        'categoria'  =>  'required',
        ]);

      Categoria::create([
        'nombre'  => $request->input("categoria"),
      ]);

      return view('administrador')->with('success', 'Enviado exitosamente!');
    }
    
    public function anadirSubCategoria(Request $request){
        $this->validate($request, [          
        'sub_categoria'  =>  'required',
        ]);

      SubCategoria::create([
        'nombre'  => $request->input("sub_categoria"),
      ]);

      return view('administrador')->with('success', 'Enviado exitosamente!');
    }
    
                /*ELIMINAR*/
    
     public function eliminarCiudad(Request $request){
         $this->validate($request, [
			'ciudad' => 'required|min:1',
		]);

		$nombre = $request->get('ciudad');
		$ciudad = Ciudad::where('nombre', $nombre);
		$ciudad->delete();

		return view('administrador')->with('success', 'Enviado exitosamente!'); 
       
    } 
    
    public function eliminarCategoria(Request $request){
        $this->validate($request, [
			'categoria' => 'required|min:1',
		]);

		$nombre = $request->get('categoria');
		$categoria = Categoria::where('nombre', $nombre);
		$categoria->delete();

		return view('administrador')->with('success', 'Enviado exitosamente!'); 
        
    }
    
    public function eliminarSubCategoria(Request $request){
        $this->validate($request, [
			'sub_categoria' => 'required|min:1',
		]);

		$nombre = $request->get('sub_categoria');
		$sub_categoria = SubCategoria::where('nombre', $nombre);
		$sub_categoria->delete();

		return view('administrador')->with('success', 'Enviado exitosamente!'); 
    }
    
     public function BuscarUsuarios(){
         $usuarios = User::all();

        return view('administrador', 
                    ['usuarios' => $usuarios,
                     ]);
        
        //echo "llegooooooooooooooooooooo";
    }
    
    
    
    
/*--------------------------------funciones login administrador---------------------------------------------*/
   
    
    /*public function showLoginForm(){
        
        echo "llegooooooooo";
        return view ('administrators.login');
    }*/
    
    public function loginAdmin(Request $request){ // PREGUNTALE A RAFA POR DIOS !!!!
        
        // aqui tienes que hacer las validaciones de la vista login 
        //si el name es admin redirecciono a vista administrador
/*        
        $this->validate($request, [         
            'email'  =>  'required',  
            'password' => 'required',   
        ]);
        
        $usuarios = user::select('*')
                ->where('name', $request->input("name"))  
                ->get();

        if ($usuarios == 'luis') {
            return view('/administrador') ;
        } 

        */
        
        
        return view('/administrador') ;
    }
    
    

}
