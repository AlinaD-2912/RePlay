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
}
