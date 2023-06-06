@extends('templates.layout')

        @section('conteudo')
        <section class="about-section section-padding" id="section_3">
                <div class="section-overlay"></div>

                <div class="container">
                        <h1 class="text-white">Lista de Serviços</h1>

            <a class="btn btn-outline-success my-2" href="{{ route('servicos.create') }}">Novo Serviços</a>

            <table class="table table-hover table-bordered table-primary">
                <tr class="table-dark">
                    <th>Titulo</th>
                    <th>Descrição</th>
                    <th></th>
                </tr>

                @foreach ($servicos as $servico)
                    <tr>
                        <td>{{ $servico->titulo }}</td>
                        <td>{{ $servico->descricao }}</td>
                        <td>
                            <a class="link" href="{{ route('servicos.show', $servico->id) }}">
                                Ver
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        @endsection
