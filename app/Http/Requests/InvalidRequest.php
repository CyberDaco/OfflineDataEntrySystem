<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class InvalidRequest extends Request
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
            'page_no' => 'required|alpha_num|max:5',
            'unit_no' => 'alpha_num|max:5',
            'street_no' => 'alpha_num|max:5',
            'street_no_suffix' => 'alpha|max:2',
            'street_name' => 'max:50|regex:/^[\d\pL\s\']+$/u',
            'suburb' => 'max:50|regex:/^[\d\pL\s\'\-]+$/u',
            'auction_date' => 'date_format:d/m/Y',
            'price_from' => 'alpha_num|min:4|max:10',
            'price_to' => 'alpha_num|min:4|max:10',
            'bedrooms' => 'min:1|max:5|regex:/^[\d\pL\-]+$/u',
            'bathrooms' => 'min:1|max:5|regex:/^[\d\pL]+$/u',
            'lockup_garages' => 'min:1|max:5|regex:/^[\d\pL\-]+$/u',
        ];
    }
}
