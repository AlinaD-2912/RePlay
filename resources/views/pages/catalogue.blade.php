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
                <a href="/product/{{ $product->id }}">
                    <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->titre }}" class="img-catalogue">
                </a>
                <h3 class="font-dark-red font-16 font-roboto">{{ $product->titre }}</h3>
                <p class="font-red font-14 font-roboto">{{ $product->description }}</p>
                @if(!$product->is_promotion)
                    <p class="font-red font-14 font-roboto"><span class="font-dark-red font-14 font-robot">Prix:</span> {{ $product->prix }}€</p>
                @endif


                @if($product->is_promotion)
                    <p class="font-dark-red font-14 font-roboto">EN PROMOTION!</p>
                    @if($product->promotion_prix)
                        <p class="font-red font-14 fo,nt-roboto"><span class="font-drak-red font-14 font-roboto">Prix promo: </span>{{ $product->promotion_prix }}€</p>
                    @endif
                @endif

                {{--            <p>Âge: {{ $product->{'classification-par-age'} }}</p>--}}
                <a href="{{ route('product.show', $product->id) }}" class="font-dark-red font-14">Voir détails</a>
            </div>
        @endforeach
    </div>
@endsection

