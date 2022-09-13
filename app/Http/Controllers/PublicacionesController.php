<?php

namespace App\Http\Controllers;

use App\Models\Publicaciones;
use Illuminate\Http\Request;

class PublicacionesController extends Controller
{

    public function store(Request $request)
    {
        try {
            $p = new Publicaciones();
            $p -> Autor = $request -> input("Autor");
            $p -> Cuerpo = $request -> input("Cuerpo");
            $p -> save();
            return redirect ("/");
        } catch (\Throwable $th) {
            return view("AltaPublicaciones", ["error" => True]);
        }
        
    }

    public function show(Publicaciones $publicaciones)
    {
        $Publicaciones = Publicaciones::all();
        return view('Inicio',["Publicaciones" => $Publicaciones]);
    }

}
