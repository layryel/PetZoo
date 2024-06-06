<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>ZooPet</title>
</head>
<body>
    @include('layouts.navbar')

    <section class="home" id="home">
        <div class="content">
            <h3>Cuidados médicos, esteticos <span>e muito carinho para dar!!</span></h3>
            <p>Traga seu pet para a ZooPet e comprove dos melhores cuidados.</p>
        </div>
        <div class="image">
            <img src="{{ asset('assets/imgcinco.png')}}" alt="">
        </div>
        <div class="custom-shape-divider-bottom-1684324473">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
            </svg>
        </div>
    </section>

    <section class="menu" id="menu">
        <h1 class="heading"><span>Menu</span></h1>
        <div class="box-container">
            <div class="box">
                <p>Os animais exoticos precisam de cuidados especiais, e aqui na ZooPet temos os melhores produtos e profissionais para isso!</p>
                <p>Pets como repteis, anfibios e peixes precisam de cuidado redobrado e produtos especificos, como aquarios, respiradores...</p>
                <p>Nossa Ala medica é altamente equipada para atender o seu pet da melhor forma!</p>
                <p>A Zoopet tambem tem uma linha vasta de produtos licenciados para os cuidados em casa, veja mais!</p>
                <img src="{{ asset('assets/imgum.png')}}" alt="">
            </div>
            <div class="box">
                <img src="{{ asset('assets/imgdois.png')}}" alt="">
            </div>
            <div class="box">
                <p>Animais exóticos são espécies que não são nativas do Brasil e incluem uma variedade de répteis, aves, mamíferos e anfíbios.</p>
                <p>Ter esses pets requer cuidados específicos, como habitats adequados, alimentação especial e atenção veterinária especializada.</p>
                <p>No Brasil, a posse de animais exóticos é regulamentada pelo IBAMA (Instituto Brasileiro do Meio Ambiente e dos Recursos Naturais Renováveis), que controla a importação, criação e venda desses animais para prevenir tráfico ilegal e garantir o bem-estar dos animais.</p>
                <p>Para manter um pet exótico legalmente, é necessário adquirir o animal de criadouros registrados e obter a documentação apropriada, assegurando assim que a posse e o comércio estejam em conformidade com a legislação ambiental.</p>
            </div>
        </div>
    </section>

    @include('layouts.footer')
</body>
</html>
