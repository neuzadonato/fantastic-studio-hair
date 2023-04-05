<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Avaliação #{{ $avaliacao->id }}</title>
    </head>
    <body>
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
    </body>
</html>
