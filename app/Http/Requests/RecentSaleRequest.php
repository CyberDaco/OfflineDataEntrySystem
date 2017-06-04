<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RecentSaleRequest extends Request
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
            'unit_no' => 'min:1',
            'street_no' => 'required',
            'street_no_suffix' => 'max:1|alpha',
            'street_name' => 'required',
            'street_direction' => 'max:1|regex:/^[(N)(S)(E)(W)]+$/u',
            'suburb' => 'required',
            'sale_type'=>'required',
            'sold_price' => 'min:5|max:11',
            'property_type'=>'required',
            'post_code' => 'required',
            'contract_date' => 'required|date_format:d/m/Y',
            'agency_name' => 'required',
            'bedroom' => 'max:2',
            'bathroom' => 'max:2',
            'car' => 'max:2',
        ];
        
    }
}
