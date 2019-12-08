<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsuariosController extends Controller
{
    
    public function vistaModificarMisDatos(){
        return view('/vista_modificar');
    }
  
    
    public function modificarMisDatos(Request $request)
    {
        
      $this->validate($request, [
            'id' => 'required|min:1',
			'usuario' => 'required|min:1',
		    'email' => 'required|min:5',
			'ciudad' => 'required|min:2'
	  ]);
        
        //return response()->json($request);
        
/*        $usuario = User::find($id);
		$usuario->update();*/
        
        
/*        $usuario = User::find($request->id);
        $usuario->update($request->all());*/
        
        $usuario = User::find($request->id);
        $usuario->fill($request->all());
        $usuario->save();
        
        
       return view('home');
        
       // echo "llegoooo";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = User::find($request->id);
    }
}
