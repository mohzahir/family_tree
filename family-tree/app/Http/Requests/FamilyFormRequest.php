<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FamilyFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
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
            'father_id' => 'required|unique:people,name',
            'mother_id' => 'required|unique:people,name',
            'sons.*' => 'unique:people,name',
            'daughters.*' => 'unique:people,name',

        ];
    }
}
