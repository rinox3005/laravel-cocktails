<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function cocktails()
    {
        return $this->belongsToMany(Cocktail::class)->withPivot('percentage');
    }
}
