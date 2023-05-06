@extends('templates.layout')

@section('conteudo')
    <section class="ticket-section section-padding">
        <div class="section-overlay"></div>

        <div class="container">

            <h1>Edição do salão {{ $salao->id }}</h1>

            <form method="POST" action="{{ route('saloes.update', $salao->id) }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label>Nome</label>
                    <input type="text" name="nome" class="form-control" value="{{ $salao->nome }}">
                </div>

                <div class="mb-3">
                    <label>Razão Social</label>
                    <input type="text" name="razao_social" class="form-control" value="{{ $salao->razao_social }}">
                </div>

                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="{{ $salao->email }}">
                </div>

                <div class="mb-3">
                    <label>Endereço</label>
                    <input type="text" name="endereco" class="form-control" value="{{ $salao->endereco }}">
                </div>

                <div class="mb-3">
                    <label>Telefone</label>
                    <input type="text" name="telefone" class="form-control" value="{{ $salao->telefone }}">
                </div>

                <div class="mb-3">
                    <label>Salaografia</label>
                    <input type="text" name="salaogragrafia" class="form-control" value="{{ $salao->salaografia }}">
                </div>

                <div>
                    <input type="submit" value="Atualizar Salao" class="btn btn-primary">
                </div>
            </form>
        </div>
    </section>
@endsection

