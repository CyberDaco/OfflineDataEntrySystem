<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Batch extends Model
{
    
    /**
     * Relationship to Interest
     */
     
    protected $fillable = ['application','job_name','batch_date','jobnumber','job_status','remarks','records','export_date'];
    
    protected $dates = ['batch_date'];
     
    public function setBatchDateAttribute($date){
        if($date !== ''){
            $this->attributes['batch_date'] = Carbon::createFromFormat('d/m/Y',$date);
        } else {
            $this->attributes['batch_date'] = null;
        }

    }
    
    public function getBatchDateAttribute($value){
        return $value !== null ? Carbon::parse($value)->format('d/m/Y') : '';
    }

    public function getExportDateFilenameAttribute($value){
        return Carbon::parse($this->attributes['batch_date'])->format('Ymd');
    }


    //Application Relationships

    public function recent_sales()
    {
        return $this->hasMany('App\Recent_Sale');
    }

    public function interests()
    {
        return $this->hasMany('App\Interest');
    }
    
    public function au_news_addresses()
    {
        return $this->hasMany('App\AUNewsAddress');
    }
    
    public function au_news_invalids()
    {
        return $this->hasMany('App\Invalid');
    }
    
    public function entry_logs()
    {
        return $this->hasMany('App\UserLog');
    }
    
    public function reanzs()
    {
        return $this->hasMany('App\Reanz');
    }

    public function getAddDateAttribute(){
        return $this->created_at->diffForHumans();
    }

}

