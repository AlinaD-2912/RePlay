@extends('layouts.app')

@section('title', 'Accueil')

@section('content')

    <img src="{{asset('images/replay-2.1.png')}}" alt="Replay la seconde main du jeu" id="logo-homepage">

    <div class="bg-red" id="avertissment-accueil">
        <p class="font-white font-16 font-roboto font-medium" id="p-avertissment">
            Achetez et revendez vos jeux de société en toute simplicité : petits prix pour les passionnés,
            zéro tracas pour les vendeurs.
        </p>
    </div>

    <div class="vente-jeu-conteiner">
        <img src="{{asset('images/quote.png')}}" alt="quote mark" id="img-quote">
        <p class="font-dark-red font-16 mg-tp-15">Chez Replay, on croit qu’un jeu ne devrait jamais dormir sur une étagère. C’est pourquoi on a créé une plateforme qui redonne vie à vos jeux de société en les faisant passer de main en main, sans effort. Vendre, c’est aussi simple qu’un envoi gratuit et un suivi en ligne, pendant qu’on s’occupe de tout. Acheter, c’est un plaisir rapide, avec une navigation claire, des filtres pratiques et un compte où tout est centralisé — favoris, historique, et même la possibilité de vendre à votre tour. Parce que rejouer, c’est partager.</p>

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

    <div class="statistic-conteiner mg-tp-80">
        <div class="rectangle-flex">
            <img src="{{asset('images/brain.png')}}" alt="Image 1" class="card-img">
            <div class="card-text">
                <p class="font-roboto font-16 font-dark-red font-medium">99% des vendeurs qui utilisent notre service
                    sont satisfaits</p>
            </div>
        </div>

        <div class="rectangle-flex">
            <img src="{{asset('images/roblox-face.png')}}" alt="Image 2" class="card-img">
            <div class="card-text">
                <p class="font-roboto font-16 font-dark-red font-medium">98% de nos utilisateurs affirment avoir trouvé
                    le jeu qu’ils cherchaient</p>
            </div>
        </div>
    </div>

    <div class="btn-container">
        <a href="/apropos">
            <button class="btn-primary font-14">Voir à propos</button>
        </a>

    </div>

    <div class="vente-jeu-conteiner">
        <h2 class="font-dark-red font-21 mg-tp-80">Comment ça marche ?</h2>
        <ol class="font-dark-red font-16 mg-tp-15">
            <li>
                Demande d’estimation
                <p><span class="font-16 font-red">Remplissez un formulaire rapide pour estimer la valeur de votre jeu.</span></p>
            </li>
            <li>
              Envoi gratuit
                <p><span class="font-16 font-red">Recevez un bon de livraison prépayé pour nous envoyer le jeu sans frais.</span></p>
            </li>
            <li>
               On s’occupe du reste
                <p><span class="font-16 font-red">Nous créons l’annonce, gérons les échanges, négocions avec les acheteurs et assurons la vente.</span></p>
            </li>
            <li>
                Suivi en temps réel
                <p><span class="font-16 font-red">Depuis votre espace personnel, suivez l’avancement de la vente de vos jeux en toute transparence.</span></p>
            </li>
        </ol>
    </div>

    <div class="vente-jeu-conteiner">
        <h2 class="font-dark-red font-21 mg-tp-15">Pourquoi choisir Replay ?</h2>
        <ul class="font-dark-red font-16 mg-tp-15">
            <li>
                Zéro stress :
                <span class="font-16 font-red">plus besoin de gérer les petites annonces, les messages ou les négociations.</span>
            </li>
            <li>
                Transparence :
                <span class="font-1616 font-red">vous suivez vos ventes à tout moment depuis votre profil.</span>
            </li>
            <li>
                Écologique :
                <span class="font-16 font-red"> le marché de l’occasion donne une seconde vie à vos jeux.</span>
            </li>
            <li>
                Communautaire :

                <span class="font-16 font-red">here some texte vos jeux trouvent une nouvelle famille passionnée. est en plus</span>

            </li>
        </ul>
    </div>


@endsection
