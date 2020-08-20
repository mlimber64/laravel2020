<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
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
        //$documentos = TipoDocumento::all();

        

        
        $nuevoUsuario = new Usuario;
        $nuevoUsuario->id_tipo = $request->id_tipo;
        $nuevoUsuario->nombre = $request->nombre;
        $nuevoUsuario->apellido = $request->apellido;
        $nuevoUsuario->nro_doc = $request->nro_doc;
        $nuevoUsuario->email = $request->email;
        $nuevoUsuario->fecha_nac = $request->fecha_nac;
        $nuevoUsuario->direccion = $request->direccion;

        $nuevoUsuario->save();

        Mail::send('usuario.email',$request->all(), function($msj){

            $msj->subject('Correo de Contacto');
            $msj->to('mlimber64@gmail.com');

        });

        Session::flash('mensaje','Correo envia exitosamente');

        //return back()->with('usuarios', Usuario::all());
        return back()->with('flash', "El usuario se registro correctamente");
        //return view('usuarios')->with('documentos',TipoDocumento::all());
        
    }
}
