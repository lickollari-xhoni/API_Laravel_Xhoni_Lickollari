<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

Route::get('/', function () {
    $results = Http::get('https://api.jikan.moe./v4/genres/anime')->json();
    return view('anime-list', compact('results'));
});
