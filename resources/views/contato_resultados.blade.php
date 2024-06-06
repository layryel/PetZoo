<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Resultados</title>
</head>
<body>
    @include('layouts.navbar')

        <br><br>
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <h1 class="display-6">Dados enviados</h1>
                    <br>
                    <strong>Nome:</strong> {{ $data['nome'] }}<br>
                    <strong>Telefone:</strong> {{ $data['telefone'] }}<br>
                    <strong>Endereço:</strong> {{ $data['endereco'] }}<br>
                    <strong>Sexo:</strong> {{ $data['sexo'] }}<br><br>

                    <a href="/" class="btn btn-dark">Voltar ao Início</a>
                    &nbsp;
                    <a href="/contato" class="btn btn-secondary">Voltar</a>
                </div>
            </div>
        </div>
        <br><br>

    @include('layouts.footer')
</body>
</html>

