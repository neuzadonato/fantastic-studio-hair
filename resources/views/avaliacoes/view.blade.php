@extends('templates.layout')

@section('conteudo')
    <section class="about-section section-padding" id="section_2">

        <div class="container">
            <h1>{{ $avaliacao->nome }} - {{ $avaliacao->email }}</h1>

            <h3>{{ $avaliacao->nota }} </h3>

            <h3>O que achou do salão? {{ $avaliacao->mensagem }}</h3>

            <a class="btn btn-light" href="{{ route('avaliacoes.index') }}">Voltar a lista</a>
            <a class="btn btn-warning" href="{{ route('avaliacoes.edit', $avaliacao->id) }}">Editar</a>

            <form method="POST" action="{{ route('avaliacoes.destroy', $avaliacao->id) }}">
                @csrf
                @method('DELETE')

                <input type="submit" value="Excluir Avaliacao" class="btn btn-danger">
            </form>
        </div>
    </section>
@endsection
