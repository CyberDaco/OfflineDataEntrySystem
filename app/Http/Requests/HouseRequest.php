<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class HouseRequest extends Request
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
            'auction_date' => 'date_format:d/m/Y',
            'price_from' => '',
            
            'bedrooms' => 'min:1|max:5|regex:/^[\d\-]+$/u',
            'bathrooms' => 'min:1|max:2|regex:/^[\d]+$/u',
            'lockup_garages' => 'min:1|max:5|regex:/^[\d\-]+$/u',
            'land_area' => 'regex:^\d*(\.\d{1,4}$)?',
            'car_spaces' => 'min:1|max:2',
            'floor_area' => 'regex:^\d*(\.\d{1,4}$)?',
            'lounge_rooms' => 'numeric|max:2',
            'dining_rooms' => 'numeric|max:1',
            'study_rooms' => 'numeric|max:1',
            'family_rumpus' => 'numeric|max:2',
            'toilets' => 'numeric|max:1',
            'ensuites' => 'numeric|max:1',
            'lounge_dining' => 'numeric|max:1',
            'other_rooms' => 'numeric|max:2',
            'total_floors' => 'numeric|max:2',
            'tennis_court' => 'numeric|max:1',
            'year_built' => 'numeric|max:4',
            'year_refurbished' => 'numeric|max:4',
            
            'floor_level' => 'max:2|numeric',
            'floor_level_inside' => 'max:2|numeric',
            
        ];
        
    }
}
