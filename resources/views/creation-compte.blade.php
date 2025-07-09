@extends('layouts.app')

@section('title', 'Catalogue')

@section('content')

<h1 class="font-audiowide text-center text-to-upper">CREEZ VOTRE COMPTE</h1>

<div class="div-center">
    <form class="div-center">
        <input class="input font-16" type="email" id="email" name="email" placeholder="E-mail ">
        <input class="input font-16" type="text" id="nom" name="nom" placeholder="Nom">
        <input class="input font-16" type="text" id="prenom" name="prenom" placeholder="Prenom">

        <input class="input font-16" type="password" id="password" name="password" placeholder="Mot de passe">
        <input class="input font-16" type="password" id="password" name="password" placeholder="Confirmer le mot de passe">

        <label class="checkbox-label mg-tp-15 padding-15">
            <input type="checkbox" class="custom-checkbox font-red">
            J'accepte
            <a href="/" class="font-dark-red font-medium">
                les conditions d'utilisation et la politique de confidentialité
            </a>
            de RePlay.
        </label>

        <input class=" btn-primary font-16 mg-tp-15" type="submit" value="S'inscrire" >
    </form>

</div>

<div class="or-separator">
    <hr class="line">
    <span class="font-dark-red">OU</span>
    <hr class="line">
</div>

<div class="div-center">
    <button class="btn-secondary font-16 mg-tp-15">Se connecter avec Google</button>
    <p class="font-dark-red font-14">Vous avez déjà un compte?
        <a href="/connexion" class="font-medium font-dark-red">Connectez-vous</a>
    </p>
</div>


@endsection
