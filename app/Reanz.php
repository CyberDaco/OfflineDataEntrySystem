<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Reanz extends Model
{
    protected $table = 'reanzs';
    
    protected $fillable = ['batch_name','listing_id', 'property_id', 'list_date', 'site_area', 'scrape_date', 'url', 'property_address', 'unit_no', 'st_no_pref',
                           'street_no', 'st_no_suffix', 'street_name', 'street_type', 'quadrant', 'suburb', 'city', 'price_guide', 'bedrooms',
                           'bathrooms', 'car_spaces', 'sale_method', 'auction_day', 'auction_time', 'auction_date', 'land_size', 'floor_size',
                           'agency_name', 'first_agent_name', 'second_agent_name', 'first_agent_mobile', 'second_agent_mobile', 'first_agent_id', 'first_agent_phone',
                           'first_direct_dial', 'photo_count','status','second_agent_id','second_agent_phone','second_agent_direct'];

    public function batch()
    {
        return $this->belongsTo('App\Batch');
    }
    
    public function setBatchNameAttribute($value)
    {
        $this->attributes['batch_name'] = strtoupper($value);
    }
    
    public function setListDateAttribute($date){
        if($date !== ''){
            $this->attributes['list_date'] = Carbon::createFromFormat('d/m/Y',$date);
        } else {
            $this->attributes['list_date'] = null;
        }
    }
    
    public function getListDateAttribute($value){
        return $value !== null ? Carbon::parse($value)->format('d/m/Y') : '';
    }
    
    public function setAuctionDateAttribute($date){
        if($date !== ''){
            $this->attributes['auction_date'] = Carbon::createFromFormat('d/m/Y',$date);
        } else {
            $this->attributes['auction_date'] = null;
        }
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
    
    public function setListingIDAttribute($value){
        $value != '' ? $this->attributes['listing_id'] = $value : $this->attributes['listing_id'] = null;
    }
    
    public function setScrapeDateAttribute($value){
        $value != '' ? $this->attributes['scrape_date'] = $value : $this->attributes['scrape_date'] = null;
    }
    
    public function setPhotoCountAttribute($value){
        $value != '' ? $this->attributes['photo_count'] = $value : $this->attributes['photo_count'] = null;
    }
    
    public function user_logs()
    {
        return $this->hasMany('App\UserLog','record_id');
    }
    
}
