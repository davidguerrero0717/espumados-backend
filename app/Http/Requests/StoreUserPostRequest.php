<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserPostRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'names'        => 'required|max:100',
            'cedula'       => 'required|max:10',
            // 'passwordUs'   => 'required|min:8',
            // 'emailAdd'     => 'required',
        ];
    }
}
