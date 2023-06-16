<?php

namespace App\Http\Controllers;

use App\Models\Salao;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home(Request $request)
    {
        if($request->busca)
        {
            $saloes = Salao::whereHas('servicos', function($query) use ($request){
                $query->where('titulo', 'like', '%'.$request->busca.'%')
                ->orWhere('descricao', 'like', '%'.$request->busca.'%');
            })
            ->paginate();
        }
        else
        {
            $saloes = Salao::paginate();
        }

        return view('home', compact('saloes'));
    }

    public function salao($nome, Salao $salao)
    {
        return view('site.salao', compact('salao'));
    }
}
