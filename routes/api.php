<?php

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/tutti-i-prodotti', function () {
    $products = Product::all();

    return $products;
})->middleware('auth:sanctum');

Route::get('/tutti-i-prodotti/{id}', function ($id) {
    $product = Product::find($id);

    return $product;
});