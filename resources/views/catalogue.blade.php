<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Catalogue des produits</title>
    @include('head-links')
</head>
<body>
@include('header')
 <main>
<h1 class="font-audiowide text-center text-to-upper">Jeux en vente</h1>

<div class="search-section">
    <form class="search-bar">
        <button type="submit" class="search-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#9C282A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="11" cy="11" r="8" />
                <line x1="21" y1="21" x2="16.65" y2="16.65" />
            </svg>
        </button>
        <input type="text" placeholder="Recherche par nom..." name="search" />
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

 </main>


@include('footer')

