@extends('layouts.app')

@section('title', 'Accueil')

@section('content')

    <img src="{{asset('images/replay-2.0.png')}}" alt="Replay la seconde main du jeu" id="logo-homepage">

    <div class="bg-red" id="avertissment-accueil">
        <p class="font-white font-14 font-roboto font-medium" id="p-avertissment">
            Achetez et revendez vos jeux de société en toute simplicité : petits prix pour les passionnés,
            zéro tracas pour les vendeurs.
        </p>
    </div>

    <h1 class="font-audiowide text-center font-21">NOS MEILLEURES VENTES</h1>

    <div id="img-ventes-conteiner">
        <img src="{{asset('images/crack-list-jeu.jpg')}}" class="img-ventes" alt="crack list photo">
        <img src="{{asset('images/skyjo.webp')}}" class="img-ventes" alt="skyjo jeu photo">
        <img src="{{asset('images/code-names.jpg')}}" class="img-ventes" alt="code names jeu photo">
        <img src="{{asset('images/wazabi.webp')}}" class="img-ventes" alt="wazabi jeu photo">
    </div>

    <div class="btn-container">
        <a href="/catalogue">
            <button class="btn-primary font-14">Voir tous les jeux</button>
        </a>

    </div>

    <div class="statistic-conteiner">
        <div class="rectangle-flex">
            <img src="{{asset('images/brain.png')}}" alt="Image 1" class="card-img">
            <div class="card-text">
                <p class="font-roboto font-14 font-dark-red font-medium">99% des vendeurs qui utilisent notre service
                    sont satisfaits</p>
            </div>
        </div>

        <div class="rectangle-flex">
            <img src="{{asset('images/roblox-face.png')}}" alt="Image 2" class="card-img">
            <div class="card-text">
                <p class="font-roboto font-14 font-dark-red font-medium">98% de nos utilisateurs affirment avoir trouvé
                    le jeu qu’ils cherchaient</p>
            </div>
        </div>
    </div>

    <div class="btn-container">
        <a href="/catalogue">
            <button class="btn-primary font-14">Voir tous les jeux</button>
        </a>

    </div>
@endsection
