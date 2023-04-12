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
                    <label>Razão Social</label>
                    <input type="text" name="razao_social" class="form-control" value="{{ $salao->razao_social }}">
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
                    <label>Telefone</label>
                    <input type="text" name="telefone" class="form-control" value="{{ $salao->telefone }}">
                </div>

                <div class="mb-3">
                    <label>Salaografia</label>
                    <input type="text" name="salaogragrafia" class="form-control" value="{{ $salao->salaografia }}">
                </div>

                <div class="mb-3">
                    <label>Foto</label>
                    <input type="image" name="foto" class="form-control" value="{{ $salao->foto }}">
                </div>

                <div class="mb-3">
                    <label>Senha</label>
                    <input type="text" name="senha" class="form-control" value="{{ $salao->senha }}">
                </div>

                <div class="mb-3">
                    <label>Confirmar Senha</label>
                    <input type="text" name="confirmar_senha" class="form-control" value="{{ $salao->confirmar_senha }}">
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
