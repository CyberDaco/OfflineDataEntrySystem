<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AUNewsAddress extends Model
{
    protected $table = 'au_news_addresses';

    protected $fillable = ['page_no','listing_id', 'batch_name','unit_no', 'street_no', 'street_no_suffix', 'street_name', 'street_extension', 
    'street_direction', 'suburb', 'property_type', 'state', 'sale_rent','status','post_code'];
    
    public function batch()
    {
        return $this->belongsTo('App\Batch');
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
    
    public function entry_count(){
        return $this->entry_logs->where('action','E')->count();
    }
    
    public function setBatchNameAttribute($value)
    {
        $this->attributes['batch_name'] = strtoupper($value);
    }
    
    public function setStreetNoSuffixAttribute($value)
    {
        $this->attributes['street_no_suffix'] = strtoupper($value);
    }
    
    public function setStreetNameAttribute($value)
    {
        $this->attributes['street_name'] = strtoupper($value);
    }
    
    public function setStreetExtensionAttribute($value)
    {
        $this->attributes['street_extension'] = strtoupper($value);
    }
    
    public function setStreetDirectionAttribute($value)
    {
        $this->attributes['street_direction'] = strtoupper($value);
    }
    
    public function setSuburbAttribute($value)
    {
        $this->attributes['suburb'] = strtoupper($value);
    }
    
    public function setStateAttribute($value)
    {
        $this->attributes['state'] = strtoupper($value);
    }
    
    public function setPropertyTypeAttribute($value)
    {
        $this->attributes['property_type'] = strtoupper($value);
    }
    public function setStatusAttribute($value)
    {
        $this->attributes['status'] = strtoupper($value);
    }
    
    public function setSaleRentAttribute($value)
    {
        $this->attributes['sale_rent'] = strtoupper($value);
    }
}
