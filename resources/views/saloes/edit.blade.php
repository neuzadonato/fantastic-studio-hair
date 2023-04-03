<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Salao #{{ $salao->id }}</title>
    </head>
    <body>
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
                    <label>Telefone</label>
                    <input type="text" name="telefone" class="form-control" value="{{ $salao->telefone }}">
                </div>

                <div class="mb-3">
                    <label>Email</label>
                    <input type="number" name="email" class="form-control" value="{{ $salao->email }}">
                </div>

                <div class="mb-3">
                    <label>Endereço</label>
                    <input type="text" name="endereco" class="form-control" value="{{ $salao->endereco }}">
                </div>

                <div class="mb-3">
                    <label>Salão</label>
                    <textarea name="salao" id="" rows="5" class="form-control">{{ $salao->salao }}</textarea>
                </div>

                <div>
                    <input type="submit" value="Atualizar Salao" class="btn btn-primary">
                </div>
            </form>
        </div>
    </body>
</html>
