@extends('templates.layout')

@section('conteudo')
    <section class="ticket-section section-padding">
        <div class="section-overlay"></div>

        <div class="container">
            <img src="/storage/{{ $salao->foto }}" />
            <h2 class="text-white">{{ $salao->nome }}</h2>
            <h3 class="text-white">{{ $salao->razao_social }}</h3>
            <h4 class="text-white" >{{ $salao->email }}</h4>
            <h5 class="text-white" >{{ $salao->endereco }}</h5>
            <h6 class="text-white">{{ $salao->telefone }}</h6>
            <h1 class="text-white">{{ $salao->salaografia }}</h1>
            <h2>{{ $salao->senha }}</h2>
            <h3>{{ $salao->confirmar_senha }}</h3>

            <a class="btn btn-light" href="{{ route('saloes.index') }}">Voltar a lista</a>
            <a class="btn btn-warning" href="{{ route('saloes.edit', $salao->id) }}">Editar</a>

            <form method="POST" action="{{ route('saloes.destroy', $salao->id) }}">
                @csrf
                @method('DELETE')

                <input type="submit" value="Excluir Salao" class="btn btn-danger">
            </form>

            <div class="container">
                <form action="SERVIÇOS"></form>
                <div class="container1">
                    <h1>Deixe seu serviço</h1>
                    <form method="POST" action="{{ route('servicos.store') }}">
                        @csrf
                        <input type="hidden" name="salao_id" value="{{ $salao->id }}">

                        <div class="form-group">
                            <label for="nome">Titulo</label>
                            <input type="text" name="tiulo" class=form-control placeholder="Digite o serviço">
                        </div>

                        <div class="form-group">
                            <label for="descricao">Descrição</label>
                            <textarea name="descricao" rows="4" class=form-control placeholder="Digite a descricao"></textarea>
                        </div>
                        <div>
                            <input type="submit" value="Salvar Avaliação" class="btn btn-primary">
                        </div>
                    </form>
                </div>

        </div>
</section>
@endsection

