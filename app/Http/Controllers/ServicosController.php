<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\servico;

class ServicosController extends Controller
{
    public function index()

{

    $servicos = servico::all();

    return view('servicos.index', compact('servicos'));

}

public function create()
{
    return view('servicos.create');
}
public function store(Request $requisicao)
{
    $servico = new Servico();

    $servico->titulo= $requisicao->titulo;
        $servico->valor = $requisicao->valor;
        $servico->descricao = $requisicao->descricao;
        $servico->barba = $requisicao->barba;
        $servico->cabelo = $requisicao->cabelo;
        $servico->spa = $requisicao->spa;
        $servico->manicurepedicure = $requisicao->manicurepedicure ;
        $servico->fotos = $requisicao->fotos ;
        $servico->save();
        return redirect()->route('servicos.show', $servico->id);

}
public function show(Servico $Servico)
{
    // Retorna a view gatos.view com o objeto $gato
    return view('servicos.view', compact('servico'));
}

/**
 * Mostra o formulário para editar um gato específico
 */
public function edit(Servico $servico)
{
    // Retorna a view gatos.edit com o objeto $gato
    return view('servicos.edit', compact('servico'));
}


public function update(Request $requisicao, Servico $servico)
{

    $servico->update($requisicao->all());

    return redirect()->route('servicos.show', $servico->id);
}

/**
 * Remove um gato específico
 */
public function destroy(servico $servico)
{
    $servico->delete();

    return redirect()->route('servicos.index');
}
}

