@extends('templates.layout')

@section('conteudo')
<section class="about-section section-padding" id="section_2">
        <div class="section-overlay"></div>

        <div class="container">
            <form class="custom-form contact-form mb-5 mb-lg-0" action="{{ route('login.store') }}" method="post" role="form">
                @csrf

                <h1 class="text-white text-center">Fantastic Hair Studio!</h1>

                <div class="contact-form-body w-50 mx-auto">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6">
                            <input type="usuario" name="usuario" class="form-control" placeholder="Usuário">

                            @error('usuario')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12 col-sm-12 col-md-6">
                            <input type="password" name="senha_usuario" class="form-control" placeholder="Senha">

                            @error('senha_usuario')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="form-control" value="Acessar" name="SendLogin">Logar </button>
                    </div>
                </div>
        </div>
    </section>
@endsection
