<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AutenticacaoController extends Controller
{
    public function entrar()
    {
        return view('autenticacao.login');
    }

    public function entrar_store(Request $requisicao)
    {
        $requisicao->validate([
            'usuario' => 'required|email',
            'senha_usuario' => 'required'
        ]);

        if(!Auth::guard('usr')->attempt(['email' => $requisicao->usuario, 'password' => $requisicao->senha_usuario])){
            echo 'erro';
        }

        return redirect()->route('home');
    }

    public function logout()
    {
        Auth::guard('usr')->logout();
        return redirect()->route('login');
    }
}
