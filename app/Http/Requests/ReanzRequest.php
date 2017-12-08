<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ReanzRequest extends Request
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
            'listing_id' =>'required|numeric|unique:reanzs,listing_id',
            'property_id' => 'required|alpha_num',
            'list_date' => 'required|date_format:d/m/Y',
            'site_area' => 'required',
            'property_address' => 'required',
            'bedrooms' => 'numeric',
            'bathrooms' => 'numeric',
            'car_spaces' => 'numeric',
            'auction_date' => 'date_format:d/m/Y',
            //'land_size' => 'alpha_num',
            //'floor_size' => 'alpha_num',
            'agency_name' => 'required|min:15',
            'first_agent_mobile' => 'min:8',
            'second_agent_mobile' => 'min:8',

        ];
    }
}
