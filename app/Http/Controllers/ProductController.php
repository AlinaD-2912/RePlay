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

    public function showProducts() {
        $products = Product::all();

        return view('backoffice.products', compact('products'));

    }

    public function showProduct($id) {
        $product = Product::where('is_active', 1)->where('id', $id)->first();

        return view('backoffice.product', compact('product'));

    }
}
