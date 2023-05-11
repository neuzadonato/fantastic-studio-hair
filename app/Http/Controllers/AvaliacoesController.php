<?php

namespace App\Http\Controllers;

use App\Models\Avaliacoes;
use Illuminate\Http\Request;

class AvaliacoesController extends Controller
{
    /**
     * Lista todos os Avaliacoes cadastrados
     */
    public function index()
    {
        // Pega todos os registos da tabela relacionada ao modelo Avaliacao
        $Avaliacoes = Avaliacoes::all();

        // Manda os dados para uma view, no caso Avaliacoes.index
        return view('Avaliacoes.index', compact('Avaliacoes'));
    }

    /**
     * Mostra o formulário para criar um novo Avaliacao
     */
    public function create()
    {
        return view('avaliacoes.create');
    }

    /**
     * Armazena um novo Avaliacao
     */
    public function store(Request $requisicao)
    {
        // Cria um novo objeto do tipo Avaliacao em branco
        $Avaliacao = new Avaliacoes();

        // Preenche os campos do objeto com os dados da requisição
        $Avaliacao->nome = $requisicao->nome;
        $Avaliacao->email = $requisicao->email;
        $Avaliacao->nota = $requisicao->nota;
        $Avaliacao->mensagem = $requisicao->mensagem;

        // Salva o objeto no banco de dados
        $Avaliacao->save();

        // Redireciona para a página de detalhes do Avaliacao
        return redirect()->route('avaliacoes.show', $Avaliacao->id);
    }

    /**
     * Mostra um Avaliacao específico
     *
     * O parametro $Avaliacao é um objeto do tipo Avaliacao que é passado automaticamente
     * pelo Laravel, pois o nome do parametro é o mesmo nome do parametro que
     * está na rota. O Laravel faz a busca no banco de dados e retorna o objeto
     * que corresponde ao id passado na rota.
     */
    public function show(Avaliacoes $avaliacao)
    {
        // Retorna a view Avaliacoes.view com o objeto $Avaliacao
        return view('Avaliacoes.view', compact('avaliacao'));
    }

    /**
     * Mostra o formulário para editar um Avaliacao específico
     */
    public function edit(Avaliacoes $Avaliacao)
    {
        // Retorna a view Avaliacoes.edit com o objeto $Avaliacao
        return view('Avaliacoes.edit', compact('Avaliacao'));
    }

    /**
     * Atualiza um Avaliacao específico
     */
    public function update(Request $requisicao, Avaliacoes $Avaliacao)
    {
        // Atualiza o objeto com os dados da requisição
        $Avaliacao->update($requisicao->all());

        // Redireciona para a página de detalhes do Avaliacao
        return redirect()->route('avaliacoes.show', $Avaliacao->id);
    }

    /**
     * Remove um Avaliacao específico
     */
    public function destroy(Avaliacoes $Avaliacao)
    {
        $Avaliacao->delete();

        return redirect()->route('avaliacoes.index');
    }
}
