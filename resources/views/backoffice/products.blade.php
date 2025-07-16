@extends('layouts.backoffice')

@section('title', 'Products')

@section('contenu')

    <div class="container my-4">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped align-middle text-center">
                <thead class="table-dark text-white">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Description</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Prix promotion</th>
                    <th scope="col">Promotion</th>
                    <th scope="col">État</th>
                    <th scope="col">Quantité</th>
                    <th scope="col">Type</th>
                    <th scope="col">Âge</th>
                    <th scope="col">Image</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->titre }}</td>
                        <td class="text-start">{{ $product->description }}</td>
                        <td>{{ $product->prix }}€</td>
                        <td>
                            @if($product->is_promotion)
                                <span class="text-danger fw-bold">{{ $product->promotion_prix }}€</span>
                            @else
                                <span class="text-muted">Prix normal</span>
                            @endif
                        </td>
                        <td>
                            @if($product->is_promotion)
                                <span class="badge bg-danger">EN PROMO</span>
                            @else
                                <span class="badge bg-secondary">Normal</span>
                            @endif
                        </td>
                        <td>{{ $product->etat }}</td>
                        <td>{{ $product->quantite }}</td>
                        <td>{{ $product->type }}</td>
                        <td>{{ $product['classification-par-age'] }}</td>
                        <td>
                            <a href="/backoffice/products/{{ $product->id }}">
                                <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->titre }}" class="img-fluid rounded" width="70">
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="btn-container">
        <a href="/backoffice/product/new" >
            <button class="btn-primary">Ajouter un produit</button>
        </a>
    </div>

@endsection
