@extends('layouts.app')

@section('title', 'Catalogue')

@section('content')

<div class="div-points-relais">
    <h1 class="font-audiowide text-center text-to-upper font-21">Paiement</h1>
    <form >
        <input class="input font-14" type="text" id="carte" name="carte" placeholder="Carte de crédit">
        <input class="input font-14" type="text" id="3fois" name="3foid" placeholder="Payer en 3 fois">
        <input class="input font-14" type="text" id="paypal" name="paypal" placeholder="PayPal">
        <input class="input font-14" type="text" id="carte-cadeau" name="carte-cadeau" placeholder="Carte cadeau">

    </form>

</div>
<div class="buttons-paiement">
    <div >
        <button class="btn-primary font-14 ">Valider paiement</button>
    </div>
    <div >
        <p>
            Commande : 50 €
        </p>
    </div>
</div>

@endsection
