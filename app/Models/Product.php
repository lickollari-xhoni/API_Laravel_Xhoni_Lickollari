<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'nome_prodotto',
        'marca_prodotto',
        'prezzo',
        'descrizione',
        'immagine_prodotto'
    ];
}
