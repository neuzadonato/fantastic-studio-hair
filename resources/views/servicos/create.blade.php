@extends('templates.layout')

@section('conteudo')
    <section class="about-section section-padding" id="section_2">
        <div class="section-overlay"></div>

        <div class="container">
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


        <title class="text-white">Cadastro de servicos</title>
    </head>
    <body>
        <div class="container mb-3">
            <h1 class="text-white">Novo Serviço</h1>

            <form method="POST" action="{{ route('servicos.store') }}">
                @csrf

                <div class="mb-3">
                    <label class="text-white">titulo</label>
                    <input type="text" name="titulo" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="text-white">descrição</label>
                    <input type="text" name="descricao" class="form-control">
                </div>

                <div>
                    <input type="submit" value="Salvar servico" class="btn btn-primary">
                </form>
            </div>
        </body>
    </html>
            </div>
        </section>
    @endsection

