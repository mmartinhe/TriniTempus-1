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
    
    
    
    
    
    
    
    
    public function anadirCategoria(){
        
    }
    
    public function anadirSubCategoria(){
        
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
    
    public function eliminarCategoria(){
        
    }
    
    public function eliminarSubCategoria(){
        
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
