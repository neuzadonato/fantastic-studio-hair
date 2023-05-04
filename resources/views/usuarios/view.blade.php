
@extends('templates.layout')

@section('conteudo')
    <section class="ticket-section section-padding">
        <div class="section-overlay"></div>

        <div class="container">
            !DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Usuario #{{ $usuario->id }}</title>
    </head>
    <body>
        <div class="container">
            <h1>{{ $usuario->nome }} - {{ $usuario->telefone }}</h1>

            <h3>{{ $usuario->telefone }} número</h3>

            <h3>endereço {{ $usuario->endereco }}</h3>

            <p>
                {{ $usuario->email }}
            </p>

            <a class="btn btn-light" href="{{ route('usuarios.index') }}">Voltar a lista</a>
            <a class="btn btn-warning" href="{{ route('usuarios.edit', $usuario->id) }}">Editar</a>

            <form method="POST" action="{{ route('usuarios.destroy', $usuario->id) }}">
                @csrf
                @method('DELETE')

                <input type="submit" value="Excluir Usuario" class="btn btn-danger">
            </form>
        </div>
    </body>
</html>
        </div>
    </section>
@endsection

