@extends('templates.layout')

@section('conteudo')
    <section class="ticket-section section-padding">
        <div class="section-overlay"></div>

        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-10 mx-auto">
                    <form class="custom-form ticket-form mb-5 mb-lg-0" action="#" method="post" role="form">
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
                                <div class="col-lg-15 col-md-15 col-12">
                                    <input type="text" name="ticket-form-name" id="ticket-form-name" class="form-control"
                                        placeholder="Nome" required>
                                </div>

                                <div class="col-lg-15 col-md-15 col-12">
                                    <input type="text" name="ticket-form-razao_social" id="ticket-form-razao_social"
                                        class="form-control" placeholder="Razão Social" required>
                                </div>

                                <div class="col-lg-15 col-md-15 col-12">
                                    <input type="email" name="ticket-form-email" id="ticket-form-email"
                                        pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email" required>
                                </div>
                            </div>

                            <div class="col-lg-15 col-md-15 col-12">
                                <input type="text" name="ticket-form-endereco" id="ticket-form-endereco"
                                   class="form-control" placeholder="Endereço" required>
                            </div>

                            <div class="col-lg-15 col-md-15 col-12">
                                <input type="number" name="ticket-form-telefone" id="ticket-form-telefone" class="form-control"
                                    placeholder="Telefone" required>
                            </div>

                            <div class="col-lg-15 col-md-15 col-12">
                                <input type="text" name="ticket-form-salaografia" id="ticket-form-salaografia"
                                    class="form-control" placeholder="Salaografia" required>
                            </div>

                            <div class="col-lg-15 col-md-15 col-12">
                                <input type="image" name="ticket-form-foto" id="ticket-form-foto"
                                    class="form-control" placeholder="Foto" required>
                            </div>

                            <div class="col-lg-15 col-md-15 col-12">
                                <input type="password" name="senha" id="senha" class="form-control"
                                    placeholder="Senha" required>
                            </div>

                            <div class="col-lg-15 col-md-15 col-12">
                                <input type="password" name="" id="ConfirmarSenha" class="form-control"
                                    placeholder="Confirmar Senha" required>
                            </div>

                            <div class="col-lg-4 col-md-10 col-8 mx-auto">
                                <button type="submit" class="form-control">Salvar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </section>
@endsection
