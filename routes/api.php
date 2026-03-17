<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Product;

Route::get('/tutti-i-prodotti/{id}', function ($id) {
$products = Product::find($id); 
return response()->json($products);  

});