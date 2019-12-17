<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Multimedia;

class MultimediaController extends Controller
{
    public function updateMultimedia( Request $request ) {
       $request->file('archivo')->store('public');
        dd("subido y guardado");
    }
}
