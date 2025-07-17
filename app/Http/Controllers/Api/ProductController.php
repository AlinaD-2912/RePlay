<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

    public function store (Request $request){
        // Validation des données
        $validator = Validator::make($request->all(), [
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'prix' => 'required|numeric',
            'quantite' => 'required|integer',
            'type' => 'required|string',
            'etat' => 'required|string',
            'classification-par-age' => 'required|string',
            'is_active' => 'required|boolean',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|string',
            'is_promotion' => 'boolean',
            'promotion_prix' => 'nullable|numeric'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Création du produit
        $product = Product::create($request->all());

        return response()->json([
            'message' => 'Produit créé avec succès',
            'product' => $product->load('category')
        ], 201);
    }

}
