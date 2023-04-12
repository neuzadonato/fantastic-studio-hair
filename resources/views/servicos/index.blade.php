<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Lista de Serviços</title>
    </head>
    <body>
        <div class="container">
            <h1>Lista de Serviços</h1>

            <a class="btn btn-outline-success my-2" href="{{ route('servicos.create') }}">Novo Serviços</a>

            <table class="table table-hover table-bordered table-primary">
                <tr class="table-dark">
                    <th>Titulo</th>
                    <th>Valor</th>
                    <th>Descrição</th>
                    <th>Barba</th>
                    <th>Cabelo</th>
                    <th>SPA</th>
                    <th>Manicure e Pédicure</th>
                    <th>Fotos</th>
                </tr>

                @foreach ($servicos as $servico)
                    <tr>
                        <td>{{ $servico->titulo }}</td>
                        <td>{{ $servico->valor }}</td>
                        <td>{{ $servico->descricao }}</td>
                        <td>{{ $servico->barba }}</td>
                        <td>{{ $servico->cabelo }}</td>
                        <td>{{ $servico->spa }}</td>
                        <td>{{ $servico->manicurepedicure }}</td>
                        <td>{{ $servico->fotos }}</td>
                        <td>
                            <a class="link" href="{{ route('servicos.show', $servicos->id) }}">
                                Ver
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>


    </body>
</html>
