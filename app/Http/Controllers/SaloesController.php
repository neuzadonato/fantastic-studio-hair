<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaloesController extends Controller
{
     /**
     * Lista todos os saloes cadastrados
     */
    public function index()
    {
        // Pega todos os registos da tabela relacionada ao modelo Salao
        $saloes = Salao::all();

        // Manda os dados para uma view, no caso saloes.index
        return view('saloes.index', compact('saloes'));
    }

    /**
     * Mostra o formulário para criar um novo salao
     */
    public function create()
    {
        return view('saloes.create');
    }

    /**
     * Armazena um novo salao
     */
    public function store(Request $requisicao)
    {
        // Cria um novo objeto do tipo Salao em branco
        $salao = new Salao();

        // Preenche os campos do objeto com os dados da requisição
        $salao->id = $requisicao->id;
        $salao->nome = $requisicao->nome;
        $salao->endereco = $requisicao->endereco;
        $salao->telefone = $requisicao->telefone;      
        $salao->salaografia = $requisicao->salaografia;

        // Salva o objeto no banco de dados
        $salao->save();

        // Redireciona para a página de detalhes do salao
        return redirect()->route('saloes.show', $salao->id);
    }

    /**
     * Mostra um salao específico
     *
     * O parametro $gato é um objeto do tipo Gato que é passado automaticamente
     * pelo Laravel, pois o nome do parametro é o mesmo nome do parametro que
     * está na rota. O Laravel faz a busca no banco de dados e retorna o objeto
     * que corresponde ao id passado na rota.
     */
    public function show(Salao $salao)
    {
        // Retorna a view gatos.view com o objeto $salao
        return view('salao.view', compact('salao'));
    }

    /**
     * Mostra o formulário para editar um gato específico
     */
    public function edit(Salao $salao)
    {
        // Retorna a view saloes.edit com o objeto $salao
        return view('saloes.edit', compact('salao'));
    }

    /**
     * Atualiza um salao específico
     */
    public function update(Request $requisicao, Salao $salao)
    {
        // Atualiza o objeto com os dados da requisição
        $salao->update($requisicao->all());

        // Redireciona para a página de detalhes do gato
        return redirect()->route('saloes.show', $saloes->id);
    }

    /**
     * Remove um salao específico
     */
    public function destroy(Salao $salao)
    {
        $salao->delete();

        return redirect()->route('saloes.index');
    }
}


}
