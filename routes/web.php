<?php

use App\Http\Controllers\PublicacionesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UsuariosController;
use App\Models\users;
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

Route::get("/",[PublicacionesController::class, "show"]);

Route::get('/Login', function () {
    return view('Login');
});

Route::get('/Registro', function () {
    return view('AltaUsuario');
});

Route::post("/Registro",[UsuariosController::class, "store"]);


Route::get('/Publicar', function () {
    return view('AltaPublicaciones');
});

Route::post("/Publicar",[PublicacionesController::class, "store"]);
