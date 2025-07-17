<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ConnectionController;
use App\Http\Controllers\SaleController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/', [HomeController::class, 'index']);

Route::get('/catalogue', [ProductController::class, 'index'])->name('catalogue');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');
Route::get('/panier', [CartController::class, 'index'])->name('cart.index');
Route::get('/apropos', [AboutController::class, 'index']);

//VENDRE
Route::get('/fiche-vente', [SaleController::class, 'ficheVente']);
Route::get('/vendre', [SaleController::class, 'vendre']);
Route::get('/estimation', [SaleController::class, 'estimationPrix']);
Route::get('/bon-de-livraison', [SaleController::class, 'bonDeLivraison']);

// CONNECTION
Route::get('/connexion', [ConnectionController::class, 'seConnecter']); #after / is what should be typed to pen the page
Route::get('/inscription', [ConnectionController::class, 'sInscrire']); # sInscrire is the methode of class Connection controller
Route::get('/livraison', [ConnectionController::class, 'livraison']);
Route::get('/paiement', [ConnectionController::class, 'paiement']);
Route::get('/confirmation', [ConnectionController::class, 'confirmation']);
Route::get('/mon-compte', [ConnectionController::class, 'connexionCompte']);


// BACKOFFICE
Route::prefix('backoffice')->group(function () { // prefix makes /backoffice automaticly presented in each pages links below
    Route::get('/product/new', [ProductController::class, 'createProduct']);
    Route::get('/products', [ProductController::class, 'showProducts'])->name('product.list');
    Route::get('/products/{id}', [ProductController::class, 'showProduct']);
    Route::get('/product/{id}/edit', [ProductController::class, 'editProduct']);
    Route::delete('/backoffice/product/{id}/delete', [ProductController::class, 'deleteProduct'])->name('product.delete');

    Route::post('/edit/{id}', [ProductController::class, 'updateProduct'])->name('product.edit');
    Route::post('/add-new', [ProductController::class, 'createNewProduct'])->name('product.add');

});

Route::get('/backoffice', [ProductController::class, 'backoffice']);

Route::post('/panier/update', [CartController::class, 'update'])->name('cart.update');
