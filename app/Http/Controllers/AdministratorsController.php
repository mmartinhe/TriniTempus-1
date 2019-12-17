<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\foundation\Auth\AuthenticatesUsers;


use App\Administrator;
use App\User;

class AdministratorsController extends Controller
{
    
    use AuthenticatesUsers;
    
    /*public function showLoginForm(){
        
        echo "llegooooooooo";
        return view ('administrators.login');
    }*/
    
    public function loginAdmin(Request $request){
        
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

        if ($usuarios == 'pepe') {
            return view('/administrador') ;
        } 

        */
        
        
        return view('/administrador') ;
    }
    
    

}
