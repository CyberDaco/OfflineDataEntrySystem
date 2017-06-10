<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SatAuctionRequest extends Request
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
            'state'=>'exists:states,code',
            'unit_no' => 'min:1',
            'street_no' => 'required',
            'street_no_suffix' => 'max:1|alpha',
            'street_name' => 'required',
            'street_ext' => 'exists:sat_auction_st_extensions,code',
            'street_direction' => 'max:1|regex:/^[(N)(S)(E)(W)]+$/u',
            'suburb' => 'required',
            'sale_type'=>'required',
            'sold_price' => 'min:5|max:11',
            'property_type'=>'required',
            'post_code' => 'required',
            'contract_date' => 'required|date_format:d/m/Y',
            'agency_name' => 'min:2|required',
            'bedroom' => 'max:2',
            'bathroom' => 'max:2',
            'car' => 'max:2',
        ];
    }
}
