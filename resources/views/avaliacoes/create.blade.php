<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Cadastro de Avaliações</title>
    </head>
    <style>
        body {
            background-color: orange;
            color: rgb(20, 12, 12);
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            border-radius: 5px;
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
</head>
<body>
    <div class="container">
        <h1>Nova Avaliação</h1>
        <form method="POST" action="{{ route('avaliacoes.store') }}">
            @csrf

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
</body>
</html>
