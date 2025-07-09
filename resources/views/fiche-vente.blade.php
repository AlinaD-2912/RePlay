@extends('layouts.app')

@section('title', 'Catalogue')

@section('content')

<h1 class="font-audiowide text-center text-to-upper">Vente de jeux</h1>


<div class="vente-jeu-conteiner">
    <h2 class="font-dark-red font-21">Le Déroulement</h2>
    <ol class="font-red">
        <li >
            Remplissez un court formulaire sur les jeux que vous souhaitez vendre
        </li>
        <li>
            Nous vous fournissons une estimation du prix de vente, si cela vous convient il vous suffit de valider la vente et de créer un compte ou de vous connecter
        </li>
        <li>
            Une fois la vente validée, nous vous ferons parvenir un bon de livraison par mail et dans votre compte, il vous suffit d’imprimer ce dernier et de déposer vos jeux en point relais. On se charge du reste !
        </li>
    </ol>
    <button class="btn-primary">Vendre mes jeux</button>
</div>



<h2 class="font-dark-red text-center font-21 mg-tp-80">Programme qualité</h2>
<div class="a-propos-conteiner font-red font-16">
    <p>Chaque jeu mis en vente sur Replay est vérifié avec soin par notre équipe. Grâce à notre Programme Qualité, nous vous garantissons des jeux complets, fonctionnels et classés selon leur état général.

        Nous utilisons 3 niveaux de qualité pour vous aider à choisir (ou vendre) en toute transparence :
    </p>
</div>


<div class="qualite-conteiner">
    <div class="etat-conteiner">
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
    <div class="etat-conteiner">
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
    <div class="etat-conteiner">
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
