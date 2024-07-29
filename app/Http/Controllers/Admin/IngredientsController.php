<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ingredient;
use App\Http\Requests\StoreIngredientsRequest;
use App\Http\Requests\UpdateIngredientsRequest;

class IngredientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ingredients_types = [
            "Alchol",
            "Soda",
            "Erba",
            "Agrume",
            "Zucchero",
            "Sale",
            "Frutta",
            "Succo di Frutta",
        ];
        return view('admin.ingredients.create', compact('ingredients_types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreIngredientsRequest $request)
    {
        $data = $request->validated();

        $ingredient = new Ingredient();
        $ingredient->name = $data['name'];
        $ingredient->type = $data['type'];
        $ingredient->grade = $data['grade'];

        $ingredient->save();

        return redirect()->route('admin.ingredients.show', $ingredient->id)->with('message', 'Ingredient ' . $ingredient->name . ' successfully created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ingredient = Ingredient::findOrFail($id);
        return view('admin.ingredients.edit', compact('ingredient'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validated();
        $ingredient = Ingredient::findOrFail($id);

        $ingredient->update($data);

        return redirect()->route('cocktails.show', $ingredient->id)->with('message', 'Ingredient ' . $ingredient->name . ' successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
