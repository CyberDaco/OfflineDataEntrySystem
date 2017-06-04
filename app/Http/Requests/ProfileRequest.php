<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProfileRequest extends Request
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
            'contact_no' => 'required',
            'address' => 'required',
            'user_img' => 'mimes:jpeg,bmp,png',
            'password' => 'sometimes|min:6|confirmed',
        ];
    }
}


            
