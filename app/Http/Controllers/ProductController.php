<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
//        $products = DB::select('SELECT * FROM products WHERE is_active = 1');
        $products = Product::where('is_active', 1)
            ->orderBy('prix', 'asc')
            ->get();
        return view('pages.catalogue', ['products' => $products]);
    }

    public function show($id)
    {
//        $product = DB::select('SELECT * FROM products WHERE id = ? AND is_active = 1', [$id]);

        $product = Product::where('is_active', 1)->where('id', $id)->first();

//        $product = $product[0];

        return view('pages.fiche-produit', compact('product'));
    }

    public function showProducts()
    {
        $products = Product::all();

        return view('backoffice.products', compact('products'));

    }

    public function showProduct($id)
    {
        $product = Product::where('is_active', 1)->where('id', $id)->first();

        return view('backoffice.product', compact('product'));

    }

    public function editProduct($id)
    {
        $product = Product::where('is_active', 1)->where('id', $id)->first();

        return view('backoffice.edit', compact('product'));

    }

    public function updateProduct(Request $request, $id)
    {
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'etat' => 'required|string|max:255', // Changed to string with max 255
            'quantite' => 'required|integer|min:1',
            'type' => 'required|string|max:100',
            'prix' => 'required|numeric|min:0',
            'age' => 'required|string|max:10',
            'prix_promotion' => 'nullable|numeric|min:0',
            'is_promotion' => 'required|in:0,1',
            'is_active' => 'required|in:0,1',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $product = Product::findOrFail($id);

        // Prepare data for mass assignment
        $updateData = [
            'titre' => $validated['titre'],
            'description' => $validated['description'],
            'etat' => $validated['etat'], // No longer converting to lowercase
            'quantite' => $validated['quantite'],
            'type' => $validated['type'],
            'prix' => $validated['prix'],
            'classification-par-age' => $validated['age'],
            'promotion_prix' => $validated['prix_promotion'] ?? null,
            'is_promotion' => (bool) $validated['is_promotion'],
            'is_active' => (bool) $validated['is_active'],
        ];

        // Handle image upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $updateData['image'] = $filename;
        }

        // Update product using mass assignment
        $product->update($updateData);

        return redirect()->back()->with('success', 'Produit mis à jour');
    }

    public function createProduct()
    {
        return view('backoffice.new');
    }

    public function createNewProduct(Request $request)
    {
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'etat' => 'required|string|max:255', // Changed to string with max 255
            'quantite' => 'required|integer|min:1',
            'type' => 'required|string|max:100',
            'prix' => 'required|numeric|min:0',
            'age' => 'required|string|max:10',
            'prix_promotion' => 'nullable|numeric|min:0', // Already nullable - not required
            'is_promotion' => 'required|in:0,1',
            'is_active' => 'required|in:0,1',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Prepare data for mass assignment
        $productData = [
            'titre' => $validated['titre'],
            'description' => $validated['description'],
            'etat' => $validated['etat'],
            'quantite' => $validated['quantite'],
            'type' => $validated['type'],
            'prix' => $validated['prix'],
            'classification-par-age' => $validated['age'],
            'promotion_prix' => $validated['prix_promotion'] ?? null, // Will be null if not provided
            'is_promotion' => (bool) $validated['is_promotion'],
            'is_active' => (bool) $validated['is_active'],
        ];

        // Handle image upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $productData['image'] = $filename;
        }

        // Create product using mass assignment
        Product::create($productData);

        return redirect()->route('product.list')->with('success', 'Produit créé avec succès');
    }

    public function backoffice () {
        return view('backoffice.cheet');
    }

    public function deleteProduct($id)
    {
        $product = Product::findOrFail($id);

        if ($product->image && file_exists(public_path('images/' . $product->image))) {
            unlink(public_path('images/' . $product->image));
        }

        $product->delete();

        return redirect()->route('product.list')->with('success', 'Produit supprimé avec succès.');
    }






}

