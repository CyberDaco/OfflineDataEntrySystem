<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class JobNumber extends Model
{
    protected $table = 'job_numbers';
    
    protected $fillable = ['job_number', 'application', 'section', 'current_month', 'job_date', 'stats_output'];
    
    protected $dates = ['current_month','job_date'];
    
    public function entry_logs()
    {
        return $this->hasMany('App\UserLog','jobnumber_id')
        ->select('id')
        ->groupBy('action','user_id');
    }

    public function getCurrentMonthAttribute(){
        return Carbon::parse($this->attributes['current_month'])->format('Y-m-d');
    }

    public function getJobDateAttribute(){
        return Carbon::parse($this->attributes['job_date'])->format('Y-m-d');
    }

    public function getCurrentMonthFormatAttribute(){
        return Carbon::parse($this->attributes['current_month'])->format('F Y');
    }

    public function getCurrentPublicationDateFormatAttribute(){
        return Carbon::parse($this->attributes['job_date'])->format('F Y');
    }

}
