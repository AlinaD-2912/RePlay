@extends('layouts.backoffice')

@section('title', 'New product')

@section('contenu')

    <form action="{{ url('/add-new') }}" method="POST" enctype="multipart/form-data" class="edit-conteiner">
        @csrf
        <label for="titre" class="font-14 font-dark-red mg-tp-15">Titre</label>
        <input class="input font-14" type="text" id="titre" name="titre"  required>


        <label for="image" class="font-14 font-dark-red">Image :</label>
        <input type="file" name="image" accept="image/*">

        <label for="description" class="font-14 font-dark-red mg-tp-15">Description</label>
        <input class="input font-14" type="text" id="description" name="description"
               required>

        <label for="etat" class="font-14 font-dark-red mg-tp-15">État</label>
        <input class="input font-14" type="text" id="etat" name="etat"  required>

        <label for="quantite" class="font-14 font-dark-red mg-tp-15">Quantité</label>
        <input class="input font-14" type="number" id="quantite" name="quantite"
               required>

        <label for="type" class="font-14 font-dark-red mg-tp-15">Type</label>
        <input class="input font-14" type="text" id="type" name="type"  required>

        <label for="prix" class="font-14 font-dark-red mg-tp-15">Prix normal</label>
        <input class="input font-14" type="number" id="prix" name="prix" required>

        <label for="age" class="font-14 font-dark-red mg-tp-15">Classification par âge</label>
        <input class="input font-14" type="text" id="age" name="age" required>

        {{-- En promotion ? --}}
        <label for="is_promotion" class="font-14 font-dark-red mg-tp-15">En promotion ?</label>
        <select class="input font-14" id="is_promotion" name="is_promotion" required>
            <option value="1" {{ old('is_promotion') == '1' ? 'selected' : '' }}>Oui</option>
            <option value="0" {{ old('is_promotion') == '0' ? 'selected' : '' }}>Non</option>
        </select>

        {{-- Prix promotion --}}
        <label for="prix_promotion" class="font-14 font-dark-red mg-tp-15">Prix promotion</label>
        <input class="input font-14" type="number" id="prix_promotion" name="prix_promotion" required>

        {{-- Actif ? --}}
        <label for="is_active" class="font-14 font-dark-red mg-tp-15">Actif ?</label>
        <select class="input font-14" id="is_active" name="is_active" required>
            <option value="1" {{ old('is_active') == '1' ? 'selected' : '' }}>Oui</option>
            <option value="0" {{ old('is_active') == '0' ? 'selected' : '' }}>Non</option>
        </select>


        <button type="submit" class="btn-primary mg-tp-15">Modifier</button>

    </form>

@endsection
