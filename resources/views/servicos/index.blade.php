@extends('templates.layout')

        @section('conteudo')
            <section class="ticket-section section-padding">
                <div class="section-overlay"></div>

                <div class="container">
                        <h1 class="text-white">Lista de Serviços</h1>

            <a class="btn btn-outline-success my-2" href="{{ route('servicos.create') }}">Novo Serviços</a>

            <table class="table table-hover table-bordered table-primary">
                <tr class="table-dark">
                    <th>Titulo</th>
                    <th>Descrição</th>

                </tr>

                @foreach ($servicos as $servico)
                    <tr>
                        <td>{{ $servico->titulo }}</td>
                        <td>{{ $servico->descrição }}</td>
                        <td>
                            <a class="link" href="{{ route('servicos.show', $servicos->id) }}">
                                Ver
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        @endsection
