@extends('layouts.app')

@section('title', 'Catalogue')

@section('content')

    <h1 class="font-audiowide text-center text-to-upper font-21">Mon panier</h1>

    <form action="{{ route('cart.update') }}" method="POST">
        @csrf

        <table>
            <thead>
            <tr>
                <th>Produit</th>
                <th>Quantité</th>
                <th>Prix</th>
            </tr>
            </thead>
            <tbody>
            @if ($cart && $cart->products->count())
                @foreach ($cart->products as $product)
                    <tr>
                        <td>{{ $product->titre }}</td>
                        <td>
                            <input type="number" name="quantities[{{ $product->id }}]"
                                   value="{{ $product->pivot->quantity }}" min="1">
                        </td>
                        <td>{{ $product->prix }} €</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="3">Votre panier est vide.</td>
                </tr>
            @endif
            </tbody>
        </table>

        <button type="submit">Mettre à jour le panier</button>
    </form>


@endsection
