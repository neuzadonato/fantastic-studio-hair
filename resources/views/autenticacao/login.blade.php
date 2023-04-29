@extends('templates.layout')

@section('conteudo')
    <section class="ticket-section section-padding">
        <div class="section-overlay"></div>

        <div class="container">
            <form class="custom-form contact-form mb-5 mb-lg-0" action="#" method="post"
            role="form">
            <div class="contact-form-body">
                <div class="row">


<div class="col-lg-6 col-md-6 col-12">
                        <input type="usuario" name="usuario"  class="form-control"  placeholder="Usuário" value="<?php if(isset($dados['usuario'])){ echo $dados['usuario']; } ?>">

                    </div>
<div class="col-lg-6 col-md-6 col-12">
                            <input type="password" name="senha_usuario"  class="form-control"  placeholder="Senha" value="<?php if(isset($dados['senha_usuario'])){ echo $dados['senha_usuario']; } ?>"> </div>

</div>






                    <button type="submit" class="form-control"  value="Acessar" name="SendLogin"  >Logar    </button>
                </div>
        </div>
    </section>
@endsection
