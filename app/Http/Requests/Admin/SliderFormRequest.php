<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SliderFormRequest extends FormRequest
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
        $rules = [
            'title' => [
                'required',
                'string',
                'max:255'
            ],
            'image' => [
                'nullable',
                'mimes:jpg, jpeg,png'
            ],
            'short_description' => [
                'required',
                'string',
                'max:255'
            ],
            'description' =>[
                'required'
            ],
            'location' => [
                'required',
                'string',
                'max:255'
            ],
            'status' => [
                'nullable'
            ]
        ];
        return $rules;
    }
}
