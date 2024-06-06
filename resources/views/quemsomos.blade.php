<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Quem Somos?</title>
</head>
<body>
    @include('layouts.navbar')

    <section class="about" id="about">
        <h1 class="heading"> <span>Quem somos?</span></h1>
        <div class="row">
            <div class="image">
                <img src="{{ asset('assets/imgquatro.png')}}" alt="">
            </div>
            <div class="content">
                <h3>ZooPet</h3>
                <p>Olá e bem-vindo à ZooPet, o lugar perfeito para os amantes de animais exóticos!</p>
                <p>Aqui na ZooPet, entendemos a paixão e o cuidado especial que seus animais únicos exigem.</p>
                <p>Nossa equipe dedicada está sempre pronta para oferecer o melhor em produtos, serviços e orientação para garantir que seus companheiros exóticos tenham uma vida saudável e feliz.</p>
                <p>Seja bem-vindo e descubra tudo o que temos a oferecer para fazer do seu pet um verdadeiro rei da selva!</p>
            </div>
        </div>
    </section>

    @include('layouts.footer')
</body>
</html>
