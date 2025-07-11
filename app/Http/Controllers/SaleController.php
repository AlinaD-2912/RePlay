<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class SaleController extends Controller
{
    public function ficheVente()
    {
        return view('pages.fiche-vente');
    }
    public function vendre(){
        return view('pages.vendre');
    }
    public function estimationPrix(){
        return view('pages.estimation-prix');
    }
    public function bonDeLivraison (){
        return view('pages.bon-de-livraison');
    }

}
