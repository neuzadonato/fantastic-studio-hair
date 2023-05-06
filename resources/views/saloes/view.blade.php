@extends('templates.layout')

@section('conteudo')
    <section class="ticket-section section-padding">
        <div class="section-overlay"></div>

        <div class="container">
            <h1 class="text-white">{{ $salao->nome }}</h1>
            <h2>{{ $salao->razao_social }}</h2>
            <h3>{{ $salao->email }}</h3>
            <h4>{{ $salao->endereco }}</h4>
            <h5>{{ $salao->telefone }}</h5>
            <h6>{{ $salao->salaografia }}</h6>
            <h1>{{ $salao->foto }}</h1>
            <h2>{{ $salao->senha }}</h2>
            <h3>{{ $salao->confirmar_senha }}</h3>

            <a class="btn btn-light" href="{{ route('saloes.index') }}">Voltar a lista</a>
            <a class="btn btn-warning" href="{{ route('saloes.edit', $salao->id) }}">Editar</a>

            <form method="POST" action="{{ route('saloes.destroy', $salao->id) }}">
                @csrf
                @method('DELETE')

                <input type="submit" value="Excluir Salao" class="btn btn-danger">
            </form>
        </div>
</section>
@endsection

