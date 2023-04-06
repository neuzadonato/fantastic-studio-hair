<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Lista de Avaliações</title>
    </head>
    <body>
        <div class="container">
            <h1>Lista de Avaliações</h1>

            <a class="btn btn-outline-success my-2" href="{{ route('avaliacoes.create') }}">Nova Avaliação</a>

            <table class="table table-hover table-bordered table-primary">
                <tr class="table-dark">
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Nota</th>
                    <th>Mensagem</th>
                    <th></th>
                </tr>

                @foreach ($Avaliacoes as $avaliacao)
                    <tr>
                        <td>{{ $avaliacao->nome }}</td>
                        <td>{{ $avaliacao->email }}</td>
                        <td>{{ $avaliacao->nota }}</td>
                        <td>{{ $avaliacao->mensagem }}</td>
                        <td>
                            <a class="link" href="{{ route('avaliacoes.show', $avaliacao->id) }}">
                                Ver
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>


    </body>
</html>
