<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Multimedia;

class MultimediaController extends Controller
{
	
    public function updateMultimedia( Request $request ) {
       $request->file('archivo')->storeAs('img',[request()->file('archivo')]);
        ("subido y guardado");
    }
}
