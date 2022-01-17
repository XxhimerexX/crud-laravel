<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    //

    public function getUsuarios()
    {

        $usuario = Usuarios::all();

        return $usuario;
    }


    public function postUsuarios(Request $request)
    {

        $usuario = Usuarios::create($request->all());
        // $usuario = $request;

        return [
            'estado' => true,
            'msg' => 'el usuario fue creado exitosamente'
        ];
    }

    public function putUsuarios(Request $request, $id)
    {

        $usuario = Usuarios::find($id);
        $usuario->update($request->all());

        return [
            'estado' => true,
            'msg' => 'el usuario fue actualizado exitosamente'
        ];
    }

    public function deleteUsuarios($id)
    {

        $usuario = Usuarios::find($id);
        $usuario->delete();

        return [
            'estado' => true,
            'msg' => 'el usuario fue eliminado exitosamente'
        ];
    }
}
