@extends('templates.layout')

@section('conteudo')
    <section class="ticket-section section-padding">
        <div class="section-overlay"></div>

        <div class="container">
            <h1 class="text-center text-white">Bem vindo ao painel administrador!</h1>

            <nav>
                <a href="{{ route('saloes.create') }}">Cadastrar Salão</a>
                <a href="{{ route('saloes.index') }}">Meus Salões</a>
            </nav>
        </div>
    </section>
@endsection
