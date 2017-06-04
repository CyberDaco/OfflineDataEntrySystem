<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScrapeHomePrice extends Model
{
    protected $table = 'scrape_home_prices';

    protected $fillable = ['state', 'unit_no', 'street_no', 'street_no_suffix',
        'street_name', 'street_ext', 'street_direction', 'suburb', 'post_code',
        'property_type', 'sale_type', 'sold_price', 'contract_date', 'settlement_date',
        'agency_name', 'bedroom', 'bathroom', 'car','slug'];

    public function getAddressAttribute($value)
    {
        $value = '';
        $this->unit_no != '' ? $value .= $this->unit_no . '/' : null;
        $value .= $this->street_no . ' ';
        $value .= $this->street_extension . ' ';
        $this->street_no_suffix != '' ? $value .= $this->street_no_suffix . ' ' : null;
        $value .= $this->street_name . ' ';
        $this->street_ext ? $value .= $this->street_ext . ', ' : null;
        $this->street_direction != '' ? $value .= $this->street_direction . ' ' : null;
        $value .= $this->suburb;
        $this->post_code != '' ? $value .= ', '.$this->post_code . ' ' : null;
        return $value;
    }
}
