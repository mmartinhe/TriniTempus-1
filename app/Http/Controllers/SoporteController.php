<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail; //Importante incluir la clase Mail, que será la encargada del envío

class SoporteController extends Controller
{ 
    public function contact(Request $request){
       $this->validate($request,[
		   'nombre'=>'required',
		   'mensaje'=>'required',		   
	   ]);
		Mensajes::insert([
			'emisor'=>$request->input("nombre"),
			'receptor'=>"1",
			'contenido'=>$request->input("mensaje")
		]);
		
		return back()->with('success',"Enviado");
		
		
    }
}