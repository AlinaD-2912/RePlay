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

    public function modify (Request $request, $id){
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'etat' => 'required|string|max:255',
            'quantite' => 'required|integer|min:1',
            'type' => 'required|string|max:100',
            'prix' => 'required|numeric|min:0',
            'age' => 'required|string|max:10',
            'prix_promotion' => 'nullable|numeric|min:0',
            'is_promotion' => 'required|in:0,1',
            'is_active' => 'required|in:0,1',
            'image' => 'nullable|string' // Accept image name as string in JSON
        ]);

        $product = Product::findOrFail($id);

        $product->update([
            'titre' => $validated['titre'],
            'description' => $validated['description'],
            'etat' => $validated['etat'],
            'quantite' => $validated['quantite'],
            'type' => $validated['type'],
            'prix' => $validated['prix'],
            'classification-par-age' => $validated['age'],
            'promotion_prix' => $validated['prix_promotion'] ?? null,
            'is_promotion' => (bool) $validated['is_promotion'],
            'is_active' => (bool) $validated['is_active'],
            'image' => $validated['image'] ?? $product->image, // keep existing if not changed
        ]);

        return response()->json([
            'message' => 'Produit mis à jour avec succès',
            'product' => $product->load('category')
        ]);
    }

    public function destroy (Request $request, $id){
        $product = Product::findOrFail($id);

        // Supprimer l'image du dossier public/images si elle existe
        if ($product->image && file_exists(public_path('images/' . $product->image))) {
            unlink(public_path('images/' . $product->image));
        }

        $product->delete();

        return response()->json([
            'message' => 'Produit supprimé avec succès',
            'product' => $product
        ]);
    }

}
