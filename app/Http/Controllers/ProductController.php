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

        $product = Product::find($id);

        if (!$product) {
            return redirect()->back()->with('error', 'Produit non trouvé');
        }

        $product->titre = $request->input('titre');
        $product->description = $request->input('description');
        $product->etat = $request->input('etat');
        $product->quantite = $request->input('quantite');
        $product->type = $request->input('type');
        $product->prix = $request->input('prix');
        $product['classification-par-age'] = $request->input('age');
        $product->promotion_prix = $request->input('prix_promotion');
        $product->is_promotion = $request->input('is_promotion'); // 1 ou 0
        $product->is_active = $request->input('is_active'); // 1 ou 0


        $product->prix = $request->input('prix');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename); // save file
            $product->image = $filename;
        }

        $product->save();

        return redirect()->back()->with('success', 'Produit mis à jour');

    }

    public function createProduct()
    {
        return view('backoffice.new');
    }

    public function createNewProduct(Request $request, $id){

        $product = new Product();

        $product->titre = $request->input('titre');
        $product->description = $request->input('description');
        $product->etat = $request->input('etat');
        $product->quantite = $request->input('quantite');
        $product->type = $request->input('type');
        $product->prix = $request->input('prix');
        $product['classification-par-age'] = $request->input('age');
        $product->promotion_prix = $request->input('prix_promotion');
        $product->is_promotion = $request->input('is_promotion'); // 1 ou 0
        $product->is_active = $request->input('is_active'); // 1 ou 0

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $product->image = $filename;
        }

        $product->save();

        return redirect()->back()->with('success', 'Produit créé avec succès');

    }

    public function backoffice () {
        return view('backoffice.cheet');
    }

}

