<?php

namespace tt2\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

abstract class Request extends FormRequest
{
    public static function getError()
    {
        if (\Auth::user()) {
            $error = 'Kļūda 403, nav atļauta piekļuve';

            return $error;
        }

        else {
            $error = 'Sasodīts, Sātan, jau atkal 403!';

            return $error;
        }

    }

    public function forbiddenResponse()
    {
        return redirect()->action('RecipesController@exception');
    }
}
