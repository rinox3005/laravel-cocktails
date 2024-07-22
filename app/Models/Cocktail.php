<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cocktail extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'price', 'description', 'ingredients', 'type_of_prep', 'serving_temp', 'glass_type', 'needs_ice', 'preparation', 'is_available'
    ];
}
