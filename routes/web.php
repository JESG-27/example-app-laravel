<?php

use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\SitioController;
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

Route::get('/informacion/{tipo?}', [SitioController::class, 'info']);
#Route::get('/contacto', [ComentarioController::class, 'create']);
#Route::post('/contacto', [ComentarioController::class, 'store']);
Route::resource('comentario', ComentarioController::class);