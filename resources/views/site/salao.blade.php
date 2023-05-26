@extends('templates.layout')

@section('conteudo')
    <section class="about-section section-padding" id="section_2">
        <div class="container">
            <h1 class="text-white">{{ $salao->nome }}</h1>
        </div>
        <div class="container2">
            <h1>Lista de Avaliações</h1>

            <a class="btn btn-outline-success my-2" href="{{ route('avaliacoes.create') }}">Nova Avaliação</a>

            <table class="table table-hover table-bordered table-primary">
                <tr class="table-dark">
                    <th>Nome</th>
                    <th>Nota</th>
                    <th>Mensagem</th>
                    <th></th>
                </tr>

                @foreach ($salao->avaliacoes as $avaliacao)
                    <tr>
                        <td>{{ $avaliacao->nome }}</td>
                        <td>{{ $avaliacao->nota }}</td>
                        <td>{{ $avaliacao->mensagem }}</td>
                        <td>
                            <a class="link" href="{{ route('avaliacoes.show', $avaliacao->id) }}">
                                Ver
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>

        <style>
    .container2 {
    max-width: 900px;
    margin: 0 auto;
    padding: 20px;
    background-color: white;
    border-radius: 10px;
    margin-top: 100px;
}
    </style>


    </body>
</head>
        <style>
            .container1 {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            margin-top: 100px;
        }
        h1 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 10px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button {
            background-color: orange;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: darkorange;
        }
        </style>

        <div class="container">
            <form action="AVALIACAO"></form>
            <div class="container1">
                <h1>Deixe sua Avaliação</h1>
                <form method="POST" action="{{ route('avaliacoes.store') }}">
                    @csrf
                    <input type="hidden" name="salao_id" value="{{ $salao->id }}">

                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" class=form-control placeholder="Digite seu nome">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class=form-control placeholder="Digite seu email">
                    </div>
                    <div class="form-group">
                        <label for="nota">Nota</label>
                        <input type="number" name="nota" min="0" max="10" class=form-control placeholder="Digite sua nota">
                    </div>
                    <div class="form-group">
                        <label for="mensagem">Mensagem</label>
                        <textarea name="mensagem" rows="4" class=form-control placeholder="Digite sua mensagem"></textarea>
                    </div>
                    <div>
                        <input type="submit" value="Salvar Avaliação" class="btn btn-primary">
                    </div>
                </form>
            </div>
            <body>

    </section>
@endsection
