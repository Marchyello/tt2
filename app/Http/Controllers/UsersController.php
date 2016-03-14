<?php

namespace tt2\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

use tt2\Http\Requests;

class UsersController extends Controller
{
    public function index()
    {
        $user = Auth::user()->id;

        return view ('users.profile')->with('user', $user);
    }
}
