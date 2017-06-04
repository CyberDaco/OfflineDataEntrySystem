<?php

namespace App;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Invalid extends Model
{
    protected $table = "invalids";
    
    protected $fillable = ['batch_name','page_no', 'unit_no', 'street_no', 'street_no_suffix', 'street_name', 'street_extension', 'street_direction', 'suburb', 'state',
                            'post_code', 'property_type', 'multiple_properties', 'sale_rent', 'listing_type', 'auction_date', 'price_from', 'auction_time',
                            'price_to', 'auction_venue', 'price_description', 'bedrooms', 'bathrooms', 'lockup_garages', 'air_conditioned', 'swimming_pool',
                            'close_to_public', 'ad_size', 'ad_photo_type', 'ad_photo_count', 'ad_section', 'ad_exclusive', 'agent_contact', 'agency_name', 
                            'agent_firstname', 'agent_lastname'];
                            
    protected $dates = ['auction_date'];                    
                            
    public function setAuctionDateAttribute($date){
        if($date !== ''){
            $this->attributes['auction_date'] = Carbon::createFromFormat('d/m/Y',$date);
        } else {
            $this->attributes['auction_date'] = null;
        }
    }
    
    public function batch()
    {
        return $this->belongsTo('App\Batch');
    }
    
    
    
    public function getAuctionDateAttribute($value){
        return $value !== null ? Carbon::parse($value)->format('d/m/Y') : '';
    }
    
    public function setAuctionTimeAttribute($auction_time){
        if($auction_time !== ''){
            $this->attributes['auction_time'] = Carbon::createFromFormat('h:i A',$auction_time);
        } else {
            $this->attributes['auction_time'] = null;
        }
    }
    
    public function getAuctionTimeAttribute($value){
        return $value !== null ? Carbon::parse($value)->format('h:i A') : '';
    }
    
    public function setPriceFromAttribute($value){
        $value != '' ? $this->attributes['price_from'] = $value : $this->attributes['price_from'] = null;
    }
    
    public function setPriceToAttribute($value){
        $value != '' ? $this->attributes['price_to'] = $value : $this->attributes['price_to'] = null;
    }
     
    public function setAirConditionedAttribute($value){
        $value == 'Y' ? $this->attributes['air_conditioned'] = 'Y' : $this->attributes['air_conditioned'] = '';
    }
    
    public function setSwimmingPoolAttribute($value){
        $value == 'Y' ? $this->attributes['swimming_pool'] = 'Y' : $this->attributes['swimming_pool'] = '';
    }
    
    public function setCloseToPublicAttribute($value){
        $value == 'Y' ? $this->attributes['close_to_public'] = 'Y' : $this->attributes['close_to_public'] = '';
    }
    

    public function property_detail(){
        
        return $this->hasOne('App\AUNewsPropertyDetail','au_news_addresses_id');
    }

    public function property_agents()
    {
        return $this->hasMany('App\AUNewsAgency','au_news_addresses_id');
    }

    public function entry_logs()
    {
        return $this->hasMany('App\UserLog','record_id');
    }
                            
}
