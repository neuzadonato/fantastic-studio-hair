<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Gato #{{ $salao->id }}</title>
    </head>
    <body>
        <div class="container">
            <h1>{{ $salao->id }} - {{ $salao->nome }}</h1>

            <h2>{{ $salao->endereco }}</h2>

            <h3>{{ $salao->telefone }}</h3>
            <h4>  {{ $salao->gatografia }}

            <a class="btn btn-light" href="{{ route('saloes.index') }}">Voltar a lista</a>
            <a class="btn btn-warning" href="{{ route('saloes.edit', $salao->id) }}">Editar</a>

            <form method="POST" action="{{ route('saloes.destroy', $salao->id) }}">
                @csrf
                @method('DELETE')

                <input type="submit" value="Excluir Salao" class="btn btn-danger">
            </form>
        </div>
    </body>
</html>
