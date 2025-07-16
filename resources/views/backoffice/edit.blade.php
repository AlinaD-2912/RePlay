@extends('layouts.backoffice')

@section('title', 'Product')

@section('contenu')

    <form action="{{ route('product.edit', $product->id) }}" method="POST" enctype="multipart/form-data" class="edit-conteiner">
        @csrf
        <label for="titre" class="font-14 font-dark-red mg-tp-15">Titre</label>
        <input class="input font-14" type="text" id="titre" name="titre" value="{{ $product->titre }}" required>

        <label for="image" class="font-14 font-dark-red mg-tp-15">Image actuelle :</label><br>
        <img src="{{ asset('images/' . $product->image) }}" alt="Image du produit" width="150" class="mg-btm-10"><br>

        <label for="image" class="font-14 font-dark-red">Changer l’image :</label>
        <input type="file" name="image" accept="image/*">

        <label for="description" class="font-14 font-dark-red mg-tp-15">Description</label>
        <input class="input font-14" type="text" id="description" name="description" value="{{ $product->description }}"
               required>

        <label for="etat" class="font-14 font-dark-red mg-tp-15">État</label>
        <input class="input font-14" type="text" id="etat" name="etat" value="{{ $product->etat }}" required>

        <label for="quantite" class="font-14 font-dark-red mg-tp-15">Quantité</label>
        <input class="input font-14" type="number" id="quantite" name="quantite" value="{{ $product->quantite }}"
               required>

        <label for="type" class="font-14 font-dark-red mg-tp-15">Type</label>
        <input class="input font-14" type="text" id="type" name="type" value="{{ $product->type }}" required>

        <label for="prix" class="font-14 font-dark-red mg-tp-15">Prix normal</label>
        <input class="input font-14" type="number" id="prix" name="prix" value="{{ $product->prix }}" required>

        <label for="age" class="font-14 font-dark-red mg-tp-15">Classification par âge</label>
        <input class="input font-14" type="text" id="age" name="age" value="{{ $product['classification-par-age'] }}"
               required>

        {{--    <label for="is_promotion" class="font-14 font-dark-red mg-tp-15">En promotion ?</label>--}}
        {{--    <input class="input font-14" type="text" id="is_promotion" name="is_promotion"--}}
        {{--           value="{{ $product->is_promotion ? 'oui' : 'non' }}" required>  --}}{{-- instead of if--}}

        {{--    <label for="prix_promotion" class="font-14 font-dark-red mg-tp-15">Prix promotion</label>--}}
        {{--    <input class="input font-14" type="number" id="prix_promotion" name="prix_promotion"--}}
        {{--           value="{{ $product->promotion_prix }}" required>--}}

        {{--    <label for="is_active" class="font-14 font-dark-red mg-tp-15">Actif ?</label>--}}
        {{--    <input class="input font-14" type="text" id="is_active" name="is_active"--}}
        {{--           value="{{ $product->is_active ? 'oui' : 'non' }}" required>--}}

        {{-- En promotion ? --}}
        <label for="is_promotion" class="font-14 font-dark-red mg-tp-15">En promotion ?</label>
        <select class="input font-14" id="is_promotion" name="is_promotion" required>
            <option value="1" {{ $product->is_promotion ? 'selected' : '' }}>Oui</option>
            <option value="0" {{ !$product->is_promotion ? 'selected' : '' }}>Non</option>
        </select>

        {{-- Prix promotion --}}
        <label for="prix_promotion" class="font-14 font-dark-red mg-tp-15">Prix promotion</label>
        <input class="input font-14" type="number" id="prix_promotion" name="prix_promotion"
               value="{{ $product->promotion_prix }}" >

        {{-- Actif ? --}}
        <label for="is_active" class="font-14 font-dark-red mg-tp-15">Actif ?</label>
        <select class="input font-14" id="is_active" name="is_active" required>
            <option value="1" {{ $product->is_active ? 'selected' : '' }}>Oui</option>
            <option value="0" {{ !$product->is_active ? 'selected' : '' }}>Non</option>
        </select>


        <button type="submit" class="btn-primary mg-tp-15">Modifier</button>

    </form>

@endsection
