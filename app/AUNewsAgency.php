<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AUNewsAgency extends Model
{
    protected $table = 'au_news_agencies';
    
    protected $fillable = ['agent_contact', 'agency_name', 'agent_firstname', 'agent_lastname'];
    
    public function property_address()
    {
        return $this->belongsTo('App\AUNewsAddress');
    }
    
    public function setAgencyNameAttribute($value)
    {
        $this->attributes['agency_name'] = strtoupper($value);
    }
    
    public function setAgentFirstnameAttribute($value)
    {
        $this->attributes['agent_firstname'] = strtoupper($value);
    }
    
    public function setAgentLastnameAttribute($value)
    {
        $this->attributes['agent_lastname'] = strtoupper($value);
    }
}
