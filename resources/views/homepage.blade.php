<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accuiel</title>
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

@include('header')

<img src="{{asset('images/replay-homepage.png')}}" alt="Replay la seconde main du jeu" id="logo-homepage">

<div class="bg-red" id="avertissment-accueil">
    <p class="font-white font-16 font-roboto font-medium" id="p-avertissment">
        Achetez et revendez vos jeux de société en toute simplicité : petits prix pour les passionnés,
        zéro tracas pour les vendeurs.
    </p>
</div>

<h1 class="font-audiowide text-center">NOS MEILLEURES VENTES</h1>

<div id="img-ventes-conteiner">
    <img src="{{asset('images/crack-list-jeu.jpg')}}" class="img-ventes" alt="crack list photo">
    <img src="{{asset('images/skyjo.webp')}}" class="img-ventes">
    <img src="{{asset('images/code-names.jpg')}}" class="img-ventes">
    <img src="{{asset('images/wazabi.webp')}}" class="img-ventes">
</div>

<div class="btn-container">
    <button class="btn-jeux">Voir tous les jeux</button>
</div>

<div class="statistic-conteiner">
    <div class="rectangle-flex">
        <img src="{{asset('images/brain.png')}}" alt="Image 1" class="card-img">
        <div class="card-text">
            <p class="font-roboto font-16 font-dark-red font-medium">99% des vendeurs qui utilisent notre service sont satisfaits</p>
        </div>
    </div>

    <div class="rectangle-flex">
        <img src="{{asset('images/roblox-face.png')}}" alt="Image 2" class="card-img">
        <div class="card-text">
            <p class="font-roboto font-16 font-dark-red font-medium">98% de nos utilisateurs affirment avoir trouvé le jeu qu’ils cherchaient</p>
        </div>
    </div>
</div>

<div class="btn-container">
    <button class="btn-jeux">Voir tous les jeux</button>
</div>


@include('footer')
</body>
</html>
