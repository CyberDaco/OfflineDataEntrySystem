<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

use Illuminate\Support\Facades\Input;

use Carbon\Carbon;


class BatchRequest extends Request
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
            'job_name' => 'required',
            'batch_date' => 'required|unique:batches',
            'job_status' => 'required'
            //'job_status' => 'required|unique:batches,job_status,NULL,id,job_name,'.$this->job_name
        ];
    }
}
