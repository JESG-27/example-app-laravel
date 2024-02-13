<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Http\Request;

class SitioController extends Controller
{
    public function info($tipo = null){
        return view('info', compact('tipo'));
    }
}
