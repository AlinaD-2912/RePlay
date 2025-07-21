@extends('layouts.backoffice')

@section('title', 'Cheat-sheet')

@section('contenu')
    <h1 class="text-center">Cheat-sheet for backoffice</h1>
    <div>
        <h2>/backoffice +</h2>
        <ul>
            <li>/product/new <br> - to create new product</li>
            <li>/products <br> - to list the products in table</li>
            <li>/products/{id} <br> - to see all the information about the product</li>
            <li>/product/{id}/edit <br> - to edit an existing product</li>
        </ul>

    </div>
@endsection
