<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail; //Importante incluir la clase Mail, que será la encargada del envío

class SoporteController extends Controller
{
  
    public function contact(Request $request){
        $subject = "Asunto del correo";
        $for = "dialpa@gmail.com";
        Mail::send('email',$request->all(), function($msj) use($subject,$for){
            $msj->from("laurageme22@gmail.com","Laura");
            $msj->subject($subject);
            $msj->to($for);
        });
        return redirect()->back();
    }
}