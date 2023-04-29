@extends('templates.layout')

@section('conteudo')
    <section class="ticket-section section-padding">
        <div class="section-overlay"></div>

        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-10 mx-auto">
                    <form class="custom-form ticket-form mb-5 mb-lg-0" action="{{ route('usuarios.store') }}" method="post" role="form">
                        @csrf

                        <h2 class="text-center mb-4">Cadastro</h2>

                        <script>
                            function validarFormulario() {
                                var senha = document.getElementById("senha").value;
                                var confirmarSenha = document.getElementById("confirmarSenha").value;

                                if (senha == "" || confirmarSenha == "") {
                                    alert("Por favor, preencha todos os campos!");
                                    return false;
                                }

                                if (senha != confirmarSenha) {
                                    alert("As senhas não coincidem!");
                                    return false;
                                }

                                if (senha.length < 8) {
                                    alert("A senha deve ter pelo menos 8 caracteres!");
                                    return false;
                                }

                                return true;
                            }
                        </script>

                        <div class="ticket-form-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="text" name="nome" id="nome" class="form-control"
                                        placeholder="Nome" required>

                                        @error('nome')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="email" name="email" id="email"
                                        pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email" required>

                                        @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    </div>


                                <div class="col-lg-12 col-md-12 col-12">
                                    <input type="text" name="endereco" id="endereco"
                                        class="form-control" placeholder="endereco" required>

                                        @error('endereco')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    </div>

                                <div class="col-lg-15 col-md-15 col-12">
                                    <input type="text" name="telefone" id="telefone" class="form-control"
                                        placeholder="Telefone" required>

                                        @error('telefone')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    </div>

                            {{-- <h6>Selecione uma opção:</h6>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-check form-control">
                                        <input class="form-check-input" type="radio" name="TicketForm"
                                            id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Salão Feminino
                                        </label>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-check form-check-radio form-control">
                                        <input class="form-check-input" type="radio" name="TicketForm"
                                            id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Salão Masculino
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-check form-check-radio form-control">
                                        <input class="form-check-input" type="radio" name="TicketForm"
                                            id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Salão Unisex
                                        </label>
                                    </div>
                                </div>
                            </div> --}}

                                <div class="col-6 col-lg-6 col-md-6">
                                    <input type="password" name="senha" id="senha" class="form-control"
                                        placeholder="Senha" required>

                                        @error('senha')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    </div>

                                <div class="col-6 col-lg-6 col-md-6">
                                    <input type="password" name="senha_confirmation" id="ConfirmarSenha" class="form-control"
                                        placeholder="Confirmar Senha" required>

                                        @error('senha_confirmation')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    </div>


                                <div class="col-lg-4 col-md-10 col-8 mx-auto">
                                    <button type="submit" class="form-control">Salvar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </section>
@endsection
