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
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:usuarios,email',
            'senha' => 'required|string|min:6',
        ]);

        $usuario = new Usuario();
        $usuario->fill($validated);
        $usuario->save();

        return redirect()->route('login')->with('success', 'Cadastrado com sucesso!');
    }

    public function login() {
        $data = [];

        return view('login', $data);
    }
}
