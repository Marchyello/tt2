<?php

namespace tt2\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use tt2\Http\Requests;
use tt2\Http\Requests\CreateRecipeRequest;
use tt2\Recipe;

class RecipesController extends Controller
{

    public function index()
    {
        $recipes = Recipe::latest('created_at')->get();

        return view('recipes.index', compact('recipes'));
    }

    public function create()
    {
        return view('recipes.create');
    }

    public function show($id)
    {
        $recipe = Recipe::findOrFail($id);

        return view ('recipes.show', compact('recipe'));
    }

    public function store (CreateRecipeRequest $request)
    {
        $recipe = new Recipe($request->all());

        Auth::user()->recipe()->save($recipe);

        return redirect('recipes');
    }

    public function edit($id)
    {
        $recipe = Recipe::findOrFail($id);

        return view('recipes.edit')->with('recipe', $recipe);
    }

    public function update($id, CreateRecipeRequest $request)
    {
        $recipe = Recipe::findOrFail($id);

        $recipe->update($request->all());

        return redirect('recipes');
    }

}
