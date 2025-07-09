@extends('layouts.app')

@section('title', 'Catalogue')

@section('content')

<h1 class="font-audiowide text-center text-to-upper">Livraison</h1>


    <form class="livraison-conteiner">
        <input class="input font-16" type="text" id="nom" name="nom" placeholder="Nom">
        <input class="input font-16" type="text" id="adresse" name="adresse" placeholder="Adresse">
        <div>
            <input class="input-small font-16" type="number" id="codepostal" name="codepostal" placeholder="Code postal">
            <input class="input-small font-16" type="text" id="ville" name="ville" placeholder="Ville">
        </div>
        <input class="input font-16" type="number" id="telephone" name="telephone" placeholder="Téléphone">

        <label class="checkbox-label mg-tp-15 padding-15">
            <input type="checkbox" class="custom-checkbox font-red">
            Mes informations de livraison et de facturation sont les mêmes.
        </label>

        <input class=" btn-primary font-16 mg-tp-15" type="submit" value="S'inscrire" >
    </form>



<div class="div-points-relais">
    <h2 class="font-dark-red font-medium">A domicile</h2>
    <div class="adomicile">
        <p>Prix</p>
        <p>Estimation date</p>
    </div>
</div>

<div class="div-points-relais">

    <h2 class="font-dark-red font-medium">Points relais</h2>
    <div class="div-column-point">
        <div class="point-relais">
            <p>Titre Adresse</p>
            <p>Prix</p>
            <p>Estimation date</p>
        </div>
        <div class="point-relais">
            <p>Titre Adresse</p>
            <p>Prix</p>
            <p>Estimation date</p>
        </div>
    </div>
</div>

<div class="btn-right">
    <button class="btn-primary ">Voir tous les jeux</button>
</div>

@endsection
