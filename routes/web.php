<?php

use App\Models\Comentario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/informacion/{tipo?}', function($tipo = null){
    // Función para debug die and dump
    // dd($tipo);
    return view('info', compact('tipo'));
});

Route::get('/contacto', function(){
    return view('formContacto');
});

Route::post('/contacto', function(Request $request){
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
    return redirect('/contacto');
});