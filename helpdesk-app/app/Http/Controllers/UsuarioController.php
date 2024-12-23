<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function cadastrar(Request $request){
        $data = [];

        return view('cadastrar', $data);
    }

    public function cadastrarCliente(Request $request){
        $values = $request->all();
        $usuario = new Usuario();
        $usuario->fill($values);
        $usuario->save();

        return redirect()->route('cadastrar.view');
    }

    public function login() {
        $data = [];

        return view('login', $data);
    }
}
