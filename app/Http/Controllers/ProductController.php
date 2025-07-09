<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::select('SELECT * FROM products WHERE is_active = 1');
        return view('catalogue', ['products' => $products]);
    }
    public function show($id)
    {
        $product = DB::select('SELECT * FROM products WHERE id = ? AND is_active = 1', [$id]);

        if (empty($product)) {
            abort(404);
        }

        $product = $product[0];

        return view('fiche-produit', compact('product'));
    }
}
