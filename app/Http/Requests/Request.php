<?php

namespace tt2\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

abstract class Request extends FormRequest
{
    public static function getError()
    {
        $error = 'Sasodīts, ' . \Auth::user()->name . ', jau atkal 403!';

        return $error;
    }

    public function forbiddenResponse()
    {
        return redirect()->action('RecipesController@error403');
    }
}
