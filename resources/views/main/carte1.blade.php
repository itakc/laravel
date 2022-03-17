<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>carte</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="normalize.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
@include('main/header')

    <header>
        <h1>Nos petits dejeuners, nos dejeuners, nos diners</h1>
        <p>Venez déguster et vous regaler des magnifiques plats de Tata Mama</p>
        <p>La cuisine de Mama une experience inoubliable</p>
    </header>
    <main>
        <section class="carousel">
         <ul class="carousel-items">
         <li class="carousel-item">
         <div class="card">
         <h2 class="card-title">Pilé de Pomme de Terre </h2>
         <img src="{{ asset('img/Cameroun-plats.png') }}"/>
         <div class="card-content">
                <p>Ecrasé de pomme de terre accompagné d'haricots rouges
                   delicieusement mariné dans de l"huile d'arachide aux oignons
                   Poulet Fumé sous une pluie de piment en poudre
                   ( fort ou doux selon vos goûts ).
                </p>
                </div>
                </div>
                </li>
                <li class="carousel-item">
                    <div class="card">
                        <h2 class="card-title">Poulet Directeur Général</h2>
                        <img src="{{ asset('img/Cameroun-plat2.jpg') }}"/>
                        <div class="card-content">
                            <p>Cuisse de poulet fermier accompagné d'un riz long parfumé 
                                aux epices du soleil 
                                Il y'à des haricots, des carottes, des poivrons, des oignons, de l'ail 
                                le tout delicieusement pimenté HOT</p>
                        </div>
                    </div>
                </li>
                <li class="carousel-item">
                    <div class="card">
                        <h2 class="card-title">N'Dolé Royale</h2>
                        <img src="{{ asset('img/Cameroun-plat3.jpg') }}"/>
                        <div class="card-content">
                            <p>Viandes de boeuf accompagné de crevette royale et d'ecrevisses et 
                                poisson fumé le tout qui a delicieusement mijoté avec des 
                                oignons, ail, piment, arachides et poisson fulé.</p>
                        </div>
                    </div>
                    </li>
                <li class="carousel-item">
                    <div class="card">
                        <h2 class="card-title">N'Dolé Royale</h2>
                        <img src="{{ asset('img/Cameroun-plat3.jpg') }}"/>
                        <div class="card-content">
                            <p>Viandes de boeuf accompagné de crevette royale et d'ecrevisses et 
                                poisson fumé le tout qui a delicieusement mijoté avec des 
                                oignons, ail, piment, arachides et poisson fulé.</p>
                        </div>
                    </div>
                    </li>
                <li class="carousel-item">
                    <div class="card">
                        <h2 class="card-title">N'Dolé Royale</h2>
                        <img src="{{ asset('img/Cameroun-plat3.jpg') }}"/>
                        <div class="card-content">
                            <p>Viandes de boeuf accompagné de crevette royale et d'ecrevisses et 
                                poisson fumé le tout qui a delicieusement mijoté avec des 
                                oignons, ail, piment, arachides et poisson fulé.</p>
                        </div>
                    </div>
                    </li>
                <li class="carousel-item">
                    <div class="card">
                        <h2 class="card-title">N'Dolé Royale</h2>
                        <img src="{{ asset('img/Cameroun-plat3.jpg') }}"/>
                        <div class="card-content">
                            <p>Viandes de boeuf accompagné de crevette royale et d'ecrevisses et 
                                poisson fumé le tout qui a delicieusement mijoté avec des 
                                oignons, ail, piment, arachides et poisson fulé.</p>
                        </div>
                    </div>
            </ul>
        </section>
    </main>
    @include('main/footer')
</body>
</html>