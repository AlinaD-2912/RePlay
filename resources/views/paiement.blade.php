<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Paiement</title>
    @include('head-links')
</head>
<body>
@include('header')


<div class="div-points-relais">
    <h1 class="font-audiowide text-center text-to-upper">Paiement</h1>
    <form >
        <input class="input font-16" type="text" id="carte" name="carte" placeholder="Carte de crédit">
        <input class="input font-16" type="text" id="3fois" name="3foid" placeholder="Payer en 3 fois">
        <input class="input font-16" type="text" id="paypal" name="paypal" placeholder="PayPal">
        <input class="input font-16" type="text" id="carte-cadeau" name="carte-cadeau" placeholder="Carte cadeau">

    </form>

</div>


<div class="btn-right">
    <button class="btn-primary ">Valider paiement</button>
</div>
<div class="btn-right">
    <p>
        Commande :
    </p>
</div>



@include('footer')
