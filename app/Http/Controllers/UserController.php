<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function store(Request $request)
    {
        try {
            $u = new User();
            $u->NombreUsuario = $request->input("NombreUsuario");
            $u->NombreCompleto = $request->input("NombreCompleto");
            $u->Password = $request->input("Password");
            $u->save();
            return redirect ("/");
        } catch (\Throwable $th) {
            return view("AltaUsuario", ["error" => True]);
        }
    }


    public function Sesion(Request $request)
    {
        if(session("Login")){
                session(['Autor' => NULL]);
                session(['Login' => FALSE]);
                return redirect ("/");
            }
        try {
                if(DB::table("users")->where("NombreUsuario", $request->input("NombreUsuario"))->value("NombreUsuario")!= NULL){
                    if (DB::table("users")->where("NombreUsuario", $request->input("NombreUsuario"))->value("Password") === $request->input("Password")){
                            session(['Autor' => $request->input("NombreUsuario")]);
                            session(['Login' => TRUE]);
                            return redirect ("/");
                    }
                    return view("Login", ["error" => True]);
                }     
                return view("Login", ["error" => True]);   
        } catch (\Throwable $th) {
            return view("Login", ["error" => True]);
        }
        
    }
}
