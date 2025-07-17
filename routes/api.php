<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;

Route::middleware('api')->get('/test-api', function () {
    return response()->json(['message' => 'API working!']);
});

Route::get('/products', [ProductController::class, 'index']);
