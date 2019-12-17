<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Multimedia;

class MultimediaController extends Controller
{
    public function updateMultimedia( Request $request ) {
        $rules = [ 'image' => 'required|image|max:1024*1024*1', ];
        $messages = [
            'image.required' => 'La imagen es requerida',
            'image.image' => 'Formato no permitido',
            'image.max' => 'El máximo permitido es 1 MB',
        ];

        $validator = Validator::make( $request->all(), $rules, $messages );

        if ( $validator->fails() ) {
            return redirect( '/subir_img_multimedia' )->withErrors( $validator );
        } else {
            $name = str::random( 30 ) . '-' . $request->file( 'image' )->getClientOriginalName();
            $request->file( 'image' )->move( 'perfiles', $name );
            $user = new User;
            $user->where( 'email', '=', Auth::user()->email )->update( [ 'multimedia' => 'perfiles/' . $name ] );
            return redirect( 'multimedia' )->with( 'status' );
        }
    }
}
