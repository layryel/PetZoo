<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Contatos</title>
</head>
<body>
    @include('layouts.navbar')

    <section class="contatos" id="contatos">
        <h1 class="heading"> <span>Comtatos</span></h1>
        <div class="icons-container">
            <div class="icons">
                <h3>Atendimento:</h3>
                <p>Segunda á sexta: 08:00 ás 21:00</p>
                <p>Sábados: 09:00 ás 12:00</p>
            </div>
            <div class="icons">
                <h3>email:</h3>
                <p>zoo@pet.com</p>
            </div>
            <div class="icons">
                <h3>Telefone:</h3>
                <p>11 8002-8922</p>
                <p>11 98002-8922</p>
            </div>
        </div>

        <div class="row">
            <div class="image">
                <img src="{{ asset('assets/imgtres.png')}}" alt="Imagem de Contato">
            </div>
            <div class="form-container">
                <form action="/enviar-formulario" method="POST">
                    @csrf
                    <h3>Formulário</h3>
                    <div class="inputBox">
                        <input id="nome" name="nome" type="text" placeholder="Seu Nome">
                        <input id="telefone" name="telefone" type="number" placeholder="Telefone">
                    </div>
                    <div class="inputBox">
                        <input id="endereco" name="endereco" type="text" placeholder="Endereço">
                        <input id="sexo" name="sexo" type="text" placeholder="Sexo">
                    </div>
                    <textarea id="mensagem" name="mensagem" placeholder="Digite aqui:" cols="30" rows="10"></textarea>
                    <input id="btnEnviar" type="submit" value="Enviar" class="btn btn-marrom">
                    <div id="resultado"></div>
                </form>
            </div>
        </div>
</section>

    @include('layouts.footer')
</body>
</html>


