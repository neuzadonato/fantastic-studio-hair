<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Serviços #{{ $servico->id }}</title>
    </head>
    <body>
        <div class="container">
            <h1>Edição dos serviços {{ $servico->id }}</h1>

            <form method="POST" action="{{ route('servicos.update', $servico->id) }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label>Titulo</label>
                    <input type="text" name="titulo" class="form-control" value="{{ $servico->descricao }}">
                </div>

                <div class="mb-3">
                    <label>Descrição</label>
                    <input type="text" name="descricao" class="form-control" value="{{ $servico->descricao }}">
                </div>
                <div>
                    <input type="submit" value="Atualizar Servicos" class="btn btn-primary">
                </div>
            </form>
        </div>
    </body>
</html>
