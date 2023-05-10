
@extends('templates.layout')

@section('conteudo')
    <section class="ticket-section section-padding">
        <div class="section-overlay"></div>

        <div class="container">
            <title >Lista de Usuários </title>
    </head>
    <body>
        <div class="container">
            <h1 class="text-white">Lista de Usuários</h1>

            <a class="btn btn-outline-success my-2" href="{{ route('usuarios.create') }}">Novo usuario</a>

            <table class="table table-hover table-bordered table-primary">
                <tr class="table-dark">
                    <th >Nome</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Endereço</th>
                    <th>Salão</th>
                </tr>

                @foreach ($usuario as $usuario)
                    <tr>
                        <td>{{ $usuario->nome }}</td>
                        <td>{{ $usuario->telefone }}</td>
                        <td>{{ $usuario->email }}</td>
                        <td>{{ $usuario->endereco }}</td>
                        <td>{{ $usuario->salao }}</td>
                        <td>
                            <a class="link" href="{{ route('usuarios.show', $usuario->id) }}">
                                Ver
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>


    </body>
</html>
        </div>
    </section>
@endsection

