@extends('layouts.app')

@section('title', 'A propos')

@section('content')

<h1 class="font-audiowide text-center text-to-upper font-21">A propos</h1>
<div class="image-container">
    <img src="{{asset('images/team.jpg')}}" alt="photo d'equipe" id="team-img">
</div>


<div class="a-propos-conteiner">
    <img src="{{asset('images/history-of-company.avif')}}" alt="" class="img-apropos">
    <div>
        <h2 class="font-dark-red font-21">Notre histoire</h2>
        <p class="font-red font-14">L'idée de Replay est née autour d'une table de jeux,
            là où les meilleurs souvenirs prennent vie... et parfois
            où s'accumulent les boîtes qui ne sortent plus du placard.
            C’est pourquoi nous avons lancé Replay : une plateforme simple,
            rapide et éthique pour donner une seconde vie à vos jeux. Ici,
            les vendeurs n’ont qu’un seul formulaire à remplir. </p>
    </div>
</div>

<div class="a-propos-conteiner">
    <div>
        <h2 class="font-dark-red font-21">Notre mission</h2>
        <p class="font-red font-14">Chez Replay, notre mission est de faciliter la revente de jeux de société pour encourager une consommation plus responsable, circulaire et ludique !

            </p>
        <button class="btn-primary font-14">Estimer votre jeu</button>
    </div>
    <img src="{{asset('images/our-missions.png')}}" alt="" class="img-apropos">
</div>

<h2 class="font-dark-red text-center font-21 mg-tp-80">Programme qualité</h2>
<div class="a-propos-conteiner font-red font-14">
    <p>Chaque jeu mis en vente sur Replay est vérifié avec soin par notre équipe. Grâce à notre Programme Qualité, nous vous garantissons des jeux complets, fonctionnels et classés selon leur état général.

        Nous utilisons 3 niveaux de qualité pour vous aider à choisir (ou vendre) en toute transparence :
    </p>
</div>


<div class="qualite-conteiner">
    <div class="etat-conteiner font-14">
        <h3>Très bon état</h3>
        <p>Presque comme neuf </p>
        <ul>
            <li>
                Boîte en excellent état, peu ou pas de traces d’usure
            </li>
            <li>
                Matériel complet, sans détérioration
            </li>
            <li>
                Règle du jeu présente
            </li>
            <li>
                Idéal pour offrir ou pour les collectionneurs exigeants
            </li>
        </ul>
    </div>
    <div class="etat-conteiner font-14">
        <h3>Bon état</h3>
        <p>Jeu en bon état général</p>
        <ul>
            <li>
                Boîte avec quelques marques ou coins usés
            </li>
            <li>
                Matériel complet et en bon état
            </li>
            <li>
                Règle du jeu fournie (originale ou impression claire)
            </li>
            <li>
                Parfait pour jouer sans se ruiner
            </li>
        </ul>
    </div>
    <div class="etat-conteiner font-14">
        <h3>État correct</h3>
        <p>Jeu bien joué </p>
        <ul>
            <li>
                Boîte abîmée, rayures visibles ou scotchée
            </li>
            <li>
                Quelques éléments remplacés ou usés
            </li>
            <li>
                Règle disponible (imprimée si manquante)
            </li>
            <li>
                Idéal pour tester un jeu à petit prix ou compléter une collection
            </li>
        </ul>
    </div>
</div>
@endsection
