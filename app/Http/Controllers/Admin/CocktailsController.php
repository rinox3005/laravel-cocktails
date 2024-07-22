<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cocktail;
use App\Http\Requests\StoreCocktailRequest;
use App\Http\Requests\UpdateCocktailRequest;

class CocktailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cocktails = Cocktail::all();
        return view('admin.cocktails.index', compact('cocktails'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.cocktails.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCocktailRequest $request)
    {
        $data = $request->validated();

        $cocktail = new Cocktail();
        $cocktail->name = $data['name'];
        $cocktail->price = $data['price'];
        $cocktail->description = $data['description'];
        $cocktail->ingredients = $data['ingredients'];
        $cocktail->type_of_prep = $data['type_of_prep'];
        $cocktail->serving_temp = $data['serving_temp'];
        $cocktail->glass_type = $data['glass_type'];
        $cocktail->needs_ice = $data['needs_ice'];
        $cocktail->preparation = $data['preparation'];
        $cocktail->is_available = $data['is_available'];
        $cocktail->save();

        return redirect()->route('admin.cocktails.show', $cocktail->id)->with('message', 'Cocktail ' . $cocktail->name . ' successfully created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cocktail = Cocktail::findOrFail($id);
        return view('admin.cocktails.show', compact('cocktail'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cocktail = Cocktail::findOrFail($id);
        return view('admin.cocktails.edit', compact('cocktail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCocktailRequest $request, string $id)
    {
        $data = $request->validated();
        $cocktail = Cocktail::findOrFail($id);

        $cocktail->update($data);

        return redirect()->route('admin.cocktails.show', $cocktail->id)->with('message', 'Cocktail ' . $cocktail->name . ' successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cocktail = Cocktail::findOrFail($id);
        $cocktail->delete();
        return redirect()->route('admin.cocktails.index')->with('message', 'Cocktail deleted successfully.');
    }
}
