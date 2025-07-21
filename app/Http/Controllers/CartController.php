<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);

        return view('pages.panier', compact('cart'));
    }

//    public function update(Request $request)
//    {
//        $user = auth()->user();
//        $cart = $user->cart;
//
//        if (!$cart) {
//            return redirect()->back()->with('error', 'Aucun panier trouvé.');
//        }
//
//        $quantities = $request->input('quantities');
//
//        foreach ($quantities as $productId => $quantity) {
//            // Update the pivot table
//            $cart->products()->updateExistingPivot($productId, ['quantity' => $quantity]);
//        }
//
//        return redirect()->back()->with('success', 'Panier mis à jour.');
//    }

    public function add(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity', 1);

        $product = Product::findOrFail($productId);

        $cart = session()->get('cart', []);

        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += $quantity;
        } else {
            $cart[$productId] = [
                'id' => $product->id,
                'titre' => $product->titre,
                'prix' => $product->prix,
                'image' => $product->image,
                'etat' => $product->etat,
                'quantity' => $quantity,
            ];
        }

        session()->put('cart', $cart);

        return redirect()->route('cart.index')->with('success', 'Produit ajouté au panier');
    }

    public function update(Request $request)
    {
        $quantities = $request->input('quantities', []);
        $cart = session()->get('cart', []);

        foreach ($quantities as $id => $qty) {
            if (isset($cart[$id])) {
                $cart[$id]['quantity'] = $qty;
            }
        }

        session()->put('cart', $cart);

        return redirect()->route('cart.index')->with('success', 'Panier mis à jour');
    }

    public function remove($id)
    {
        $cart = session()->get('cart', []);
        unset($cart[$id]);
        session()->put('cart', $cart);

        return redirect()->route('cart.index')->with('success', 'Produit retiré');
    }



}
