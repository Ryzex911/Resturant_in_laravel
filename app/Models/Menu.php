<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu'; // optioneel, tenzij je 'menus' zou hebben

    protected $fillable = [
        'gericht_naam',
        'beschrijving',
        'prijs',
        'categorie',
        'image',
    ];
}
