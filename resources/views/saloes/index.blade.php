        @extends('templates.layout')

        @section('conteudo')
            <section class="ticket-section section-padding">
                <div class="section-overlay"></div>

                <div class="container">
                        <h1 class="text-white">Lista de Salões</h1>

                        <a class="btn btn-outline-success my-2" href="{{ route('saloes.create') }}">Novo Salao</a>

                        <table class="table table-hover table-bordered table-primary">
                            <tr class="table-dark">
                                <th>foto</th>
                                <th>nome</th>
                                <th>razao_social</th>
                                <th>email</th>
                                <th>endereco</th>
                                <th>telefone</th>
                                <th>salaografia</th>
                                <th></th>
                            </tr>

                            @foreach ($saloes as $salao)
                                <tr>
                                    <td>{{ $salao->foto }}</td>
                                    <td>{{ $salao->nome }}</td>
                                    <td>{{ $salao->razao_social }}</td>
                                    <td>{{ $salao->email }}</td>
                                    <td>{{ $salao->endereco }}</td>
                                    <td>{{ $salao->telefone }}</td>
                                    <td>{{ $salao->salaografia }}</td>
                                    <td>
                                        <a class="link" href="{{ route('saloes.show', $salao->id) }}">
                                            Ver
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
            </section>
        @endsection


