<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class SaleController extends Controller
{
    public function ficheVente()
    {
        return view('fiche-vente');
    }
    public function vendre(){
        return view('vendre');
    }
    public function estimationPrix(){
        return view('estimation-prix');
    }


}
