<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ConnectionController;
use App\Http\Controllers\SaleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/catalogue', [ProductController::class, 'index']);
Route::get('/produit/{id}', [ProductController::class, 'show']);
Route::get('/panier', [CartController::class, 'index']);

Route::get('/connexion', [ConnectionController::class, 'seConnecter']); #after / is what should be typed to pen the page
Route::get('/inscription', [ConnectionController::class, 'sInscrire']); # sInscrire is the methode of class Connection controller

Route::get('/apropos', [AboutController::class, 'index']);
Route::get('/vendre', [SaleController::class, 'index']);
