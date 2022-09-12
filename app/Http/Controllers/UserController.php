<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $u = new User();
        $u->NombreUsuario = $request->input("NombreUsuario");
        $u->NombreCompleto = $request->input("NombreCompleto");
        $u->Password = hash::make($request->input("Password"));
        if ($u->save()) {
            return view("AltaUsuario", ["error" => False]);
        } else {
            return view("AltaUsuario", ["error" => True]);
        };
    }


    public function IniciarSesion(Request $request)
    {
        $credenciales = $request->validate([
            'NombreUsuario' => ['required'],
            'Password' => ['required'],
        ]);

        $request->session()->invalidate();
        $request->session()->regenerate();

        $attempt = Auth::attempt([
            'NombreUsuario'   => $request-> input("NombreUsuario"),
            'Password' => $request-> input("Password")
          ]);

        echo "auth: ";
        var_dump($attempt);
        var_dump($credenciales);

        if ($attempt) {

        }
    }
    
    public function CerrarSesion(Request $request)
    {
        auth::logout();
    }
}
