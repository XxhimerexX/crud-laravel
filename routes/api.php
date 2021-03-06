<?php

use App\Http\Controllers\UsuariosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('usuarios',[UsuariosController::class, 'getUsuarios']);
Route::post('usuarios',[UsuariosController::class, 'postUsuarios']);
Route::put('usuarios/{id}',[UsuariosController::class, 'putUsuarios']);
Route::delete('usuarios/{id}',[UsuariosController::class, 'deleteUsuarios']);
