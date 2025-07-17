<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        Auth::login(\App\Models\User::first()); // Force login for testing

        $user = Auth::user();

        $cart = $user->cart()->with('products')->first();

        return view('pages.panier', compact('cart'));
    }

    public function update(Request $request)
    {
        $user = auth()->user();
        $cart = $user->cart;

        if (!$cart) {
            return redirect()->back()->with('error', 'Aucun panier trouvé.');
        }

        $quantities = $request->input('quantities');

        foreach ($quantities as $productId => $quantity) {
            // Update the pivot table
            $cart->products()->updateExistingPivot($productId, ['quantity' => $quantity]);
        }

        return redirect()->back()->with('success', 'Panier mis à jour.');
    }


}
