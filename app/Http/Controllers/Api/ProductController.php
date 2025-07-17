<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get();

        return response()->json($products);
    }

    public function show($id)
    {
        // Rechercher le produit avec sa catégorie
        $product = Product::with('category')->find($id);

        // Si le produit n'existe pas
        if (!$product) {
            return response()->json(['error' => 'Produit non trouvé'], 404);
        }

        // Retourner le produit et sa catégorie en JSON
        return response()->json($product);
    }

}
