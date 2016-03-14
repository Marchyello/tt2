<?php

namespace tt2\Http\Requests;

use Auth;
use Illuminate\Support\Facades\Input;
use tt2\Recipe;
use tt2\User;
use tt2\Http\Requests\Request;

class CreateRecipeRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        /*$recipe = Recipe::findOrFail($this->input('id'));

        if (Auth::user()->id !== $recipe->user_id)
            return false;
        else*/
            return true;
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
