




        @extends('templates.layout')

        @section('conteudo')
            <section class="ticket-section section-padding">
                <div class="section-overlay"></div>

                <div class="container">


                    <title>Lista de Saloes</title>
                </head>
                <body>
                    <div class="container">
                        <h1>Lista de Saloes</h1>

                        <a class="btn btn-outline-success my-2" href="{{ route('saloes.create') }}">Novo Salao</a>

                        <table class="table table-hover table-bordered table-primary">
                            <tr class="table-dark">
                                <th>nome</th>
                                <th>razao_social</th>
                                <th>email</th>
                                <th>endereco</th>
                                <th>telefone</th>
                                <th>salaografia</th>
                                <th>foto</th>
                                <th>senha</th>
                                <th>confirmar_senha</th>
                                <th></th>
                            </tr>

                            @foreach ($saloes as $salao)
                                <tr>
                                    <td>{{ $salao->nome }}</td>
                                    <td>{{ $salao->razao_social }}</td>
                                    <td>{{ $salao->email }}</td>
                                    <td>{{ $salao->endereco }}</td>
                                    <td>{{ $salao->telefone }}</td>
                                    <td>{{ $salao->salaogragfia }}</td>
                                    <td>{{ $salao->foto }}</td>
                                    <td>{{ $salao->senha }}</td>
                                    <td>{{ $salao->confirmar_senha }}</td>

                                    <td>
                                        <a class="link" href="{{ route('saloes.show', $salao->id) }}">
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












        <title>Lista de Saloes</title>
    </head>
    <body>
        <div class="container">
            <h1>Lista de Saloes</h1>

            <a class="btn btn-outline-success my-2" href="{{ route('saloes.create') }}">Novo Salao</a>

            <table class="table table-hover table-bordered table-primary">
                <tr class="table-dark">
                    <th>nome</th>
                    <th>razao_social</th>
                    <th>email</th>
                    <th>endereco</th>
                    <th>telefone</th>
                    <th>salaografia</th>
                    <th>foto</th>
                    <th>senha</th>
                    <th>confirmar_senha</th>
                    <th></th>
                </tr>

                @foreach ($saloes as $salao)
                    <tr>
                        <td>{{ $salao->nome }}</td>
                        <td>{{ $salao->razao_social }}</td>
                        <td>{{ $salao->email }}</td>
                        <td>{{ $salao->endereco }}</td>
                        <td>{{ $salao->telefone }}</td>
                        <td>{{ $salao->salaogragfia }}</td>
                        <td>{{ $salao->foto }}</td>
                        <td>{{ $salao->senha }}</td>
                        <td>{{ $salao->confirmar_senha }}</td>

                        <td>
                            <a class="link" href="{{ route('saloes.show', $salao->id) }}">
                                Ver
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>


    </body>
</html>

