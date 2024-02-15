<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Http\Request;
use Illuminate\Support\ViewErrorBag;

class ComentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comentarios = Comentario::all();
        return view('comentario.indexComentario', compact('comentarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comentario.createComentario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validación
        $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'correo' => 'required|email',
            'comentario' => 'required|min:10',
            'ciudad' => 'required'
        ]);

        // Guardar Datos
        $comentario = new Comentario();
        $comentario->nombre = $request->nombre;
        $comentario->correo = $request->correo;
        $comentario->comentario = $request->comentario;
        $comentario->ciudad = $request->ciudad;
        $comentario->save();

        // Redireccionar 
        return redirect()->route('comentario.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comentario $comentario)
    {
        return view('comentario.showComentario', compact('comentario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comentario $comentario)
    {
        return view('comentario.editComentario', compact('comentario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comentario $comentario)
    {
        // Validación
        $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'correo' => 'required|email',
            'comentario' => 'required|min:10',
            'ciudad' => 'required'
        ]);

        // Guardar datos
        $comentario->nombre = $request->nombre;
        $comentario->correo = $request->correo;
        $comentario->comentario = $request->comentario;
        $comentario->ciudad = $request->ciudad;
        $comentario->save();

        return redirect()->route('comentario.show', $comentario);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comentario $comentario)
    {
        $comentario->delete();
        return redirect()->route('comentario.index');
    }
}
