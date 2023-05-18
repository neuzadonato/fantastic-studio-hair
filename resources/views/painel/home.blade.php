@extends('templates.layout')

@section('conteudo')
    <section class="ticket-section section-padding">
        <div class="section-overlay"></div>

        <div class="container">
            <h1 class="text-center text-white "> PAINEL DO ADMINISTRADOR!</h1>

            <style>
                .container1 {
                    max-width: 250px;
                    margin: 0 auto;
                    padding: 20px;
                    background-color: #EE5007;
                    border-radius: 25px;
                    margin-top: 100px;
                }
            </style>
                <div class="container1">
            <nav>
                <a href="{{ route('saloes.create') }}">Cadastrar  Salão</a>

            </nav>
        <nav>  <a href="{{ route('saloes.index') }}">Meus  Salões</a> </nav>

        </div>
    </section>
@endsection
