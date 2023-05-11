@extends('templates.layout')

@section('conteudo')
    <section class="about-section section-padding" id="section_2">
        <div class="container">
            <h1 class="text-white">{{ $salao->nome }}</h1>
        </div>

        <div class="container">
            <form action="AVALIACAO"></form>
        </div>
    </section>
@endsection
