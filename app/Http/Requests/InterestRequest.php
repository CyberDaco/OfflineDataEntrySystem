<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class InterestRequest extends Request
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
            'listing_id' => 'alpha_num',
            'unit_no' => 'min:1',
            'street_no' => 'required|min:1',
            'street_no_suffix' => 'max:1|alpha',
            'street_name' => 'required|min:2',
            'street_direction' => 'min:4|regex:/^[(North)(South)(East)(West)]+$/u',
            'suburb' => 'required|min:2',
            'post_code' => 'numeric|min:3|max:4',
            'contract_date' => 'date_format:d/m/Y',
            'sold_price' => 'min:5|max:7',
            'agency_name' => 'required|exists:nz_agency_names',
            'bedroom' => 'min:1',
            'bathroom' => 'min:1',
            'car' => 'min:1',
        ];
        
    }
}
