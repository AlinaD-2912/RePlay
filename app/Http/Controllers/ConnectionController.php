<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}
