<?php

use App\Http\Controllers\Guest\CocktailController;
use App\Http\Controllers\Admin\CocktailsController;
use App\Http\Controllers\Admin\IngredientsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [CocktailController::class, 'index'])->name('home');

Route::resource('cocktails', CocktailsController::class);
Route::resource('ingredients', IngredientsController::class);
