@extends('templates.layout')

@section('conteudo')
    <section class="ticket-section section-padding">
        <div class="section-overlay"></div>

        <div class="container">
            <h1 class="text-white">Edição do Usuario {{ $usuario->id }}</h1>

            <form method="POST" action="{{ route('usuarios.update', $usuario->id) }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="text-white">Nome: </label>
                    <input type="text" name="nome" class="form-control" value="{{ $usuario->nome }}">
                </div>

                <div class="mb-3">
                    <label class="text-white">Telefone: </label>
                    <input type="text" name="telefone" class="form-control" value="{{ $usuario->telefone }}">
                </div>

                <div class="mb-3">
                    <label class="text-white">Email: </label>
                    <input type="text" name="email" class="form-control" value="{{ $usuario->email }}">
                </div>

                <div class="mb-3">
                    <label class="text-white">Endereço: </label>
                    <input type="text" name="endereco" class="form-control" value="{{ $usuario->endereco }}">
                </div>

                <div>
                    <input type="submit" value="Atualizar Usuario" class="btn btn-primary">
                </div>
            </form>

        </div>
    </section>
@endsection





