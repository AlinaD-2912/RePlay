<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConnectionController extends Controller
{
    public function seConnecter()
    {
        return view('pages.se-connecter');
    }
    public function sInscrire()
    {
        return view('pages.creation-compte');
    }
    public function livraison() {
        return view('pages.livraison');
    }
    public function paiement() {
        return view('pages.paiement');
    }
    public function confirmation() {
        return view('pages.confirmation-commande');
    }
    public function connexionCompte() {
        return view('pages.mon-compte');
    }

    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // Prevent session fixation

            // Redirect to mon-compte page (or wherever)
//            return redirect()->intended('pages.mon-compte');
            return view('pages.mon-compte');
        }

        return back()->withErrors([
            'email' => 'Les identifiants sont invalides.',
        ])->onlyInput('email');

    }
}
