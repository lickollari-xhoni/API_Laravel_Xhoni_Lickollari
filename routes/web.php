<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

Route::get('/', function () {
    $results = Http::get('https://api.jikan.moe/v4/genres/anime')->json();
    return view('anime-list', compact('results'));
})->name('rotta1');

Route::get('/anime/{id}', function ($id) {
    $results = Http::get('https://api.jikan.moe/v4/anime?genres=' . $id)->json();
    return view('anime-genre-list', compact('results'));
})->name('rotta2');

Route::get('/anime/detail/{id}', function ($id) {
    $result = Http::get('https://api.jikan.moe/v4/anime/' . $id)->json();
    return view('anime-detail', compact('result'));
})->name('rotta3');