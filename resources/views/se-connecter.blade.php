<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Se connecter</title>
    @include('head-links')
</head>
<body>
@include('header')
<main>
<h1 class="font-audiowide text-center text-to-upper">Se connecter</h1>

<div class="div-center">
    <form class="div-center">
        <input class="input font-16" type="email" id="email" name="email" placeholder="E-mail ">
        <input class="input font-16" type="password" id="password" name="password" placeholder="Mot de passe">
        <input class=" btn-primary font-16 mg-tp-15" type="submit" value="Se connecter" >
    </form>
    <p class="font-dark-red font-roboto font-light text-center">Mot de passe oublié</p>


</div>

<div class="or-separator">
    <hr class="line">
    <span class="font-dark-red">OU</span>
    <hr class="line">
</div>

<div class="div-center">
    <button class="btn-secondary font-16 mg-tp-15">Se connecter avec Google</button>
    <p class="font-dark-red font-14">Pas de compte?
        <a href="/inscription" class="font-medium font-dark-red">Inscrivez-vous</a>
    </p>
</div>
</main>

@include('footer')
