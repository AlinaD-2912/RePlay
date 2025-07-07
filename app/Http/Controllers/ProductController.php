<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return '<h1>Liste des produits</h1>';
    }
    public function show($id)
    {
        return '<h1>Fiche du produit ' . $id . '</h1>';
    }
}
