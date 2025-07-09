<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('catalogue');
    }
    public function show($id)
    {
        return view('fiche-produit', ['id' => $id]);
    }
}
