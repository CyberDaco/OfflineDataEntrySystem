<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class JobNumberRequest extends Request
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
            'job_number' => 'numeric|digits:4|required',
            'application' => 'required',
            'section' => 'required',
            'current_month' => 'required',
            'job_date' => 'required',
            'stats_output' => 'required',
        ];
    }
}
