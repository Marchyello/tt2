<?php

namespace tt2\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use tt2\Http\Requests;
use tt2\Recipe;

class RecipesController extends Controller
{

    public function index()
    {
        $recipes = Recipe::latest('created_at')->get();

        return view('recipes.index')->with('recipes', $recipes);
    }

    public function create()
    {
        return view('recipes.create');
    }

}
