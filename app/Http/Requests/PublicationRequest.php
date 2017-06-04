<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PublicationRequest extends Request
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
            'pub_name' => 'required',
            //'source' => 
            //'issue'
            //'job_number' =>
            //'site' => '',
            'code' => 'required|regex:/^[A-Z]{3}+$/u',
            'invalid' => 'required|regex:/^[(YES)(NO)(Yes)(No)]+$/u',
        ];
    }
}
