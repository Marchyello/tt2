<?php

namespace tt2\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

use tt2\Http\Requests;
use tt2\Preference;
use tt2\Recipe;

class UsersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();

        $recipes = Recipe::where('user_id', $user->id)->createdAt()->get();

        return view ('users.profile')
            ->with('user', $user)
            ->with('recipes', $recipes);
    }


}
