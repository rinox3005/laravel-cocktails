<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cocktail;

class CocktailController extends Controller
{
     $cocktails = Cocktail::all();

return view('home', compact('cocktails'));
}