<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutenticacaoController extends Controller
{
    public function entrar()
    {
        return view('autenticacao.login');
    }
}
