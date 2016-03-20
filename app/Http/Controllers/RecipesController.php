<?php

namespace tt2\Http\Controllers;

use Auth;
use Session;
use tt2\Http\Requests;
use tt2\Http\Requests\RecipeRequest;
use tt2\Http\Requests\Request;
use tt2\Recipe;

class RecipesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'index']);
        $this->middleware('locale');
    }

    public function suggested()
    {
        return view('suggested');
    }

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

    public function store (RecipeRequest $request)
    {
        $recipe = new Recipe($request->all());
        $recipe->excerpt = Recipe::generateExcerpt($recipe->description);

        if ($request->hasFile('image')){
            $path = $recipe->generateImage($request);
            $recipe->image = $path;
        }

        Auth::user()->recipes()->save($recipe);

        Session::flash('flash_message', trans('flash.created'));

        return redirect('recipes');
    }

    public function edit($id)
    {
        $recipe = Recipe::findOrFail($id);

        return view('recipes.edit')->with('recipe', $recipe);
    }

    public function update($id, RecipeRequest $request)
    {
        $recipe = Recipe::findOrFail($id);

        if ($request->hasFile('image')){
            $path = $recipe->generateImage($request);
            $recipe->image = $path;
        }

        $recipe->excerpt = Recipe::generateExcerpt($request->get('description'));

        $recipe->update($request->all());

        Session::flash('flash_message', trans('flash.updated'));

        return redirect('recipes');
    }

    public function destroy($id, RecipeRequest $request)
    {
        $recipe = Recipe::findOrFail($id);

        $recipe->delete();

        Session::flash('flash_message', trans('flash.deleted'));

        return redirect('recipes');
    }

    public function exception()
    {
        $customError = Request::getError();

        return view('errors.exception')->with('customError', $customError);
    }

}
