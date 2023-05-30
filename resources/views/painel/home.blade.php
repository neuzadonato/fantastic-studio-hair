@extends('templates.layout')

@section('conteudo')
   <section class="about-section section-padding" id="section_2">
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

                a {
                    text-align: center;
                    color: white;
                }
            </style>
            <div class="container1">
                <div class="text-center">
                    <nav> <a href="{{ route('saloes.index') }}">Meus Salões</a> </nav>
                    <a href="{{ route('saloes.create') }}">Cadastrar Salão</a>
                </div>
            </div>
    </section>
@endsection
