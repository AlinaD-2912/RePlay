@extends('layouts.app')

@section('title', 'Catalogue')

@section('content')
    <h1 class="font-21 font-audiowide text-center">{{ $product->titre }}</h1>

    <div class="product-conteiner">
        <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->titre }}" class="img-produit">
        <div>
            <p class="font-red font-14">{{ $product -> description }}</p>
            <p class="font-dark-red font-14">Etat du jeu : <span class="font-red">{{ $product -> etat }} </span></p>
            <p class="font-dark-red font-14">Prix : <span class="font-red">{{ $product -> prix }}</span></p>
{{--            <button class="btn-primary font-14">Ajouter au panier</button>--}}
            <form method="POST" action="{{ route('cart.add') }}">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <input type="hidden" name="quantity" value="1"> {{-- or a number input --}}
                <button type="submit" class="btn-primary font-14">Ajouter au panier</button>
            </form>

        </div>
    </div>

    <h2 class="font-dark-red font-roboto font-16 text-center mg-tp-80">Photos</h2>
    <h2 class="font-dark-red font-roboto font-16 text-center">Avis</h2>



@endsection
