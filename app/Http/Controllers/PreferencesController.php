<?php

namespace tt2\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

use tt2\Http\Requests;
use tt2\Preference;

class PreferencesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('locale');
    }

    public function getPreference()
    {
        $user = Auth::user();

        return view('users.preferences')->with('user', $user);
    }

    public function storePreference(Request $request)
    {
        $preference = new Preference($request->all());

        Auth::user()->preferences()->save($preference);

        return redirect('profile');
    }

    public function updatePreference(Request $request)
    {
        $preference = Auth::user()->preferences;

        $preference->update($request->all());

        return redirect('profile');
    }

}
