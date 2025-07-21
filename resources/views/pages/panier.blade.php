@extends('layouts.app')

@section('title', 'Catalogue')

@section('content')

    <h1 class="font-audiowide text-center text-to-upper font-21">Mon panier</h1>

    @php
        $total = 0;
    @endphp

    @if(session('cart') && count($cart))
        <form method="POST" action="{{ route('cart.update') }}">
            @csrf

            @foreach ($cart as $item)
                @php
                    $subtotal = $item['prix'] * $item['quantity'];
                    $total += $subtotal;
                @endphp


                <div class="panier-conteiner">
                    <img src="{{ asset('images/' . $item['image'] )}}" alt="{{ $item['titre'] }}" class="img-ventes">
                    <div>
                        <h2 class="font-red font-roboto font-21">{{ $item['titre'] }}</h2>
                        <label class="font-dark-red font-14 font-roboto">Quantité : </label>
                        <input type="number" name="quantities[{{ $item['id'] }}]" value="{{ $item['quantity'] }}" min="1" class="input-panier font-14 font-roboto text-center">
                        <p class="font-dark-red font-roboto font-14">Etat : <span class="font-red font-14 font-roboto">{{ $item['etat'] }}</span></p>

                        <div class="price-container">
                            <button formaction="{{ route('cart.remove', ['id' => $item['id']]) }}" formmethod="POST" class="btn-supprimer font-red font-14 font-roboto">Supprimer</button>
                            <p class="font-dark-red font-roboto font-16 font-medium">{{ $item['prix'] }}€</p>
                        </div>
                    </div>


                    @csrf
                </div>
            @endforeach
            <div class="btn-container">
                <button type="submit" class="btn-primary">Mettre à jour</button>
            </div>

            <p class="font-16 font-dark-red font-roboto text-center mg-tp-80 font-medium">Prix total : <span class="font-16 font-roboto font-red">{{ $total }} €</span></p>
            <p class="font-14 font-dark-red font-roboto text-center ">Coût de livraison : Gratuit</p>

            <div class="btn-container mg-tp-80">
                <button type="submit" class="btn-primary font-14">Passer commande</button>
            </div>

        </form>
    @else
        <p>Votre panier est vide.</p>
    @endif
@endsection
