@extends('layouts.app')

@section('title', 'Catalogue')

@section('content')

<h1 class="font-audiowide text-center text-to-upper font-21">Formulaire de vente</h1>

<main>
<form class="livraison-conteiner">
    <input class="input font-14" type="text" id="titre" name="titre" placeholder="Titre de jeu">
    <input class="input font-14" type="text" id="etat" name="etat" placeholder="Etat général du jeu">
    <input class="input font-14" type="text" id="langue" name="langue" placeholder="Langue">


    <input class=" btn-primary font-14 mg-tp-80" type="submit" value="Envoyer ma demande d’estimation" >
</form>

</main>

@endsection

