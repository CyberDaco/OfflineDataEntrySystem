<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    
    protected $table = 'publications';
    
    protected $fillable = ['application','state','pub_name','source','issue','status','code','site','invalid'];
    
    public function states(){
        return $this->belongsToMany('App\State')->withTimestamps();
    }
    
    public function getStateListAttribute(){
        return $this->states->lists('id')->toArray();

    }
    
    public function getStateCodeAttribute(){
        return $this->states->lists('code','code');
    }
    
    public function getStateCodeOnlyAttribute(){
        return $this->states->lists('code')->implode(' | ');
    }
}
