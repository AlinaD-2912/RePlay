@extends('layouts.backoffice')

@section('title', 'Product')

@section('contenu')
    <h1 class="font-21 font-audiowide text-center">{{ $product->titre }}</h1>

    <div class="product-conteiner">
        <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->titre }}" class="img-produit">
        <div>
            <p class="font-dark-red font-14">Description : <span class="font-red">{{ $product -> description }}</span></p>
            <p class="font-dark-red font-14">Etat du jeu : <span class="font-red">{{ $product -> etat }} </span></p>
            <p class="font-dark-red font-14">Prix : <span class="font-red">{{ $product -> prix }}</span></p>
            <p class="font-dark-red font-14">Quantité : <span class="font-red">{{ $product -> quantite }}</span></p>
            <p class="font-dark-red font-14">Type de jeu : <span class="font-red">{{ $product -> type }}</span></p>
            <p class="font-dark-red font-14">Age : <span class="font-red">{{ $product['classification-par-age'] }}</span></p>
            @if($product->is_promotion)
                <p class="font-dark-red font-14">Prix promotion : <span class="font-red">{{ $product->promotion_prix }}</span></p>
            @endif
            @if($product->is_active)
                <p class="font-dark-red font-14">Produit en vente active</p>
            @else
                <p class="font-dark-red font-14">Le produit n'est pas en vente</p>
            @endif
            <a href="/backoffice/product/{{$product -> id}}/edit">
                <button class="btn-primary">Modifier</button>
            </a>
            <form action="{{ route('product.delete', $product->id) }}" method="POST" onsubmit="return confirm('Confirmer la suppression ?');" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn-secondary">Supprimer</button>
            </form>
        </div>
    </div>

@endsection
