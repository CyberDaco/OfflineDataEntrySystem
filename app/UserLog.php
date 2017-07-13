<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserLog extends Model
{
    protected $table = "entry_logs";
    
    protected $fillable = ['batch_name','record_id','user_id','action','start','end','jobnumber_id','entry_time'];

    protected $dates = ['start','end'];
    
    public function log(){
        return $this->belongsTo('App\Batch','batch_id');
    }
    
    public function job_log(){
        return $this->belongsTo('App\JobNumber','jobnumber_id');
    }
    
    public function interest()
    {
        return $this->belongsTo('App\Interest');
    }
    
    public function au_news()
    {
        return $this->belongsTo('App\AUNewsAddress');
    }

    public function user(){
        return $this->belongsTo('App\User','user_id','operator_id');
    }
}
