<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
//        return '<h1>Homepage</h1>';

        return view('pages.homepage');
    }
}
