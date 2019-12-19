<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Multimedia;

class MultimediaController extends Controller
{
	
    public function updateMultimedia( Request $request ) {
       if($request->hasFile('avatar')){
		    $file=$request->file('avatar');
		   $name=time().$file->getClientOriginalName();
		   $file->move(public_path().'/../public/img_multimedia',$name);
	   }/*
		$multimedia=new Multimedia();
		$multimedia->avatar=$name;
		$multimedia->name='lo subi yo andele';
		$multimedia->save();*/
		
		return back()->with('success', 'Enviado exitosamente!');
		
		
		
    }
}
