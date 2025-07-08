<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConnectionController extends Controller
{
    public function seConnecter()
    {
        return view('se-connecter');
    }
    public function sInscrire()
    {
        return view('creation-compte');
    }
    public function livraison() {
        return view('livraison');
    }
    public function paiement() {
        return view('paiement');
    }
    public function confirmation() {
        return view('confirmation-commande');
    }
}
