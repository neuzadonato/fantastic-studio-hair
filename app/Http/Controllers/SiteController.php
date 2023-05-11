<?php

namespace App\Http\Controllers;

use App\Models\Salao;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        $saloes = Salao::all();

        return view('home', compact('saloes'));
    }

    public function salao($nome, Salao $salao)
    {
        return view('site.salao', compact('salao'));
    }
}
