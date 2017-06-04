<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AddressRequest extends Request
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
            'bedrooms' => 'min:1|max:5|regex:/^[\d\-]+$/u',
            'bathrooms' => 'min:1|max:2|regex:/^[\d\pL]+$/u',
        ];
    }
}
