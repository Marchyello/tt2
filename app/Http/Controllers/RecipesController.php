<?php

namespace tt2\Http\Controllers;

use Auth;
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

}
