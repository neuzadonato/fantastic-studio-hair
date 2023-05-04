@extends('templates.layout')

@section('conteudo')
    <section class="ticket-section section-padding">
        <div class="section-overlay"></div>

        <div class="container">
            <form class="custom-form contact-form mb-5 mb-lg-0" action="{{ route('login.store') }}" method="post" role="form">
                @csrf

                <div class="contact-form-body">
                    <h1 class="text-white text-center">Bem vindo ao Fantastic Hair Studio!</h1>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <input type="usuario" name="usuario" class="form-control" placeholder="Usuário">

                            @error('usuario')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-lg-6 col-md-6 col-12">
                            <input type="password" name="senha_usuario" class="form-control" placeholder="Senha">

                            @error('senha_usuario')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <button type="submit" class="form-control" value="Acessar" name="SendLogin">Logar </button>
                </div>
        </div>
    </section>
@endsection
