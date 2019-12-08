<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\User;
use Auth;
use Illuminate\Support\Str;

class UsuariosController extends Controller {

    public function __construct() {
        $this->middleware( 'auth' );
    }

    public function user() {
        return view( 'mi_cuenta' );
    }

    public
    function vistaModificarMisDatos() {
        return view( '/vista_modificar' );
    }


    public function modificarMisDatos( Request $request ) {

        $this->validate( $request, [
            'id' => 'required|min:1',
            'usuario' => 'required|min:1',
            'email' => 'required|min:5',
            'ciudad' => 'required|min:2'
        ] );

        //return response()->json($request);

        /*        $usuario = User::find($id);
        		$usuario->update();*/


        /*        $usuario = User::find($request->id);
                $usuario->update($request->all());*/

        $usuario = User::find( $request->id );
        $usuario->fill( $request->all() );
        $usuario->save();


        return view( 'home' );

        // echo "llegoooo";
    }

    public  function profile() {

        return view( 'profile' );
    }

    public function updateProfile( Request $request ) {
        $rules = [ 'image' => 'required|image|max:1024*1024*1', ];
        $messages = [
            'image.required' => 'La imagen es requerida',
            'image.image' => 'Formato no permitido',
            'image.max' => 'El máximo permitido es 1 MB',
        ];

        $validator = Validator::make( $request->all(), $rules, $messages );

        if ( $validator->fails() ) {
            return redirect( '/profile' )->withErrors( $validator );
        } else {
            $name = str::random( 30 ) . '-' . $request->file( 'image' )->getClientOriginalName();
            $request->file( 'image' )->move( 'perfiles', $name );
            $user = new User;
            $user->where( 'email', '=', Auth::user()->email )->update( [ 'avatar' => 'perfiles/' . $name ] );
            return redirect( 'mi_cuenta' )->with( 'status' );
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public
    function destroy( $id ) {
        $usuario = User::find( $request->id );
    }
}