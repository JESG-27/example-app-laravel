<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    public function index(){
        return "Vista de listado de comentario";
    }
    
    public function create() {
        return view('formContacto');
    }

    public function store(Request $request){
        // dd($request->all(), $request->nombre, $request->input('nombre'));
        // $nombre = $request->nombre;

        // Validar Datos

        // Guardar Datos
        $comentario = new Comentario();
        $comentario->nombre = $request->nombre;
        $comentario->correo = $request->correo;
        $comentario->comentario = $request->comentario;
        $comentario->ciudad = $request->ciudad;
        $comentario->save();

        // Redireccionar 
        return redirect()->back();
    }
}
