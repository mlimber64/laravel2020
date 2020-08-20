<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Usuario;
use App\TipoDocumento;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        
        
        return view('usuario')->with('usuarios', Usuario::all());

    }

    public function  insert()
    {
        //$documentos = TipoDocumento::all();

        //return view('usuario.create')->with('documentos',TipoDocumento::all());
    }
    public function store(Request $request)
    {
        $documentos = TipoDocumento::all();

        $nuevoUsuario = new Usuario;
        $nuevoUsuario->id_tipo = $request->id_tipo;
        $nuevoUsuario->nombre = $request->nombre;
        $nuevoUsuario->apellido = $request->apellido;
        $nuevoUsuario->nro_doc = $request->nro_doc;
        $nuevoUsuario->email = $request->email;
        $nuevoUsuario->fecha_nac = $request->fecha_nac;
        $nuevoUsuario->direccion = $request->direccion;

        $nuevoUsuario->save();


        return back()->with('usuarios', Usuario::all());
        return view('usuarios')->with('documentos',TipoDocumento::all());
        alert()->sucess('sucess','Se registro correctamente!');
    }
}
