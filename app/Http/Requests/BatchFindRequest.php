<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class BatchFindRequest extends Request
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
            'job_number' => 'required|numeric|digits:4|exists:job_numbers',
            'job_name' => 'required|exists:batches',
            'batch_date' => 'required|date_format:d/m/Y',
            'batch_name' => 'required|size:17'
            
        ];
    }
}
