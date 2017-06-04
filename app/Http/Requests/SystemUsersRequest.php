<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SystemUsersRequest extends Request
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
            'operator_id' => 'required|numeric|digits:3|unique:users,operator_id',
            'name' => 'required|alpha_num|max:50|unique:users,name',
            'password' => 'required|min:6|confirmed',
            'email' => 'required|email|max:255|unique:users',
            'firstname' => 'required|alpha',
            'lastname' => 'required|alpha',
            'access_level' => 'required|numeric',
        ];
    }
}


            
