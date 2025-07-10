@extends('layouts.app')

@section('title', 'Catalogue')

@section('content')

    <h1 class="font-audiowide text-center text-to-upper font-21">Jeux en vente</h1>

    <div class="search-section">
        <form class="search-bar">
            <button type="submit" class="search-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#9C282A" stroke-width="2"
                     stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8"/>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"/>
                </svg>
            </button>
            <input type="text" placeholder="Recherche par nom..." name="search"/>
        </form>

        <div class="filter-buttons">
            <button>type</button>
            <button>prix</button>
            <button>état</button>
            <button>âge</button>
            <button>nombre</button>
            <button>promo</button>
        </div>
    </div>


    <div class="grand-conteiner">
        @foreach($products as $product)
            <div class="produit-catalogue">

                <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->titre }}" class="img-catalogue">
                <h3>{{ $product->titre }}</h3>
                <p>{{ $product->description }}</p>
                @if(!$product->is_promotion)
                    <p>Prix: {{ $product->prix }}€</p>
                @endif


                @if($product->is_promotion)
                    <p>EN PROMOTION!</p>
                    @if($product->promotion_prix)
                        <p>Prix promo: {{ $product->promotion_prix }}€</p>
                    @endif
                @endif

                {{--            <p>Âge: {{ $product->{'classification-par-age'} }}</p>--}}
                <a href="{{ route('product.show', $product->id) }}">Voir détails</a>
            </div>
        @endforeach
    </div>
@endsection

