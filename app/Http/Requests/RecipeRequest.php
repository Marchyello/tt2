<?php

namespace tt2\Http\Requests;

use Auth;
use Illuminate\Support\Facades\Input;
use tt2\Recipe;
use tt2\User;
use tt2\Http\Requests\Request;

class RecipeRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $methods = $this->route()->getMethods();

        #Ja notiek ieraksta labošana, pārbauda, vai ieraksts pieder lietotājam
        if ($methods[0] == 'PUT'){
            $recipe = Recipe::findOrFail($this->route()->parameter('recipes'));

            return Auth::user()->id === $recipe->user_id;
        }

        #Ja notiek ieraksta pievienošana, pārbauda, vai to veic autorizēts lietotājs
        elseif ($methods[0] == 'POST')
            if (Auth::user())
                return true;
            else
                return false;

        else
            return false;

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:3',
            'description' => 'required',
        ];
    }
}
